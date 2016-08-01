<?php
class ControllerMain extends Controller
{
    public function __construct()
    {
        $this->model = new ModelMain();
        $this->view = new View();
    }

    public function actionIndex()
    {
        if (array_key_exists('submit', $_POST)) {
            $author         = escape_html($_POST['author']);
            $title          = escape_html($_POST['title']);
            $published_year = escape_html($_POST['published_year']);
            $fileBook       = $_FILES['filename'];
            $data = [$author, 
                     $title, 
                     $published_year,
                     $fileBook];
            $data = $this->model->setData($data); 
        }
        $this->view->generate('mainView.php', 'templateView.php', $data);
    }
}
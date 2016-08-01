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

            if (strlen($author) > 255 || strlen($title) > 255 || $published_year < 1901 || $published_year > date(Y) || $fileBook['type'] != 'text/plain') {
                $this->view->generate('mainView.php', 'errorDataView.php');
            } else {
                $data = [$author, 
                         $title, 
                         $published_year,
                         $fileBook];
                $this->model->setData($data);
                $this->view->generate('mainView.php', 'addingBookView.php');
            }
        }
        $this->view->generate('mainView.php', 'templateView.php');
    }
}
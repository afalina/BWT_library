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
        date_default_timezone_set('UTC');
        if (isset($_POST['submit'])) {
            $author         = $_POST['author'];
            $title          = $_POST['title'];
            $published_year = $_POST['published_year'];
            $fileBook       = $_FILES['filename'];

            if ($published_year < 1901 || $published_year > date(Y) || $fileBook['type'] != 'text/plain') {
                $this->view->generate('mainView.php', 'errorDataView.php');
            } else {
                $data = [$author, 
                         $title, 
                         $published_year,
                         $fileBook];
                $this->model->setData($data);
            }
        }
        $this->view->generate('mainView.php', 'templateView.php');
    }
}
?>
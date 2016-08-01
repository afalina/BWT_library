<?php
class ControllerSearch extends Controller
{
    public function __construct()
    {
        $this->model = new ModelSearch();
        $this->view = new View();
    }

    public function actionIndex()
    {
        if (array_key_exists('inputText', $_POST)) {
            $data = $this->model->getData($_POST['inputText']);
            $this->view->generate('answerView.php', 'answerView.php', $data);
        } else {
            $this->view->generate('searchView.php', 'templateView.php', $data);
        }
    }
}
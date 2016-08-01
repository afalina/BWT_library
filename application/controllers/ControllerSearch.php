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
            $data = $this->model->getData(escape_html($_POST['inputText']));
            $this->view->generate('searchView.php', 'templateView.php', $data);
        } else {
            $this->view->generate('searchView.php', 'templateView.php');
        }

    }
}
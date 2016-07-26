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
        if (isset($_POST['inputText'])) {
            $data = $this->model->getData($_POST['inputText']);
            $this->view->generate('searchView.php', 'templateView.php', $data);
        } else {
            $this->view->generate('searchView.php', 'templateView.php');
        }

    }
}
?>
<?php

class Test extends Controller
{
    function __construct()
    {
        $this->model = new Model_Test();
        $this->view = new View();
    }

    function action_index()
    {
        $page_info = Array("Тест по дисциплине \"Физика\"", 6);
        $data = $this->model->get_data();
        $this->view->generate('test_view.php', 'template_view.php', $page_info, $data);
    }
}

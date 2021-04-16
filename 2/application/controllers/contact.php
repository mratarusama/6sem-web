<?php

class Contact extends Controller
{
    function __construct()
    {
        $this->model = new Model_Contact();
        $this->view = new View();
    }

    function action_index()
    {
        $page_info = Array("Связь", 5);
        $data = $this->model->get_data();
        $this->view->generate('contact_view.php', 'template_view.php', $page_info, $data);
    }
}

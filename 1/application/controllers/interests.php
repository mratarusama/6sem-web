<?php

class Interests extends Controller
{
    function __construct()
    {
        $this->model = new Model_Interests();
        $this->view = new View();
    }

	function action_index()
	{
        $page_info = Array("Мои интересы", 2);
        $data = $this->model->get_data();
		$this->view->generate('interests_view.php', 'template_view.php', $page_info, $data);
	}
}

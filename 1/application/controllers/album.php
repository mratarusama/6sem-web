<?php

class Album extends Controller
{
    function __construct()
    {
        $this->model = new Model_Album();
        $this->view = new View();
    }

	function action_index()
	{
        $page_info = Array("Фотоальбом", 4);
        $data = $this->model->get_data();
		$this->view->generate('album_view.php', 'template_view.php', $page_info, $data);
	}
}

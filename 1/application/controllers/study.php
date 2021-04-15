<?php

class Study extends Controller
{

	function action_index()
	{
        $page_info = Array("Учёба", 3);
		$this->view->generate('study_view.php', 'template_view.php', $page_info);
	}
}

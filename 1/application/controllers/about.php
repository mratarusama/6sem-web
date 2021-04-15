<?php

class About extends Controller
{

	function action_index()
	{
	    $page_info = Array("Обо мне", 1);
		$this->view->generate('about_view.php', 'template_view.php', $page_info);
	}
}

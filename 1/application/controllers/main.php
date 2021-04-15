<?php

class Main extends Controller
{

	function action_index()
	{
        $page_info = Array("Главная страница", 0);
		$this->view->generate('main_view.php', 'template_view.php', $page_info);
	}
}
<?php

class History extends Controller
{

	function action_index()
	{
        $page_info = Array("История просмотра", 7);
		$this->view->generate('history_view.php', 'template_view.php', $page_info);
	}
}

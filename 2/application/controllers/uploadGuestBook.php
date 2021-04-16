<?php

class uploadGuestBook extends Controller
{
    function action_index()
    {
        $page_info = Array("Загрузка гостевой книги", 8);
        $this->view->generate('uploadGuestBook_view.php', 'template_view.php', $page_info);
    }
}

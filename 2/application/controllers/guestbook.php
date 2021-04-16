<?php

class GuestBook extends Controller
{

    function action_index()
    {
        $page_info = Array("Гостевая книга", 8);
        $this->view->generate('guestbook_view.php', 'template_view.php', $page_info);
    }
}

<?php

class Temp extends Controller
{

    function action_index()
    {
        $page_info = Array("Как вы сюда попали?", 0);
        $this->view->generate('temp_view.php', 'template_view.php', $page_info);
    }
}
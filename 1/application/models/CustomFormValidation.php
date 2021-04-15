<?php

class CustomFormValidation {
    public function validateTest() {
        $answer = 0;
        $answerResults = array('гравитационное', '3', '3');
        if(isset($_POST["fio"])) {
            if(mb_strtolower($_POST['ans1'], 'UTF-8') == $answerResults[0]) $answer++;
            if($_POST["ans2"] == $answerResults[1]) $answer++;
            if($_POST["ans3"] == $answerResults[2]) $answer++;
            return $answer;
        }
    }
    public function validateContacts() {
        $sex = 0;
        $sexResults = array('Пол не определен', 'Ты мужик', 'Ты не мужик');
        if(isset($_POST["sex"]))
        {
            $sex = htmlentities($_POST["sex"]);
            return $sexResults[$sex];
        }
    }
}

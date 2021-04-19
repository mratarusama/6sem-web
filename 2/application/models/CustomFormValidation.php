<?php

class CustomFormValidation {
    public function validateTest() {
        $answer = 0;
        $answerResults = array('гравитационное', '3', '3');
        if(isset($_POST["fio"])) {
            $ans1 = $ans2 = $ans3 = 0;
            if(mb_strtolower($_POST['ans1'], 'UTF-8') == $answerResults[0]) $ans1++;
            if($_POST["ans2"] == $answerResults[1]) $ans2++;
            if($_POST["ans3"] == $answerResults[2]) $ans3++;

            $answer = $ans1 + $ans2 + $ans3;

            $test = new TestActiveRecord();
            $test->FIO = $_POST['fio'];
            $test->studGroup = $_POST['group'];
            $test->ans1 = (string)$ans1;
            $test->ans2 = (string)$ans2;
            $test->ans3 = (string)$ans3;
            $test->result = (string)$answer;
            $test->save();

            unset($test);

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

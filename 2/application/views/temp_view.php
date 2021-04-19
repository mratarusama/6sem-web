<div id="content">
<?php
    /*$a = new TestActiveRecord();
    $a->FIO = "1!1!Маринин Игорь Игоревич";
    $a->studGroup = "ПИ/б-18-1-о";
    $a->ans1 = "1";
    $a->ans2 = "1";
    $a->ans3 = "1";
    $a->result = "3";

    $a->save();

    $temp = $a->pdo->lastInsertId();
    var_dump(TestActiveRecord::findAll());*/

    $temp = TestActiveRecord::find(17);
    $temp->delete();
    $temp->save();

?>
</div>

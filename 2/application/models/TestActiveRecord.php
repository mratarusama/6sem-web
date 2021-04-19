<?php
class TestActiveRecord extends BaseActiveRecord {

    public $FIO, $studGroup, $ans1, $ans2, $ans3, $result, $id = NULL, $date = NULL;

    public function save()
    {
        if(!is_null($this->id)) {
            $query = "UPDATE test (FIO, studGroup, ans1, ans2, ans3, result) 
                        SET FIO='$this->FIO', studGroup='$this->studGroup', ans1='$this->ans1', ans2='$this->ans2', ans3='$this->ans3', result='$this->result') WHERE ID = $this->id;";
        } else {
            $query = "INSERT INTO test (FIO, studGroup, ans1, ans2, ans3, result) 
                            VALUES ('$this->FIO', '$this->studGroup', '$this->ans1', '$this->ans2' ,'$this->ans3' ,'$this->result');";
        }

        $this->query($query);

        if(is_null($this->id)){
            $this->id = $this->pdo->lastInsertId();
            $query = "SELECT date from test where ID = $this->id;";
            $result = $this->query($query)->fetchColumn();
            $this->date = $result;
        }
    }

    public function delete()
    {
        if(is_null($this->id)){
            throw new Exception('Trying to delete nonsaved row');
        }
        $query = "DELETE FROM test WHERE id = $this->id;";

        $this->query($query);
        $this->id = NULL;
        $this->date = NULL;
    }

    static public function find($id)
    {

        $query = "SELECT * FROM test WHERE id = $id LIMIT 1;";
        $result = (new TestActiveRecord())->query($query)->fetchAll();
        if(!$result)
            throw new Exception("No such id");

        return TestActiveRecord::buildRow($result[0]);
    }

    static public function findAll()
    {
        $query = "SELECT * FROM test";
        $result = (new TestActiveRecord())->query($query)->fetchAll();
        $rowsArray = Array();
        foreach($result as $row){
            array_push($rowsArray, TestActiveRecord::buildRow($row));
        }
        return $rowsArray;
    }

    static private function buildRow($row) {
        $temp = new TestActiveRecord();

        $temp->id = $row['id'];
        $temp->FIO = $row['FIO'];
        $temp->date = $row['date'];
        $temp->studGroup = $row['studGroup'];
        $temp->ans1 = $row['ans1'];
        $temp->ans2 = $row['ans2'];
        $temp->ans3 = $row['ans3'];
        $temp->result = $row['result'];

        return $temp;
    }
}
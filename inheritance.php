<?php
class departmentinfo{
    public $dep_chairman;
    public $dep_name;
    public $dep_classRoom;
    public $dep_student;

public function __construct($chair,$dept, $room, $stdNumber){

$this->dep_chairman=$chair;
$this->dep_name=$dept;
$this->dep_classRoom=$room;
$this->dep_student=$stdNumber;
echo "this output constructor";
echo "<br>";
echo $this->dep_chairman;
echo "<br>";
echo $this->dep_name;
echo "<br>";
echo "this output constructor end";
echo "<br>";
    }

public function dep_EEE(){
    echo "department  chairman name"   .$this->dep_chairman   ."departman of EEE";
    echo "<br>";
    }
}

class dep_CSE extends departmentinfo{
    public $lab_number;
    public function labNumber(){
        return "cse lab_no-01";
    }


}



$test = new dep_CSE("Dr.ATM shamsush zaman","CSE",502,20);
$test->dep_EEE();
echo $test->labNumber();

?>
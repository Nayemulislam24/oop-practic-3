<?php
// abstract class dept_info{
//     public $name;
//     public function __construct($n){
//         $this->name=$n;
//     }
//     abstract public function show();

// }

// class dept_CSE extends  dept_info{
//     public function show(){
//         echo "Name : ".$this->name;
//         echo "<br>";
//     }
// }




// $test = new dept_CSE("MD.Nayem");
// $test->show();


// $test = new dept_CSE(01);
// $test->show();





 
abstract class DepartmentInfo {
 
abstract public function departmentActivity();
}
 
class StatisticsDept extends DepartmentInfo {
 
public function departmentActivity() {
echo "Statistics department arrange a tour yearly<br/>";
}
 
}
 
// // class CseDept extends DepartmentInfo {
 
// // public function departmentActivity() {
// // echo "CSE department should arrange programming contest";
// // }
 
// }
 
$sdept = new StatisticsDept();
$sdept->departmentActivity();
// $cdept = new CseDept();
// $cdept->departmentActivity();


?>



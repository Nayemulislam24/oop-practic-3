<?php
class WebcoachbdProduct{
 public $title;
 public $number;
 public function __construct($theTitle,$theNumber){
 $this->title = $theTitle;
 $this->number = $theNumber;
 echo $this->number;
 echo "<br>";
 echo $this->title;
 echo "<br>";
 }
 public function getTutorial(){
 echo "Webcoachbd provide ".$this->number." tutorial on ". $this->title ."<br/>";
 
 }
 
}
$productObject = new WebcoachbdProduct("OOPHP", 50);
$productObject->getTutorial();
?>
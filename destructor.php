<?php
class WebcoachbdProduct{
public function __construct(){
echo "Constructor called first"."<br/>";
}
public function __destruct(){
echo "Finally distructor called";
}


}
$productObject = new WebcoachbdProduct();
?>
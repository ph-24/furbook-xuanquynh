<?php 
include 'a1.php';
include 'a2.php';
/*use OOP\A1\A as A1;*/
/*$ob= new A1();
$ob->getName();*/
/*closure and anonymous*/
/*$anonymousFunction=function(){
	echo 'this is anonymous function';
 };*/
/*$anonymousFunction();*/
/*function getFunctionName($functionName){
	return $functionName();

}
getFunctionName(function(){
	echo 'this is anonymous function';
});

$name='php';
$anonymousFunction= function($courseName) use($name){
	echo $courseName."<br>";
	echo 'this is anonymous function of '. $name;
};
$anonymousFunction('iviettech');
*/
use OOP\A2 as A2;
$ob= new A2();
$ob->getName();
?>

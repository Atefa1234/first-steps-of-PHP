<?php
//Create a function that receives two numbers as parameters and returns the sum of them. Print
//on screen and by console the result
function add($firstNum, $secondNum){
    $result = $firstNum + $secondNum ;
    return $result;
};
 var_dump(add(10,12));
 echo "<br>";
 //Create a function that determines whether a number is odd or even. Print to console and screen
function determine_number($number){
    if($number % 2 !== 0){
        return  "Odd";
    }else {
        return "Even";
    }
}
var_dump(determine_number(5));
echo "<br>";
var_dump(determine_number(18));
echo "<br>";





?>
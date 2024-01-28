<?php
//Create an array of 10 numbers
$arrayNum = [1, 2 ,3 ,4 ,5 , 6 , 7 ,8 ,9 ,10];
//Get the length of the array and print on screen and console.
print(count($arrayNum));
echo "<br>";
//Adds a string value to the array you created earlier and prints to screen
print_r($arrayNum);
echo "<br>";
array_push($arrayNum, "I'm new added");
print_r($arrayNum);
echo "<br>";
//Now add 2 more elements to your array and print on screen.
array_push($arrayNum, "Hello Numbers" , "Hi Barbie");
print_r($arrayNum);
echo "<br>";
//Create a new array and concatenate it with the previous one and print it on the screen.
$OddNum = [1, 3, 5 ,7 ,11,13, 17 ,19];
print_r(array_merge($arrayNum, $OddNum));
echo "<br>";
//Create a function that prints on console and screen all the numbers of an array in a list.
function showArray($OddNum){
    foreach($OddNum as $Num){
        var_dump($Num);
        echo "<br>";
    }
}
echo showArray($OddNum);
//Create a function that adds a number to the array
function addNumber($OddNum, $newNum){
    array_push($OddNum, $newNum);
    print_r($OddNum);
}
echo addNumber($OddNum , 23);
echo "<br>";
//Create a function that removes the even numbers from that array.
$numbers = [1, 2 , 3 ,4, 5 ,6 ,7 ,8 ,9, 10];
function reomoveNum($numbers){
    foreach($numbers as $key =>$number){
   if($number % 2 == 0){
    unset($numbers[$key]);
   }
}print_r($numbers);
echo "<br>";
}
reomoveNum($numbers);
//Create a function that returns the largest number in an array.
function maxNum($numbers){
    return max($numbers);
}
echo maxNum($numbers) . "<br>";
//Create a function that returns the smallest number in an array.
function minNum($numbers){
    return min($numbers);
}
echo minNum($numbers). "<br>";
//Create a function that converts all letters in a text to lowercase.
$introduce = "HELLO GUYS I AM A JUNIOR FULLSTACK WEB DEVELOPER";
function convertLowerCase($introduce){
    echo strtolower($introduce) . "<br>";
}
convertLowerCase($introduce);
//Create a function that converts all letters in a text to uppercase.
$introduce = "hi guys my name is atefa";
function convertUpperCase($introduce){
    echo strtoupper($introduce) . "<br>";
}
convertUpperCase($introduce);
//Create a function that receives an array of names and converts the first letter of each name to uppercase.
//to uppercase.
$myFriends = ["ana ce", "isla", "oli" , "diana" , "manu" , "maria cao" , "deisiree", "natha"];
function convertWords($myFriends){
  print_r(array_map('ucfirst', $myFriends));
}
convertWords($myFriends);
//Create a car class with its attributes and an attribute can be an array type












?>
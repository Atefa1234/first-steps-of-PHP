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
//Create a function that removes the even numbers from that array.












?>
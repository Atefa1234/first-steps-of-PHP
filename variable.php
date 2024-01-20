<?php
$name = "Ana ce";
echo "Type of string: ".$name. "<br>" ;
$age = 35;
echo  "Type of number: " .$age. "<br>";
$height = 1.60;
echo "Type of float: " .$height. "<br>";
$hasLongHair =TRUE;
echo "Type of boolean: " .$hasLongHair . "<br>";
$friends= [
    "Atefa",
    "Yami",
    "Anuska",
];
print_r ($friends) . "<br>";

$isStudent = NULL;
var_dump($isStudent);
echo "Type of Null: " .$isStudent ."<br>";
///////////////////////////////Identifying the types of data
//Easy
$nombre = "Luna";
var_dump($nombre) ;
echo "<br>";
$apellido = "Lovegood";
var_dump($apellido);
echo "<br>";
$edad = 42;
var_dump($edad);
echo "<br>";
$Ravenclaw = true;
var_dump($Ravenclaw);
echo "<br>";
//Middle
$promedio = (8 + 9.5 + 9 + 10 + 8)/5;
var_dump($promedio);
echo "<br>";
$nombre_completo = $nombre . "".$apellido;
var_dump($nombre_completo);
echo "<br>";
$presento_examen = (bool) 1 ;
var_dump($presento_examen);
echo "<br>";
//advance
$numero_preguntas = 5 + "5";
var_dump($numero_preguntas);
echo "<br>";
$numero_respuestas = "5" + 5;
var_dump($numero_respuestas);
echo "<br>";
$numero_maximo = $numero_respuestas/1.0;
var_dump($numero_maximo);
echo "<br>";
$nargles = 3 + "5 nargles";
var_dump($nargles);
echo "<br>";
//Assuming these variables
$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;
// ¿Cuál es el resultado según las tablas de verdad?
$es_un_michi_grande && $le_gusta_comer;
var_dump ($es_un_michi_grande && $le_gusta_comer);
echo "<br>";
$es_un_michi_grande || $sabe_volar;
var_dump($es_un_michi_grande || $sabe_volar);
echo "<br>";
$sabe_volar || $tiene_2_patas;
var_dump($sabe_volar || $tiene_2_patas);
echo "<br>";
!$le_gusta_comer;
var_dump(!$le_gusta_comer);
echo "<br>";
!$le_gusta_comer || $es_un_michi_grande;
var_dump(!$le_gusta_comer || $es_un_michi_grande);
echo "<br>";
//Convert all characters in the string to uppercase and print on the screen, without modifying the original variable.
//original variable.
$introduce = "Hello, my name is atefa";
$introduce = strtoupper($introduce);
echo $introduce . "<br>";
//Prints the length of the string variable on the screen.
$country = "Afghanistan";
echo strlen($country) . "<br>";
//Prints on the screen the number of words in the string variable.
$programming = "Nowadays everyone have to learn programming";
echo str_word_count($programming) . "<br>";
//Changes the characters of the string variable to reverse order and prints on the screen, without modifying the original variable.
//original variable.
$php = "I am a backend language of programming";
echo strrev($php) . "<br>";
//Replace the word 'gato' in your original variable to 'Michi' and print to the screen.
$animal = "Hello gato";
echo str_replace("gato" , "Michi", $animal) . "<br>";
//Declare two variables and give them an integer value and print both on the screen.
$firstNum = 1;
$secondNum =9;
echo $firstNum . "<br>";
echo $secondNum . "<br>";
// Sum both integer variables and prints on the screen.
$result = $firstNum + $secondNum ;
echo $firstNum . "+" . $secondNum .  " = " .$result . "<br>" ;
//Declare two variables and give them a value of 1 and 0 type integer and print the data type on the screen and
//console
$num1 = 1;
var_dump($num1);
echo "<br>";
$num2 = 0 ;
var_dump($num1);
echo "<br>";
$num1 = true;
var_dump($num1);
echo "<br>";
$num2 = false;
var_dump($num2);
echo "<br>";
?>
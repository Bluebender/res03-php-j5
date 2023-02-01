<?php

require 'operations.php';
require 'surfaces.php';

if (isset($_POST['firstNumber'])){
    $firstNumber = $_POST['firstNumber'];
}
if (isset($_POST['operation'])){
    $operation = $_POST['operation'];
}
if (isset($_POST['calcule'])){
    $calcule = $_POST['calcule'];
}
if (isset($_POST['secondNumber'])){
    $secondNumber = $_POST['secondNumber'];
}


// Opérations de base
if ($operation === "+"){
    echo add($firstNumber, $secondNumber);
}
if ($operation === "-"){
    echo substract($firstNumber, $secondNumber);
}
if ($operation === "*"){
    echo multiply($firstNumber, $secondNumber);
}
if ($operation === "/"){
    if (divide($firstNumber, $secondNumber)===null){
        echo "On ne peut pas diviser un nombre par 0";        
    }
    else{
        echo divide($firstNumber, $secondNumber);
    }
}
if ($operation === "%"){
    if (modulo($firstNumber, $secondNumber)===null){
        echo "On ne peut pas diviser un nombre par 0";        
    }
    else{
        echo modulo($firstNumber, $secondNumber);
    }
}
if ($operation === "^"){
    echo power($firstNumber, $secondNumber);
}
if ($operation === "f"){
    echo factorial($firstNumber);
}


// Calcule des aires
if ($calcule === "rectangle"){
    echo rectangle_surface($firstNumber, $secondNumber);
}
if ($calcule === "triangleRectangle"){
    echo rectangle_triangle_surface($firstNumber, $secondNumber);
}
if ($calcule === "triangleNormal"){
    echo basic_triangle_surface($firstNumber, $secondNumber);
}
if ($calcule === "cercle"){
    echo disk_surface($firstNumber, $secondNumber);
}





require 'calculator.phtml';


?>
<?php


function add(int $nb1, int $nb2) : int
{
    return $nb1+$nb2;
}

function substract(int $nb1, int $nb2) : int
{
    return $nb1-$nb2;
}

function multiply(int $nb1, int $nb2) : int
{
    return $nb1*$nb2;
}

function divide(int $nb1, int $nb2) : ?int
{
    if ($nb2 === 0){
        return null;
    }
    else{
        return $nb1/$nb2;
    }
}

function modulo(int $nb1, int $nb2) : ?int
{
    if ($nb2 === 0){
        return null;
    }
    else{
        return $nb1%$nb2;
    }
}

function power(int $nb1, int $nb2) : int
{
    $result = $nb1;
    for ($i=0; $i<$nb2-1; $i++){
        $result = $result * $nb1;
    }
    return $result;
}
function factorial(int $nb1) : int
{
    $result = $nb1;
    for ($i=0; $i<$nb1; $i++){
        $nb1 = $nb1 - 1;
        $result = $result * $nb1;
    }
    return $result;
}



?>
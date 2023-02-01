<?php


function rectangle_surface(int $nb1, int $nb2) : int
{
    return $nb1*$nb2;
}
function rectangle_triangle_surface(int $nb1, int $nb2) : int
{
    return $nb1*$nb2/2;
}
function basic_triangle_surface(int $nb1, int $nb2) : int
{
    return $nb1*$nb2/2;
}
function disk_surface(int $nb1) : int
{
    return pi()*$nb1*$nb1;
}


?>
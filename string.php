<?php
function verbeter($string){
$string = strtolower($string);
$string = ucwords($string);
$string = rtrim($string, " ");
echo $string;


?>
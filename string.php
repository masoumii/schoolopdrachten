<?php
$string = "dEzE TeKSt wOrDt opgeSchoond ";
function verbeter($string){
$string = strtolower($string);
$string = ucwords($string);
$string = rtrim($string, " ");
echo $string;
}


verbeter($string);
?>
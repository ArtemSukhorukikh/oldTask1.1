<?php
function declOfNum($number,$one,$two,$tree){
    $resultString = "";
    if($number %10 == 0 || ($number % 10 >= 5 && $number % 10 <= 9))
        $resultString = "$number $tree";
    elseif ($number %10 == 1)
        $resultString = "$number $one";
    else
        $resultString = "$number $two";
    return $resultString;
}
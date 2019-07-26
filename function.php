<?php
function declOfNum($number,$one,$two,$tree,$shownumber){
    $resultString = "";
    if ($shownumber == true)
    	$resultString = $resultString.$number;
    if($number %10 == 0 || ($number % 10 >= 5 && $number % 10 <= 9))
        $resultString = $resultString.$tree;
    elseif ($number %10 == 1)
        $resultString = $resultString.$one;
    else
        $resultString = $resultString.$two;
    return $resultString;
}
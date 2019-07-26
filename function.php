<?php
function declOfNum($number,array $fields){
    $resultString = "";
    $resultString = $resultString.$number;
    if($number %10 == 0 || ($number % 10 >= 5 && $number % 10 <= 9))
        $resultString = $resultString.$fields[2];
    elseif ($number %10 == 1)
        $resultString = $resultString.$fields[0];
    else
        $resultString = $resultString.$fields[2];
    return $resultString;
}
<?php

function yearDropDown($n){
    $currentYear = date('Y');
    $years[0] =$currentYear;
    for($i = 1; $i <= $n; $i++){
        $years[$i] = $currentYear - $i;
    }
    return $years;
}
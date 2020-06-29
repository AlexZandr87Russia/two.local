<?php

$x="ЛИСА + ВОЛК = ЗВЕРИ";
$convertedText = mb_convert_encoding($x, 'utf-8', mb_detect_encoding($x));
$strx= strlen(str_replace(' ', '', $convertedText));


$arr1 = str_split($x);


print_r($arr1);

?>
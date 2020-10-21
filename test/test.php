<?php
function testhappy($num) {
$arr = str_split($num,3);
$arran = str_split("$arr[0]"); // разбивает строку на массив символов
$result = 0;
foreach ($arran as $value) { // проходимся по массиву
    $result += intval($value); // и суммируем результат
}


$arran2 = str_split("$arr[1]"); // разбивает строку на массив символов
$result2 = 0;
foreach ($arran2 as $value2) { // проходимся по массиву
    $result2 += intval($value2); // и суммируем результат
}

if($result==$result2) echo 'билет счастливый';
else echo 'билет не счастливый';
}

testhappy(296098);

/*

else  echo 'билет не счастливый';



for ($i = 1; $i <= 999; $i++) {
    $str = (string)strlen($i);
    $i = (string)$i;
    switch ($str){
        case 1: $result1 = $i;
        break;
        case 2: $result2 = $i[0]+$i[1];
        break;
        case 3: $result3 = $i[0]+$i[1]+$i[2];
    }
    switch ($str){
        case 1: $result4 = $i;
            break;
        case 2: $result5 = $i[0]+$i[1];
            break;
        case 3: $result6 = $i[0]+$i[1]+$i[2];
    }




}

*/
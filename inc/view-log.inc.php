<?
if (is_file("log/pav.log")){
    $lines = file("log/pav.log");
}
if (is_array($lines)){
foreach ($lines as $v=>$i) {
    $v++;
    echo "$v. $i<br>";
}}
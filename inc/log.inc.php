<?
$dt = date("m.d.y в H:i:s"); ;
$page = $_SERVER['REQUEST_URI'];
$ref = $_SERVER['HTTP_REFERER'];
$path = "$dt защел на страницу:$page, переход с:$ref\n";
file_put_contents("./log/pav.log", "$path", FILE_APPEND);


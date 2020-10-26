<?

$visitCounter = (isset($_COOKIE["n"])) ? $_COOKIE["n"] : 0;
$visitCounter++;

$lastVisit = "";
if (isset($_COOKIE["lastVisit"])){
    $lastVisit = date('d-m-Y H-i-s', $_COOKIE["lastVisit"]);
}

if (date('d-m-Y', $_COOKIE["lastVisit"]) != date('d-m-Y'))
{
setcookie('lastVisit', time(), time()+36000000);
setcookie('n', $visitCounter, time()+360000000);
}
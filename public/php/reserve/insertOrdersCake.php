<?php session_start(); ?>
<?php
if (!$_COOKIE['token']) {
    header('Location: /Cake/public/login.html');
    die();
}
require_once('../DB.php');

$oid = $_REQUEST["oid"];
$makeNum = $_REQUEST["makeNum"];
$companion = $_REQUEST["companion"];
$nameArr = [$_REQUEST["cakeName"]];
$numArr = [$_REQUEST["num"]];
$sceneNum = 0;

var_dump($_REQUEST);
$nameNumArr = [
    $_REQUEST["cakeName"] => $_REQUEST["num"]
];

$checkNum = $_REQUEST["num"];

for ($x = 0; $x < $makeNum; $x++) {
    $nameKey = "newCakeName" . ($x + 1);
    if (isset($_REQUEST[$nameKey]) && trim($_REQUEST[$nameKey]) !== "") {
        $name = $_REQUEST[$nameKey];
        $num = isset($_REQUEST["newNum" . ($x + 1)]) ? $_REQUEST["newNum" . ($x + 1)] : 0;

        if (array_key_exists($name, $nameNumArr)) {
            $nameNumArr[$name] += $num;
        } else {
            $nameNumArr[$name] = $num;
        }

        $checkNum += $num;
    }
}

if ($checkNum > $makeNum) {
    echo ("選取品項總份數超過製作份數!!");
    die();
} elseif ($checkNum < $makeNum) {
    $sceneNum = $makeNum - $checkNum;
    $nameNumArr[0] = $sceneNum;
}
$nameArr = array_keys($nameNumArr);
$numArr = array_values($nameNumArr);

// var_dump($nameArr);
// var_dump($numArr);

DB::update("update orders set companion = ? where oid = ?",[$companion, $oid]);

for($y = 0; $y < count($nameArr) ; $y++){
    // var_dump($nameNumArr[$y]);
    DB::insert("insert into orderlist value (?, ?, ?)",[$oid, $nameArr[$y], $numArr[$y]]);
}
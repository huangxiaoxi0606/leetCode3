<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/6/28
 * Time : 9:57
 */
include("findOcurrences.php");

$text="alice is a good girl she is a good student";
$first="a";
$second="good";
$findOcurrences =new Solution();
echo json_encode($findOcurrences->findOcurrences($text, $first, $second));
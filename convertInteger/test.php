<?php
/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/5/7
 * Time: 16:20
 */
include("convertInteger.php");

$a = 826966453;
$b = -729934991;
$convertInteger = new Solution();
echo json_encode($convertInteger->convertInteger($a, $b));
<?php
/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/3/28
 * Time: 16:32
 */
include("daysBetweenDates.php");

$a = "2019-06-29";
$b = "2019-06-30";
$daysBetweenDates = new Solution();
echo json_encode($daysBetweenDates->daysBetweenDates($a, $b));
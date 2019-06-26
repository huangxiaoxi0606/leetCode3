<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/6/26
 * Time : 12:02
 */
include("isMonotonic.php");

$data =[1,3,2];
$isMonotonic =new Solution();
echo json_encode($isMonotonic->isHappy($isMonotonic));
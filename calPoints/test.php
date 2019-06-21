<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/6/21
 * Time : 15:47
 */
include("calPoints.php");

$data =["5","-2","4","C","D","9","+","+"];
$calPoints =new Solution();
echo json_encode($calPoints->calPoints($data));
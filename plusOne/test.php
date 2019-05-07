<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/7
 * Time : 15:02
 */

include("plusOne.php");

$data =[9,9,9];
$plus_one =new Solution();
echo json_encode($plus_one->plusOne($data));


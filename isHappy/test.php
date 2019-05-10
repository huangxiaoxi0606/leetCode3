<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/10
 * Time : 15:01
 */

include("isHappy.php");

$data =3;
$is_happy =new Solution();
echo json_encode($is_happy->isHappy($data));
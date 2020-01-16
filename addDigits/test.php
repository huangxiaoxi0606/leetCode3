<?php
/**
 * Created by PhpStorm.
 * User: Hhx
 * Date: 2020/1/16
 * Time: 10:07
 */

include("addDigits.php");

$num = 38;
$addDigits = new Solution();
echo json_encode($addDigits->addDigits($num));

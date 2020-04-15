<?php
/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/4/15
 * Time: 9:06
 */
include("divingBoard.php");

$shorter = "1";
$longer = "1";
$k = '0';
$divingBoard = new Solution();
echo json_encode($divingBoard->divingBoard($shorter, $longer, $k));
<?php
/**
 * Created by PhpStorm.
 * User: Hhx
 * Date: 2020/1/16
 * Time: 10:34
 */
include("canWinNim.php");

$num = 8;
$canWinNim = new Solution();
echo json_encode($canWinNim->canWinNim($num));

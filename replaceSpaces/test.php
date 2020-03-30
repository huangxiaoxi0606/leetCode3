<?php
/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/3/30
 * Time: 11:09
 */
include("replaceSpaces.php");

$S = "Mr John Smith    ";
$length = 13;
$replaceSpaces = new Solution();
echo json_encode($replaceSpaces->replaceSpaces($S, $length));
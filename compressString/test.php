<?php
/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/4/9
 * Time: 19:52
 */
include("compressString.php");

$n = "aabcccccaa";
$compressString = new Solution();
echo json_encode($compressString->compressString($n));
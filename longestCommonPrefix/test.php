<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/9/16
 * Time : 11:04
 */
include("longestCommonPrefix.php");
$strs = ["flower","flow","flight"];
$longestCommonPrefix =new Solution();
echo json_encode($longestCommonPrefix->longestCommonPrefix($strs));
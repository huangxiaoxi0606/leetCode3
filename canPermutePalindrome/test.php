<?php
/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/4/2
 * Time: 17:56
 */
include("canPermutePalindrome.php");

$s = "carerac";
$canPermutePalindrome = new Solution();
echo json_encode($canPermutePalindrome->canPermutePalindrome($s));
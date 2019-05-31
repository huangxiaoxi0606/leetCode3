<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/31
 * Time : 16:49
 */
include("reverseOnlyLetters.php");
$S="ab-cd";
$reverseOnlyLetters = new Solution();
$data = $reverseOnlyLetters->reverseOnlyLetters($S);
echo json_encode($data);
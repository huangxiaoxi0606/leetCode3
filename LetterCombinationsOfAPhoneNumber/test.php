<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/7
 * Time : 18:28
 */
include ("LetterCombinationsOfAPhoneNumber.php");
$letter_Combinations_of_a_phone_number = new Solution();
$digits ='567';
$data =$letter_Combinations_of_a_phone_number->letterCombinations($digits);
echo json_encode($data);
<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/31
 * Time : 16:05
 */
include ("numUniqueEmails.php");
$numUniqueEmails = new Solution();
$email =["test.email+alex@leetcode.com","test.email.leet+alex@code.com"];
$data = $numUniqueEmails->numUniqueEmails($email);
echo json_encode($data);
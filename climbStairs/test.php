<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/28
 * Time : 12:21
 */
include("climbStairs.php");

$n =2;
$climbStairs =new Solution();
echo json_encode($climbStairs->climbStairs($n));
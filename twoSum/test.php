<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/7
 * Time : 15:20
 */

include("twoSum.php");

$nums = [2,7,11,15];
$target =9;
$two_Sum = new Solution();
$data =$two_Sum->twoSum($nums,$target);
echo json_encode($data);
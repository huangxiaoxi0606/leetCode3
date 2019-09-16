<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/9/16
 * Time : 9:40
 */
include("containsNearbyDuplicate.php");

$nums = [1,0,1,1];
$k =1;
$containsNearbyDuplicate =new Solution();
echo json_encode($containsNearbyDuplicate->containsNearbyDuplicate($nums, $k));
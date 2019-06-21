<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/6/21
 * Time : 11:38
 */
include("search.php");
$nums = [-1,0,3,5,9,12];
$target = 9;
$search = new Solution();
$data = $search->search($nums, $target);
echo json_encode($data);
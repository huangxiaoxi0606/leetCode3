<?php
/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/4/10
 * Time: 17:15
 */
include("kthToLast.php");
$head = [1, 2, 3, 4, 5];
$k = 2;
$data = '"leetcode"';
$kthToLast = new Solution();
echo json_encode($kthToLast->kthToLast($head, $k));
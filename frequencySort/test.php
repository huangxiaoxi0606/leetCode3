<?php
/**
 * Created by PhpStorm.
 * User: Hhx
 * Date: 2019/12/27
 * Time: 11:18
 */
include("frequencySort.php");

$s = "tree";
$frequencySort = new Solution();
echo json_encode($frequencySort->frequencySort($s));
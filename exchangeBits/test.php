<?php
/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/5/7
 * Time: 17:11
 */
//exchangeBits
include("exchangeBits.php");

$nums = 3;
$exchangeBits = new Solution();
echo json_encode($exchangeBits->exchangeBits($nums));
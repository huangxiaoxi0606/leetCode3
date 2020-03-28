<?php
/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/3/28
 * Time: 17:21
 */

include("isUnique.php");

$data ='"leetcode"';
$isUnique =new Solution();
echo json_encode($isUnique->isUnique($data));
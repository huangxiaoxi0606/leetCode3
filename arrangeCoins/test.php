<?php
/**
 * Created by PhpStorm.
 * User: Hhx
 * Date: 2019/12/23
 * Time: 14:46
 */
include("arrangeCoins.php");

$data = 2;
$arrangeCoins = new Solution();
echo json_encode($arrangeCoins->arrangeCoins($data));
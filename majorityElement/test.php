<?php
/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/4/15
 * Time: 10:28
 */
include("majorityElement.php");
$strs = [3, 2, 3];
$majorityElement = new Solution();
echo json_encode($majorityElement->majorityElement($nums));
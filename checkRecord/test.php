<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/17
 * Time : 15:49
 */
include("checkRecord.php");

$data ="PPALLP";
$checkRecord =new Solution();
echo json_encode($checkRecord->checkRecord($data));
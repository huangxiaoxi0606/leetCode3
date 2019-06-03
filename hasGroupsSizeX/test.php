<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/6/3
 * Time : 15:31
 */
include("hasGroupsSizeX.php");
$deck =[1,1,1,2,2,2,3,3];
$hasGroupsSizeX =new Solution();
echo json_encode($hasGroupsSizeX->hasGroupsSizeX($deck));
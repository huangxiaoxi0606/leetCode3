<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/7
 * Time : 18:54
 */
include ("moveZeroes.php");
$move_zeroes = new Solution();
$nums =[0,1,0,3,12];
$data = $move_zeroes->moveZeroes($nums);
echo json_encode($data);
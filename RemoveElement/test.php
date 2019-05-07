<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/7
 * Time : 16:19
 */
include("RemoveElement.php");
$nums = [3,2,2,3];
$val = 3;
$remove_element = new Solution();
$data = $remove_element->removeElement($nums,$val);
echo json_encode($data);
<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/30
 * Time : 16:59
 */

include("findTheDifference.php");

$s ="a";
$t ="aa";
$findTheDifference =new Solution();
echo json_encode($findTheDifference->findTheDifference($s,$t));
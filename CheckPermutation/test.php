<?php
/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/3/30
 * Time: 9:30
 */

include("CheckPermutation.php");

$s1 = 'jzvthzihsvghjhbrpfhdwixmyaxjrdzfvnhpmyrbqjpdffykqgahgzpjwvouurr';
$s2 = 'hhqhxjyrghjjsmduaxppwrqkikqnfdrzjowapehtbyrgrfyprrfrebzduxvvhhu';
$CheckPermutation = new Solution();
echo json_encode($CheckPermutation->CheckPermutation($s1, $s2));
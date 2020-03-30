<?php
/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/3/30
 * Time: 9:30
 */
class Solution {

    /**
     * @param String $s1
     * @param String $s2
     * @return Boolean
     */
    function CheckPermutation($s1, $s2) {
        $l1 = array_count_values(str_split($s1));
        $l2 = array_count_values(str_split($s2));
        if($l1 == $l2){
            return  true;
        }
        return false;
    }
}
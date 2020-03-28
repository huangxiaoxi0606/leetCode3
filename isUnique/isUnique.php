<?php
/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/3/28
 * Time: 17:20
 */
class Solution {

    /**
     * @param String $astr
     * @return Boolean
     */
    function isUnique($astr) {
        $arr = str_split($astr);
        if(count($arr) == count(array_flip($arr))){
            return true;
        }
        return false;
    }
    // function isUnique($astr) {
    //     $arr = str_split($astr);
    //     if(count($arr) == count(array_unique($arr))){
    //         return true;
    //     }
    //     return false;
    // }

    // function isUnique($astr) {
    //     if($astr== ''){
    //         return true;
    //     }
    //     $arr = str_split($astr);
    //     if(count($arr) == count(array_count_values(str_split($astr)))){
    //         return true;
    //     }
    //     return false;

    // }
}
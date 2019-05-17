<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/17
 * Time : 15:48
 */
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function checkRecord($s) {
        $arr = str_split($s);
        if(array_count_values($arr)['A']<=1 && strpos($s, 'LLL')=== false){
            return true;
        }else{
            return false;
        }

    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Hhx
 * Date: 2020/1/16
 * Time: 10:33
 */
class Solution {
    /**
     * @param Integer $n
     * @return Boolean
     */
    function canWinNim($n) {
        // if($n %4 ==0){
        //     return false;
        // }
        // return true;
        return ($n % 4) > 0;
    }
}

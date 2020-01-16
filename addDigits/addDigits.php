<?php
/**
 * Created by PhpStorm.
 * User: Hhx
 * Date: 2020/1/16
 * Time: 10:06
 */
class Solution {
    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
        if ($num < 10) { return $num;}
        $mod = $num % 9;
        return $mod == 0 ? 9 : $mod;
    }
}

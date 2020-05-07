<?php
/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/5/7
 * Time: 17:11
 */
class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function exchangeBits($num) {
        $even = ($num & 0xaaaaaaaa) >> 1;
        $odd = ($num & 0x55555555) << 1;
        return $even | $odd;
    }
}
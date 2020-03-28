<?php
/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/3/28
 * Time: 16:21
 */
class Solution {

    /**
     * @param String $date1
     * @param String $date2
     * @return Integer
     */
    function daysBetweenDates($date1, $date2) {
        return abs((strtotime($date1) - strtotime($date2))/86400);
    }
}
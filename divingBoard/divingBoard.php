<?php

/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/4/15
 * Time: 9:05
 */
class Solution
{

    /**
     * @param Integer $shorter
     * @param Integer $longer
     * @param Integer $k
     * @return Integer[]
     */
    function divingBoard($shorter, $longer, $k)
    {
        $res = [];
        if ($k == 0) {
            return [];
        }
        for ($i = 0; $i <= $k; $i++) {
            $res[] = $shorter * ($k - $i) + $longer * $i;
        }
        return array_unique($res);

//        $res = [];
//        if ($k == 0) {
//            return [];
//        }
//        $new = $k / 2 + 1;
//        for ($i = 0; $i <= $new; $i++) {
////            $res[] = $shorter * ($k - $i) + $longer * $i;
////            $res[] = $shorter * $i + $longer * ($k - $i);
//            array_push($res, $shorter * ($k - $i) + $longer * $i, $shorter * $i + $longer * ($k - $i));
//        }
//        asort($res);
//        return array_unique($res);
    }
}
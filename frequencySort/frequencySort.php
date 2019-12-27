<?php

/**
 * Created by PhpStorm.
 * User: Hhx
 * Date: 2019/12/27
 * Time: 11:18
 */
class Solution
{
    /**
     * @param String $s
     * @return String
     */
    function frequencySort($s)
    {
        $arr = array_count_values(str_split($s));
        arsort($arr);
        $res = '';
        foreach ($arr as $k => $v) {
            for ($i = 0; $i < $v; $i++) {
                $res .= $k;
            }
        }
        return $res;
    }
}
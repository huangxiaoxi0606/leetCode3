<?php

/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/5/7
 * Time: 16:19
 */
class Solution
{
    /**
     * @param Integer $A
     * @param Integer $B
     * @return Integer
     */
    function convertInteger($A, $B)
    {
        $A = $A & 0xffffffff;
        $B = $B & 0xffffffff;
        return substr_count(decbin($A ^ $B), 1);
    }
}
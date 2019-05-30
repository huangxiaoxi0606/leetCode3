<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/30
 * Time : 16:59
 */
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference($s, $t) {
        $d = array_diff_assoc(array_count_values(str_split($t)),array_count_values(str_split($s)));
        return key($d);
    }
}
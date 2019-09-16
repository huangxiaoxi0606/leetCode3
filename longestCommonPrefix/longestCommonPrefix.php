<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/9/16
 * Time : 11:03
 */
class Solution {
    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if($strs ==[]){
            return '';
        }
        $first = array_shift($strs);
        $strlen = strlen($first);
        $flag = '';
        $num = 0;
        for ($i= 0; $i < $strlen ; $i++) {
            $old = $flag;
            $flag = $flag.$first[$i];
            $num += 1;
            foreach($strs as $value){
                if($flag != substr($value,0,$num)){
                    return $old;
                }
            }
        }
        return $first;
    }
}
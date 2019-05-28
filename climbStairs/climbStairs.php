<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/28
 * Time : 12:20
 */
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        $dp=[0,1,2];
        if($n >2){
            for($i=3 ;$i<=$n;$i++){
                $dp[$i]=$dp[$i-2]+$dp[$i-1];
            }
        }
        return $dp[$n];
    }
}
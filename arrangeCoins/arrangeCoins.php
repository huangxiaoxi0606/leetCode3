<?php
/**
 * Created by PhpStorm.
 * User: Hhx
 * Date: 2019/12/23
 * Time: 14:46
 */
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function arrangeCoins($n) {
        return (int) (sqrt(2 * $n + 1/4) - 0.5);

        // $left = 1;
        // $right = $n;
        // while($left <= $right){
        //     $mid =(int)($left + ($right - $left) / 2) ;
        //     $sum = $mid * ($mid + 1) / 2;
        //     if ($sum == $n) {
        //         return $mid;
        //     }else if ($sum > $n) {
        //         $right = $mid - 1;
        //     }else {
        //         $left = $mid + 1;
        //     }
        // }
        // return $right;
    }
}
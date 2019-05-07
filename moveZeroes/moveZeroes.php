<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/7
 * Time : 18:54
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        foreach($nums as $k =>$v){
            if($v==0){
                $nums[]=0;
                unset($nums[$k]);
            }
        }
        return $nums;
    }
}
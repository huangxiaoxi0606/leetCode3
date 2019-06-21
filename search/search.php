<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/6/21
 * Time : 11:38
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        //1.反转数组查找
        // $nums =array_flip($nums);
        // if(isset($nums[$target])){
        //     return $nums[$target];
        // }
        // return -1;
        //2.二分查找
        $low=0;
        $high = count($nums)-1;
        while($low <= $high){
            $mid = intval(($low +$high)/2);
            if($target > $nums[$mid]){
                $low = $mid +1;
            }elseif ($target < $nums[$mid]){
                $high = $mid -1;
            }else{
                return $mid;
            }

        }
        return -1;

    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/4/15
 * Time: 10:28
 */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        // $nums = array_count_values($nums);
        // return array_search(max($nums),$nums);
        // $n = array_count_values($nums);
        // arsort($n);
        // return key($n);

        // $len = count($nums)/2;
        // $data = [];
        // foreach($nums as $k =>$v){
        //     if($data[$v]){
        //         $data[$v] ++;
        //     }else{
        //         $data[$v] = 1;
        //     }
        //     if($data[$v] > $len){
        //         return $v;
        //     }
        // }
        // return -1;

        // 摩尔投票法
        // $count = 0;
        // $candidate = -1;
        // foreach($nums as $k=>$v){
        //     if($count == 0){
        //         $candidate = $v;
        //     }
        //     if($candidate == $v){
        //         $count ++;
        //     }else{
        //         $count --;
        //     }
        // }
        // return $candidate;
        sort($nums);
        $len = intval(count($nums)/2);
        return $nums[$len];
    }
}
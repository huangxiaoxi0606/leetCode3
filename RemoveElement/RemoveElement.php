<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/7
 * Time : 16:18
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        // $flag = 0;
        // for ($i = 0;$i < count($nums); $i++){
        //     if($nums[$i] != $val){
        //         $nums[$flag++] = $nums[$i];
        //     }
        // }
        // return $flag;
        foreach($nums as $key =>$item){
            if($item == $val){
                unset($nums[$key]);
            }
        }
        return $nums;
    }
}
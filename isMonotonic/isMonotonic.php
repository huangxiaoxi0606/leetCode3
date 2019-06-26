<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/6/26
 * Time : 12:01
 */
class Solution {

    /**
     * @param Integer[] $A
     * @return Boolean
     */
    function isMonotonic($A) {
        // 1.慢
        // $B = $A;
        //  if($A[0] <= end($A)){
        //      sort($B);
        //  }else{
        //      rsort($B);
        //  }
        //  if($A==$B){
        //          return true;
        //  }
        //  return false;
        // 2.
        //  $len = count($A);
        //  for($i==1; $i<$len; $i++){
        //      if($A[$i] ==$A[$i-1]){
        //          continue;
        //      }
        //      if($A[$i] >$A[$i-1]){
        //          $inc = '1';
        //      }
        //      if($A[$i] <$A[$i-1]){
        //          $dec = '1';
        //      }
        //  }
        // if($inc && $dec){
        //     return false;
        // }
        //  return true;
        // 3.
        $len = count($A);
        $flag = $A[$len-1]-$A[0];
        if($flag > 0){
            for($i=1; $i<$len; $i++){
                if($A[$i] <$A[$i-1]){
                    return false;
                }
            }
        }else{
            for($i=1; $i<$len; $i++){
                if($A[$i] > $A[$i-1]){
                    return false;
                }
            }
        }
        return true;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/4/2
 * Time: 17:55
 */
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function canPermutePalindrome($s) {
        // 1.
         $arr = str_split($s);
         $new = array_count_values($arr);
         $a = 0;
         foreach($new as $value){
             if($value % 2!=0){
                 $a++;
             }
         }
         if($a>1) return false;
         return true;
        // 2.
        // $arr=str_split($s);
        // $new=[];
        // foreach($arr as $v){
        //     if(isset($new[$v])){
        //         unset($new[$v]);
        //     }else{
        //         $new[$v]=1;
        //     }
        // }
        // if(count($new)<=1)return true;
        // return false;
    }
}
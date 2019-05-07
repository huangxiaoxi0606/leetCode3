<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/7
 * Time : 15:01
 */

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        // $digits = array_reverse($digits);
        // $digits[0] += 1;
        // $len =count($digits);
        // for ($i=0; $i <$len;$i++){
        //     if($digits[$i] >9){
        //          $digits[$i]-=10;
        //          $digits[$i+1]+=1;
        //     }
        // }
        // if(end($digits)==0){
        //     array_pop($digits);
        // }
        // return array_reverse($digits);
        $len =count($digits)-1;
        if($digits[$len]==9){
            $digits[$len] =10;
        }else{
            $digits[$len] +=1;
            return $digits;
        }
        for ($i=$len; $i >=0;$i--){
            if($digits[$i] >9){
                $digits[$i]-=10;
                if($i==0){
                    array_unshift($digits,1);
                }else{
                    $digits[$i-1]+=1;
                }
            }
        }
        return $digits;

    }
}
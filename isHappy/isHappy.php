<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/10
 * Time : 15:00
 */
class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {
        $datas = str_split($n);
        $flag = 0;
        foreach($datas as $data){
            $flag += $data**2;
        }
        if($flag !=1 ){
            if($flag == 4){
                return false;
            }else{
                return $this->isHappy($flag);
            }
        }
        return true;

        // while($n !=1 && $n !=4){
        //     $ans = 0;
        //     while($n >0){
        //         $a = $n %10;
        //         $ans += $a**2;
        //         $n /=10;
        //     }
        //     $n = $ans;
        // }
        // return $n ==1;


    }
}
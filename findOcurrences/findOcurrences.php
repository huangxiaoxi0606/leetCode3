<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/6/28
 * Time : 9:56
 */
class Solution {

    /**
     * @param String $text
     * @param String $first
     * @param String $second
     * @return String[]
     */
    function findOcurrences($text, $first, $second) {
        // $arr = explode(" ",$text);
        // $len = count($arr)-1;
        // $data = [];
        // for($i =1;$i<$len;$i++){
        //     if($arr[$i] ==$second){
        //         if($arr[$i-1]==$first){
        //             $data[] = $arr[$i+1];
        //         }
        //     }
        // }
        // return $data;

        $arr = explode(" ",$text);
        $len = count($arr)-2;
        $data = [];
        for($i =0;$i<$len;$i++){
            if($arr[$i] ==$first){
                if($arr[$i+1]==$second){
                    $data[] = $arr[$i+2];
                }
            }
        }
        return $data;

    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/3/30
 * Time: 11:08
 */
class Solution {

    /**
     * @param String $S
     * @param Integer $length
     * @return String
     */
    function replaceSpaces($S, $length) {
        // $S = rtrim($S);
        // $len = strlen($S);
        // $count = $length - $len;
        // $l = str_replace(" ","%20",$S);
        // if($count >0){
        //     for($i =0;$i<$count;$i++){
        //         $l = $l . '%20';
        //     }
        // }
        // return $l;

        // $len = strlen($S);
        // if($len >= $length){
        //     $new = substr($S,0,$length);
        //     return str_replace(" ","%20",$new);
        // }else{
        //     for($i=$len;$i<$length;$i++){
        //         $u = $u .'%20';
        //     }
        //     return str_replace(" ","%20",$S).$u;
        // }
        return str_replace(" ","%20",substr($S,0,$length));
    }
}
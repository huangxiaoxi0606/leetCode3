<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/31
 * Time : 16:49
 */
class Solution {

    /**
     * @param String $S
     * @return String
     */
    function reverseOnlyLetters($S) {
        $array = str_split($S);
        $d = str_split(preg_replace( '/[^a-zA-Z]/i', '', $S));
        $h ='';
        foreach($array as $v){
            $a = ord($v);
            if($a< 65 ||($a >90 && $a <97) || $a>122){
                $h =$h.$v;
            }else{
                $h =$h.array_pop($d);
            }
        }
        return $h;

    }
}
<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/6/3
 * Time : 15:31
 */
class Solution {

    /**
     * @param Integer[] $deck
     * @return Boolean
     */
    function hasGroupsSizeX($deck) {
        if($this->gcd_array(array_unique(array_count_values($deck))) <2){
            return false;
        }
        return true;
    }

    function gcd_array($array, $a = 0){
        $b = array_pop($array);
        return (!$b) ? $a : $this->gcd_array($array,  $this->gcd($a, $b));
    }

    function gcd($a, $b){
        if ($a == 0 || $b == 0){
            return  max($a, $b);
        }else{
            $r = $a % $b;
            return ($r != 0) ? $this->gcd($b, $r) :$b;
        }
    }
}
<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/9/16
 * Time : 9:39
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {
        $new =[];
        foreach($nums as $key =>$value){
            if(isset($new[$value]) && ($key-$new[$value])<=$k){
                return true;
            }else{
                $new[$value]= $key;
            }

        }
        return false;

    }
}

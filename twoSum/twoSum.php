<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/7
 * Time : 15:20
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $flipNums = array_flip($nums);
        foreach($nums as $key => $value){
            if (array_key_exists($target-$value, $flipNums) && $key != $flipNums[$target-$value]) {
                return [$key, $flipNums[$target-$value]];
            }
        }
        return [];

        // $datas=array();
        // if(count($nums) >0){
        //     $num =count($nums);
        //     for($i=0;$i< $num;$i++){
        //         for($j=$i+1;$j<$num;$j++){
        //                 if($nums[$i]+$nums[$j] == $target){
        //                     $datas=[$i,$j];
        //                     break 2;
        //                 }
        //          }
        //     }
        // }
        // return $datas;

        // $num = count($nums);
        // for ($i=0; $i<$num; $i++) {
        //     $tmp = $target - $nums[$i];
        //     $newnums = $nums;
        //     unset($newnums[$i]);
        //     $res = array_search($tmp, $newnums);
        //     if ($res !== false) {
        //         return array($i,$res);
        //         break;
        //     }
        // }

        // $flipNums = array_flip($nums);
        // foreach($nums as $key => $value ){
        //     if (array_key_exists($target-$value, $flipNums) && $key != $flipNums[$target-$value]) {
        //         return [$key, $flipNums[$target-$value]];
        //     }
        // }
        // return [];
    }
}
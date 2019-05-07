<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/7
 * Time : 18:27
 */
class Solution {

    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {
        $arr=array(2=>"abc",3=>'def',4=>'ghi',5=>'jkl',6=>'mno',7=>'pqrs',8=>'tuv',9=>'wxyz');
        if($digits==''){
            return array();
        }
        if(strlen($digits)==1){
            return str_split($arr[$digits]);
        }
        $first_arr=str_split($arr[$digits[0]]);
        $result=array();
        $this->showarr($first_arr,1,$digits,$result);
        return($result);


    }


    /**
     * @param $first_arr
     * @param $i
     * @param $digits
     * @param $result
     */
    public function showarr($first_arr, $i, $digits, &$result){
        $arr=array(2=>"abc",3=>'def',4=>'ghi',5=>'jkl',6=>'mno',7=>'pqrs',8=>'tuv',9=>'wxyz');
        $res_arr=array();
        $sub_arr =str_split($arr[$digits[$i]]);
        foreach($first_arr as $val){
            foreach($sub_arr as $v){
                $sub_str =$val.$v;
                $res_arr[] =$sub_str;
            }
        }
        if(strlen($res_arr[0])==strlen($digits)){
            $result=$res_arr;
        }else{
            // var_dump($res_arr);exit;
            $this->showarr($res_arr,$i+1,$digits,$result);
        }
    }
}
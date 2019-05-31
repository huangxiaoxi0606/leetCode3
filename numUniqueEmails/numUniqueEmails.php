<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/31
 * Time : 16:05
 */
class Solution {

    /**
     * @param String[] $emails
     * @return Integer
     */
    function numUniqueEmails($emails) {
        foreach($emails as $key=> $email){
            $email = explode('@', $email);
            $one = explode('+',str_replace('.','',$email[0]));
            $data[] = $one[0].'@'.$email[1];
        }
        return count(array_unique($data));
    }
}
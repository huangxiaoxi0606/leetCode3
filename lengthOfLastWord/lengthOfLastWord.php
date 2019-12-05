<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s)
    {
        $new = array_filter(explode(' ', $s));
        return strlen(end($new));
        // $count = strlen($s);
        // if ($count < 1) {
        //     return 0;
        // }
        // $len = 0;
        // for ($i = $count - 1; $i >= 0; $i--) {
        //     if ($s[$i] != ' ') {
        //         $len ++;
        //     } elseif ($s[$i] == ' ' && $len != 0) {
        //         break;
        //     }
        // }
        // return $len;

    }
}

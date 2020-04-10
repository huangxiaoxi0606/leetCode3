<?php
/**
 * Created by PhpStorm.
 * User: Hhx06
 * Date: 2020/4/10
 * Time: 17:15
 */
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $k
     * @return Integer
     */
    function kthToLast($head, $k) {
        $data = [$head->val];
        while($head->next){
            $data[] = $head->next->val;
            $head = $head->next;
        }
        return $data[count($data)-$k];
    }
}
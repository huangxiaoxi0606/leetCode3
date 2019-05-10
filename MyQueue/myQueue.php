<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/5/10
 * Time : 11:19
 */
class MyQueue {
    /**
     * Initialize your data structure here.
     */
    public $queue = array();
    public function __construct(){
    }

    /**
     * Push element x to the back of queue.
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        return array_push($this->queue,$x);
    }

    /**
     * Removes the element from in front of queue and returns that element.
     * @return Integer
     */
    function pop() {
        return array_shift($this->queue);
    }

    /**
     * Get the front element.
     * @return Integer
     */
    function peek() {
        return reset($this->queue);
    }

    /**
     * Returns whether the queue is empty.
     * @return Boolean
     */
    function empty() {
        return !count($this->queue);
    }
}

/**
 * Your MyQueue object will be instantiated and called as such:
 * $obj = MyQueue();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->peek();
 * $ret_4 = $obj->empty();
 */



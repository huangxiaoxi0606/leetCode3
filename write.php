<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/6/3
 * Time : 15:36
 */
<<<<<<< HEAD
$chinaName ='面试题 17.10. 主要元素';
$englishName = "majorityElement";
$no = '面试题 17.10';
=======
$chinaName ='面试题 16.11. 跳水板';
$englishName = "divingBoard";
$no = '面试题 16.11';
>>>>>>> feature/divingBoard
$str = $chinaName.'|'.$no.'|[' .$englishName.' url](https://github.com/huangxiaoxi0606/leetCode3/blob/master/'.$englishName.'/'.$englishName.'.php) | ['.$englishName.' url_test](https://github.com/huangxiaoxi0606/leetCode3/blob/master/'.$englishName.'/test.php)';
file_put_contents('./leetCode.md', PHP_EOL.$str, FILE_APPEND);

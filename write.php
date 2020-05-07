<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/6/3
 * Time : 15:36
 */

$chinaName ='面试题 05.07. 配对交换';
$englishName = "exchangeBits";
$no = '面试题 05.07';
$str = $chinaName.'|'.$no.'|[' .$englishName.' url](https://github.com/huangxiaoxi0606/leetCode3/blob/master/'.$englishName.'/'.$englishName.'.php) | ['.$englishName.' url_test](https://github.com/huangxiaoxi0606/leetCode3/blob/master/'.$englishName.'/test.php)';
file_put_contents('./leetCode.md', PHP_EOL.$str, FILE_APPEND);

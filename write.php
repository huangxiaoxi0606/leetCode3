<?php
/**
 * Created by PhpStorm
 * User : Hhx
 * Date : 2019/6/3
 * Time : 15:36
 */
$chinaName ='最长公共前缀';
$englishName = "longestCommonPrefix";
$no = 14;
$str = $chinaName.'|'.$no.'|[' .$englishName.' url](https://github.com/huangxiaoxi0606/leetCode3/blob/master/'.$englishName.'/'.$englishName.'.php) | ['.$englishName.' url_test](https://github.com/huangxiaoxi0606/leetCode3/blob/master/'.$englishName.'/test.php)';
file_put_contents('./leetCode.md', PHP_EOL.$str, FILE_APPEND);
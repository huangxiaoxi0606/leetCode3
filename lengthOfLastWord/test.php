<?php
include("lengthOfLastWord.php");

$s ="Hello World";
$lengthOfLastWord =new Solution();
echo json_encode($lengthOfLastWord->lengthOfLastWord($s));

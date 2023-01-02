<?php
error_reporting(0);
highlight_file(__FILE__);
$code = $_POST['code'];
$code = str_replace("(","括号",$code);
$code = str_replace(".","点",$code);
eval($code);
?>
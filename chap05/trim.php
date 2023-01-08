<?php
$str = "  こんにちは \t\r\n";
var_dump($str);
var_dump(trim($str));
var_dump(ltrim($str));
var_dump(rtrim($str));
$str2 = '!===== [独習PHP] =====!';
var_dump(trim($str2, "!= [] "));

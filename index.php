<!-- 文字列を扱ってみよう -->

<?php

// 文字列
// "" 特殊文字(\n \t) 変数
// ''

$name = 'taguchi';
$s1 = "hello $name \n hello again!";
$s2 = 'hello $name\nhello again!';
var_dump($s1);
var_dump($s2);
<!-- 定数を使ってみよう -->

<?php

// 定数：変更されない値につけるラベル
// define("定数名","値")
// 定数名は大文字
define("MY_EMAIL","taguchi@dotinstall.com");

echo MY_EMAIL;

var_dump(__LINE__); //現在の行数
var_dump(__FILE__); //ファイル名
var_dump(__DIR__); // ディレクトリ名
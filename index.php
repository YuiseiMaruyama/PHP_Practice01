<!--  外部ファイルを読み込んでみよう -->

<?php

// ファイルを読み込む命令
//require:  エラーが発生した場合、fetal errorを発生させてその場で処理を終了させる
//require_once: PHPが自動的にそのファイルが読み込まれているかチェック

require "User.class.php";

//include:  エラーが発生した場合、warningを発生させて処理を続行
//include_once: PHPが自動的にそのファイルが読み込まれているかチェック

//classにしか使用できない
//autoload: クラスが未定義の場合に自動的に実行される

spl_autoload_register(function($class){
    require $class . ".class.php";
});

$bob = new User("Bob");
$bob->sayHi();





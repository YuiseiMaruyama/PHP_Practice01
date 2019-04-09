<!--  ローカル変数を理解しよう -->


<!-- 関数 -->

<?php

$lang = "ruby";

function sayHi($name){
    $lang = "php";
    echo "hi! . $name from $lang";
};

sayHi("Tom");
var_dump($lang);//ruby

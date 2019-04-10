<?php
namespace Dotinstall\Lib;
//ファイルの先頭に記述することがルール
//他のクラス名と被らないようにする


class User{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function sayHi(){
        echo "hi, i am $this->name";
    }
}
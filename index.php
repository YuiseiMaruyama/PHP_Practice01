<!--  抽象クラスを使ってみよう -->

<?php

// 抽象クラス
// 継承が前提となるクラス
abstract class BaseUser{
    public $name;
    //実装する設計図のようなもので、この時点では中身を書く必要はない
    abstract public function sayHi();
}

// このクラスでsayHi()を実装
class User extends BaseUser{
    public function sayHi(){
        echo "hello from User!";
    }
}



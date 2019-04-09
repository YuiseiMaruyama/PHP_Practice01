<!--  クラスを継承してみよう -->

<?php

// クラスが持つ変数：プロパティ
// クラスが持つ関数：メソッド

class User{
    //property
    public $name;

    //constructor
    public function __construct($name){
        $this->name = $name;
    }
    //method
    //finalは継承先に上書きされないようにする
    final public function sayHi(){
        echo "hi, i am $this->name!";
    }
}

class AdminUser extends User{
    public function sayHello(){
        echo "hello from Admin";
    }
    //override : 上書き
    public function sayHi(){
        echo "[admin] hi, i am $this->name!";
    }
}

$tom = new User("Tom");
$steve = new AdminUser("Steve");
// echo $steve->name; //Steve
$tom->sayHi();
$steve->sayHi(); // hi i am Steve
// $steve->sayHello();


<!--  アクセス権について理解しよう -->

<?php

// アクセス権
// - private : そのクラスからのみアクセス可能
// - protected : そのクラス+親子クラスからのみアクセス可能
// - public  : どこからでもアクセス可能

class User{
    //property
    // public $name;
    // private $name;
    protected $name;//Userでは使いたくないが、AdminUserで使いたい


    //constructor
    public function __construct($name){
        $this->name = $name;
    }
    //method
    //finalは継承先に上書きされないようにする
    public function sayHi(){
        echo "hi, i am $this->name!";
    }
}

class AdminUser extends User{
    public function sayHello(){
        echo "hello from $this->name";
    }
}

$tom = new User("Tom");
// echo $tom->name;

$steve = new AdminUser("Steve");
$steve -> sayHello();



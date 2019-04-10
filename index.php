<!--  staticキーワードを使ってみよう -->

<?php

// static : インスタンス化させずに定義する

class User{
    public $name;
    public static $count = 0;

    //constructor
    public function __construct($name){
        $this->name = $name;
        //同じクラス内でクラス名を使う時には self が使える
        //self = User
        self::$count++;
    }
    //method
    public function sayHi(){
        echo "hi, i am $this->name!";
    }
    //インスタンスを作らないので引数　$nameなどは使えない
    public static function getMessage(){
        echo "hello from User class!";
    }
}
    
//static にアクセスするには :: をつける
// User::getMessage();

$tom = new User("Tom");
$bob = new User("Bob");

echo User::$count;//2

// echo $tom->name;

// $steve = new AdminUser("Steve");
// $steve -> sayHello();



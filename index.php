<!--  インターフェースを使ってみよう -->

<!-- 抽象クラス内では抽象メソッド以外のメソッドとかプロパティの実装ができる
インターフェース内ではできない

抽象クラスは1つしか継承できない
インターフェースは複数実装できる -->



<?php

// interface
// クラス内で指定したメソッドを実装しろと説明するもの
// アクセス権はpublic
interface sayHi{
    public function sayHi();
}

interface sayHello{
    public function sayHello();
}


// このクラスでinterfaceを実装
class User implements sayHi,sayHello{
    public function sayHi(){
        echo "hi!";
    }
    public function sayHello(){
        echo "hello!";
    }
}



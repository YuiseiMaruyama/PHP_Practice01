<!--  セッションを使ってみよう -->
<?php

//cookieは気軽に使える一方、ブラウザ側にデータを保存するので改ざんされる可能性がある
//セッションはサーバー側にデータを保存するので大容量のデータを保存できる、改ざんされない


// session
//サーバー側

session_start();

// $_SESSION['username'] = 'taguchi';

// echo $_SESSION['username'];

// unset($_SESSION['username']);

echo $_SESSION['username'];
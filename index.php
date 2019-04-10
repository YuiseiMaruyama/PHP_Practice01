<!--  Cookieを使ってみよう -->
<?php
//cookie : ブラウザにデータが保存される

// setcookie("username","taguchi");
// setcookie("username","taguchi",time()+60*60);//第3引数で有効期限を指定

//cookieの削除
// setcookie("username","taguchi",time()-60*60);

echo $_COOKIE['username'];



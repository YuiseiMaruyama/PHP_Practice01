<!-- for文でループ処理をしてみよう -->

<?php

// ループ処理
// for
// break : ループを抜ける
// continue : それ以降の処理をせずに次のループに移る

// $i = 100;
//後判定なので、falseならば実行されない
// while ($i < 10){
//     echo $i;
//     $i++;
// }

for($i = 0; $i < 10; $i++){
    if($i === 5){
        // break;
        continue;
    }
    echo $i;
}
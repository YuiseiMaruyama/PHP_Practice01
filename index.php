<!--  便利な組み込み関数を使ってみよう -->

<!-- 関数 -->

<?php

// $x = 5.6;
//ceil() : 小数点以下を切り上げる
// echo ceil($x);//6
// floor() : 小数点以下を切り捨てる
// echo floor($x);//5
// round() : 四捨五入
// echo round($x);//6
// rand() : 乱数生成
// echo rand(1,10);//1-10

// $s1 = "hello";
// $s2 = "ねこ";
// echo strlen($s1);//5
// echo mb_strlen($s2);//2
//$s1はstring型なので%s、$xはfloor型なので%f
// printf("%s - %s - %.3f",$s1,$s2,$x);

$colors = ["red","blue","yellow"];
//配列の要素をカウント
echo count($colors);//3
//配列の要素を指定した区切り文字で連結
echo implode("@",$colors);
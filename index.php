<!--  例外処理をしてみよう -->

<?php

//名前空間

// function div($a, $b){
//     echo $a / $b;
// }

function div($a, $b){
    try{
        if($b === 0){
            throw new Exception("cannot divide by 0!");
        }
        echo $a / $b;
    }catch (Exception $e){
        echo $e->getMessage();
    }
}

div(7,2);
div(5,0);





<!-- foreachを使ってみよう -->

<?php

// 配列
// foreach


$colors = ["red","blue","pink"];

// foreach ($colors as $key => $value) {
//     echo  "$value ";
// }

// foreach if while for コロン構文
foreach ($colors as $key => $value) :
    echo  "$value ";
endforeach;

?>
<ul>
<?php foreach ($colors as $key => $value) : ?>
<li><?php echo  "$value "; ?></li>
<?php endforeach; ?>
</ul>



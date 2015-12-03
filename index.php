<?php
echo '统计访问量</br>';
$n=file_get_contents('numbers.txt');
if(!$n){
    $n=0;
}
$n++;
file_put_contents('numbers.txt',$n);
echo "你是第".$n."个访问者";
?>


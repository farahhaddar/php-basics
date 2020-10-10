<?php
$num="12345";
$sum=0;
for( $i=0;$i<=strlen($num);$i++){
    $sum=$sum+$num[$i];
}
echo "$sum";
?>
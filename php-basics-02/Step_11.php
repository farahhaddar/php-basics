<?php 
function isPrime($n){
if($n%1==0 && $n%$n==0 && $n%2!==0){
    echo "$n is a prime nb";
}else{
    echo "$n is not a prime nb";
}

}

echo (isPrime(47));





?>
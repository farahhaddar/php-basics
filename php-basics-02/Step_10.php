<?php 
function palindrome($string){
if (strcmp($string,strrev($string))==0){
    return 1;

}else{
return 0;}}

$result= palindrome("hello");
echo "$result";


?>
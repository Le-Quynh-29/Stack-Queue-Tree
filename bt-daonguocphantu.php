<?php
$arr = array(9,1,4,7,67,0);
$stack =  new SplStack();
$newArr = array();
for($i =0;$i<count($arr);$i++){
    $stack->push($arr[$i]);
}
//echo "<pre>";
//print_r($stack);
for ($i=0;$i<count($arr);$i++){
    array_push($newArr,$stack->pop());
}
echo "<pre>";
print_r($newArr);
echo "</pre>";
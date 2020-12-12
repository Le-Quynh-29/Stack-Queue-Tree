<?php
include_once ("Stack.php");
$stack = new Stack();
$stack->push("1");
$stack->push("2");
$stack->push("3");
$stack->push("4");
$stack->push("abc");

$stack->pop();
$stack->pop();
$stack->pop();

$stack->push("6");
$stack->push("7");

$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();

echo $stack->isEmpty();
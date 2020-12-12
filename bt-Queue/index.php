<?php
include_once ("Queue.php");
$queue = new Queue();
$queue->enqueue("1");
$queue->enqueue("2");
$queue->enqueue("3");
$queue->dequeue();
$queue->dequeue();
$queue->dequeue();
var_dump($queue->isEmpty());
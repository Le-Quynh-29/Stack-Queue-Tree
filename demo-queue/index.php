<?php
include_once ("Queue.php");
$queue = new Queue();
$queue->enqueue("Start");
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue("end");
while (!$queue->isEmpty()) {
    echo $queue->dequeue()."\n";
}
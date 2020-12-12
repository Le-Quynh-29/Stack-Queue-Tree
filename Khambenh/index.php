<?php
include_once ("Queue.php");
$queue = new Queue();
$queue->enqueue("Brown");
$queue->enqueue("Ingram");
$queue->enqueue("Jones");
$queue->enqueue("Smith");
$queue->enqueue("Fehrenbach");
$queue->toString();
echo $queue->dequeue();
$queue->toString();
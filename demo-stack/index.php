<?php
include_once ("ReadingList.php");
$myBooks = new ReadingList();
$myBooks->push("A Dream of Spring");
//echo $myBooks->top();
$myBooks->push("bavscsdh");
echo $myBooks->pop();
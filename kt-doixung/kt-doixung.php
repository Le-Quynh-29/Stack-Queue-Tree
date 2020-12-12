<?php
$stack = new SplStack();
$queue = new SplQueue();
$str  = " able was I ere I saw elba";
$arr = [];
for ($i = 0; $i < strlen($str); $i++) {
    $arr[] = $str[$i];
}

foreach ($arr as $value) {
    $stack->push($value);
    $queue->enqueue($value);
}
$cp2 = [];
while (!$queue->isEmpty()) {
    $cp2[] = $queue->dequeue();
}
$cp1 = [];
for($i =0; $i<count($cp2);$i++){
    $cp1[] = $stack->pop();
}
$cp1 = array_reverse($cp1);
for($i =0;$i < count($cp2);$i++) {
    if ($cp1[$i]==$cp2[$i]){
        echo "Doi xung"."<br/>";
    }
    else{
        echo "khong doi xung"."<br/>";
            break;
    }
}


print("<pre>" . print_r($cp1, true) . "</pre>");
print("<pre>" . print_r($cp2, true) . "</pre>");die();

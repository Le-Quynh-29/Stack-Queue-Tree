<form method="post">
    <input type="text" name="number">
    <input type="submit" value="Submit">
</form>
<?php

include_once "stack.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = $_POST["number"];
$stack = new ReadingList();
while (($results = $number / 2) && $results > 1) {
    $remainder = $number % 2;
    $number = $results;
    $stack->push($remainder);
    if ($results > 0 && $results < 2)
    {
        $stack->push(1);
        break;
    }
}



print("<pre>" . print_r($stack, true) . "</pre>");


echo implode( $stack->getStack());
}

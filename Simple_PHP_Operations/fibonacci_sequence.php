<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Fibonacci Sequence</h2>
<form>
    N: <input type="text" name="num">
    <input type="submit" value="Print Fibonacci">
</form>
<h2>Tribonacci Sequence</h2>
<form>
    N: <input type="text" name="num2">
    <input type="submit" value="Print Tribonacci">
</form>
<?php
if (isset($_GET['num'])){
    $num = intval($_GET['num']);
    $fib_2 = 1;  // two fibonacci numbers before the current one in the sequence
    $fib_1 = 1;  //one before

    for ($i = 0; $i < $num; $i++) {
        if ($i < 2){
            echo 1 . ' ';
        } else {
            $currentFib = $fib_1 + $fib_2;
            $fib_2 = $fib_1;
            $fib_1 = $currentFib;

            echo $currentFib . ' ';
        }
    }
}

if (isset($_GET['num2'])){
    $num2 = intval($_GET['num2']);

    $trib_3 = 0; // 3 numbers before the current in the sequence
    $trib_2 = 1;
    $trib_1 = 1;

    for ($i = 0; $i < $num2; $i++) {
        if ($i < 2){
            echo 1 . ' ';
        } else {
            $currentTrib = $trib_1 + $trib_2 + $trib_3;

            $trib_3 = $trib_2;
            $trib_2 = $trib_1;
            $trib_1 = $currentTrib;

            echo $currentTrib . ' ';
        }
    }

}
?>

</body>
</html>
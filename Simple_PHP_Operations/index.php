<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SimplePHP</title>
</head>
<body>

<form>
    N: <input type="text" name="num" />
    M: <input type="text" name="num2" />
    Y: <input type="text" name="num3" />
    <input type="submit" value="Result">
</form>
<?php
    if (isset($_GET['num']) && isset($_GET['num2']) && isset($_GET['num3'])){
        $n = intval($_GET['num']);
        $m = intval($_GET['num2']);
        $y = intval($_GET['num3']);
        $isPositive = false;
        $count = 0;

        $nums = [$n, $m, $y];

        foreach ($nums as $num){
            if ($num == 0){
                $isPositive = true;
                echo "There is 0 <br>";
                break;
            } elseif ($num < 0){
                $count++;
            } else {
                continue;
            }
        }

        if ($isPositive || $count % 2 == 0){
            echo "Positive :)";
        } else   {
            echo "Negative :(";
        }
    }


?>
</body>
</html>
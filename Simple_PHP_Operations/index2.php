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
<form>
    From 1 to N: <input type="number" name="toNum">
    <input type="submit" value="Calculate">
    <br>
    From N to 1: <input type="number" name="fromNum">
    <br>
    N!: <input type="number" name="factorial">

</form>
<form>
    N: <input type="text" name="num"/>
    N2: <input type="text" name="num2"/>
    <input type="submit" value="Go">
    <br>
</form>
<?php
if (isset($_GET['toNum'])) {
    $number = $_GET['toNum'];

    for ($i = 1; $i <= $number; $i++) {
        echo $i . '<br>';
    }
}
if (isset($_GET['fromNum'])) {
    $fromNumber = $_GET['fromNum'];

    for ($i = $fromNumber; $i >= 1; $i--) {
        echo $i . '<br>';
    }
}
if (isset($_GET['factorial'])) {
    $reulst = 1;
    $factN = $_GET['factorial'];

    while ($factN > 1) {

        $reulst *= $factN;
        $factN--;
    }
    echo $reulst;
} ?>
<p>Not divisors:</p>
<?php
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);

    for ($i = $num; $i > 0; $i--) {
        if ($num % $i != 0) {
            echo $i . ' ';
        }
    } ?>
    <!--            <p>Buttons</p>-->
    <?php
    for ($i = 1; $i <= $num; $i++) { ?>
        <button><?= $i ?></button>
    <?php }
}
?>
</body>
</html>
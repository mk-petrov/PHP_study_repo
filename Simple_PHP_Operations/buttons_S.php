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
<?php
$buttons = [
    [1, 1, 1, 1, 1],
    [1, 0, 0, 0, 0],
    [1, 0, 0, 0, 0],
    [1, 0, 0, 0, 0],
    [1, 1, 1, 1, 1],
    [0, 0, 0, 0, 1],
    [0, 0, 0, 0, 1],
    [0, 0, 0, 0, 1],
    [1, 1, 1, 1, 1],
];

for ($row = 0; $row < 9; $row++) {
    for ($col = 0; $col < 5; $col++) {
        $currentElement = $buttons[$row][$col];

        if ($currentElement == 1){
            echo "<button style='background-color: #52aaff;'>$currentElement</button>";
        } else {
            echo "<button>$currentElement</button>";
        }
    }
    echo "<br>";
}
?>
</body>
</html>
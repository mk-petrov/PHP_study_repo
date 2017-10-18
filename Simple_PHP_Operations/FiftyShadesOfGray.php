<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fifty Shades of Gray</title>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;
        }
    </style>

</head>
<body>
<?php
$shade = 0;
for ($row = 0; $row < 5; $row++, $shade++) {
    for ($col = 0; $col < 10; $col++) {
        echo "<div style=\"background-color: rgb($shade, $shade, $shade);\"></div>";
        $shade += 5;
    }
    echo "<br>";
}
?>
</body>
</html>
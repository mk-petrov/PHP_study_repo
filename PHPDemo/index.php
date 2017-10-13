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
<h1>PHP basic syntax:</h1>
    <?php
    //array
    $names = array('Filo', 'Sasho', 'Gosho');

    //for-loop
    for ($i = 0; $i < count($names); $i ++){
        echo "$names[$i].<br>";
    }
    //foreach-loop
    foreach ($names as $name){
        echo "$name <br />";
    }


    //Associative array:
       $ages = array('Ivan' => 10, 'Stoqn' => 18, 'Kiro' => 24);
       $ages['Simon'] = 45;   // adding new kvp
       $ages['Ivan'] = 23;    // changing existing kvp


       foreach ($ages as $key => $value){
           echo $key . " ";
           echo $value. "<br />";
       }
       echo $ages['Ivan'];
    //parsing int and float
    $_num = "123.25";  //to be float only point works!
    $number = intval($_num);
    $floatNumber = floatval($_num);

    echo "$_num <br />";
    echo "$number <br />";
    echo "$floatNumber <br />";
    ?>

    <h3>Types of value</h3>

    <?php
    echo var_dump($_num) . '<br />';
    var_dump($number);
    echo "var_dump($floatNumber) <br />";

    $towns = array('Plovdiv', 'Burgas', 'Sofia' );
    if (isset($towns[2])){
        echo $towns[2];
    }

    //string.Join()
    $towns2 = ['Hamburg', 'Vien', 'London'];
    echo implode(", ", $towns2);

    //Split()
    $text = 'Sofia, Burgas, Varna';
    $towns = explode(', ', $text);
    echo $text . '<br />';
    echo implode("@", $towns);


    $towns = "";    // to prevent if the form is empty, because is called in the form below
    if (isset($_GET['towns'])){           //if info comes
        $towns = explode("\n", $_GET['towns']);  //split by \n to array !double quotes here are!
        $towns = array_map('trim', $towns); // trim the elements in collection
        sort($towns, SORT_STRING);  // sort strings alphabetically
        $towns = implode("\n", $towns); // from collection to string
    }

    ?>
    <form>
        <textarea name="towns" cols="30" rows="10"><?= $towns ?></textarea>
        <br />
        <input type="submit" value="Sort"/>
    </form>
</body>
</html>
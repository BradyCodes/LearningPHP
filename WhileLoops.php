<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
        //While Loops
        $x = 0;
        while($x<5){
            echo "Ayooooo <br/>";
            $x++;
        };
        echo "<br/> <br/>";
        //For Loops
        // starting num|num to | Add/Sub
        for ($x = 0; $x <= 10; $x++) {
            echo "The number is: $x <br>";
        };
        echo "<br>";
        echo "For Each Loops: ";
        echo "<br><br>";
        $array = array("Brady", "Jane", "Jacob");
        //For Each Loops
        foreach($array as $loopdata){
            echo "My name is ".$loopdata."<br>";
        }
    ?>

</body>
</html>
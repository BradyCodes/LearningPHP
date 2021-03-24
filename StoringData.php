<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storing Data</title>
</head>
<body>
    
    <?php
        $array = array("Brady", "Jane", "Jacob");
        for ($i=0; $i <= count($array); $i++){
            echo $array[$i]."<br/>";
        }
    ?>
</body>
</html>
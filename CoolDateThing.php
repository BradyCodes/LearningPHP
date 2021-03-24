<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encouragment!</title>
</head>
<body>

<style>
    p{
        text-align: center;
        font-size: 120px;
        font-family: Arial;
        margin-top: 38vh;
    }
</style>

<?php
    $dayofweek = date('w');
    switch ($dayofweek){
        case 1:
            echo "Happy Monday!";
            break;
        case 2:
            echo "<p>Happy Tuesday</p>";
            break;
        case 3:
            echo "Happy Wednesday";
            break;
        case 4: 
            echo "Happy Thursday! Almost Done!!!";
            break;
        case 5:
            echo "YES! Last day of the work week!";
            break;
    }
?>

</body>
</html>
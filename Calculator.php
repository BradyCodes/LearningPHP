<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YAY PHP!</title>
</head>
<body>
        <form>
            <input type="text" name="num1" placeholder="Input 1">
            <input type="text" name="num2" placeholder="Input 2">
            <select name="operator" >
                <option>None</option>
                <option>Add</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Divide</option>
            </select>
            <button type="submit" name="submit" value="submit">Calculate</button>
        </form>
        <p>Your Answer is: </p>        


<?php
    if (isset($_GET['submit'])){
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];

        switch ($operator){
            case "None":
                echo "Please Select an Operator";
                break;
            case "Add":
                echo $result1 + $result2;
                break;
            case "Subtract":
                echo $result1 - $result2;
                break;
            case "Multiply":
                echo $result1 * $result2;
                break;
            case "Divide":
                echo $result1 / $result2;
                break;
        };
    };
?>

</body>
</html>
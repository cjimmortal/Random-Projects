<?php
    include 'classes/class.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">SIMPLE CALCULATOR USING OOP</h1>
    <form action="actions/calc.act.php" method="post" style="text-align: center;">
        <label>Enter Number 1</label>
        <input type="number" name="num1" required>
        <br><br>
        <label>Choose Operation</label>
        <select name="operator">
            <option value ="+">Addition</option>
            <option value ="*">Multiplication</option>
            <option value ="-">Subtraction</option>
            <option value ="/">Division</option>
        </select>
        <br><br>
        <label>Enter Number 1</label>
        <input type="number" name="num2" required>
        <br><br>
        <input type="submit" value="submit"></input>
    </form>
</body>
</html>
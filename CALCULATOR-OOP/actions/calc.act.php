<?php
    include '../classes/class.php';

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    $entry1 = new calculator((int)$num1,(int)$num2,(string)$operator);

    echo $entry1->calculate();



?>
<?php

isset($_POST['num1']) ? $num1 = $_POST['num1'] : $num1 = "";
isset($_POST['num2']) ? $num2 = $_POST['num2'] : $num2 = "";

$res = $num1 + $num2;

echo '[{"res" : "' . $res . '"}]';



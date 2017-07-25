<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Calculator</title>
</head>
<body>
<?php
include('libs/Calc.php');
?>
<?php
$calc = new Calc();

$calc->setNum1(20);
$calc->setNum2(8);

include('templates/temp_calc.php');

?>
</body>
</html>


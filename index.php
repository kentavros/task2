<?php
include('libs/config.php');
include('libs/function.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && ((!empty($_POST['num1'])) && (!empty($_POST['num2']))))
{
    $calc = new Calc();
    $calc->setNum1($_POST['num1']);
    $calc->setNum2($_POST['num2']);
    //Get minus result
    $minusResult = $calc->minus();
    //Get devide result
    $devideResult = $calc->devide();
    //Get Sqrt result
    $sqrtResult = $calc->sqrt();
    //Get percent result
    $percentResult = $calc->percent();
    //Save value
    $save = 400;
    $calc->setMS($save);
    $add = 150;
    $minusM =200;

}

include('templates/temp_calc.php');
?>



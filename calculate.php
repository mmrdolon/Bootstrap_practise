<?php
session_start();

function add($number1,$number2)
{
    $data = array();
    $data['result'] = $number1 + $number2;
    return $data;
}

function subtraction($number1,$number2)
{
    $data = array();
    $data['result']  = $number1 - $number2;
    return $data;
}

function multiply($number1,$number2)
{
    $data = array();
    $data['result']  = $number1 * $number2;
    return $data;
}

function division($number1,$number2)
{
    $data = array();
    $data['result'] = $number1 / $number2;
    return $data;
}


if(isset($_POST['calculate']))
{
    $Operator = $_POST['operator'];
    if($Operator == 'add')
    {
        $number1 = $_POST['first_number'];
        $number2 = $_POST['second_number'];
        $data = add($number1,$number2);
    }

    if($Operator == 'subtract')
    {
        $number1 = $_POST['first_number'];
        $number2 = $_POST['second_number'];
        if($number1<$number2)
        {
            $_SESSION['subtraction_error'] = "First Number Should Be Greater Than Second Number";
        }

        $data = subtraction($number1,$number2);


    }

    if($Operator == 'multiply')
    {
        $number1 = $_POST['first_number'];
        $number2 = $_POST['second_number'];
        $data = multiply($number1,$number2);
    }

    if($Operator == 'divide')
    {
        $number1 = $_POST['first_number'];
        $number2 = $_POST['second_number'];

            if($number2 == 0)
            {

                $_SESSION['division_error'] = "Can Not Divided By Zero";
            }
        $data = division($number1,$number2);
    }

}

  $_SESSION['result']= $data['result'];

   // echo $data['result'];

header('location:calculator.php');
?>
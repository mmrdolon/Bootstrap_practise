<?php
$Fname = $_POST['first_name'];
$Lname = $_POST['last_name'];
$Email = $_POST['u_email'];
$Password = $_POST['password'];
$Birth_day = $_POST['dob_year'].'-'.$_POST['dob_month'].'-'.$_POST['dob_day'];
$Gender = $_POST['sex'];
$City = $_POST['city'];
$Comment = $_POST['comment'];

if((array_key_exists('hobby_reading',$_POST)&& !empty($_POST['hobby_reading'])))
{
    $Hobby .= $_POST['hobby_reading'].',';
}
if((array_key_exists('hobby_playing',$_POST)&& !empty($_POST['hobby_playing'])))
{
    $Hobby .= $_POST['hobby_playing'].',';
}
if((array_key_exists('hobby_gardening',$_POST)&& !empty($_POST['hobby_gardening'])))
{
    $Hobby .= $_POST['hobby_gardening'].',';
}
if((array_key_exists('hobby_travelling',$_POST)&& !empty($_POST['hobby_travelling'])))
{
    $Hobby .= $_POST['hobby_travelling'].',';
}
$Hobby = rtrim($Hobby, ',');
//$Hobby = substr($Hobby,0,-1);
//echo $Hobby;


//$city = $_POST['city'];
$City = implode(",",$City);

$Created = $_POST['created_date'];
$Modified = $_POST['modified_date'];


$link = mysqli_connect("localhost",
    "root",
    "",
    "personal_website");
$query = "UPDATE `personal_website`.`user` SET `first_name` = '".$Fname."',`last_name` = '".$Lname."',
`u_email` = '".$Email."',`password` = '".$Password."',`birth_day` = '".$Birthday."',`hobby` = '".$Hobby."' , `sex` = '".$Gender."',
        `city` = '".$City."', `comment` = '".$Comment."',
`modified_date` = NOW() WHERE `user`.`id` = $id;";
mysqli_query($link, $query);
header('location:list1.php');
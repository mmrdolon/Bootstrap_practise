
<?php
//print_r($_POST);
$Fname = $_POST['first_name'];
$Lname = $_POST['last_name'];
$Email = $_POST['u_email'];
$Password = $_POST['password'];
$Birth_day = $_POST['dob_year'].'-'.$_POST['dob_month'].'-'.$_POST['dob_day'];

$Gender = $_POST['sex'];
$City = $_POST['city'];
$Comment = $_POST['comment'];
$Created = $_POST['created_date'];
$Modified = $_POST['modified_date'];



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


//echo $birth_day;

$link = mysqli_connect("localhost",
    "root",
    "",
    "personal_website") or die('cannot connect');
$query = "INSERT INTO `personal_website`.`user` (`id`,
`first_name`,`last_name`,`u_email`,`password`,`birth_day`,`hobby`,`sex`,`city`,`comment`,`created_date`,`modified_date`)
VALUES (NULL ,'$Fname', '$Lname','$Email','$Password','$Birth_day','$Hobby','$Gender','$City','$Comment',NOW(),'')";
//echo $query;
mysqli_query($link, $query);
header('location:list1.php');

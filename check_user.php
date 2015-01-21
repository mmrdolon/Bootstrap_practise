<?php
session_start();
//print_r($_SERVER['REQUEST_METHOD']);
//$Username = $_POST['user_name'];
//$Password = $_POST['password'];

// $_SESSION['loggedin']= true;


//$GET ='' ;

$_SESSION['u_email'] = 'u_email';
$_SESSION['password'] = 'password';

if(($_SERVER['REQUEST_METHOD']== 'GET'))
{
    header('location:index.php');
}

// $_SESSION['loggedin'] = true;
else {
    $_SESSION['u_email'] = 'u_email';
    $_SESSION['password'] = 'password';


}
if((empty($_POST['u_email']))&& empty($_POST['password']))
{
    $_SESSION["message"] = "Please Fill Up the User Name & Password Requirements";
    header('location:login.php');

}


else{
    header('location:dashboard.php');
}


if(isset($_POST['u_email']) && !empty($_POST['u_email']))
{
    //$_SESSION["message"]= "Please Fill Up the User Name & Password Requirements";

    header('location:dashboard.php');
}

else {

    header('location:login.php');
    $_SESSION["message"] = "Please Fill Up the User Name & Password Requirements";

}
if(isset($_POST['password']) && !empty($_POST['password']))
{
    //$_SESSION["message"]= "Please Fill Up the User Name & Password Requirements";

    header('location:dashboard.php');
}

else
{
    header('location:login.php');
    $_SESSION["message"] = "Please Fill Up the User Name & Password Requirements";

}

if((empty($_POST['u_email']))|| empty($_POST['password']))
{
    $_SESSION["message"] = "Please Fill Up the User Name & Password Requirements";
    header('location:login.php');

}


$link = mysqli_connect("localhost","root","","personal_website");


$query= "select * from user where user_name = $Username AND password = $Password;";

mysqli_query($link, $query);
$result = mysqli_query($link, $query);


$row = mysqli_fetch_assoc($result);

$User_name = $_SESSION['u_email'];
$Password = $_SESSION['password'];

if(($row['u_email']== $User_name) && ($row['password']== $Password))
{
    header('location:index.html');

}


else
    $_SESSION["message"] = "Please Fill Up the User Name & Password Correctly";

/* $_SESSION["message"] = "Please Fill Up the User Name & Password Requirements";

if($row) {
    //(SEND Data to the SESSION and GO to The Dashboard)
    $_SESSION['u_email'] == $row['u_email'];
    $_SESSION['password'] == $row['password'];

    header('location:index.html');


}
*-/
else{
    header('location:login.php');
}
?>

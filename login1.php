<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>
<?php include_once('header.php')?>
<div class="main">
    <div class="container">
        <div class="row">

            <div class="col-md-3">

            </div>

            <div class="col-md-8">
                <ul class="nav nav-tabs">
                    <li role="presentation" ><a href="home.html">Home</a></li>
                    <li role="presentation"><a href="about_me.php">About Me</a></li>
                    <li role="presentation"><a href="photo_gallery.php">Gallery</a></li>
                    <li role="presentation"><a href="registration.php">Registration</a></li>
                    <li role="presentation"><a href="contact_me.php">Contact Me</a></li>
                    <li role="presentation" class="active"><a href="#">Login</a></li>
                    <li role="presentation"><a href="portfolio.php">Portfolio</a></li>

                </ul>
            </div>

            <div class="col-md-1">

            </div>
        </div>

    </div>
    <br><br>

    <!---Write Your Content Here----------->
 <div class="container">
     <div class="row">
         <div class="col-md-3"></div>
         <div class="col-md-9">

             <form class="form-horizontal" role="form">
                 <div class="form-group">
                     <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                     <div class="col-sm-5">
                         <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                     <div class="col-sm-5">
                         <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-sm-offset-2 col-sm-10">
                         <div class="checkbox">
                             <label>
                                 <input type="checkbox"> Remember me
                             </label>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-offset-2 col-sm-10">
                 <a href="#">Forgot Your PAssword?</a>
                     </div>
                 <div class="form-group">
                     <div class="col-sm-offset-2 col-sm-10">
                         <button type="submit" class="btn btn-default">Sign in</button>
                     </div>
                 </div>
             </form>


         </div>

     </div>
 </div>
</div>
<?php include_once('footer.php')?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
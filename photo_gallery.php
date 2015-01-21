<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Photo Gallery</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/gallery_style.css">


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
                    <li role="presentation"><a href="home.html">Home</a></li>
                    <li role="presentation"><a href="about_me.php">About Me</a></li>
                    <li role="presentation" class="active"><a href="photo_gallery.html">Gallery</a></li>
                    <li role="presentation"><a href="registration.php">Registration</a></li>
                    <li role="presentation"><a href="contact_me.php">Contact Me</a></li>
                    <li role="presentation"><a href="login.php">Login</a></li>
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
            <div class="col-md-3">
                <button type="button" class="btn btn-success">Photos &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<span class="glyphicon glyphicon-picture"></span></button><br><br>
                <button type="button" class="btn btn-success">Albums &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<span class="glyphicon glyphicon-folder-open"></span></button><br><br>
                <button type="button" class="btn btn-success"> Photos &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<span class="glyphicon glyphicon-plus-sign"></span></button><br><br>
                <button type="button" class="btn btn-success"> Videos  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<span class="glyphicon glyphicon-forward"></span></button><br><br>
                <button type="button" class="btn btn-success">Like Photos &nbsp; &nbsp;<span class="glyphicon glyphicon-thumbs-up"></span></button><br><br>
                <button type="button" class="btn btn-success">Like Albums  &nbsp; &nbsp;<span class="glyphicon glyphicon-thumbs-up"></span></button><br><br>

<br><br><br><br><br>
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item"
                            src="//www.youtube.com/embed/JFXce9mTKRY?feature=player_detailpage" width="50"  height="50" frameborder="0" ></iframe>"
                </div>

            </div>


            <div class="col-md-9">

                <h3 id="about" class="text-primary"><i>Gallery:</i></h3><br>
                <hr>
                <div id="banner">
                    <img src="image/1.jpg" alt="" />
                    <img src="image/2.jpg" alt="" />
                    <img src="image/3.jpg" alt="" />
                    <img src="image/4.jpg" alt="" />
                    <img src="image/5.jpg" alt="" />
                    <img src="image/6.jpg" alt="" />
                    <img src="image/7.jpg" alt="" />
                    <img src="image/8.jpg" alt="" />
                    <img src="image/9.jpg" alt="" />
                    <img src="image/10.jpg" alt="" />
                </div>


                    <h3 class="text-danger"><i>Photos!!!</i></h3>
                    <hr>
                    <h3>&nbsp;&nbsp;&nbsp;Some photos of Dolon....!!!!</h3>


                <img  src="image/red_sky.jpg" alt="..." class="img-rounded">
                <img src="image/index.jpg" alt="..." class="img-circle">

                <img src="image/yellow.jpg" alt="..." class="img-circle">
                <img src="image/10.jpg" alt="..." class="img-rounded">
                <img src="image/bulb.jpg" alt="..." class="img-circle">
                <img src="image/sun.jpg" alt="..." class="img-thumbnail">
                <img src="image/river.jpg" alt="..." class="img-circle">
                <img src="image/road.jpg" alt="..." class="img-thumbnail">
                <img src="image/shower.jpg" alt="..." class="img-circle">
            </div>

            </div>
        <br><br>
        </div>
    </div>



</div>
<?php include_once('footer.php')?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-1.11.0.js" ></script>
<script type="text/javascript" src="carouFredSel_6.2.1.js" ></script>
<script type="text/javascript" src="js.js" ></script>

</body>
</html>
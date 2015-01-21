<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Portfolio</title>
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
                    <li role="presentation"><a href="#">Home</a></li>
                    <li role="presentation"><a href="about_me.php">About Me</a></li>
                    <li role="presentation"><a href="photo_gallery.php">Gallery</a></li>
                    <li role="presentation"><a href="registration.php">Registration</a></li>
                    <li role="presentation"><a href="contact_me.php">Contact</a></li>
                    <li role="presentation"><a href="login.php">Log In</a></li>
                    <li role="presentation"  class="active"><a href="portfolio.php">Portfolio</a></li>

                </ul>
            </div>

            <br>

            <div class="col-md-1">

            </div>
        </div>

    </div>

    <br>
    <!---Write Your Content Here----------->
   <div class="container">
       <div class="row">
           <div class="col-md-3">

               <ul class="nav nav-pills nav-stacked">
                   <li><a href="#experience">Experience</a></li>
                   <li><a href="#background">LEADERSHIP</a></li>
                   <li><a href="#activities">Activities</a></li>
                   <li><a href="#">Mission</a></li>
                   <li><a href="#">My Goal</a></li>

               </ul>

           </div>
           <div class="col-md-9">
               <center><img src="image/dolon.jpg" height="200px" width="200px"></center>
               <br>


               <h3 class="text-primary" id="experience"><i><kbd>Experience</kbd></i></h3>
               <hr>
               <ul class="list-inline">
                   <li><b>Ann Taylor, Orlando, FL</b></li>
                   <li><b>Office Assistant</b></li>
                   <li><b>January 2009 – Present</b></li>
               </ul>

               <br>

               <ul class="list-inline">
                   <li><b>Office of Community Service, Gainesville, FL</b></li>
                   <li><b>Client Associate</b></li>
                   <li><b>May 2008 – December 2008</b></li>
               </ul>


               <br>

               <ul class="list-inline">
                   <li><b>Office Depot, Orlando, FL</b></li>
                   <li><b>Assistant</b></li>
                   <li><b>May 2007 – December 2007</b></li>
               </ul>

               <br>

               <h3 class="text-primary"><i><kbd>LEADERSHIP:</kbd></i></h3>
               <hr>

               <dl>
                   <dt>Indian Student Association.</dt>
                   <dd>Recruit, produce, and manage a dance group of 12 members for an annual celebration</dd>
                   <dt>South Asian Student Alliance</dt>
                   <dd>Coordinate 2003 National Gandhi Day of Service involving over 100 members</dd>
               </dl>

               <br>
               <h3 class="text-primary" id="activities"><i><kbd>Activities/Awards:</kbd></i></h3>
               <hr>
               <ul>
                   <li>International Business Society</li>
                   <li>CHAMPS Mentoring program</li>
                   <li>Florida Women in Business
                   <ul>
                       <li>Member</li>
                       <li>Public School Mentor</li>
                       <li>Recipient</li>
                   </ul>
                   </li>
                   <li>Business Administration College Council</li>
               </ul>

           </div>



       </div>
   </div>


</div>
<div>
    <br>
</div>
<?php include_once('footer.php')?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
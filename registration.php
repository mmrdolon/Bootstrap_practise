<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Registration</title>
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
                    <li role="presentation" ><a href="#">Home</a></li>
                    <li role="presentation"><a href="about_me.php">About Me</a></li>
                    <li role="presentation"><a href="photo_gallery.php">Gallery</a></li>
                    <li role="presentation" class="active"><a href="#">Registration</a></li>
                    <li role="presentation"><a href="login.php">Log In</a></li>
                    <li role="presentation"><a href="contact_me.php">Contact</a></li>
                    <li role="presentation"><a href="portfolio.php">Portfolio</a></li>
                </ul>
            </div>

            <div class="col-md-1">

            </div>
        </div>

    </div>

    <br>
    <!---Write Your Content Here----------->
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">

            <h3 class="text-danger">Registrar Yourself</h3>
            <hr>

            <form class="form-horizontal" role="form" action="add.php" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-2 control-label">First Nmae(*)</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control"  placeholder="First Nmae" name="first_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-2 control-label">Last Nmae</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control"  placeholder="Last name" name="last_name" >
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-md-2 control-label">Email(*)</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" name="u_email" placeholder="Email Address" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-md-2 control-label">Password(*)</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" name="password" placeholder="Password using Number & Char" required>
                    </div>
                </div>


                <div class="form-group">

                    <div class="col-sm-3">

                <label>Birth Day:</label>



                <select name="dob_year" >

                    <option  value="Year" >Year</option>


                    <option  value="1991" >1985</option>
                    <option  value="1992" >1986</option>
                    <option  value="1993" >1987</option>
                    <option  value="1994" >1988</option>
                    <option  value="1995" >1989</option>
                    <option  value="1996" >1990</option>
                    <option  value="1991" >1991</option>
                    <option  value="1992" >1992</option>
                    <option  value="1993" >1993</option>
                    <option value="1994" >1994</option>
                    <option  value="1995" >1995</option>
                    <option  value="1996" >1996</option>

                </select>

              </div>

                    <div class="col-sm-2">

                <select name="dob_month" >
                    <option  value="Month" >Month</option>
                    <option  value="1" >1</option>
                    <option  value="2" >2</option>
                    <option  value="3" >3</option>
                    <option  value="4" >4</option>
                    <option  value="5" >5</option>
                    <option  value="6" >6</option>
                    <option  value="7" >7</option>
                    <option  value="8" >8</option>
                    <option  value="9" >9</option>
                    <option  value="10" >10</option>
                    <option  value="11" >11</option>
                    <option  value="12" >12</option>

                </select>
                    </div>
                    <div class="col-sm-1">

                <select name="dob_day" >
                    <option  value="Day" >Day</option>

                    <option  value="1" >1</option>
                    <option  value="2" >2</option>
                    <option  value="3" >3</option>
                    <option value="4" >4</option>
                    <option  value="5" >5</option>
                    <option value="6" >6</option>
                    <option  value="7" >7</option>
                    <option  value="8" >8</option>
                    <option  value="9" >9</option>
                    <option  value="10" >10</option>
                    <option  value="11" >11</option>
                    <option value="12" >12</option>
                    <option  value="13" >13</option>
                    <option  value="14" >14</option>
                    <option  value="15" >15</option>
                    <option  value="16" >16</option>
                    <option  value="17" >17</option>
                    <option  value="18" >18</option>
                    <option  value="19" >19</option>
                    <option  value="20" >20</option>
                    <option  value="21" >21</option>
                    <option  value="22" >22</option>
                    <option  value="23" >23</option>
                    <option  value="24" >24</option>
                    <option  value="25" >25</option>
                    <option  value="26" >26</option>
                    <option  value="27" >27</option>
                    <option  value="28" >28</option>
                    <option value="29" >29</option>
                    <option value="30" >30</option>
                    <option  value="31" >31</option>

                </select>

                    </div> <br>

                </div>


                <div class="form-group">
                    <label for="inputEmail3" class="col-md-2 control-label">Hobby</label>
                    <div class="col-sm-5">

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="hobby_reading" value="reading" > Reading<br>
                            </label>
                            <label>
                                <input type="checkbox" name="hobby_playing" value="playing" > Playing<br>
                            </label>
                            <label>
                                <input type="checkbox" name="hobby_gardening" value="gardening"> Gardening<br>
                            </label>
                            <label>
                                <input type="checkbox" name="hobby_travelling" value="travelling" > Travelling
                            </label>
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label for="inputEmail3" class="col-md-2 control-label">Gender(*)</label>
                    <div class="col-sm-5">
                        <div class="radio">
                            <label>
                                <input type="radio" value="male" name="sex" required> Male
                            </label>
                            <label>
                                <input type="radio" value="female" name="sex"> Female
                            </label>

                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="inputPassword3" class="col-md-2 control-label">City</label>
                    <div class="col-sm-5">

                        <select name="city[]" multiple="multiple" >
                            <option value="Dhaka">Dhaka</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Kustia">Kustia</option>
                            <option value="Jamalpur">Jamalpur</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Patuakhali">Patuakhali</option>
                            <option value="Muladi">Muladi</option>
                            <option value="Jhalkathi">Jhalkathi</option>
                            <option value="Pirojpur">Pirojpur</option>
                            <option value="Borguna">Borguna</option>
                            <option value="Savar">Savar</option>
                            <option value="B.Baria">B.Baria</option>
                            <option value="Tangail">Tangail</option>
                            <option value="Narayangonj">Narayangonj</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Maymensingh">Maymensingh</option>
                            <option value="Narail">Narail</option>
                        </select>



                    </div>

                </div>



                <div class="form-group">
                    <label for="inputPassword3" class="col-md-2 control-label">Your Message</label>
                    <div class="col-sm-5">
                        <textarea rows="5" cols="48" name="comment" ></textarea>

                    </div>

                </div>






                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Sign in</button>
                    </div>
                </div>



            </form>

            <center class="text-danger">(*) Fields are required.</center>


                </div>



        </div>
    </div>

</div>




</div>
<?php include_once('footer.php')?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
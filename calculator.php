<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>


<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel-heading"><h2><center>Calculator</center></h2></div>

    <div class="panel-body">

        <form class="form-horizontal" action="calculate.php" method="post">



                <div class="form-group">

                    <?php
                    if(isset($_SESSION['result'])) {
                        ?>

                        <div class="alert alert-success alert-dismissible">


                            <center><b><?php


                                    echo "Your Result Is: ".$_SESSION['result'];
                                    ?></b></center>
                        </div>
                    <?php
                    }
                    ?>




                    <?php
                    if(isset($_SESSION['division_error'])) {
                        ?>

                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <center><b><i>
                                        <?php


                                        echo "WARNING!!!!".$_SESSION['division_error'];
                                        ?>
                                    </i></b></center>
                        </div>
                    <?php
                    }
                    ?>

                    <?php
                    if(isset($_SESSION['subtraction_error'])) {
                        ?>

                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <center><b><i>
                                        <?php


                                        echo "WARNING!!!!".$_SESSION['subtraction_error'];
                                        ?>
                                    </i></b></center>
                        </div>
                    <?php
                    }
                    ?>

                    <label  class="col-sm-2 control-label">Enter Number 1</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" name="first_number" placeholder="First Number">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Enter Number 2</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" name="second_number"  placeholder="Second Number">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">

                            <label class="radio-inline">
                                <input type="radio" name="operator"  value="add"> ADD
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="operator"  value="subtract"> SUBSTRACT
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="operator"  value="multiply"> MULTIPLY
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="operator"  value="divide"> DIVIDE
                            </label>

                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-10">
                        <input type="submit" name="calculate" value="Calculate">
                    </div>

                </div>



        </form>


    </div>



</div>

<div>

</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<?php
session_unset();
?>

</body>
</html>

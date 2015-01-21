<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <title>IT 2 Resource</title>


    <link rel="stylesheet" href="admin_asset/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
    <link rel="stylesheet" href="admin_asset/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
    <link rel="stylesheet" href="admin_asset/css/font-icons/font-awesome/css/font-awesome.min.css"  id="style-resource-2">
    <link rel="stylesheet" href="admin_asset/css/admin.css"  id="style-resource-5">
    <script src="admin_asset/js/jquery-1.10.2.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body page-fade">

<!-- ====================== END ======================================= -->

<div class="page-container">
    <div class="sidebar-menu">

        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="index.html">
                    <img src="admin_asset/images/logo.png" alt="" />
                </a>
            </div>

            <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>


            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>

        </header>


        <ul id="main-menu" class="">
            <li id="search">
                <form method="get" action="#">
                    <input type="text" name="q" class="search-input" placeholder="Search something..." />
                    <button type="submit"><i class="entypo-search"></i></button>
                </form>
            </li>
            <li class="opened active">
                <a href="index.html"><i class="entypo-gauge"></i><span>Dashboard</span></a>
            </li>

            <li>
                <a href="#"><i class="entypo-user"></i><span>User</span></a>
                <ul>
                    <li>
                        <a href="list_user.html"><i class="entypo-users"></i><span>All Users</span></a>
                    </li>
                    <li>
                        <a href="edit_user.html"><i class="entypo-user-add"></i><span>Add User</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="entypo-key"></i><span>User Permission</span></a>
                    </li>
                </ul>

            </li>

            <li>
                <a href="#"><i class="entypo-newspaper"></i><span>Blog</span></a>
                <ul>
                    <li>
                        <a href="publish_blog.html"><i class="entypo-list"></i><span>Blog Content</span></a>
                    </li>

                    <li>
                        <a href="publish_blog.html"><i class="fa fa-file-text"></i><span>Publish Blog</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="entypo-key"></i><span>Blog Permission</span></a>
                    </li>
                </ul>

            </li>

            <li>
                <a href="#"><i class="entypo-mail"></i><span>Mailbox</span><span class="badge badge-secondary">8</span></a>


                <ul>
                    <li>
                        <a href="inbox.html"><i class="entypo-inbox"></i><span>Inbox</span></a>
                    </li>

                    <li>
                        <a href="compose.html"><i class="entypo-pencil"></i><span>Compose Message</span></a>
                    </li>

                    <li>
                        <a href="view_messages.html"><i class="entypo-attach"></i><span>View Message</span></a>
                    </li>

                </ul>

            </li>

            <li>
                <a href=""><i class="entypo-doc-text"></i><span>Dropdown</span></a>


                <ul>
                    <li>
                        <a href="#"><span>Sample-1</span></a>
                    </li>
                    <li>
                        <a href="#"><span>Sample-2</span></a>
                    </li>
                    <li>
                        <a href="#"><span>Sample-3</span></a>
                    </li>
                    <li>
                        <a href="#"><span>Sample-4</span></a>
                    </li>


                </ul>

            </li>

        </ul>


    </div>


    <div class="main-content">

        <div class="row">

            <!-- Profile Info and Notifications -->
            <div class="col-md-6 col-sm-8 clearfix">

                <ul class="user-info pull-left pull-none-xsm">

                    <!-- Profile Info -->
                    <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="image/dolon.jpg" alt="" class="img-circle" />
                            DOLON
                        </a>

                        <ul class="dropdown-menu">

                            <!-- Reverse Caret -->
                            <li class="caret"></li>

                            <!-- Profile sub-links -->
                            <li>
                                <a href="#">
                                    <i class="entypo-user"></i>
                                    Edit Profile
                                </a>
                            </li>

                            <li>
                                <a href="../neon-x/mailbox/main/index.html">
                                    <i class="entypo-mail"></i>
                                    Inbox
                                </a>
                            </li>

                            <li>
                                <a href="../neon-x/extra/calendar/index.html">
                                    <i class="entypo-calendar"></i>
                                    Calendar
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="entypo-clipboard"></i>
                                    Tasks
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

                <ul class="user-info pull-left pull-right-xs pull-none-xsm">

                    <!-- Raw Notifications -->
                    <li class="notifications dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="entypo-attention"></i>
                            <span class="badge badge-info">6</span>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="top">
                                <p class="small">
                                    <a href="#" class="pull-right">Mark all Read</a>
                                    You have <strong>3</strong> new notifications.
                                </p>
                            </li>

                            <li>
                                <ul class="dropdown-menu-list scroller">
                                    <li class="unread notification-success">
                                        <a href="#">
                                            <i class="entypo-user-add pull-right"></i>

                                                    <span class="line">
                                                        <strong>New user registered</strong>
                                                    </span>

                                                    <span class="line small">
                                                        30 seconds ago
                                                    </span>
                                        </a>
                                    </li>

                                    <li class="unread notification-secondary">
                                        <a href="#">
                                            <i class="entypo-heart pull-right"></i>

                                                    <span class="line">
                                                        <strong>Someone special liked this</strong>
                                                    </span>

                                                    <span class="line small">
                                                        2 minutes ago
                                                    </span>
                                        </a>
                                    </li>

                                    <li class="notification-primary">
                                        <a href="#">
                                            <i class="entypo-user pull-right"></i>

                                                    <span class="line">
                                                        <strong>Privacy settings have been changed</strong>
                                                    </span>

                                                    <span class="line small">
                                                        3 hours ago
                                                    </span>
                                        </a>
                                    </li>

                                    <li class="notification-danger">
                                        <a href="#">
                                            <i class="entypo-cancel-circled pull-right"></i>

                                                    <span class="line">
                                                        John cancelled the event
                                                    </span>

                                                    <span class="line small">
                                                        9 hours ago
                                                    </span>
                                        </a>
                                    </li>

                                    <li class="notification-info">
                                        <a href="#">
                                            <i class="entypo-info pull-right"></i>

                                                    <span class="line">
                                                        The server is status is stable
                                                    </span>

                                                    <span class="line small">
                                                        yesterday at 10:30am
                                                    </span>
                                        </a>
                                    </li>

                                    <li class="notification-warning">
                                        <a href="#">
                                            <i class="entypo-rss pull-right"></i>

                                                    <span class="line">
                                                        New comments waiting approval
                                                    </span>

                                                    <span class="line small">
                                                        last week
                                                    </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="external">
                                <a href="#">View all notifications</a>
                            </li>				</ul>

                    </li>

                    <!-- Message Notifications -->
                    <li class="notifications dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="entypo-mail"></i>
                            <span class="badge badge-secondary">10</span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <ul class="dropdown-menu-list scroller">
                                    <li class="active">
                                        <a href="#">
                                                    <span class="image pull-right">
                                                        <img src="admin_asset/images/thumb-1.png" alt="" class="img-circle" />
                                                    </span>

                                                    <span class="line">
                                                        <strong>Luc Chartier</strong>
                                                        - yesterday
                                                    </span>

                                                    <span class="line desc small">
                                                        This ain’t our first item, it is the best of the rest.
                                                    </span>
                                        </a>
                                    </li>

                                    <li class="active">
                                        <a href="#">
                                                    <span class="image pull-right">
                                                        <img src="admin_asset/images/thumb-2.png" alt="" class="img-circle" />
                                                    </span>

                                                    <span class="line">
                                                        <strong>Salma Nyberg</strong>
                                                        - 2 days ago
                                                    </span>

                                                    <span class="line desc small">
                                                        Oh he decisively impression attachment friendship so if everything. 
                                                    </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                                    <span class="image pull-right">
                                                        <img src="admin_asset/images/thumb-3.png" alt="" class="img-circle" />
                                                    </span>

                                                    <span class="line">
                                                        Hayden Cartwright
                                                        - a week ago
                                                    </span>

                                                    <span class="line desc small">
                                                        Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
                                                    </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                                    <span class="image pull-right">
                                                        <img src="admin_asset/images/thumb-4.png" alt="" class="img-circle" />
                                                    </span>

                                                    <span class="line">
                                                        Sandra Eberhardt
                                                        - 16 days ago
                                                    </span>

                                                    <span class="line desc small">
                                                        On so attention necessary at by provision otherwise existence direction.
                                                    </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="external">
                                <a href="../neon-x/mailbox/main/index.html">All Messages</a>
                            </li>				</ul>

                    </li>


                </ul>

            </div>


            <!-- Raw Links -->
            <div class="col-md-6 col-sm-4 clearfix hidden-xs">

                <ul class="list-inline links-list pull-right">
                    <li>
                        <a href="login.php">
                            Log Out <i class="entypo-logout right"></i>
                        </a>
                    </li>
                </ul>

            </div>

        </div>
        <!-- ====================== END ======================================= -->
        <hr />




        <div class="row">
            <div class="col-sm-3">

                <div class="tile-stats tile-red">
                    <div class="icon"><i class="entypo-users"></i></div>
                    <div class="num" data-start="0" data-end="83" data-postfix="" data-duration="1500" data-delay="0">0</div>

                    <h3>Registered users</h3>
                    <p>so far in our blog, and our website.</p>
                </div>

            </div>

            <div class="col-sm-3">

                <div class="tile-stats tile-green">
                    <div class="icon"><i class="entypo-chart-bar"></i></div>
                    <div class="num" data-start="0" data-end="135" data-postfix="" data-duration="1500" data-delay="600">0</div>

                    <h3>Daily Visitors</h3>
                    <p>this is the average value.</p>
                </div>

            </div>

            <div class="col-sm-3">

                <div class="tile-stats tile-aqua">
                    <div class="icon"><i class="entypo-mail"></i></div>
                    <div class="num" data-start="0" data-end="23" data-postfix="" data-duration="1500" data-delay="1200">0</div>

                    <h3>New Messages</h3>
                    <p>messages per day.</p>
                </div>

            </div>

            <div class="col-sm-3">

                <div class="tile-stats tile-blue">
                    <div class="icon"><i class="entypo-rss"></i></div>
                    <div class="num" data-start="0" data-end="52" data-postfix="" data-duration="1500" data-delay="1800">0</div>

                    <h3>Subscribers</h3>
                    <p>on our site right now.</p>
                </div>

            </div>
        </div>

        <div >
            <h2>Welcome to Admin Panel</h2>
            <br>



            <form action="update.php" method="post" >

                <?php
                $id = $_GET['id'];
                $link = mysqli_connect("localhost",
                    "root",
                    "",
                    "personal_website");
                $query = "select * from user WHERE id = $id";
                $result = mysqli_query($link, $query);
                $row = mysqli_fetch_assoc($result);
                ?>
                <form action="update.php" method="post">


                        <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

                        <label> First name:</label>
                        <input type="text" name="first_name" value="<?php echo $row['first_name'];?>" /><br>

                        <label> Last Name:</label>

                        <input type="text" name="last_name" value="<?php echo $row['last_name'];?>" /><br>

                        <label>Email:</label>

                        <input type="text" name="u_email" value="<?php echo $row['u_email'];?>" /><br>

                        <label> Password:</label>
                        <input type="password" name="password" value="<?php echo $row['password'];?>" /><br>


                        <?php

                        $Birthday = explode('-', $row['birth_day']);
                        list($year, $month, $day) = $Birthday;


                        ?>

                        <label> Birth Day:</label>
                        <select name="dob_year" id="dob_year">

                            <option value="">Year</option>


                            <option <?php if ( $year =='1985') echo'selected';?> value="1985" >1985</option>
                            <option  <?php if ($year =='1986') echo'selected';?> value="1986" >1986</option>
                            <option  <?php if ($year =='1987') echo'selected';?> value="1987" >1987</option>
                            <option  <?php if ($year =='1988') echo'selected';?> value="1988" >1988</option>
                            <option  <?php if ($year == '1989') echo'selected';?> value="1989" >1989</option>
                            <option  <?php if ($year =='1990') echo'selected';?> value="1990" >1990</option>
                            <option  <?php if ($year =='1991') echo'selected';?> value="1991" >1991</option>
                            <option  <?php if ($year =='1992') echo'selected';?> value="1992" >1992</option>
                            <option  <?php if ($year =='1993') echo'selected';?> value="1993" >1993</option>
                            <option <?php if ($year  =='1994') echo'selected';?> value="1994" >1994</option>
                            <option  <?php if ($year =='1995') echo'selected';?> value="1995" >1995</option>
                            <option  <?php if ($year =='1996') echo'selected';?> value="1996" >1996</option>

                        </select>

                        </select>

                        <select name="dob_month" id="dob_month">

                            <option value="" selected="selected">Month</option>


                            <option <?php if ($month =='1') echo 'selected';?> value="1" >1</option>
                            <option <?php if ($month =='2') echo'selected';?> value="2" >2</option>
                            <option <?php if ($month =='3') echo'selected';?> value="3" >3</option>
                            <option <?php if ($month =='4') echo'selected';?> value="4" >4</option>
                            <option <?php if ($month =='5') echo'selected';?> value="5" >5</option>
                            <option <?php if ($month =='6') echo'selected';?> value="6" >6</option>
                            <option <?php if ($month =='7') echo'selected';?> value="7" >7</option>
                            <option <?php if ($month =='8')echo 'selected';?>value="8" >8</option>
                            <option <?php if ($month =='9') echo'selected';?> value="9" >9</option>
                            <option <?php if ($month =='10')echo 'selected';?>value="10" >10</option>
                            <option <?php if ($month =='11') echo'selected';?> value="11" >11</option>
                            <option <?php if ($month =='12') echo'selected';?> value="12" >12</option>

                        </select>
                        <select name="dob_day" id="dob_day">
                            <option value="" selected="selected">Day</option>

                            <option <?php if ($day =='1') echo'selected';?> value="1" >1</option>
                            <option <?php if ($day =='2') echo'selected';?> value="2" >2</option>
                            <option <?php if ($day =='3') echo'selected';?> value="3" >3</option>
                            <option <?php if ($day =='4') echo'selected';?> value="4" >4</option>
                            <option <?php if ($day =='5') echo'selected';?> value="5" >5</option>
                            <option <?php if ($day =='6') echo'selected';?> value="6" >6</option>
                            <option <?php if ($day =='7') echo'selected';?> value="7" >7</option>
                            <option <?php if ($day =='8') echo'selected';?> value="8" >8</option>
                            <option <?php if ($day =='9') echo'selected';?> value="9" >9</option>
                            <option <?php if ($day =='10')echo 'selected';?> value="10" >10</option>
                            <option <?php if ($day =='11')echo'selected';?> value="11" >11</option>
                            <option <?php if ($day =='12') echo'selected';?> value="12" >12</option>
                            <option <?php if ($day =='13') echo'selected';?> value="13" >13</option>
                            <option <?php if ($day =='14') echo'selected';?> value="14" >14</option>
                            <option <?php if ($day =='15') echo'selected';?> value="15" >15</option>
                            <option <?php if ($day =='16')echo 'selected';?> value="16" >16</option>
                            <option <?php if ($day =='17')echo 'selected';?>value="17" >17</option>
                            <option <?php if ($day =='18')echo 'selected';?> value="18" >18</option>
                            <option <?php if ($day =='19')echo 'selected';?> value="19" >19</option>
                            <option <?php if ($day =='20') echo'selected';?> value="20" >20</option>
                            <option <?php if ($day =='21') echo'selected';?> value="21" >21</option>
                            <option <?php if ($day =='22') echo'selected';?> value="22" >22</option>
                            <option <?php if ($day =='23') echo'selected';?> value="23" >23</option>
                            <option <?php if ($day =='24')echo 'selected';?> value="24" >24</option>
                            <option <?php if ($day =='25') echo'selected';?> value="25" >25</option>
                            <option <?php if ($day =='26') echo'selected';?> value="26" >26</option>
                            <option <?php if ($day =='27') echo'selected';?> value="27" >27</option>
                            <option <?php if ($day =='28')echo 'selected';?> value="28" >28</option>
                            <option <?php if ($day =='29')echo 'selected';?> value="29" >29</option>
                            <option <?php if ($day =='30') echo'selected';?> value="30" >30</option>
                            <option <?php if ($day =='31') echo'selected';?> value="31" >31</option>

                        </select><br>

                        <label> Gender:</label>



                        <input type="radio" name="sex" value="male" <?php if ($row['sex'] == 'male' ) echo 'checked="checked"'?>>male
                        <input type="radio" name="sex" value="female" <?php if ($row['sex'] == 'female' ) echo 'checked="checked"'?>>female

                        <br>
                             <input type="submit" value="submit">

                </form>

                        <br>








        </div>

        <br />




        <br />


        <!-- Footer -->
        <footer class="main">



            &copy; 2013 <strong>IT 2 Resource </strong> Admin Theme by <a href="http://vatranet.com/" target="_blank">Vatranet.com</a>

        </footer>	</div>







    <link rel="stylesheet" href="admin_asset/js/wysihtml5/bootstrap-wysihtml5.css"  id="style-resource-1">

    <script src="admin_asset/js/neon-mail.js" id="script-resource-7"></script>
    <script src="admin_asset/js/main-gsap.js" id="script-resource-1"></script>
    <script src="admin_asset/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
    <script src="admin_asset/js/bootstrap.min.js" id="script-resource-3"></script>
    <script src="admin_asset/js/joinable.js" id="script-resource-4"></script>
    <script src="admin_asset/js/resizeable.js" id="script-resource-5"></script>
    <script src="admin_asset/js/neon-chat.js" id="script-resource-15"></script>
    <script src="admin_asset/js/neon-custom.js" id="script-resource-16"></script>
    <script src="admin_asset/js/neon-api.js" id="script-resource-6"></script>
    <script src="admin_asset/js/wysihtml5/wysihtml5-0.4.0pre.min.js" id="script-resource-7"></script>
    <script src="admin_asset/js/wysihtml5/bootstrap-wysihtml5.js" id="script-resource-8"></script>



</body>
</html>
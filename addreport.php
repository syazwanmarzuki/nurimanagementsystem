<!DOCTYPE HTML>
<!--
    Editorial by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Elements - Editorial by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body>

        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Main -->
                    <div id="main">
                        <div class="inner">

                            <!-- Header -->
                                <header id="header">
                                    <a href="index1.php" class="logo"><strong>Developed</strong> by MidWan</a>
                                    <ul class="icons">
                                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                        <li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                                        <li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
                                    </ul>
                                </header>

                            <!-- Content -->
                                <section>
                                    <header class="main">
                                        <h1>Contact Admin</h1>
                                    </header>



                                    <div class="container">
                                        <div class="top">
                                        <h1 id="title" class="hidden"><span id="logo">Nuri Management System</span></h1>
                                        </div>


                                        <div class="login-box animated fadeInUp">
                                        <div class="box-header">
                                            <h2>Contact Us</h2>
                                        </div>
                                        
                                            <form class="form-horizontal" action="report.php" method="POST">
                                                    <label for="name"><font color="black"><b>Name</b></font></label></br>
                                                    <input type="text" name="name" id="name" /><br/>
                                                    <label for="email"><font color="black"><b>Email</b></font></label></br>
                                                    <input type="email" name="email" id="email" /><br/>
                                                    <label for="message"><font color="black"><b>Message</b></font></label></br>
                                                    <textarea name="message" rows="10" cols="40" wrap="physical">Enter comment here!</textarea></br></br>
                                                    <button type="submit" class="special">Send Message</button><br/></br>
                                                    <button type="reset">Reset</button>
                                            </form>





                                    <!-- Sidebar -->
                    <div id="sidebar">
                        <div class="inner">

                            <!-- Search -->
                                <section id="search" class="alt">
                                    <form method="post" action="#">
                                        <input type="text" name="query" id="query" placeholder="Search" />
                                    </form>
                                </section>

                            <!-- Menu -->
                                <nav id="menu">
                                    <header class="major">
                                        <h2>Menu</h2>
                                    </header>

                                    <ul>
                                        <li><a href="<?php
                                                if( $_SESSION['sess_userrole'] == "admin"){
                                                       header('Location: index1.php');
                                                      }else{
                                                       header('Location: index2.php');
                                                      } ?>">Homepage</a>
                                        </li>

                                        <li><a href="userinfo.php">User Information</a></li>
                                        <li><a href="addstudent.php">Add Student</a></li>                                       
                                        <li><a href="studentinfo.php">Student Information</a></li>
                                        <li><a href="feesrecord.php">Fees Record</a></li>
                                        <li>
                                            <span class="opener">Dynamic Report</span>
                                            <ul>
                                                <li><a href="#">Monthly Profit</a></li>
                                                <li><a href="#">Annual Profit</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">View Report</a></li>
                                        <li><a href="logout.php">Log Out</a></li>

                                    </ul>
                                </nav>

                                                        <!-- Section -->
                                <section>
                                    <header class="major">
                                        <h2>Get in touch</h2>
                                    </header>
                                    <p>Any inquiries please contact the moderator through the list of contact option below:</p>
                                    <ul class="contact">
                                        <li class="fa-envelope-o"><a href="#">S.Aizad93@gmail.com</a></li>
                                        <li class="fa-phone">+6 016 221 9858</li>
                                        <li class="fa-facebook"><a href="https://web.facebook.com/syazwan.aizad?ref=bookmarks">Facebook</a></li>
                                    </ul>
                                </section>




                            <!-- Footer -->
                                <footer id="footer">
                                    <p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
                                </footer>

                        </div>
                    </div>

            </div>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="assets/js/main.js"></script>

    </body>
</html>
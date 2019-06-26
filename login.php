<?php
  // First we start a session which allow for us to store information as SESSION variables.
  session_start();
  // "require" creates an error message and stops the script. "include" creates an error and continues the script.
  require "includes/dbh.inc2.php";
?>
<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>TheGet UP - For Those That Know</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<!-- One -->


				<!-- Two -->
					<section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
						<div class="content">
							<h2>Login</h2>
                            <p>Please Login in here - If you dont have a login please register here.</p>
							<div class="wrapper-main">
                                
                <?php
        if (!isset($_SESSION['id'])) {
          echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="E-mail/Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
          </form>
          <a href="signup.php" class="header-signup">Signup</a>';
        }
        else if (isset($_SESSION['id'])) {
          echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="login-submit">Logout</button>
          </form>';
        }
        ?>
       <?php
       if ($_SESSION['error'] = "password") {
          echo "bell"; 
          echo ($_SESSION['id']); 
          echo ($_SESSION['uid']); 
          echo ($_SESSION['error']); 
          echo "end"; 

        }
          else {
          echo "Hello World"; 
        }
                                
        
        ?>
    </div>
				
						</div>
						<div class="image">
<img src="images/Logo2.jpg" alt=""  width="400" height="150"/>
							<p>Ticket Zone.</p>						</div>
					</section>

				
               

				

				<!-- Seven -->
					<section class="wrapper style1 align-center">
						
					</section>

				<!-- Footer -->
					<footer class="wrapper style1 align-center">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="https://www.facebook.com/TheGetUPHouseMusic/" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon style2 fa-envelope"><span class="label">Email</span></a></li>
							</ul>
							<p>&copy; TheGetUP UK. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
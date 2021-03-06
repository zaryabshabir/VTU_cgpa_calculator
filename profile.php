<?php 
 include "server.php";

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

  $username = $_SESSION['username']; // get id through query string

$qry = mysqli_query($db,"select * from users where username='$username'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $sem1 = $_POST['sem1'];
    $sem2 = $_POST['sem2'];
    $sem3 = $_POST['sem3'];
    $sem4 = $_POST['sem4'];
    $sem5 = $_POST['sem5'];
    $sem6 = $_POST['sem6'];
    $sem7 = $_POST['sem7'];
    $sem8 = $_POST['sem8'];
  $cgpa=($sem1+$sem2+$sem3+$sem4+$sem5+$sem6+$sem7+$sem8)/8;
    $edit = mysqli_query($db,"update users set sem1='$sem1', sem2='$sem2', sem3='$sem3', sem4='$sem4', sem5='$sem5', sem6='$sem6', sem7='$sem7', sem8='$sem8', cgpa='$cgpa' where username='$username'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:profile.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>VTU Calculator | ZARYAB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="sgpa Calculator, Calculator, cgpa Calculator, VTU, cbcs,non cbcs" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="static/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="static/css/style.css" rel='stylesheet' type='text/css' />
     <!-- font-awesome icons -->
    <link  href="static/css/fontawesome-all.min.css" rel="stylesheet">
	<!-- pop up box -->
	<link href="static/css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href=" static/css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="static/css/owl.theme.css" type="text/css" media="all">
    <link href="style1.css" rel='stylesheet' type='text/css' /> 
	<!-- Carousel (for News section) -->
    <!-- //Custom Theme files -->
    <!-- online fonts -->
    <!-- <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400i,700i" rel="stylesheet"> -->
    <!--//online fonts -->
</head>
<body>
    <!-- header -->
    <header>
        <div class="header-bottom">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <h1><a class="navbar-brand" href="index.php">
                           VTU Calc
                        </a></h1>
                    <button class="navbar-toggler ml-lg-auto ml-sm-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav text-center ml-auto">
                          <li class="nav-item  mr-lg-3 mt-lg-0 mt-4">
                            <a class="hover-fill" aria-pressed="false" href="index.php" data-txthover="PERCENTAGE CALCULATOR">PERCENTAGE CALCULATOR</a>
                          </li>
                          <li class="nav-item  mr-lg-3 mt-lg-0 mt-4">
                              <a class="hover-fill" aria-pressed="false" href="sgpa.php" data-txthover="SGPA CALCULATOR">SGPA CALCULATOR</a>
                          </li>
                          <li class="nav-item">
                              <a class="hover-fill" aria-pressed="false" href="cgpa.php" data-txthover="CGPA CALCULATOR">CGPA CALCULATOR</a>
                          </li>
                        </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- //header -->
    <!-- banner -->
    <div class="screenview_bg bg-theme px-3">
		<div class="container">
          <section class="wthree-row w3-gallery py-5">
        		<div class="container py-xl-5">
        			<div class="w3l_header mb-sm-5 pb-3">
                <h3 class="text-center"><?php echo $data['username'] ?>'s RESULT</h3>
        			</div>
            </div>
                <!-- //gallery container -->

                <div class="container">
                <div class="login mb-sm-5 px-4 mx-auto mw-100">
                <form id="cgpac" method="POST">
                  <div class="row">
                  <div class="col-5">
                    <fieldset>
                        <div class="form-row">
                          <div class="form-group col-md-6 mb-4">
                              <label class="col-form-label">1st Sem <hr>SGPA=<?php echo $data['sem1'] ?></label>
                          </div>
                          <div class="col-md-6 mb-4">
                            <input type="text" class="form-control" id="1stSem" name="sem1" value="<?php echo $data['sem1'] ?>" placeholder="Edit 1st Sem SGPA">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6 mb-4">
                              <label class="col-form-label">3rd Sem <hr>SGPA=<?php echo $data['sem3'] ?></label>
                          </div>
                          <div class="col-md-6 mb-4">
                            <input type="text" class="form-control" id="3rdSem" name="sem3" value="<?php echo $data['sem3'] ?>" placeholder="Edit 3rd Sem SGPA">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6 mb-4">
                              <label class="col-form-label">5th Sem <hr>SGPA=<?php echo $data['sem5'] ?></label>
                          </div>
                          <div class="col-md-6 mb-4">
                            <input type="text" class="form-control" id="5thSem" name="sem5" value="<?php echo $data['sem5'] ?>" placeholder="Edit 5th Sem SGPA" >
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6 mb-4">
                              <label class="col-form-label">7th Sem <hr>SGPA=<?php echo $data['sem7'] ?></label>
                          </div>
                          <div class="col-md-6 mb-4">
                            <input type="text" class="form-control" id="7thSem" name="sem7" value="<?php echo $data['sem7'] ?>" placeholder="Edit 7th Sem SGPA" >
                          </div>
                        </div>
                  </fieldset>
                </div>
                <div class="col-2">
                </div>
                <div class="col-5">
                  <fieldset>
                      <div class="form-row">
                        <div class="form-group col-md-6 mb-4">
                            <label class="col-form-label">2nd Sem <hr>SGPA=<?php echo $data['sem2'] ?></label>
                        </div>
                        <div class="col-md-6 mb-4">
                          <input type="text" class="form-control" id="2ndSem" name="sem2" value="<?php echo $data['sem2'] ?>" placeholder="Edit 2nd Sem SGPA" >
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6 mb-4">
                            <label class="col-form-label">4th Sem <hr>SGPA=<?php echo $data['sem4'] ?></label>
                        </div>
                        <div class="col-md-6 mb-4">
                          <input type="text" class="form-control" id="4thSem" name="sem4" value="<?php echo $data['sem4'] ?>" placeholder="Edit 4th Sem SGPA" >
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6 mb-4">
                            <label class="col-form-label">6th Sem <hr>SGPA=<?php echo $data['sem6'] ?></label>
                        </div>
                        <div class="col-md-6 mb-4">
                          <input type="text" class="form-control" id="6thSem" name="sem6" value="<?php echo $data['sem6'] ?>" placeholder="Edit 6th Sem SGPA" >
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6 mb-4">
                            <label class="col-form-label">8th Sem <hr>SGPA=<?php echo $data['sem8'] ?></label>
                        </div>
                        <div class="col-md-6 mb-4">
                          <input type="text" class="form-control" id="8thSem" name="sem8" value="<?php echo $data['sem8'] ?>" placeholder="Edit 8th Sem SGPA" >
                        </div>
                      </div>
                      <br>
                     
                </fieldset>
                    <br>
                  </div>
                  </div>
                    <div class='text-center' style="margin-top: 10px">
                        <button type="submit" class="get-started-btn" name="update">UPDATE RESULT</button>
                    </div>
                   
                </form>
                <div class="form-group col-md-6 mb-4">
                              <label class="col-form-label">CGPA=<?php echo $data['cgpa'] ?></label>
                          </div>
                         
            </div>

        </section>
    </div>
    </div>
    <!-- //banner -->
    <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p id="con">Logged in <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p id="conn"> <a href="index.php?logout='1'">logout</a> </p>
    <?php endif ?>
    <!-- //footer -->
    <div class="cpy-right">
        <p class="text-white">?? <script>document.write(new Date().getFullYear())</script> Design by
            <a href="https://instagram.com/zxaryab"> Zaryab</a>
        </p>
    </div>

    <!-- js -->
    <script src="static/js/jquery-2.2.3.min.js"></script>
	<!--pop-up-box -->
	<script src="static/js/jquery.magnific-popup.js"></script>
  <script type="text/javascript">
    document.getElementById('cgpac').onsubmit = function() {
        var tc=175;
        var sum=0;
        var cgpa;
        const credits = [20,20,24,24,25,24,20,18]
        const sem = ["1stSem", "2ndSem", "3rdSem", "4thSem", "5thSem", "6thSem", "7thSem", "8thSem"];
        sem.forEach(myFunction);

        function myFunction(value, index, array) {
          var g = document.getElementById(value).value;
          if (g ==0){
            tc = tc-credits[index];
          }
          else{
            sum+= g*credits[index];
          }
        }
        cgpa = sum/tc;
        document.getElementById('cgpa').value = cgpa.toFixed(2);
        percentage = (cgpa-0.75)*10;
        document.getElementById('percentage').value = percentage.toFixed(2);
        return false;
    };
  </script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
	<!-- //pop-up-box -->
    <!-- start-smooth-scrolling -->
    <script src="static/js/move-top.js" ></script>
    <script src="static/js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
	 <!-- carousel -->
    <script src="static/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    900: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <!-- //carousel -->


    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
             var defaults = {
            	 containerID: 'toTop', // fading element id
            	 containerHoverID: 'toTopHover', // fading element hover id
            	 scrollSpeed: 1200,
            	 easingType: 'linear'
             };
             */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="static/js/SmoothScroll.min.js"></script>
    <script src="static/js/bootstrap.js"></script>




</body>
</html>

<!--
Ramsley Lichuma is a talented programming professional with a wealth of experience in web development. 
Check out his website samples at https://github.com/RamsleyLichuma to see some of his impressive work
in action. His expertise in PHP, JavaScript, and other web technologies is truly remarkable. If you're
 looking for a skilled programmer to help with your next project, be sure to get in touch with Ramsley today!
-->

    <?php

    require_once "admin/functions/db.php";

        if (isset($_GET['id'])) {
        $postid = $_GET['id'];

        $sql = "SELECT * FROM posts WHERE id='$postid'";
        $query = mysqli_query($con, $sql);

        $sql2 = "SELECT * FROM comments WHERE blogid=$postid";
        $query2 = mysqli_query($con, $sql2);
        
      }

      else {
        header('Location:blog.php');
      }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/banner.png">
<title>Mighty Eagles</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coalition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<div class="w3_agile_banner_top">
				<div class="agile_phone_mail">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i>+(254) 728825497</li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:mightyeagsocceracademy@gmail.com">mightyeagsocceracademy@gmail.com</a></li>
					</ul>
				</div>
			</div>
			<div class="agileits_w3layouts_banner_nav">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
							<li class="active"><a href="about.php">About</a></li>
							<!--<li><a href="portfolio.php">Products</a></li>-->
							<li><a href="../news/index.php">Photo gallery</a></li>
							<li><a href="blog.php">Updates</a></li>
							<li><a href="../contact/blog.html">Contact us</a></li>
						</ul>
						</ul>
						
					</nav>

					</div>
				</nav>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<h2 class="w3l_head w3l_head1">Blog Post</h2>
			<div class="wthree_gallery_grids">
				
				<div class="row">

					<?php 

                          while ($row = mysqli_fetch_assoc($query)) {
                          	
					echo
					'<div class="col-md-12">
						<a href="blog.php"><i class="fa fa-arrow-left"> Back</i></a>
						<br>
						<h4>'.$row["title"].'</h4>
						<br>
						<h6 style="color: orange;">'.$row["author"].' <b style="color: #000;">|</b> ('.mysqli_num_rows($query2).') Comments <b style="color: #000;">|</b> '.$row["date"].'</h6>
						<br>

						<p>
							'.$row["content"].'
						</p>'
							;
						}

					?>
						<hr>

						<h4>Comments (<?php echo mysqli_num_rows($query2); ?>)</h4>
						<br/>
						<div style="border-style: double; border-color: #000;">
							<div style="padding: 10px;">

						<?php 
						while ($row2 = mysqli_fetch_assoc($query2)) {
						echo
						'
							 
							<b>'.$row2["name"].' :</b>
							<p>
								'.$row2["comment"].'
								<i style="color: orange; float: right;">'.$row2["date"].'</i>
							</p>

							<hr>

							';
							}
						?>

						</div>

						</div>

						<hr>

						<h3>Leave a comment</h3>
						<br/>
						<div class="agileits_mail_grid_left col-md-9" >
						<form action="functions/comment.php" method="post">
							<input type="hidden" name="blogid" value="<?php echo $postid;?>" />
							<input type="text" name="name" placeholder="Name..." required />
							<textarea placeholder="Comment..." name="comment" required></textarea>
							<input type="submit" value="Submit Comment" name="submit">
						</form>
						</div>
						

					</div>
				

				</div>

				<div class="row">
					<!-- <h5>Comments</h5> -->

				</div>
                
			</div>
			<script src="js/jzBox.js"></script>
		</div>
	</div>
<!-- //gallery -->
<!-- footer -->
	
	<?php 
		include("footer.php");
	?>

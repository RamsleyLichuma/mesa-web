<?php
 session_start();
include('functions/db.php');
error_reporting(0);
if(isset($_POST['login']))
  {
     $uname=$_POST['username'];
    $password=md5($_POST['password']);
$sql =mysqli_query($con,"SELECT AdminUserName,AdminEmailId,AdminPassword,userType FROM tbladmin WHERE (AdminUserName='$uname' && AdminPassword='$password')");
 $num=mysqli_fetch_array($sql);
if($num>0)
{

$_SESSION['login']=$_POST['username'];
$_SESSION['utype']=$num['userType'];
    echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
  }else{
echo "<script>alert('Invalid Details');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Mighty Eagles Soccer Academy .">
        <meta name="author" content="xyz">
        <title>Mighty Eagles Soccer Academy | Admin Panel</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/modernizr.min.js"></script>
    </head>
    <body class="bg-transparent">
        <section>
            <div class="container m-t-50">
                <div class="row align-items-center m-t-50">
                    <div class="col-md-6 text-center">
                        <img src="../images/mighty.png" >
                    </div>
                    <div class="col-md-4 ">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                
                                <div class="account-content">
                                    <form class="form-horizontal" method="post">
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" required="" name="username" placeholder="Username or email" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="text-right mb-2"><a href="forgot-password.php"><i class="mdi mdi-lock"></i> Forgot your password?</a></div>


                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" name="password" required="" placeholder="Password" autocomplete="off">
                                            </div>
                                        </div>


                     
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn btn-custom waves-effect waves-light btn-md w-100" type="submit" name="login">Log In</button>
                                            </div>
                                        </div>

                                    </form>
                                <div class="text-center">
                                    <a href="../index.php"><i class="mdi mdi-home"></i> Back Home</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </section>
                  
<footer class="footer text-center">
                  <?php echo date('Y');?> © Developed by Lichuma
                </footer>
                </div>
      </div>

    </body>
</html>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>The 254 News Desk</title>
        <link rel="icon" type="image/x-icon" href="assets/images/mighty.png">

      <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
      
        <!-- Summernote css -->
        <link href="../plugins/summernote/summernote.css" rel="stylesheet" />
      <!-- Select2 -->
 
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- Jquery filer css -->
        <link href="../plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="../plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
      <script>
         function checkAvailability() {
         $("#loaderIcon").show();
         jQuery.ajax({
         url: "check_availability.php",
         data:'username='+$("#sadminusername").val(),
         type: "POST",
         success:function(data){
         $("#user-availability-status").html(data);
         $("#loaderIcon").hide();
         },
         error:function (){}
         });
         }
      </script>
   </head>            

   <body class="fixed-left">
      <!-- Begin page -->
      <div id="wrapper">
        <div class="topbar">
        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                           
                    
                        </ul>
                <!-- LOGO -->
                <div class="topbar-left">
                   
                
                   <a href="index.php" class="logo">
                       <span>
                           <img src="assets/images/logo.png" alt="" height="60">
                       </span>
                      
                   </a>
 
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                       
                        <ul class="nav navbar-nav" style=" width: 50%; margin-top: 23px; color: blue;"> 
                              <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><b>254 NEWS DESK!! Chill with the top news bloggers as you stay informed on whats happenning around zone 254 on the daily</marquee>
                           
                    
                        </ul>
                      
                       <div id="google_translate_element">
                                            
                                        </div>
                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">
                          

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                </a>

                        
                            </li>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
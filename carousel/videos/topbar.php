<style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
}
nav .nav-link{
	color:white !important;
}
nav .nav-item{
	width: auto !important
}
@media (min-width: 992px){
	.navbar-expand-lg .navbar-nav {
	    flex-direction: row;
	}
}
</style>

<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-#af0505" style="padding:0; background: white;">
 
	    <div class="collapse navbar-collapse" id="navbarResponsive" style="background-color: #af0505; align-items:center; text-align:center;">
	        <ul class="navbar-nav ml-auto my-2 my-lg-0" style="background-color: #af0505; align-items:center; text-align:center;">
	            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=home" >Home</a></li>
	            <?php if(isset($_SESSION['login_id'])): ?>
	            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=my_uploads">My Uploads</a></li>
	            <li class=" dropdown nav-item">
                	<a href="#" class="text-white dropdown-toggle nav-link"  id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo ucwords($_SESSION['login_firstname'].' '.$_SESSION['login_middlename']) ?> </a>
	              <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
	                <a class="dropdown-item" href="index.php?page=signup&id=<?php echo $_SESSION['login_id'] ?>" id=""><i class="fa fa-cog"></i> Manage Account</a>
	                <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> Logout</a>
	              </div>
	            </li>
	          <?php else: ?>
	            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="javascript:void(0)" id="login_now">Login</a></li>
	          <?php endif; ?>
	           
	            
	         
	        </ul>
	    </div>
	</div>
</nav>

<script>
  $('#login_now').click(function(){
    uni_modal("LOGIN",'login.php')
  })
  $('#search').keypress(function(e){
  	if(e.which == 13){
  		location.href = "index.php?s="+$(this).val()
  	}
  })
</script>
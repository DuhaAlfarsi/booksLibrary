<!doctype html>
<html lang="en">
  <head>
  	<title>login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="./css/style1.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(./img/img4.jpeg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="/home">Home</a>
	          <li>
	              <a href="/maneger">Manager</a>
	          </li>
	          <li>
              <a href="/login">Users</a>
	          </li>
	          <li>
              <a href="/contact">Contact</a>
	          </li>
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Library Manegement <i class="icon-heart" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank"></a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/maneger">Manager</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!--Login start-->
        <div class="container">
          <div class="c1">
             <div class="c11">
                <h1 class="mainhead">Library Login</h1>
                <p class="mainp">Just click the buttons below to toggle between SignIn & SignUp</p>
             </div>
             <div id="left"><h1 class="s1class"><span>SIGN</span><span class="su">IN</span>
             </h1></div>
             <div id="right"><h1 class="s2class"><span>SIGN</span><span class="su">UP</span></h1></div>
          </div>
          <div class="c2">
             <form class="signup">
                <h1 class="signup1">SIGN UP</h1>
                <br><br><br><br>
             <input name="username" type="text" placeholder="Username*" class="username"/>
             
             <input name="email" type="text" placeholder="Email*" class="username"/>
             
             <input name="password" type="password" placeholder="Password*" class="username"/>

             
                
                <button class="btn1">Sign Up</button>
             </form>
             <form class="signin">
                
                <h1 class="signup1">SIGN IN</h1>
                <br><br><br><br>
                <input name="username" type="text" placeholder="Username*" class="username"/>
             
             <input name="password" type="password" placeholder="Password*" class="username"/>
                
                <button class="btn1">Get Started</button>
                
                <br><br><br><br>
                
             </form>
             
          </div>
       </div>
        <!--Login end -->
      </div>
		</div>

    <script src="./js/jquery.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>
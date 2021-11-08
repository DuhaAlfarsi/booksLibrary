<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style1.css">
    <title>maneger page </title>
    <style>
        html,body{
            width: 100%;
            height: 100%;
        }
        .container{
            padding-top: %;
            padding-left:5%;
        }
       
    </style>
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

<!--maneger-->
<div class="container">
    <table>
     <tr> <h3 class="heading1">  Books Section </h3> </tr>
  <td> <div class="row "> <div class="col"><a href="{{ url('books/create') }}" class="btn_b btn-warning btn-lg btn-block">Add Books</a> </div></td></div>
  <td>  <div class="row "><div class="col"><a href="{{ url('books/index') }}" class="btn_b btn-warning btn-lg btn-block">show Books</a> </div></td></div>
    </table>
 
  <table>
     <tr> <h3 class="heading2"> Category Section </h3></tr>
     <td> <div class="row "> <div class="col"><a href="{{ url('categories/create') }}" class="btn_b btn-warning btn-lg btn-block">Add Category</a> </div></td></div>
     <td> <div class="row "><div class="col"><a href="{{ url('categories/show') }}" class="btn_b btn-warning btn-lg btn-block">show Category</a></div></td></div>
 </table>
 <table>
 <tr> <h3> Orders Section </h3></tr>
 <td> <div class="row "> <div class="col"><a href="{{ url('orders/create') }}" class="btn_b btn-warning btn-lg btn-block">Add Oeders</a> </div></td></div>
 <td> <div class="row "> <div class="col"><a href="{{ url('orders/show') }}" class="btn_b btn-warning btn-lg btn-block">show Orders</a></div></td></div>
</table>


   <script src="./js/jquery.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>
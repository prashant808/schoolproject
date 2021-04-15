<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap" rel="stylesheet">
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;

		}
		body{
			font-family: 'Reem Kufi', sans-serif;
			background-image: url("school2.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			/*opacity: 0.7;*/
		}
		.box{
			width: 800px;
            height: 200px;
            border: 5px  #0C0B0B;
            margin: auto;
            padding: auto;
          
             background:rgba(126, 215, 124, 0.36);
		}
		.navbar{

              background: rgba(54, 63, 69, 0.54);

		}
		.dues{
			background-color: green;
		}
	

	</style>
</head>
<body >

		<header>
			<nav class="navbar navbar-expand-sm navbar-dark d-flex pt-0">
    <div class="container-fluid">
  	  	<img src="logo.png "   style="height: 50px; width: 112px;">
    <p class=" navbar-brand text-light  " style="font-size: 28px;" >KSK ACADEMY</p>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mr-5  ">
        <li class="nav-item p-2 display-5">
          <a class="nav-link  " style="font-size: 24px"  href="index.php">Home</a>
        </li>
        <li class="nav-item p-2 display-5">
          <a class="nav-link active" style="font-size: 24px; " aria-current="page" href="login.php">Logout</a>
        </li> <li class="nav-item p-2 display-5">
          <a class="nav-link" style="font-size: 24px" href="#">Contact us</a>
        </li>
    </ul>
</div>
</div>
</nav>
</header>
<section>
	<div class="container-fluid">
			<h1 class="text-center text-capitalize pt-5 text-dark font-weight-bold display-3 active">Student details   </h1>
			<hr  class="text-center pt-5">
		</div>
	<div class="box text-center m-auto display-5 ">
		<h2>Prashant raj pandey</h2>
		<p>Class : 10th</p>
		<p>Roll No : 29</p>
		<p class="dues"><b>Pending dues : None</b></p>

		
	</div>
</section>	
	<footer>
	<hr class="mt-5">
	<div class="container-fluid m-5 pt-1 text-capitalize ">
		
			<p class="text-center"><span class="p-2  display-4"><b>Ksk Academy </b></span> <br>
				Sangam vihar , New Delhi-80 <br> contact us : 11326595649 </p>
		</div>
	</footer>

</body>
</html>
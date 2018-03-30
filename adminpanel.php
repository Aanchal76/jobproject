<?php
$value=$_GET['v'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="index.php"><img src="images/firstlogo.png"></a>
				</div>
				<div class="col-md-9">
					<div class="navigation">
					   <nav>
						  <ul>
							<li><a href="index.php">home</a></li>
                <li><a href="adminpanel.php">adminpanel</a></li>
						
						  </ul>
					   </nav>
					</div>	
				</div>	
			</div>
		</div>
	</header>

<div class="container">
<div class="row">
	<div class="col-md-4">
         
		<ul>
			<li><a href="adminpanel.php?v=data">user weekly details</a></li>
			<li><a href="adminpanel.php?v=graph">showgraph</a></li>
			<li><a href="adminpanel.php?v=education">user education</a></li>
			<li><a href="adminpanel.php?v=addeducation">education add</a></li>
			<li><a href="adminpanel.php?v=fulldata">user details</a></li>
		</ul>
	
	</div>
<div class="col-md-8">
<?php
	switch ($value) {
    case 'data':
        require('showdata.php');
        break;
    case 'graph':
        require('chart.php');
        break;
	case 'education':
        require('education.php');
        break;
 	case'addeducation':
	 require('addeducation.php');
        break;
    case 'fulldata':
	 require('userdetail.php');
        break;
    
}
?>
</div>
	
</div>
	
</div>

	<footer>
	<div class="footer">		
		 <div class="container">
 					<div class="row">
						<div class="col-md-4">
					    	<div class="sections">
					     	<nav>
 								<ul>
                                <h4>USEFUL LINKS</h4>
 								<li><a href="#">Home</a></li>
 								<li><a href="#">About us</a></li>
 								<li><a href="#">contact us</a></li>
 								<li><a href="#">Admin</a></li>
 								</ul>
 							</nav>
				  		    </div>
                		 </div>


				   <div class="col-md-4">
					  <div class="followus">
 							<ul>
                               <h4>Follow Us</h4><br>
                                <li>
 								   <div class="footer3">
									<a href="https://www.facebook.com/"><img src="images/facebook.png"></a>
									<a href="https://twitter.com/login?lang=en"><img src="images/twitter.png"></a>
									<a href="https://plus.google.com/discover"><img src="images/google.png"></a>
									<a href="https://www.linkedin.com/m/login/"><img src="images/linkdin.png"></a>
									<a href="https://in.pinterest.com/"><img src="images/pintrest.png"></a>
                                  </div>
                              </li>
  							</ul>
					  </div>					
				   </div>

				<div class="col-md-4">
					<div class="sections">
						<a href="index.php"><img src="images/firstlogo.png"></a><br>
	                       <h5>Lorem Ipsum dolor sit amet, consectetur adipiscing<br> elit. sed do euismod tempor.incididunt ut labore et<br> dalore magna aliqiua</h5>
	                       <h5>1-667-125-132277</h5>
	                        <h5>3rd Floor, Link Arcade Model Town, USA</h5>  
					</div>
				</div>
			</div>
		</div>
</div>

		<div class="disclaimer">
			<h6>All rights reserved &copy 2018 Info Edge (India) Ltd.</h6>	
		</div>
</footer>


</body>
</html>

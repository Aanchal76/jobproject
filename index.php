
<!DOCTYPE html>
<html>
<head>
	<title>firstjob</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #location {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 10px;
        text-overflow: ellipsis;
        width: 100%;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
      #target {
        width: 345px;
      }
    </style>
<body>

  <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('location');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUMmvToUtUWvQQTzlX9lIVO3aLhvFTjTw&libraries=places&callback=initAutocomplete"
         async defer></script>

<script>
$(document).ready(function(){
    $("#button1").click(function(){
        $("#applydiv").show();
        
    });
    $("#next").click(function(){
        $("#second").show();
        $("#applydiv").hide();

        
    });
    $("#next2").click(function(){
        $("#third").show();
        $("#second").hide();
    });
});
</script>


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
							<li><a href="">jobs</a></li>
						    <li><a href="">Recrutors</a></li>
                <li><a href="adminpanel.php">adminpanel</a></li>
							<li><button id="button1">apply jobs</button></li>
						  </ul>
					   </nav>
					</div>	
				</div>	
			</div>
		</div>
	</header>
	<section>

			<div class="container"> 
  				 <div id="myCarousel" class="carousel slide" data-ride="carousel">
   				 <!-- Indicators -->
   					 <ol class="carousel-indicators">
      					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      					<li data-target="#myCarousel" data-slide-to="1"></li>
      					<li data-target="#myCarousel" data-slide-to="2"></li>
    				</ol>

   				 <!-- Wrapper for slides -->
   				 <div class="carousel-inner">
      				<div class="item active">
        				<img src="images/image4.jpg"  style="width:100%; height: 620px;" class="img-responsive">
      				</div>

      				<div class="item">
        				<img src="images/image5.jpg"  style="width:100%; height: 620px;" class="img-responsive">
      				</div>
    
      				<div class="item">
        				<img src="images/image7.jpg"  style="width:100%; height: 620px;" class="img-responsive">
      				</div>
    			</div>

    				<!-- Left and right controls -->
    			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
     				 <span class="glyphicon glyphicon-chevron-left"></span>
      				 <span class="sr-only">Previous</span>
    			</a>
    			<a class="right carousel-control" href="#myCarousel" data-slide="next">
      				 <span class="glyphicon glyphicon-chevron-right"></span>
      				 <span class="sr-only">Next</span>
   			 	</a>
  			   </div>
		    </div>


<div id="applydiv">	
	<div class="apply">
		<h1>Apply jobs</h1>
<form id="regForm" action="insertdata.php" method="post">
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Name:
    <p><input placeholder="First name..." oninput="this.className = ''" name="fname" type="text"></p>
    <p><input placeholder="Last name..." oninput="this.className = ''" name="lname" type="text"></p>
    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email" type="email" required=""></p>
  </div>
 
  <div class="tab">Information:
    <p><input placeholder="Age..." oninput="this.className = ''" name="age" ></p>
    <p><div class="locationdiv">
      <input class="loc" placeholder="Location..." oninput="this.className = ''" name="location" id="location" type="text">     
	<a href=""> <span class="glyphicon glyphicon-map-marker"></span> </a></div></p>
     <div id="map"></div>

  <p><select name="gender" oninput="this.className = ''"  >
  	                        <option>---select gender--</option>
  						<option value="male">male</option>
  						<option value="female">female</option>
					</select></p>
  </div>
  		   
  <div class="tab">Education:
  	    <div class="imgcontainer">
      <img src="images/images.jpeg" alt="Avatar" class="avatar">
    </div>
  
         
    	         
					 <?php
require 'database/connection.php';

       function showdata(){
         GLOBAL $conn;
    

    $query="SELECT * FROM `Education`";
    $run = mysqli_query($conn,$query);

    if($run == true){
    ?>
     <p><select id="education" name="education" oninput="this.className = ''">
    <?php
     while($data = mysqli_fetch_assoc($run)){
        ?>
    
            <option><?php echo $data['name'];?></option>
            
    
        <?php
     }
     ?>
      </select></p><?php
    }
    else{
        echo "error!";
     }
    }
    ?>   
    <?php showdata();
        ?>
	
    
    <p><select name="userskill[]" oninput="this.className = ''" multiple >
  						<option value="java">java</option>
  						<option value="php">php</option>
  						<option value="C">C</option>
  						<option value="html">html</option>
					</select></p>
 
</div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

</div>
</div>

   </section>
   

 <script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

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

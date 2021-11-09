<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Good JOB</title>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="tools/datatables/css/dataTables.bootstrap.css" rel="stylesheet">
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0">Good<strong>JoB</strong></a></h1>
          </div>

          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="has-children">
                  <a href="category.htmk">Category</a>
                  <ul class="dropdown">
                    <li><a href="#">Full Time</a></li>
                    <li><a href="#">Part Time</a></li>
                     <li><a href="#">Internship</a></li>
                   
                  </ul>
                </li>
                <li><a href="login.html">Login</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="new-post.php"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span> Post a Job</span></a></li>
				<li><a href="edit.php"><span class="rounded bg-primary py-2 px-3 text-white"> Edit Details</span></a></li>
              </ul>
            </nav>
          </div>

         

        </div>
      </div>
    </header>

	<body>
    <div class="site-blocks-cover" style="background-image: url(images/abc.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row row-custom align-items-center">
          <div class="col-md-10">

            <h1 class="mb-2 text-black w-75"><span class="font-weight-bold" align="top">Your Details</h1></span>
			<div class="panel panel-default">

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th >Job ID</th>
											<th >Job Title</th>
											<th >Company</th>
											<th >Job type</th>
											<th >Location</th>
											<th >Description</th>
                                        </tr>
                                    </thead>
                                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "job_portle";
                  

                  // Create connection
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  // Check connection
                  if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                  }
                 
                  if (isset($_POST['search1'])) 
                  {
                    # code...
                   
                   

                    $query = "SELECT * FROM new_postjob " ;
                    $query_run = mysqli_query($conn,$query);

                    while ($row = mysqli_fetch_array($query_run)) 
                    {
                      
                      ?>

                        <tr>
                          
                          <td><?php echo $row['j_id']?></td>
                          <td><?php echo $row['job_title']?></td>
                          <td><?php echo $row['company']?></td>
                          <td><?php echo $row['job_type']?></td>
                          <td><?php echo $row['location']?></td>
                          <td><?php echo $row['discription']?></td>

                        </tr>

                      <?php

                    }                    
                  }

          ?>						
                                </table>						
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
						</div>
          
			
      
            

            


                    

             
            
            <!--<div class="job-search">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active py-3" id="pills-job-tab" data-toggle="pill" href="#pills-job" role="tab" aria-controls="pills-job" aria-selected="true">Find A Job</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link py-3" id="pills-candidate-tab" data-toggle="pill" href="#pills-candidate" role="tab" aria-controls="pills-candidate" aria-selected="true">Find A Candidate</a>
                </li>
              </ul>
              <div class="tab-content bg-white p-4 rounded" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                  <form action="#" method="post">
                    <div class="row">
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control" placeholder="eg. Web Developer">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="select-wrap">
                          <span class="icon-keyboard_arrow_down arrow-down"></span>
                          <select name="" id="" class="form-control">
                            <option value="">Category</option>
                            <option value="fulltime">Full Time</option>
                            <option value="fulltime">Part Time</option>
                            
                            <option value="internship">Internship</option>
                            
                         <> </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control form-control-block search-input" id="autocomplete" placeholder="Location" onFocus="geolocate()">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="submit" class="btn btn-primary btn-block" value="Search">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="pills-candidate" role="tabpanel" aria-labelledby="pills-candidate-tab">
                  <form action="#" method="post">
                    <div class="row">
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control" placeholder="eg. Carl Smith">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="select-wrap">
                          <span class="icon-keyboard_arrow_down arrow-down"></span>
                          <select name="" id="" class="form-control">
                            <option value="">Category</option>
                            <option value="fulltime">Full Time</option>
                            <option value="fulltime">Part Time</option>
                        
                            <option value="internship">Internship</option>
                            
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control form-control-block search-input" id="autocomplete" placeholder="Location" onFocus="geolocate()">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="submit" class="btn btn-primary btn-block" value="Search">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div><-->
          </div>
        </div>
      </div>
    </div>  


    
   <!--subscries news letter-->
    <div class="py-3 bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
           <!-- <h2 class="text-white h4 font-weihgt-normal mb-4">Subscribe Newsletter</h2>-->
          </div>
        </div>  
        <form action="" class="row">
          <div class="col-md-7">
            <input type="text" class="form-control border-0 mb-3 mb-md-0" placeholdr="Enter Your Email">
          </div>
          <div class="col-md-3">
            <input type="submit" value="Send" class="btn btn-dark btn-block" style="height: 45px;">  
          </div>
        </form>
      </div>
    </div>
      
    <!-- end subscribes news letter-->
        

        <!-- footer-->
 <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <div class="row">
              <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0 offset-lg-1">
                <h3 class="footer-heading mb-4">For Candidates</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Register</a></li>
                  <li><a href="#">Find Jobs</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Search Jobs</a></li>
                  <li><a href="#">Contact</a></li>
                  </ul>
              </div>
             

              <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0 offset-lg-1">
                <h3 class="footer-heading mb-4">For Employers</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Employer Account</a></li>
                  <li><a href="#">Clients</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Find Candidates</a></li>
                </ul>
              </div>
             

        <div class="col-lg-3 offset-lg-1">
            <h3 class="footer-heading mb-4">Contact Info</h3>
            <ul class="list-unstyled">
              <li>
                <span class="d-block text-white">Address</span>
              Sri&nbsp; Lanka,Kandy</li>
              <li>
                <span class="d-block text-white">Telephone</span>
                027-2247405
              </li>
              <li>
                <span class="d-block text-white">Email</span>
                hirupathu98@gmail.com
              </li>
            </ul>
            
          </div>
         </div>
            </div>
          </div>
          </div>
        <!--End footer-->

             
              

       
   
                
        


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  
	<!-- DataTables JavaScript -->
    <script src="tools/dataTables/js/jquery.dataTables.js"></script>
    <script src="tools/dataTables/js/dataTables.bootstrap.js"></script>
	<script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
  
  <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

  <script src="js/main.js"></script>
    
  </body>
</html>
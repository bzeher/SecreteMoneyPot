<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Appointments</h1>
          <p class="mb-4">

          </p>
 
  
   <!-- List All Appointments-->
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">All Appointments</h6>
            </div>
            <div class="card-body">
					 <?php
							$servername = "localhost";
							$username = "cpuser";
							$password = "Passw0rd";
							$dbname = "cp1";

							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
							// Check connection
							if ($conn->connect_error) {
    								die("Connection failed: " . $conn->connect_error);
							} 

							$sql = "SELECT 
                                    marketingsource.sName as source,
                                    services.sName as servicename,
                                    location.sName AS locationname,
                                    customer.sName AS customerName,
                                    customer.sEmail AS email,
                                    customer.sProfileName AS profilename,
                                    TRIM(CONCAT(customer.sAddress, ' ', customer.sCity, ' ', customer.sState, ' ', customer.sZip)) AS customeraddress,
                                    customer.sPhone AS phone,                                    
                                    appointment.sAddressOverride AS addressoverride,
                                    appointment.iAmountCharged AS charged,
                                    appointment.iAmountCollected AS collected,
                                    appointment.iAppointmentID AS appointmentid,
                                    appointment.iLocationID AS hosting,
                                    DATE_FORMAT(appointment.datDateTime,'%a %d %M %Y') AS date,
                                    DATE_FORMAT(appointment.datDateTime,'%h:%i %p') AS time,
                                    DATE_FORMAT(NOW(),'%a %d %M %Y') AS today
                                     FROM appointment 
                                        LEFT JOIN customer ON appointment.iCustomerID = customer.iCustomerID
                                        LEFT JOIN location ON appointment.iLocationID = location.iLocationID
                                        LEFT JOIN services ON appointment.iServiceID = services.iServiceID
                                        LEFT JOIN marketingsource ON customer.iMarketingSourceID = marketingsource.iMarketingSourceID
                                       WHERE (appointment.datDateTime >= DATE_SUB(NOW(), INTERVAL 1 MONTH) )
                                      ORDER BY appointment.datDateTime";
							$result = $conn->query($sql);
							$hostingaddress ="";
							$today = "";
							$previouseDate = "";
							$cardcolor = "";
							if ($result->num_rows > 0) {
   							 // output data of each row
   							 	while($row = $result->fetch_assoc()) {
   							 	   $today = "";
   							 	   $hostingaddress="";
   							 	   $cardcolor = "border-left-danger";
   							 	   $currentDate = $row["date"];
   							 	 //Dislay the date of the next appointments to be listed
   							 	 if($currentDate != $previouseDate){
   							 	     if($row["date"] == $row["today"]){
   							 	         $today = "(Today)";
   							 	     }
   							 	     echo "<h3>". $row["date"] . " ". $today ."</h3>";
   							 	     $previouseDate = $row["date"];
   							 	    }
   							 	 //Set the color of the card to green if complete   
   							 	    if($row["collected"] != 0){
   							 	        $cardcolor = "border-left-success";
   							 	    }
   							 	    
   							 	 //Set the hosting address link
   							 	    if($row["hosting"] == 1){
   							 	        if(trim($row["addressoverride"]) != ""){
   							 	            $hostingaddress = "Out Call: <a href=\"https://www.google.com/maps/place/".  urlencode($row["addressoverride"]) . "\">" . $row["addressoverride"]. "</a>"; 
   							 	        }else{
   							 	            $hostingaddress = "Out Call: <a href=\"https://www.google.com/maps/place/". urlencode($row["customeraddress"]). "\">" . $row["customeraddress"]. "</a>"; 
   							 	        }  
   							 	    }else{
   							 	        $hostingaddress = "Incall: ". $row["locationname"];
   							 	    }
   				echo "
              <div class=\"card ". $cardcolor . " shadow mb-4\">
                <!-- Card Header - Dropdown -->
                <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                  <h6 class=\"m-0 font-weight-bold text-primary\">". $row["customerName"]." 
                   <br>". $row["time"] ."</h6>
                  <div class=\"dropdown no-arrow\">
                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                      <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                    </a>

              
                  </div>
                </div>
                
                <div class=\"card-body\">Contact: ";
              if("" != trim($row["phone"])){
                  echo "<a href=\"tel:". $row["phone"] . "\">". $row["phone"] ."</a>&nbsp;";
   				}
   				
   				//if("" != trim($row["email"])){
   				   // echo " ". $row["email"]) ." ";
   				//}
   				
   				if("" != trim($row["profilename"])){
   				    echo " ('". $row["profilename"]. "' from ". $row["source"]. ")";
   				}


            echo "<br>"
              . $hostingaddress. "<br> 
              Service: ". $row["servicename"]. ".<br>"
                ."</div>
              </div>";
    							}
							} else {
   							 echo "0 results";
							}
						$conn->close();
						?>
            </div>



        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer 
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
       End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  
  <script>

  $(document).ready(function () {
	    // Handler for .ready() called.
	    $('html, body').animate({
	        scrollTop: $('.border-left-success:last').offset().top
	    }, 'slow');
	});
	
  
  </script>

</body>

</html>

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

<body id="page-top" class="sidebar-toggled">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CP Admin <sup>v1.1</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->

      
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-chart-line"></i>
          <span>Reports</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading 
      <div class="sidebar-heading">
        Configure
      </div>

      Nav Item - Pages Collapse Menu 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider
      <hr class="sidebar-divider">

      <!-- Heading
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts 
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
*/
       Nav Item - Tables -->
       
       <li class="nav-item active">
        <a class="nav-link" href="appointment.php">
          <i class="fas fa-fw fa-calendar-check"></i>
          <span>Appointments</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="customers.php">
          <i class="fas fa-fw fa-users"></i>
          <span>Customers</span></a>
      </li>
      
 
-->
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter"></span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <!--<span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                  <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> -->
                 <b>Bliss Bodywork</b>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Appointments</h1>
          <p class="mb-4">

 		  <div class="my-2"></div>
                  <button type="button" class="btn btn-primary" data-toggle="modal" onclick="addNewAppointment()" data-target="#appointmentModal">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Add Appointment</span>
                  </button>
          </div>
          </p>
 
          
    <!-- Appointment Modal-->
  <div class="modal fade" id="appointmentModal" tabindex="-1" role="dialog" aria-labelledby="appointmentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="appointmentModalLabel">Appointment</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <!-- Appointment Modal Body-->
       <div class="container">
      
    <div class="form-group">
      
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

							$sql = "SELECT * FROM customer ORDER BY sName";
							$result = $conn->query($sql);
							$previouseDate = "";
							if ($result->num_rows > 0) {
   							 // output data of each row
							    echo "<label for=\"customer\">Customer:</label>
                                                <select class=\"form-control\" id=\"customer\" name=\"customer\">";
   							 	while($row = $result->fetch_assoc()) {
   							 	    echo "<option value=\"". $row["iCustomerID"] ."\">". $row["iCustomerID"]. " - ". $row["sName"]. " (".  $row["sPhone"]. ")</option>";
    							}
    							echo "</select>";
							} else {
   							 echo "0 results";
							}
						$conn->close();
						?>
    </div>
    
    <div class="form-group">
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

							$sql = "SELECT * FROM services";
							$result = $conn->query($sql);
							$previouseDate = "";
							if ($result->num_rows > 0) {
   							 // output data of each row
							    echo "<label for=\"service\">Service:</label>
                                                <select class=\"form-control\" id=\"service\" name=\"service\">";
   							 	while($row = $result->fetch_assoc()) {
   							 	    echo "<option value=\"". $row["iServiceID"] ."\">". $row["iServiceID"]. " - ". $row["sName"]. "</option>";
    							}
    							echo "</select>";
							} else {
   							 echo "0 results";
							}
						$conn->close();
						?>
    </div>
    
    <div class="form-group">
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

							$sql = "SELECT * FROM location";
							$result = $conn->query($sql);
							$previouseDate = "";
							if ($result->num_rows > 0) {
   							 // output data of each row
							    echo "<label for=\"location\">Location:</label>
                                                <select class=\"form-control\" id=\"location\" name=\"location\">";
   							 	while($row = $result->fetch_assoc()) {
   							 	    echo "<option value=\"". $row["iLocationID"] ."\">". $row["iLocationID"]. " - ". $row["sName"]. "</option>";
    							}
    							echo "</select>";
							} else {
   							 echo "0 results";
							}
						$conn->close();
						?>
    </div>
    
        <div class="form-group">
      <label for="charged">Charged:</label>
      <input type="text" class="form-control" id="charged" placeholder=" $ Charged" name="charged">
    </div>
    
    <div class="form-group">
      <label for="collected">Collected:</label>
      <input type="text" class="form-control" id="collected" placeholder="$ Collected" name="collected">
    </div>   
    
        <div class="form-group">
      <label for="time">Time:</label>
      <input type="text" class="form-control" id="time" placeholder="Time" name="time">
    </div>

    
        <div class="form-group">
      <label for="sessionnotes">Session Notes</label>
      <input type="text" class="form-control" id="sessionnotes" placeholder="Session Notes" name="sessionnotes">
    </div>

    
        <div class="form-group">
      <label for="addressoverride">Address Override:</label>
      <input type="text" class="form-control" id="addressoverride" placeholder="Temporary Address" name="addressoverride">
    </div>
       
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" id="saveappointment" onclick="saveAppointment(-1)" type="button">Save</button>
        </div>
      </div>
    </div>
  </div>
          </div>
  <!-- End Appointment Modal-->
  
 
  
     <!-- Customer History Modal-->
  <div class="modal fade" id="customerHistoryModal" tabindex="-1" role="dialog" aria-labelledby="customerHistoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="customerHistoryModalLabel">Customer History</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <!-- Customer Modal History Body-->
       <div class="container">
 		<div id="CustomerHistorybody"></div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- End Customer History Modal-->
  
   <!-- List All Appointments-->
          <div class="card shadow mb-4">
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
                                    customer.iCustomerID AS customerid,
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
                                    WHERE (appointment.datDateTime >= DATE_SUB(NOW(), INTERVAL 1 MONTH))
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
                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\" aria-labelledby=\"dropdownMenuLink\">
                      <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#appointmentModal\" onclick=\"editAppointment(". $row["appointmentid"].")\">Edit Appointment</a>
                       <a class=\"dropdown-item\" href=\"#\" onclick=\"deleteAppointment(". $row["appointmentid"].")\">Delete Appointment</a>
                    <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#customerHistoryModal\" onclick=\"viewCustomerHistory(".$row["customerid"] .")\">View Customer History</a>
                    </div>
                  </div>
                </div>
                
                <div class=\"card-body\">Contact: ";
              if("" != trim($row["phone"])){
                  echo "<a href=\"https://voice.google.com/u/0/messages?itemId=t.%2B1". str_replace("-","",$row["phone"]) . "\">". $row["phone"] ."</a>&nbsp;";
   				}

   		    echo "<br>Source: ". $row["source"];
   		    if("" != trim($row["profilename"])){
   		        echo " (". $row["profilename"]. ")";
   		    }
            echo "<br>"
              . $hostingaddress. "<br> 
              Service: ". $row["servicename"]. ".<br>"
              ." Charged: $" . $row["charged"]. ".00<br>"
              ." Collected: $". $row["collected"]. ".00"
                
                ."</div>
              </div>";
    							}
							} else {
   							 echo "0 results";
							}
						$conn->close();
						?>
            </div>
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
	
  function saveAppointment(iAppointmetID){
	  var action='save';
	  var appointmentid=iAppointmetID;
	  var customer=$("#customer").val();
      var service=$("#service").val();
      var location=$("#location").val();
      var charged=$("#charged").val();
      var collected=$("#collected").val();
      var time=$("#time").val();
      var sessionnotes=$("#sessionnotes").val();
      var addressoverride=$("#addressoverride").val();

      $.ajax({
          url:'appointmentaction.php',
          method:'POST',
          data:{
              action:action,
              appointmentid:appointmentid,
              customer:customer,
              service:service,
              location:location,
              charged:charged,
              collected:collected,
              time:time,
              sessionnotes:sessionnotes,
              addressoverride:addressoverride,
          },
         success:function(data){
        	 window.location.reload(true);
         }
      });
	  
  };

  function deleteAppointment(iAppointmetID){

	  if(confirm("Are you sure you want to delete this appointment?")){
		  var action='delete';
		  var appointmentid=iAppointmetID;


	      $.ajax({
	          url:'appointmentaction.php',
	          method:'POST',
	          data:{
	        	  action:action,
	        	  appointmentid:appointmentid

	          },
	         success:function(data){
	        	 window.location.reload(true);
	         }
	      });
		}
  }

  function addNewAppointment(){
	  $("#saveappointment").attr("onclick", "saveAppointment(-1)"); 
	  $('#customer').val("");  
      $('#service').val("");  
      $('#location').val("");  
      $('#charged').val("0");  
      $('#collected').val("0");
      $('#time').val(new Date().toISOString().slice(0, 19).replace('T', ' '));  
      $('#sessionnotes').val("");  
      $('#addressoverride').val("");  
      $("#saveappointment").attr("onclick", "saveAppointment(" + appointmentid + ")");
  }
  
  function editAppointment(iAppointmetID){
	  var action='edit';
	  var appointmentid=iAppointmetID;


      $.ajax({
          url:'appointmentaction.php',
          method:'POST',
          dataType:"json",
          data:{
        	  action:action,
        	  appointmentid:appointmentid

          },
         success:function(data){
        	 $('#customer').val(data.iCustomerID);  
             $('#service').val(data.iServiceID);  
             $('#location').val(data.iLocationID);  
             $('#charged').val(data.iAmountCharged);  
             $('#collected').val(data.iAmountCollected);  
             $('#time').val(data.datDateTime);  
             $('#sessionnotes').val(data.mSessionNotes);  
             $('#addressoverride').val(data.sAddressOverride);  
             $("#saveappointment").attr("onclick", "saveAppointment(" + appointmentid + ")");
         }
      });

  }
  
  function viewCustomerHistory(iCustomerID){
	  var action='view';
	  var customerid=iCustomerID;
	  $('#CustomerHistorybody').html("");

      $.ajax({
          url:'customeraction.php',
          method:'POST',
          dataType:"json",
          data:{
        	  action:action,
        	  customerid:customerid
          },
         success:function(data){
        	 $('#customerHistoryModalLabel').html("<b>" 
                	 + data[0].historycustomername + "</b><br><h6>Desc.: " 
                	 + data[0].historydescription + "<br>Notes: " 
                	 + data[0].historynotes + "</h6>");
        	 for (i = 0; i < data.length; i++) {
        		 $('#CustomerHistorybody').append("<p><b>" + data[i].historyappointmentdate + "</b> - $" + data[i].historycollected + "<br>" + data[i].historysessionnotes + "</p>");
        	 } 
         }
      });

  }
  function editCustomer(iCustomerID){
	  var action='edit';
	  var customerid=iCustomerID;


      $.ajax({
          url:'customeraction.php',
          method:'POST',
          dataType:"json",
          data:{
        	  action:action,
        	  customerid:customerid

          },
         success:function(data){
        	 $('#name').val(data.sName);
        	 $('#source').val(data.iMarketingSourceID);   
             $('#profilename').val(data.sProfileName);  
             $('#phone').val(data.sPhone);  
             $('#email').val(data.sEmail);  
             $('#address').val(data.sAddress);  
             $('#city').val(data.sCity);  
             $('#state').val(data.sState);  
             $('#zip').val(data.sZip);
             $('#addressnotes').val(data.sAddressNotes); 
             $('#description').val(data.sPhysicalDescription);  
             $('#notes').val(data.sNotes);    
             $("#savecustomer").attr("onclick", "saveCustomer(" + customerid + ")");
         }
      });

  }
  </script>

</body>

</html>

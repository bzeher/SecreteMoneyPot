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
$action=$_POST['action'];
$customerid=$_POST['customerid'];

if($action == "save"){
    $name=$_POST['name'];
    $source=$_POST['source'];
    $profilename=$_POST['profilename'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $addressnotes=$_POST['addressnotes'];
    $description=$_POST['description'];
    $notes=$_POST['notes'];

    if("-1" == trim($customerid)){
        $sql="INSERT INTO `customer` (`sName`, `iMarketingSourceID`, `sProfileName`, `sPhone`, `sEmail`, `sAddress`, `sCity`, `sState`,`sZip`,`sAddressNotes`,`sPhysicalDescription`, `sNotes`, `datCreationDate`) VALUES ('$name', $source, '$profilename','$phone', '$email','$address', '$city','$state', '$zip','$addressnotes', '$description','$notes', NOW())";
    
    }else{
        $sql="UPDATE `customer` SET `sName`='$name', `iMarketingSourceID`=$source, `sProfileName`='$profilename', `sPhone`='$phone', `sEmail`='$email', `sAddress`='$address', `sCity`='$city', `sState`='$state', `sZip`='$zip', `sAddressNotes`='$addressnotes',`sPhysicalDescription`='$description',`sNotes`='$notes',`datCreationDate`=NOW() WHERE (`iCustomerID`=$customerid)  ";
    }
}

if($action == "delete"){
    $customerid=$_POST['customerid'];
    $sql="DELETE FROM `customer` WHERE (iCustomerID= $customerid )";
}

if($action == "edit"){
    $sql="SELECT * FROM customer WHERE (iCustomerID= $customerid) ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
    exit();
}

if($action == "view"){
    $sql="SELECT customer.sNotes AS historynotes, customer.sPhysicalDescription AS historydescription, customer.sName AS historycustomername, appointment.mSessionNotes AS historysessionnotes, appointment.iAmountCollected AS historycollected, DATE_FORMAT(appointment.datDateTime,'%a %d %M %Y') AS historyappointmentdate FROM appointment LEFT JOIN customer ON customer.iCustomerID = appointment.iCustomerID WHERE (appointment.iCustomerID= $customerid) ORDER BY datDateTime";
    $result = mysqli_query($conn, $sql);
    $result_array = array();
    
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
          $row_array = array();
          $row_array['historycustomername'] = $row['historycustomername'];
          $row_array['historydescription'] = $row['historydescription'];
          $row_array['historynotes'] = $row['historynotes'];
          $row_array['historysessionnotes'] = $row['historysessionnotes'];
          $row_array['historycollected'] = $row['historycollected'];
          $row_array['historyappointmentdate'] = $row['historyappointmentdate'];
          array_push($result_array,$row_array);
     }
    
     echo json_encode($result_array);
     exit();
}

if ($conn->query($sql)) {
    echo "success !";
}
else
{
    echo $sql;
}

?>
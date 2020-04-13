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
$appointmentid=$_POST['appointmentid'];

if($action == "save"){
    
    $customer=$_POST['customer'];
    $service=$_POST['service'];
    $location=$_POST['location'];
    $charged=$_POST['charged'];
    $collected=$_POST['collected'];
    $time=$_POST['time'];
    $sessionnotes=$_POST['sessionnotes'];
    $addressoverride=$_POST['addressoverride'];

    if("-1" == trim($appointmentid)){
        $sql="INSERT INTO `appointment` (`iCustomerID` , `iServiceID` , `iLocationID` , `iAmountCharged` , `iAmountCollected` , `datDateTime` ,`mSessionNotes`,`sAddressOverride`, `datCreationDate`) VALUES ($customer, $service,$location, $charged,$collected, '$time','$sessionnotes', '$addressoverride',NOW())";
    }else{
        $sql="UPDATE `appointment` SET `iCustomerID`= $customer, `iServiceID`=$service, `iLocationID`=$location, `iAmountCharged`=$charged, `iAmountCollected`=$collected, `datDateTime`='$time', `mSessionNotes`='$sessionnotes', `sAddressOverride`='$addressoverride'  WHERE (iAppointmentID= $appointmentid )";
    }   
}

if($action == "delete"){
    $sql="DELETE FROM `appointment` WHERE (iAppointmentID= $appointmentid )";
}


if($action == "edit"){
    $sql="SELECT iAppointmentID, iCustomerID, iServiceID, iLocationID, iAmountCharged, iAmountCollected, datCreationDate, datDateTime, mSessionNotes, sAddressOverride FROM appointment WHERE (iAppointmentID= $appointmentid) ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo json_encode($row); 
    exit();
}



if ($conn->query($sql)) {
    echo "success!";
}
else
{
    echo $sql;
}

?>
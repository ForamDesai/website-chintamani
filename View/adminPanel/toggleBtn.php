<?php



include('../../Helper/connect.php');

$lease_id = $_POST['lease_id'];
$query = "SELECT FK_Status FROM leasing_master WHERE PK_lease = $lease_id";
$fetch_status = mysqli_query($con,$query);

$row = mysqli_fetch_array($fetch_status);

$lease_status = $row['FK_Status'];

if($lease_status === "8"){
    $status = '9';
}
else{
    $status = '8';
}

$update_query  = "UPDATE leasing_master SET FK_Status = $status WHERE PK_lease = $lease_id ";
$result = mysqli_query($con,$update_query);

// if($result){
//     echo $status;
// }

?>

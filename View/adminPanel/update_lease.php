<?php 

include("../../Helper/connect.php");

if(isset($_POST['submit'])){
    $id = $_POST['pid'];
    $Lease_Name = $_POST['Lease_Name'];
    $Lease_Alias = $_POST['Lease_Alias'];
    $ShortDescription = $_POST['ShortDescription'];
    $LongDescription = $_POST['LongDescription'];
    $CarpetArea = $_POST['CarpetArea'];
    $CompleteAddress = $_POST['CompleteAddress'];
    $Location = $_POST['Location'];
    $Price = $_POST['Price'];
    $Packs = $_POST['Packs'];
    $FloorPlanURL = $_POST['FloorPlanURL'];
    $Images = $_POST['Images'];
    $ThumbnailURL = $_POST['ThumbnailURL'];
    $VideoURL = $_POST['VideoURL'];
    $Furnished_Unfurnished = $_POST['Furnished/Unfurnished'];
    $BuildUpArea = $_POST['BuildUpArea'];
    $CabinsCount = $_POST['CabinsCount'];
    $ReceptionArea = $_POST['ReceptionArea'];
    $W_S = $_POST['W/S'];
    $SR_Manage = $_POST['SR_Manage'];
    $ConferenceRoomCount = $_POST['ConferenceRoomCount'];
    $MeetingRoomCount = $_POST['MeetingRoomCount'];
    $ServerRoomCount = $_POST['ServerRoomCount'];
    $StoreroomCount = $_POST['StoreroomCount'];
    $GeneralWashroom = $_POST['GeneralWashroom'];
    $GentsWashroomCount = $_POST['GentsWashroomCount'];
    $ladiesWashroom = $_POST['ladiesWashroom'];
    $PantryCount = $_POST['PantryCount'];
    $SR_Manage = $_POST['SR_Manage'];
    $Keywords = $_POST['Keywords'];
    $Metatitle = $_POST['Metatitle'];
    $DisplayOrder = $_POST['DisplayOrder'];
    $FK_Status = $_POST['DisplayOrder'];
    $isDeleted = $_POST['isDeleted'];
    $LeaseOgTitle = $_POST['LeaseOgTitle'];
    $LeaseOgTag = $_POST['LeaseOgTag'];
    $MetaDescription = $_POST['MetaDescription'];
    $HiTag = $_POST['HiTag'];
    $TwitterTag = $_POST['TwitterTag'];
    $altTag = $_POST['altTag'];


 
    //  $BlogImage = $_FILES['BlogImage'];


    // $BlogImage_Name = str_replace(' ', '', $BlogImage['name']); 
  


    // $BlogImage_filePath = $BlogImage['tmp_name'];


    // // echo $filePath;
    // $BlogImage_fileDest ="uploads/".$GalleryImage1_Name;



 
    // // Saves file locally in folder: uploads/
    // move_uploaded_file($BlogImage_filePath,$BlogImage_fileDest);

    
    // echo $fileDest;


    // echo $InteriorTitle,$id;

$query = "UPDATE `leasing_master` SET `Lease_Name` = '$Lease_Name', `Lease_Alias` = '$Lease_Alias', `ShortDescription` = '$ShortDescription', `LongDescription` = '$LongDescription', `CarpetArea` = '$CarpetArea', `CompleteAddress` = '$CompleteAddress', `Location` = '$Location', `Price` = '$Price', `Packs` = '$Packs', `ThumbnailURL` = '$ThumbnailURL', `FloorPlanURL` = '$FloorPlanURL', `Images` = '$Images', `VideoURL` = '$VideoURL', `Furnished/Unfurnished` = '$Furnished_Unfurnished', `BuildUpArea` = '$BuildUpArea', `CabinsCount` = '$CabinsCount', `ReceptionArea` = '$ReceptionArea', `W/S` = '$W_S', `SR_Manage` = '$SR_Manage', `ConferenceRoomCount` = '$ConferenceRoomCount', `MeetingRoomCount` = '$MeetingRoomCount', `ladiesWashroom` = '$ladiesWashroom', `PantryCount` = '$PantryCount', `StoreroomCount` = '$StoreroomCount', `TwitterTag` = '$TwitterTag', `HiTag` = '$HiTag', `Keywords` = '$Keywords', `LeaseOgTag` = '$LeaseOgTag', `LeaseOgTitle` = '$LeaseOgTitle', `altTag` = '$altTag', `MetaDescription` = '$MetaDescription', `Metatitle` = '$Metatitle', `DisplayOrder` = '$DisplayOrder', `FK_Status` = '$FK_Status' WHERE `leasing_master`.`PK_lease` = $id;";

$result = mysqli_query($con,$query);

if($result){
    echo 'Image Uploaded';
}
else{
 echo "uploaded failed";

}
header("location:lease.php");


    
}


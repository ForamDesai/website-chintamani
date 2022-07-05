<?php

include("../../Helper/connect.php");


$id = $_POST['pid'];
$Lease_Name = $_POST['LeaseName'];
$Lease_Alias = $_POST['LeaseAlias'];
$ShortDescription = $_POST['ShortDescription'];
$LongDescription = $_POST['LongDescription'];
$CarpetArea = $_POST['CarpetArea'];
$CompleteAddress = $_POST['CompleteAddress'];
$Location = $_POST['Location'];
$Price = $_POST['Price'];
$Packs = $_POST['Packs'];
$FloorPlanURL = $_POST['FloorPlanURL'];
// $Images = $_POST['Images'];
$ThumbnailURL = $_POST['ThumbnailURL'];
$VideoURL = $_POST['VideoURL'];
$Furnished_Unfurnished = $_POST['Furnished/Unfurnished'];
$BuildUpArea = $_POST['BuildUpArea'];
// $CabinsCount = $_POST['CabinsCount'];
// $ReceptionArea = $_POST['ReceptionArea'];
// $W_S = $_POST['W/S'];
// $SR_Manage = $_POST['SRManage'];
// $ConferenceRoomCount = $_POST['ConferenceRoomCount'];
// $MeetingRoomCount = $_POST['MeetingRoomCount'];
// $ServerRoomCount = $_POST['ServerRoomCount'];
// $StoreroomCount = $_POST['StoreroomCount'];
// $GeneralWashroomCount = $_POST['GeneralWashroomCount'];
// $GentsWashroomCount = $_POST['GentsWashroomCount'];
// $ladiesWashroom = $_POST['ladiesWashroom'];
// $PantryCount = $_POST['PantryCount'];
// $SR_Manage = $_POST['SR_Manage'];
$Keywords = $_POST['Keywords'];
$MetaTitle = $_POST['MetaTitle'];
$DisplayOrder = $_POST['DisplayOrder'];
$FK_Status = $_POST['DisplayOrder'];
// $isDeleted = $_POST['isDeleted'];
$LeaseOgTitle = $_POST['LeaseOgTitle'];
$LeaseOgTag = $_POST['LeaseOgTag'];
$MetaDescription = $_POST['MetaDescription'];
$HiTag = $_POST['HiTag'];
$TwitterTag = $_POST['TwitterTag'];
$altTag = $_POST['altTag'];


$errMsg = '';



if ($errMsg == '') {
    $link->where('PK_lease', $id);
    $ad = $link->update("leasing_master", array("Lease_Name" => $Lease_Name, "Lease_Alias" => $Lease_Alias, "ShortDescription" => $ShortDescription, "LongDescription" => $LongDescription, "CarpetArea" => $CarpetArea, "CompleteAddress" => $CompleteAddress, "Location" => $Location, "Price" => $Price, "Packs" => $Packs, "ThumbnailURL" => $ThumbnailURL, "FloorPlanURL" => $FloorPlanURL, "VideoURL" => $VideoURL, "Furnished/Unfurnished" => $Furnished_Unfurnished, "BuildUpArea" => $BuildUpArea, "TwitterTag" => $TwitterTag, "HiTag" => $HiTag, "Keywords" => $Keywords, "LeaseOgTag" => $LeaseOgTag, "LeaseOgTitle" => $LeaseOgTitle, "altTag" => $altTag, "LeaseOgTitle" => $LeaseOgTitle, "MetaDescription" => $MetaDescription, "MetaTitle" => $MetaTitle, "DisplayOrder" => $DisplayOrder, "FK_Status" => $FK_Status));
}


if ($_FILES['Images']['size'] > 0) {
    echo "image section";
    $result = addImage('Images');
    if ($result) {
        $link->where('PK_lease', $id);
        $a1 = $link->update("leasing_master", array("Images" => $result));
        if ($a1) {
            echo "successfully uploded";
        } else {
            echo "failed";
        }
    }
    
}




function  addImage($imageName)
{
    
    $target_dir = "../../uploads/lease";
    $target_file = $target_dir . basename($_FILES[$imageName]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES[$imageName]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES[$imageName]["tmp_name"], $target_file)) {
            return $target_file;
        }
    }
}



if (isset($_POST['submit'])) {
    // echo '<pre>';
    // print_r($_POST);
    $delete_entries = mysqli_query($con, "delete from lease_amenities where FK_Lease = $id");
    foreach ($_POST as $key => $count) {
        if (is_int($key) && $count != null) {
            $insert_query = mysqli_query($con, "insert into lease_amenities (FK_Lease,FK_amenities,Count) values ($id,$key,$count) ");
        }
    }
}



header('location:lease.php');

?>

<?php
	ob_start();
?>
<?php
include("../../Helper/connect.php");












$Lease_Name = $_POST['LeaseName'];
$Lease_Alias = $_POST['LeaseAlias'];
$ShortDescription = $_POST['ShortDescription'];
$LongDescription = $_POST['LongDescription'];
// $CarpetArea = $_POST['CarpetArea'];
$CompleteAddress = $_POST['CompleteAddress'];
$Location = $_POST['Location'];
$Price = $_POST['Price'];
$Packs = $_POST['Packs'];
$FloorPlanURL = $_POST['FloorPlanURL'];
// $Images = $_POST['Images'];
$ThumbnailURL = $_POST['ThumbnailURL'];
$VideoURL = $_POST['VideoURL'];
$Furnished_Unfurnished = $_POST['Furnished/Unfurnished'];
// $BuildUpArea = $_POST['BuildUpArea'];
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


// Seo tools
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
    $aminitiesId = 0;
    $locationId = 0;

    //add Aminities ID
    // if($aminities == 'Commercial'){
    //     $aminitiesId = 1;
    // }else if($aminities == 'Residential'){
    //     $aminitiesId = 2;
    // }
    // //Add Location ID
    // if($location == 'Commercial'){
    //     $locationId = 1;
    // }else if($location == 'Residential'){
    //     $locationId = 2;
    // }

    // if(isset($_REQUEST['pid']) && $_REQUEST['pid'] >0) {
    //     $pid = $_REQUEST['pid'];
    //     $link->where("PK_Lease",$pid);
    //     $ad=$link->update("leasing_master",array("ProjectName"=>$leaseProjectName,"Alias"=>$projectAlias,"ShortDescription"=>$shortDescription,"LongDescription"=>$longDescription,"Price"=>$price,"FK_Location"=>$locationId,"Area"=>$area,"ParkingSpace"=>$parkingSpace,"FK_Aminities"=>$aminitiesId));
    // } else


        if($errMsg == ''){
            $ad= $link->insert("leasing_master",array("Lease_Name"=>$Lease_Name,"Lease_Alias"=>$Lease_Alias,"ShortDescription"=>$ShortDescription,"LongDescription"=>$LongDescription,"CompleteAddress"=>$CompleteAddress,"Location"=>$Location,"Price"=>$Price,"Packs"=>$Packs,"ThumbnailURL"=>$ThumbnailURL,"FloorPlanURL"=>$FloorPlanURL,"VideoURL"=>$VideoURL,"Furnished/Unfurnished"=>$Furnished_Unfurnished,"TwitterTag"=>$TwitterTag,"HiTag"=>$HiTag,"Keywords"=>$Keywords,"LeaseOgTag"=>$LeaseOgTag,"LeaseOgTitle"=>$LeaseOgTitle,"altTag"=>$altTag,"LeaseOgTitle"=>$LeaseOgTitle,"MetaDescription"=>$MetaDescription,"MetaTitle"=>$MetaTitle,"DisplayOrder"=>$DisplayOrder,"FK_Status"=>$FK_Status));
    }

   
    
    // if($errMsg == ''){
    //         $ad= $link->insert("leasing_master",array("Lease_Name"=>$Lease_Name,"Lease_Alias"=>$Lease_Alias,"ShortDescription"=>$ShortDescription,"LongDescription"=>$LongDescription,"CarpetArea"=>$CarpetArea,"CompleteAddress"=>$CompleteAddress,"Location"=>$Location,"Price"=>$Price,"Packs"=>$Packs,"ThumbnailURL"=>$ThumbnailURL,"FloorPlanURL"=>$FloorPlanURL,"VideoURL"=>$VideoURL,"Furnished/Unfurnished"=>$Furnished_Unfurnished,"BuildUpArea"=>$BuildUpArea,"CabinsCount"=>$CabinsCount,"ReceptionArea"=>$ReceptionArea,"W/S"=>$W_S,"SR_Manage"=>$SR_Manage,"ConferenceRoomCount"=>$ConferenceRoomCount,"MeetingRoomCount"=>$MeetingRoomCount,"ServerRoomCount"=>$ServerRoomCount,"GeneralWashroom"=>$GeneralWashroomCount,"GentsWashroomCount"=>$GentsWashroomCount,"ladiesWashroom"=>$ladiesWashroom,"PantryCount"=>$PantryCount,"StoreroomCount"=>$StoreroomCount,"TwitterTag"=>$TwitterTag,"HiTag"=>$HiTag,"Keywords"=>$Keywords,"LeaseOgTag"=>$LeaseOgTag,"LeaseOgTitle"=>$LeaseOgTitle,"altTag"=>$altTag,"LeaseOgTitle"=>$LeaseOgTitle,"MetaDescription"=>$MetaDescription,"MetaTitle"=>$MetaTitle,"DisplayOrder"=>$DisplayOrder,"FK_Status"=>$FK_Status));
    // }

    if($ad) {
        if ($_FILES['Images']['size'] > 0) {
            $result = addImage('Images');
            if($result)
            {
                $link->where('PK_lease',$ad);
                    $a1=$link->update("leasing_master",array("Images"=>$result));
                    if($a1)
                    {		
                        echo "successfully uploded";
                    }	
                    else {
                        echo "failed";
                    }
            }
            
        }
    //     if ($_FILES['ProjectFloorPlantURL']['size'] > 0) {
    //         $result = addImage('ProjectFloorPlantURL');
    //         if($result)
    //         {
    //             $link->where('PK_Lease',$ad);
    //                 $a1=$link->update("lease_master",array("ProjectFloorPlantURL"=>$result));
    //                 if($a1)
    //                 {		
    //                 }	
    //                 else {
    //                     //echo $ad;
    //                 }
    //         }
            
    //     }
    //     if ($_FILES['ProductBrocherURL']['size'] > 0) {
    //         $result = addImage('ProductBrocherURL');
    //         if($result)
    //         {
    //             $link->where('PK_Lease',$ad);
    //                 $a1=$link->update("lease_master",array("ProductBrocherURL"=>$result));
    //                 if($a1)
    //                 {		
    //                 }	
    //                 else {
    //                     //echo $ad;
    //                 }
    //         }
            
    //     }
    //     if ($_FILES['ProductImage1']['size'] > 0) {
    //         $result = addImage('ProductImage1');
    //         if($result)
    //         {
    //             $link->where('PK_Lease',$ad);
    //                 $a1=$link->update("lease_master",array("ProductImage1"=>$result));
    //                 if($a1)
    //                 {		
    //                 }	
    //                 else {
    //                     //echo $ad;
    //                 }
    //         }
            
    //     }
    //     if ($_FILES['ProductImage2']['size'] > 0) {
    //         $result = addImage('ProductImage2');
    //         if($result)
    //         {
    //             $link->where('PK_Lease',$ad);
    //                 $a1=$link->update("lease_master",array("ProductImage2"=>$result));
    //                 if($a1)
    //                 {		
    //                 }	
    //                 else {
    //                     //echo $ad;
    //                 }
    //         }
            
    //     }
    //     if ($_FILES['ProductImage3']['size'] > 0) {
    //         $result = addImage('ProductImage3');
    //         if($result)
    //         {
    //             $link->where('PK_Lease',$ad);
    //                 $a1=$link->update("lease_master",array("ProductImage3"=>$result));
    //                 if($a1)
    //                 {		
    //                 }	
    //                 else {
    //                     //echo $ad;
    //                 }
    //         }
            
    //     }
    //     if ($_FILES['ProductImage4']['size'] > 0) {
    //         $result = addImage('ProductImage4');
    //         if($result)
    //         {
    //             $link->where('PK_Lease',$ad);
    //                 $a1=$link->update("lease_master",array("ProductImage4"=>$result));
    //                 if($a1)
    //                 {		
    //                 }	
    //                 else {
    //                     //echo $ad;
    //                 }
    //         }
            
    //     }
    //     if ($_FILES['ProductImage5']['size'] > 0) {
    //         $result = addImage('ProductImage5');
    //         if($result)
    //         {
    //             $link->where('PK_Lease',$ad);
    //                 $a1=$link->update("lease_master",array("ProductImage5"=>$result));
    //                 if($a1)
    //                 {		
    //                 }	
    //                 else {
    //                     //echo $ad;
    //                 }
    //         }
            
    //     }
    //     if ($_FILES['ProductImage6']['size'] > 0) {
    //         $result = addImage('ProductImage6');
    //         if($result)
    //         {
    //             $link->where('PK_Lease',$ad);
    //                 $a1=$link->update("lease_master",array("ProductImage6"=>$result));
    //                 if($a1)
    //                 {		
    //                 }	
    //                 else {
    //                     //echo $ad;
    //                 }
    //         }
            
    //     }
        header('location:lease.php');
        
    }

    function  addImage($imageName){
		$target_dir = "../../uploads/lease";
		$target_file = $target_dir . basename($_FILES[$imageName]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES[$imageName]["tmp_name"]);
		if($check !== false) {
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
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif") {
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




    $query1 = "select * from leasing_master";
$exce1 = mysqli_query($con,$query1);
foreach($exce1 as $a){
    $row_number =  $a['PK_lease'];
}



if(isset($_POST['submit'])){
    echo '<pre>';
    // print_r($_POST);
   
    foreach($_POST as $key=>$value){
        
        if(is_int($key) && $value != null){
            // echo $value;
            echo "PK_amenity=" . $key . ", count=" . $value;
            echo "<br>";
            $test_query = "select * from amenities_master where Pk_amenities = $key ";

            $query = "insert into lease_amenities (FK_Lease,FK_amenities,Count) values ($row_number,$key,$value)";
            $run = mysqli_query($con,$query);

            $exce = mysqli_query($con,$test_query);
            echo '<pre>';
            while($row = mysqli_fetch_array($exce)){
                print_r($row['amenity_name']);
            }
           


        }
      
    }
   

    

}




?>
<?php 

include("../../Helper/connect.php");


// $GalleryImage1 = $_POST['GalleryImage1'];
// $GalleryImage2 = $_POST['GalleryImage2'];
// $GalleryImage3 = $_POST['GalleryImage3'];
// $GalleryImage4 = $_POST['GalleryImage4'];

// echo $GalleryImage1,$id;
if(isset($_POST['submit'])){

    $id = $_POST['pid'];
$InteriorTitle = $_POST['InteriorTitle'];
$interior_alias = $_POST['interior_alias'];
$MetaTitle = $_POST['MetaTitle'];
$MetaDescription = $_POST['MetaDescription'];
$altTag = $_POST['altTag'];
$Keywords = $_POST['Keywords'];


    echo $id;
 
     $GalleryImage1 = $_FILES['GalleryImage1'];
     $GalleryImage2 = $_FILES['GalleryImage2'];
     $GalleryImage3 = $_FILES['GalleryImage3'];
     $GalleryImage4 = $_FILES['GalleryImage4'];

    //  print_r($GalleryImage1);

    $GalleryImage1_Name = str_replace(' ', '', $GalleryImage1['name']); 
    $GalleryImage2_Name = str_replace(' ', '', $GalleryImage2['name']); 
    $GalleryImage3_Name = str_replace(' ', '', $GalleryImage3['name']); 
    $GalleryImage4_Name = str_replace(' ', '', $GalleryImage4['name']); 


    $GalleryImage1_filePath = $GalleryImage1['tmp_name'];
    $GalleryImage2_filePath = $GalleryImage2['tmp_name'];
    $GalleryImage3_filePath = $GalleryImage3['tmp_name'];
    $GalleryImage4_filePath = $GalleryImage4['tmp_name'];


    // echo $filePath;
    $GalleryImage1_fileDest ="uploads/".$GalleryImage1_Name;
    $GalleryImage2_fileDest ="uploads/".$GalleryImage2_Name;
    $GalleryImage3_fileDest ="uploads/".$GalleryImage3_Name;
    $GalleryImage4_fileDest ="uploads/".$GalleryImage4_Name;


 
    // Saves file locally in folder: uploads/
    move_uploaded_file($GalleryImage1_filePath,$GalleryImage1_fileDest);
    move_uploaded_file($GalleryImage2_filePath,$GalleryImage2_fileDest);
    move_uploaded_file($GalleryImage3_filePath,$GalleryImage3_fileDest);
    move_uploaded_file($GalleryImage4_filePath,$GalleryImage4_fileDest);
    
    // echo $fileDest;


    // echo $InteriorTitle,$id;

$query = "UPDATE `chintamani_db`.`interior_master` SET `interior_master`.`InteriorTitle` = '$InteriorTitle', `Alias` = '$interior_alias', `MetaTitle` = '$MetaTitle', `MetaDescription` = '$MetaDescription',`altTag` = '$altTag ',`Keywords` = '$Keywords',`GalleryImage1` = '$GalleryImage1_fileDest',`GalleryImage2` = '$GalleryImage2_fileDest',`GalleryImage3` = '$GalleryImage3_fileDest',`GalleryImage4` = '$GalleryImage4_fileDest' WHERE `interior_master`.`PK_interior` = $id;";

$result = mysqli_query($con,$query);

if($result){
    echo 'Image Uploaded';
}
else{
 echo "uploaded failed";

}
// header("location:interior.php");


    
}






?>
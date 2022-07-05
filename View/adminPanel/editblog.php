<?php 

include("../../Helper/connect.php");




$id = $_POST['pid'];
$BlogTitle = $_POST['BlogTitle'];
$BlogOwner = $_POST['BlogOwner'];
// $BlogImage = $_POST['BlogImage'];
// $BlogDescription = $_POST['BlogDescription'];
// if($_POST['BlogStatus'] == "Published"){
//     $BlogStatus = 10;

// }elseif($_POST['BlogStatus'] == "draft"){
//     $BlogStatus = 11

// }
$BlogStatus = $_POST['BlogStatus'];
echo $BlogStatus;

$BlogDate = $_POST['BlogDate'];
$ReadingTime = $_POST['ReadingTime'];


// Seo tools
$BlogOgTag = $_POST['BlogOgTag'];
$BlogOgTitle = $_POST['BlogOgTitle'];
$BlogAlias = $_POST['BlogAlias'];
$TwitterTag = $_POST['TwitterTag'];
$HiTag = $_POST['HiTag'];
$altTag = $_POST['altTag'];
$MetaDescription = $_POST['MetaDescription'];
$MetaTitle = $_POST['MetaTitle'];

// $DisplayOrder = $_POST['DisplayOrder'];
// $FK_Status = $_POST['FK_Status'];
$Keywords = $_POST['Keywords'];

$errMsg = '';



if($errMsg == ''){
    $link->where('PK_BlogID',$id)->update("blog_master", array("BlogTitle"=>$BlogTitle,"BlogOwner"=>$BlogOwner,"BlogDate"=>$BlogDate,"BlogAlias"=>$BlogAlias,"ReadingTime"=>$ReadingTime,"BlogStatus"=>$BlogStatus,"MetaTitle"=>$MetaTitle,"MetaDescription"=>$MetaDescription,"altTag"=>$altTag,"BlogOgTitle"=>$BlogOgTitle,"BlogOgTag"=>$BlogOgTag,"TwitterTag"=>$TwitterTag,"HiTag"=>$HiTag,"Keywords"=>$Keywords));
  }

//   Code to add images to database



  if ($_FILES['BlogThumbImage']['size'] > 0) {
      // echo $ad;

      // $pimage="product_image".$ad.'.'.$ext;	

      $result = addImage('BlogThumbImage');
      if ($result) {
          echo "hello";
          $link->where('PK_BlogID', $id);
          $a1 = $link->update("blog_master", array("BlogThumbImage" => $result));
          if ($a1) {
              echo "successfully uploaded";
          } else {
              echo "failed";
          }
      }



  if ($_FILES['BlogImage']['size'] > 0) {
      $result = addImage('BlogImage');
      if ($result) {
          $link->where('PK_BlogID', $ad);
          $a1 = $link->update("blog_master", array("BlogImage" => $result));
          if ($a1) {
              echo "successfully uploaded";
          } else {
              echo "failed";
          }
      }
  }

 
}
  


function  addImage($imageName){
      $target_dir = "../../uploads/blog";
      $target_file = $target_dir . basename($_FILES[$imageName]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // to check whether the image is png,jpeg 
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


header('location:blogs.php');


    
?>
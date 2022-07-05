<?php
	ob_start();
?>
<?php
include("../../Helper/connect.php");

	$BlogTitle=$_POST['BlogTitle'];
	$BlogOwner=$_POST['BlogOwner'];
	$BlogDate=$_POST['BlogDate'];
	// $BlogThumbImage = $_POST['BlogThumbImage'];
	$BlogAlias = $_POST['BlogAlias'];
	$ReadingTime = $_POST["ReadingTime"];
	$BlogStatus = $_POST["BlogStatus"];
	// $BlogImage = $_POST["BlogImage"];
	$BlogDescription = $_POST['BlogDescription'];
  
    

	// SEO tool
	$MetaTitle = $_POST["MetaTitle"];
	$MetaDescription =$_POST["MetaDescription"];
	$altTag =$_POST["altTag"];
	$BlogOgTitle =$_POST["BlogOgTitle"];
	$BlogOgTag =$_POST["BlogOgTag"];
	$TwitterTag = $_POST["TwitterTag"];
	$HiTag=$_POST["HiTag"];
	$Keywords=$_POST["Keywords"];

	$errMsg = '';
	$status = '';
	//add status code instead of name
	// if($project_status === 'In Progress'){
	// 	$status = 7;

	// } else if ($project_status === 'Completed') {
	// 	$status = 5;
	// } 

	// if(isset($_REQUEST['pid']) && $_REQUEST['pid'] >0) {
	// 	$pid = $_REQUEST['pid'];
	// 	$link->where("PK_Project",$pid);
	// 	$ad=$link->update("project_master",array("ProjectName"=>$project_name,"Alias"=>$project_alias,"ShortDescription"=>$project_shortDes,"LongDescription"=>$project_longdesc,"ProjectType"=>$project_type,"FK_Status"=>$status,"Keywords"=>$project_keywords,"HiTag"=>$project_HiTag,"Metatitle"=>$project_Metatitle,"MetaDescription"=>$project_MetaDescription,"altTag"=>$project_altTag,"ProjectOgTitle"=>$project_ProjectOgTitle,"ProjectOgTag"=>$project_ProjectOgTag,"TwitterTag"=>$project_TwitterTag));
	// } else if($errMsg == ''){
	// 		$ad= $link->insert("project_master", array("ProjectName"=>$project_name,"Alias"=>$project_alias,"ShortDescription"=>$project_shortDes,"LongDescription"=>$project_longdesc,"ProjectType"=>$project_type,"FK_Status"=>$status,"Keywords"=>$project_keywords,"HiTag"=>$project_HiTag,"Metatitle"=>$project_Metatitle,"MetaDescription"=>$project_MetaDescription,"altTag"=>$project_altTag,"ProjectOgTitle"=>$project_ProjectOgTitle,"ProjectOgTag"=>$project_ProjectOgTag,"TwitterTag"=>$project_TwitterTag));
	// }

	if($errMsg == ''){
	  $ad= $link->insert("blog_master", array("BlogTitle"=>$BlogTitle,"BlogOwner"=>$BlogOwner,"BlogDate"=>$BlogDate,"BlogAlias"=>$BlogAlias,"ReadingTime"=>$ReadingTime,"BlogStatus"=>$BlogStatus,"MetaTitle"=>$MetaTitle,"MetaDescription"=>$MetaDescription,"altTag"=>$altTag,"BlogOgTitle"=>$BlogOgTitle,"BlogOgTag"=>$BlogOgTag,"TwitterTag"=>$TwitterTag,"HiTag"=>$HiTag,"Keywords"=>$Keywords));
	}

//   Code to add images to database

if ($ad) {

	if ($_FILES['BlogThumbImage']['size'] > 0) {
		// echo $ad;

		// $pimage="product_image".$ad.'.'.$ext;	

		$result = addImage('BlogThumbImage');
		if ($result) {
			echo "hello";
			$link->where('PK_BlogID', $ad);
			$a1 = $link->update("blog_master", array("BlogThumbImage" => $result));
			if ($a1) {
				echo "successfully uploaded";
			} else {
				echo "failed";
			}
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
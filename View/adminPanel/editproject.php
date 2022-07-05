<?php
	ob_start();
?>
<?php
		include("../../Helper/connect.php");
		
	$id = $_POST['pid'];
	$project_name=$_POST['ProjectName'];
	$project_status=$_POST['ProjectStatus'];
	$project_alias=$_POST['ProjectAlias'];
	$project_shortDes = $_POST['ProjectShortDescription'];
	$project_longdesc = $_POST['ProjectLongDescription'];
	$project_type = $_POST["ProjectType"];
	// SEO tool
	$project_keywords = $_POST["Keywords"];
	$project_HiTag =$_POST["HiTag"];
	$project_TwitterTag =$_POST["TwitterTag"];
	$project_ProjectOgTitle =$_POST["ProjectOgTitle"];
	$project_ProjectOgTag =$_POST["ProjectOgTag"];
	$project_Metatitle = $_POST["MetaTitle"];
	$project_MetaDescription=$_POST["MetaDescription"];
	$project_altTag=$_POST["altTag"];

	$errMsg = '';
	$status = '';
	//add status code instead of name
	if($project_status === 'In Progress'){
		$status = 7;

	} else if ($project_status === 'Completed') {
		$status = 5;
	} 


    $ad = $link->where('PK_Project',$id);
	$link->update("project_master", array("ProjectName"=>$project_name,"Alias"=>$project_alias,"ShortDescription"=>$project_shortDes,"LongDescription"=>$project_longdesc,"ProjectType"=>$project_type,"FK_Status"=>$status,"Keywords"=>$project_keywords,"HiTag"=>$project_HiTag,"Metatitle"=>$project_Metatitle,"MetaDescription"=>$project_MetaDescription,"altTag"=>$project_altTag,"ProjectOgTitle"=>$project_ProjectOgTitle,"ProjectOgTag"=>$project_ProjectOgTag,"TwitterTag"=>$project_TwitterTag));
	
	
		
			if ($_FILES['BrochureURL']['size'] > 0) {
				$result = addImage('BrochureURL');
				if($result)
				{
					$link->where('PK_Project',$id);
						$a1=$link->update("project_master",array("BrochureURL"=>$result));
						if($a1)
						{		
							echo "successfully uploded BrochureURL";
						}	
						else {
							echo "failed";
						}
				}
				
			}
			if ($_FILES['ThumbnailImageURL']['size'] > 0) {
				$result = addImage('ThumbnailImageURL');
				if($result)
				{
					$link->where('PK_Project',$id);
						$a1=$link->update("project_master",array("ThumbnailImageURL"=>$result));
						if($a1)
						{		
							echo "successfully uploded";
						}	
						else {
							echo "failed";
						}
				}
				
			}
			if ($_FILES['FloorPlantImageURL']['size'] > 0) {
				$result = addImage('FloorPlantImageURL');
				if($result)
				{
					$link->where('PK_Project',$id);
						$a1=$link->update("project_master",array("FloorPlantImageURL"=>$result));
						if($a1)
						{		
							echo "successfully uploded";
						}	
						else {
							echo "failed";
						}
				}
				
			}
			if ($_FILES['ProjectImage1']['size'] > 0) {
				

				$result = addImage('ProjectImage1');
				if($result)
				{
					$link->where('PK_Project',$id);
						$a1=$link->update("project_master",array("ProjectImage1"=>$result));
						if($a1)
						{		
							echo "successfully uploded";
						}	
						else {
							echo "failed";
						}
				}
				
			}
			if ($_FILES['ProjectImage2']['size'] > 0) {
				$result = addImage('ProjectImage2');
				if($result)
				{
					$link->where('PK_Project',$id);
						$a1=$link->update("project_master",array("ProjectImage2"=>$result));
						if($a1)
						{		
							echo "successfully uploded";
						}	
						else {
							echo "failed";
						}
				}
				
			}
			if ($_FILES['ProjectImage3']['size'] > 0) {
				$result = addImage('ProjectImage3');
				if($result)
				{
					$link->where('PK_Project',$id);
						$a1=$link->update("project_master",array("ProjectImage3"=>$result));
						if($a1)
						{		
							echo "successfully uploded";
						}	
						else {
							echo "failed";
						}
				}
				
			}
			if ($_FILES['ProjectImage4']['size'] > 0) {
				$result = addImage('ProjectImage4');
				if($result)
				{
					$link->where('PK_Project',$id);
						$a1=$link->update("project_master",array("ProjectImage4"=>$result));
						if($a1)
						{		
							echo "successfully uploded";
						}	
						else {
							echo "failed";
						}
				}
				
			}
			if ($_FILES['ProjectImage5']['size'] > 0) {
				$result = addImage('ProjectImage5');
				if($result)
				{
					$link->where('PK_Project',$id);
						$a1=$link->update("project_master",array("ProjectImage5"=>$result));
						if($a1)
						{		
							echo "successfully uploded";
						}	
						else {
							echo "failed";
						}
				}
				
			}
			if ($_FILES['ProjectImage6']['size'] > 0) {
				$result = addImage('ProjectImage6');
				if($result)
				{
					$link->where('PK_Project',$id);
						$a1=$link->update("project_master",array("ProjectImage6"=>$result));
						if($a1)
						{		
							echo "successfully uploded";
						}	
						else {
							echo "failed";
						}
				}
				
			}
		header('location:projects.php');
	
	

function  addImage($imageName){
		$target_dir = "../../uploads/project";
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



?>
<?php 

include("../../Helper/connect.php");
		
		
		$id=$_REQUEST['pid'];
        // echo $id;
		$link->where('PK_interior',$id);
		$a=$link->update("interior_master",array("isDeleted"=>1));
		// echo $a;
		if($a)
		{		
		header("location:../adminPanel/Interior.php");
		}

?>
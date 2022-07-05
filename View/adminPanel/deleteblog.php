<?php 

include("../../Helper/connect.php");
		
		
		$id=$_REQUEST['pid'];
        echo $id;
		$link->where('PK_BlogID',$id);
		$a=$link->update("blog_master",array("isDeleted"=>1));
		// // echo $a;
		if($a)
		{		
		header("location:./blogs.php");
        
		}

?>
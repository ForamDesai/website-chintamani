<?php
	ob_start();
?>
<?php
		include("../../Helper/connect.php");
		
		
		$id=$_REQUEST['pid'];
		$link->where('PK_Lease',$id);
		$a=$link->update("lease_master",array("isDeleted"=>1));
		if($a)
		{		
			header('location:../lease.php');
		}
		
?>
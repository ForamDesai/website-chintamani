<?php
	include '../../Helper/connect.php';



	//---------- For Project page----------------------

if (isset($_REQUEST['alias_add_project'])) {
	echo $_REQUEST['alias_add_project'];
	if ($_REQUEST['alias_add_project'] != "" || $_REQUEST['alias_add_project'] != 0 || $_REQUEST['alias_add_project'] != null) {

		$alias = str_replace(' ', '-', $_REQUEST['alias_add_project']);
		$sql = $link->rawQueryOne("select * from project_master where Alias LIKE ?", array($alias));

		if ($link->count == 0) {
			echo "new";
		} else {
			echo "already";
		}
	}
} else {
	$alias = str_replace(' ', '-', $_REQUEST['alias_edit_project']);
	$id = $_REQUEST['id'];
	$sql = $link->rawQueryOne("select * from project_master where Alias LIKE ? and PK_Project  != ?", array($alias, $id));
	if ($link->count == 0) {
		echo "new";
	} else {
		echo "already";
	}
}

//---------- For Blog page----------------------

if (isset($_REQUEST['alias_add_blog'])) {
	if ($_REQUEST['alias_add_blog'] != "" || $_REQUEST['alias_add_blog'] != 0 || $_REQUEST['alias_add_blog'] != null) {

		$alias = str_replace(' ', '-', $_REQUEST['alias_add_blog']);
		$sql = $link->rawQueryOne("select * from blog_master where Alias LIKE ?", array($alias));

		if ($link->count == 0) {
			echo "new";
		} else {
			echo "already";
		}
	}
} else {
	$alias = str_replace(' ', '-', $_REQUEST['alias_edit_blog']);
	$id = $_REQUEST['id'];
	$sql = $link->rawQueryOne("select * from blog_master where Alias LIKE ? and PK_BlogID  != ?", array($alias, $id));
	if ($link->count == 0) {
		echo "new";
	} else {
		echo "already";
	}
}


//---------- For Lease page----------------------

if (isset($_REQUEST['alias_add_lease'])) {
	if ($_REQUEST['alias_add_lease'] != "" || $_REQUEST['alias_add_lease'] != 0 || $_REQUEST['alias_add_lease'] != null) {

		$alias = str_replace(' ', '-', $_REQUEST['alias_add_lease']);
		$sql = $link->rawQueryOne("select * from leasing_master where Lease_Alias LIKE ?", array($alias));

		if ($link->count == 0) {
			echo "new";
		} else {
			echo "already";
		}
	}
} else {
	$alias = str_replace(' ', '-', $_REQUEST['alias_edit_lease']);
	$id = $_REQUEST['id'];
	$sql = $link->rawQueryOne("select * from leasing_master where Lease_Alias LIKE ? and PK_lease  != ?", array($alias, $id));
	if ($link->count == 0) {
		echo "new";
	} else {
		echo "already";
	}
}


//---------- For Lease page----------------------

if (isset($_REQUEST['alias_add_lease'])) {
	if ($_REQUEST['alias_add_lease'] != "" || $_REQUEST['alias_add_lease'] != 0 || $_REQUEST['alias_add_lease'] != null) {

		$alias = str_replace(' ', '-', $_REQUEST['alias_add_lease']);
		$sql = $link->rawQueryOne("select * from leasing_master where Lease_Alias LIKE ?", array($alias));

		if ($link->count == 0) {
			echo "new";
		} else {
			echo "already";
		}
	}
} else {
	$alias = str_replace(' ', '-', $_REQUEST['alias_edit_lease']);
	$id = $_REQUEST['id'];
	$sql = $link->rawQueryOne("select * from leasing_master where Lease_Alias LIKE ? and PK_lease  != ?", array($alias, $id));
	if ($link->count == 0) {
		echo "new";
	} else {
		echo "already";
	}
}


//---------- For Interior page----------------------

if (isset($_REQUEST['alias_add_interior'])) {
	if ($_REQUEST['alias_add_interior'] != "" || $_REQUEST['alias_add_interior'] != 0 || $_REQUEST['alias_add_interior'] != null) {

		$alias = str_replace(' ', '-', $_REQUEST['alias_add_interior']);
		$sql = $link->rawQueryOne("select * from interior_master where Alias LIKE ?", array($alias));

		if ($link->count == 0) {
			echo "new";
		} else {
			echo "already";
		}
	}
} else {
	$alias = str_replace(' ', '-', $_REQUEST['alias_edit_interior']);
	$id = $_REQUEST['id'];
	$sql = $link->rawQueryOne("select * from interior_master where Alias LIKE ? and PK_interior  != ?", array($alias, $id));
	if ($link->count == 0) {
		echo "new";
	} else {
		echo "already";
	}
}





	
	
	
?>
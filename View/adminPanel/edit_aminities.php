<?php
	include ("header.php");
	include ("../../Helper/connect.php");
	
	$id = $_GET['pid'];
	$query = "select * from amenities_master where PK_amenities = $id";
	$exce = mysqli_query($con, $query);
	
	if ($row = mysqli_fetch_array($exce))
	{
	    $amenity_name = $row['amenity_name'];
	}
	?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Edit aminities</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">aminities</a></li>
                                <li class="breadcrumb-item active"> Edit aminities</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body p-4">
                                <form  action="editaminities.php" class="needs-validation" novalidate method="post" name="f1"  enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Amenity name</label>
                                                    <input required value="<?php echo $amenity_name ?>" name="amenity_name" class="form-control" type="text" placeholder="" >
                                                    <input type="hidden" name="pid" value=" <?php echo $id; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                            </div>
                            <div>
                            <div>
                            <button type="submit" name="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
	function aliascheck(val)
	    {
	        $.ajax({
	          type: "POST",
	           url: "alias_check.php",
	           data: "alias_edit_interior="+val,
	              
	                // serializes the form's elements.
	           success: function(data)
	           {
	            //  console.log(data);
	                if(data === val+'already')
	                {
	                    console.log( "Data already exits");
	                }
	                else
	                {
	                   console.log("Data accepted");
	                }
	           }
	       
	        });
	      
	    }
</script>
<?php
	include ("footer.php");
?>
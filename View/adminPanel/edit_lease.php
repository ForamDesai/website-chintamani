<?php
include("header.php");
include("../../Helper/connect.php");
$pLeaseId = 0;




// Mridul's code
$id =  $_GET['pid'];
$query = "SELECT * FROM `leasing_master` WHERE `PK_lease` = $id";
$exce = mysqli_query($con, $query);


if ($row = mysqli_fetch_array($exce)) {



    $Lease_Name = $row['Lease_Name'];
    $Lease_Alias = $row['Lease_Alias'];
    $ShortDescription = $row['ShortDescription'];
    $LongDescription = $row['LongDescription'];
    $CarpetArea = $row['CarpetArea'];
    $CompleteAddress = $row['CompleteAddress'];
    $Location = $row['Location'];
    $Price = $row['Price'];
    $Packs = $row['Packs'];
    $FloorPlanURL = $row['FloorPlanURL'];
    $Images = $row['Images'];
    $ThumbnailURL = $row['ThumbnailURL'];
    $VideoURL = $row['VideoURL'];
    $Furnished_Unfurnished = $row['Furnished/Unfurnished'];
    $BuildUpArea = $row['BuildUpArea'];

    $Keywords = $row['Keywords'];
    $MetaTitle = $row['MetaTitle'];
    $DisplayOrder = $row['DisplayOrder'];
    $FK_Status = $row['DisplayOrder'];
    $isDeleted = $row['isDeleted'];
    $LeaseOgTitle = $row['LeaseOgTitle'];
    $LeaseOgTag = $row['LeaseOgTag'];
    $MetaDescription = $row['MetaDescription'];
    $HiTag = $row['HiTag'];
    $TwitterTag = $row['TwitterTag'];
    $altTag = $row['altTag'];
}




//check for edit
if (isset($_REQUEST['pid']) && $_REQUEST['pid'] > 0) {
    $pid = $_REQUEST['pid'];
    $isUpdate = 1;
} else {
    $isUpdate = 0;
}

if ($isUpdate == 1) {
    $ad = $link->rawQueryOne("select * from leasing_master where PK_lease=?", array($_REQUEST['pid']));
    if ($link->count > 0) {
        $project_id = $ad['PK_lease'];
    }
}













?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Edit Lease</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Leasing</a></li>
                                <li class="breadcrumb-item active">Edit lease</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form action="editlease.php" class="needs-validation" novalidate method="post" name="leaseForm" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-body p-4">

                                    <div class="row">
                                        <h3 class="mb-3">Details</h3>
                                        <div class="div shadow-lg p-3 mb-5 bg-body rounded">
                                            <div class="row">





                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-text-input" class="form-label">Lease Name</label>
                                                    <input required value="<?php echo $Lease_Name ?>" class="form-control" type="text" placeholder="Lease Name" id="ProjectName" name="LeaseName" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                                                                echo $ad['Lease_Name'];
                                                                                                                                                                                                            } ?>">
                                                    <input type="hidden" name="pid" value=" <?php echo $id; ?>">

                                                </div>

                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-text-input" class="form-label">Lease Alias</label>
                                                    <input onkeyup="aliascheck(this.value)" required value="<?php echo $Lease_Alias ?>" class="form-control" type="text" placeholder="Lease Alias" id="Lease_Alias" name="LeaseAlias" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                                                                                                    echo $ad['Lease_Alias'];
                                                                                                                                                                                                                                                } ?>">
                                                </div>
                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-text-input" class="form-label">Carpet Area</label>
                                                    <input required value="<?php echo $CarpetArea ?>" class="form-control" type="text" placeholder="CarpetArea" id="CarpetArea" name="CarpetArea" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                                                                echo $ad['CarpetArea'];
                                                                                                                                                                                                            } ?>">
                                                </div>

                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-search-input" class="form-label">Short Description </label>
                                                    <textarea class="form-control" type="search" placeholder="Short Description" rows="2" id="ShortDescription" name="ShortDescription"><?php echo $ShortDescription ?></textarea>
                                                </div>
                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-search-input" class="form-label">Long Description</label>
                                                    <textarea class="form-control" type="search" placeholder="Long Description" rows="2" id="ShortDescription" name="LongDescription"><?php echo $LongDescription ?></textarea>
                                                </div>
                                                <br>
                                                <br>




                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-search-input" class="form-label">Complete Address</label>
                                                    <textarea required class="form-control" type="search" placeholder="CompleteAddress" rows="2" id="CompleteAddress" name="CompleteAddress"><?php echo $CompleteAddress ?></textarea>
                                                </div>

                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label class="form-label">Location</label>
                                                    <select required class="form-select" id="Location" name="Location">
                                                        <option>Select</option>
                                                        <option <?php if ($ad['Location'] == "Goregaon") {
                                                                    echo "selected";
                                                                } ?>>Goregaon</option>
                                                        <option <?php if ($ad['Location'] == "Andheri") {
                                                                    echo "selected";
                                                                } ?>>Andheri</option>
                                                    </select>
                                                </div>


                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-text-input" class="form-label">Price</label>
                                                    <input required value="<?php echo $Price ?>" class="form-control" type="text" placeholder="Price" id="Price" name="Price" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                                            echo $ad['Price'];
                                                                                                                                                                                        } ?>">
                                                </div>

                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-text-input" class="form-label">Packs</label>
                                                    <input value="<?php echo $Packs ?>" class="form-control" type="text" placeholder="Packs" reqired id="Packs" name="Packs" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                                        echo $ad['Packs'];
                                                                                                                                                                                    } ?>">
                                                </div>



                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-tel-input" class="form-label">Furnished/Unfurnished</label>
                                                    <input required value="<?php echo $Furnished_Unfurnished ?>" placeholder="Furnished/Unfurnished" type="text" name="Furnished/Unfurnished" id="Furnished/Unfurnished" class="form-control">
                                                </div>
                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-tel-input" class="form-label">Display Order</label>
                                                    <input required value="<?php echo $DisplayOrder ?>" placeholder="Display Order" type="text" name="DisplayOrder" id="DisplayOrder" class="form-control">
                                                </div>
                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-tel-input" class="form-label">BuildUp Area</label>
                                                    <input required value="<?php echo $BuildUpArea ?>" placeholder="BuildUp Area" type="text" name="BuildUpArea" id="BuildUpAread" class="form-control">
                                                </div>
                                           
                                               
                                            </div>
                                        </div>

                                        <h3 class=" mb-4">Gallery</h3>
                                        <div class="card-body shadow-lg p-3 mb-5 bg-body rounded">
                                            <div>


                                                <div class="row">

                                                    <div class="col-xl-6 col-md-6 mb-3">
                                                        <label for="example-text-input" class="form-label">Thumbnail URL</label>
                                                        <input required value="<?php echo $ThumbnailURL; ?>" class="form-control" type="text" placeholder="ThumbnailURL" id="ThumbnailURL" name="ThumbnailURL" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                                                                            echo $ad['ThumbnailURL'];
                                                                                                                                                                                                                        } ?>">
                                                    </div>

                                                    <div class="col-xl-6 col-md-6 mb-3">
                                                        <label for="example-text-input" class="form-label">FloorPlan URL</label>
                                                        <input value="<?php echo $FloorPlanURL; ?>" class="form-control" type="text" placeholder="FloorPlanURL" id="FloorPlanURL" name="FloorPlanURL" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                                                                    echo $ad['FloorPlanURL'];
                                                                                                                                                                                                                } ?>">
                                                    </div>



                                                    <div class="col-xl-6 col-md-6 mb-3">
                                                        <label for="example-tel-input" class="form-label">Images</label>
                                                        <input type="file" name="Images" id="ProductImage" class="form-control">
                                                        <br>
                                                        <div class="image-area">
                                                            <img class="photo" image-id="123" data-id="1" src="<?php echo $ad['Images'] ?>" alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                            <a class="remove-image" style="display: inline;">&#215;</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 mb-3">
                                                        <label for="example-tel-input" class="form-label">Video URL</label>
                                                        <input value="<?php echo $VideoURL ?>" placeholder="Video URL" type="text" name="VideoURL" id="VideoURL" class="form-control">
                                                    </div>




                                                </div>
                                            </div>
                                        </div>






                                        <h3 class=" mb-4">Project SEO Details</h3>
                                        <div class="card-body shadow-lg p-3 mb-5 bg-body rounded">

                                            <div>

                                                <input type="hidden" />
                                                <div class="row">
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Meta Title</label>
                                                            <input value="<?php echo $MetaTitle ?>" type="text" class="form-control" id="MetaTitle" name="MetaTitle">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Meta Description</label>
                                                            <input type="text" value="<?php echo $MetaDescription ?>" class="form-control" id="MetaDescription" name="MetaDescription">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Alt Tag</label>
                                                            <input value="<?php echo $altTag ?>" type="text" class="form-control" id="altTag" name="altTag">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Lease OG Title</label>
                                                            <input value="<?php echo $LeaseOgTitle ?>" type="text" id="LeaseOgTitle" name="LeaseOgTitle" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Lease OG Tag</label>
                                                            <input value="<?php echo $LeaseOgTag ?>" type="text" id="LeaseOgTag" name="LeaseOgTag" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Twitter Tag</label>
                                                            <input value="<?php echo $TwitterTag; ?>" type="text" id="TwitterTag" name="TwitterTag" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>HI Tag</label>
                                                            <input value="<?php echo $HiTag ?>" type="text" id="HiTag" name="HiTag" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Keywords</label>
                                                            <input value="<?php echo $Keywords ?>" type="text" id="Keywords" name="Keywords" class="form-control" />
                                                        </div>
                                                    </div>


                                                </div>
                                                <!-- end row -->
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="col-5 ">

                        <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                            <h3 class="my-3">Amenities</h3>
                            <div class="card-body">
                                <div class="card-body p-2">
                                    <div class="row">

                                        <?php



                                        $item_not_selected_query = "SELECT * FROM amenities_master WHERE PK_amenities NOT IN ( SELECT FK_amenities FROM lease_amenities where isDeleted=0 and FK_Lease = $id)";
                                        $item_not_selected_exce = mysqli_query($con, $item_not_selected_query);

                                        $fetch_name = mysqli_query($con, "SELECT amenities_master.amenity_name,amenities_master.PK_amenities,lease_amenities.Count FROM amenities_master INNER JOIN lease_amenities ON amenities_master.PK_amenities=lease_amenities.FK_amenities where FK_Lease = $id ");

                                        $selected_item_exce = mysqli_query($con, "select * from lease_amenities where FK_Lease = $id");

                                        foreach ($fetch_name as $item) {


                                        ?>
                                            <div class="col-xl-12 col-md-6  d-flex p-2 bd-highlight">

                                                <div class="form-check mx-2 my-2">
                                                    <input checked value="<?php echo $item['PK_amenities']; ?>" class="form-check-input" type="checkbox" id="inv-<?php echo $item['PK_amenities'] ?>" onclick="inventory(this.value)">

                                                </div>
                                                <label for="myCheck" class="form-label mx-1 my-2"><?php echo $item['amenity_name']; ?> </label>

                                                <input value="<?php echo $item['Count']; ?>" id="amenities_qty_div<?php echo $item['PK_amenities']; ?>" class="form-control mx-4" min="0" type="number" placeholder="quantity" name="<?php echo $item['PK_amenities']; ?>" />
                                            </div>
                                        <?php } ?>

                                        <?php
                                        foreach ($item_not_selected_exce as $not_selected) {
                                        ?>

                                            <div class="col-xl-12 col-md-6  d-flex p-2 bd-highlight">

                                                <div class="form-check mx-2 my-2">
                                                    <input value="<?php echo $not_selected['PK_amenities']; ?>" class="form-check-input" type="checkbox" id="inv-<?php echo $not_selected['PK_amenities'] ?>" onclick="inventory(this.value)">

                                                </div>
                                                <label for="myCheck" class="form-label mx-1 my-2"><?php echo $not_selected['amenity_name']; ?> </label>

                                                <input id="amenities_qty_div<?php echo $not_selected['PK_amenities']; ?>" style="display: none;" class="form-control mx-4" min="0" type="number" placeholder="quantity" name="<?php echo $not_selected['PK_amenities']; ?>" />
                                            </div>


                                        <?php  } ?>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>










                </div>
                <div>
                    <button type="submit" name="submit" class="btn btn-primary w-md">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    function aliascheck(val) {
        $.ajax({
            type: "POST",
            url: "alias_check.php",
            data: "alias_edit_lease=" + val,

            // serializes the form's elements.
            success: function(data) {
                //  console.log(data);
                if (data === val + 'already') {
                    console.log("Data already exits");
                } else {
                    console.log("Data accepted");
                }
            }

        });

    }
</script>


<script>
    function inventory(val) {

        if ($("#inv-" + val.trim()).is(":checked")) {


            $("#amenities_qty_div" + val.trim()).css("display", "block");
            // console.log($("#amenities_qty_div" + val.trim()).val());
        } else {

            $("#amenities_qty_div" + val.trim()).css("display", "none");
           $("#amenities_qty_div" + val.trim()).val(null);
            

        }
    }
</script>

<?php
include("footer.php")
?>
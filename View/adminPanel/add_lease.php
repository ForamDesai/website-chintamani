<?php
include("header.php");
include("../../Helper/connect.php");
$pLeaseId = 0;


// Mridul's code
$query = "SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='chintamani_db_updated' 
    AND `TABLE_NAME`='leasing_master'";

// $query = "SELECT * FROM `chintamani_db_updated`.`leasing_master` WHERE `leasing_master`.`PK_lease`";
$exce = mysqli_query($con, $query);
// $a = 0;
// while($row = mysqli_fetch_array($exce)){

//     echo "<pre>";
//    print_r((array_values($row)[1]));
//     echo "</pre>";
//     $a++;

// }
// echo $a;



?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add Lease</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Leasing</a></li>
                                <li class="breadcrumb-item active">Leasing</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <?php
            //check for edit
            if (isset($_REQUEST['pid']) && $_REQUEST['pid'] > 0) {
                $pLeaseId = $_REQUEST['pid'];
                $isUpdate = 1;
            } else {
                $isUpdate = 0;
            }

            if ($isUpdate == 1) {
                $ad = $link->rawQueryOne("select * from lease_master where PK_Lease=?", array($_REQUEST['pid']));
                if ($link->count > 0) {
                    $project_id = $ad['PK_Lease'];
                }
            }

            ?>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body p-4">
                                <form action="addlease.php?pid=<?php echo $pLeaseId ?> " class="needs-validation" novalidate method="post" name="leaseForm" enctype="multipart/form-data">
                                    <div class="row">


                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-text-input" class="form-label">Lease Name</label>
                                            <input class="form-control" type="text" placeholder="Lease Name" required id="Lease_Name" name="LeaseName" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                    echo $ad['Lease_Name'];
                                                                                                                                                                } ?>">
                                        </div>

                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-text-input" class="form-label">Lease Alias</label>
                                            <input onkeyup="aliascheck(this.value)" required class="form-control" type="text" placeholder="Lease Alias" id="Lease_Alias" name="LeaseAlias" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                        echo $ad['Lease_Alias'];
                                                                                                                                                                    } ?>">
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-text-input" class="form-label">Carpet Area</label>
                                            <input class="form-control" type="text" placeholder="CarpetArea" required id="CarpetArea" name="CarpetArea" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                    echo $ad['CarpetArea'];
                                                                                                                                                                } ?>">
                                        </div>

                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-search-input" class="form-label">Short Description</label>
                                            <textarea class="form-control" type="search" placeholder="Short Description" rows="2" id="ShortDescription" name="ShortDescription" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                                            echo $ad['ShortDescription'];
                                                                                                                                                                                        } ?>"></textarea>
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-search-input" class="form-label">Long Description</label>
                                            <textarea class="form-control" type="search" placeholder="Long Description" rows="2" id="ShortDescription" name="LongDescription" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                                            echo $ad['LongDescription'];
                                                                                                                                                                                        } ?>"></textarea>
                                        </div>
                                        <br>
                                        <br>




                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-search-input" class="form-label">Complete Address</label>
                                            <textarea required class="form-control" type="search" placeholder="CompleteAddress" rows="2" id="CompleteAddress" name="CompleteAddress" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                                        echo $ad['CompleteAddress'];
                                                                                                                                                                                    } ?>"></textarea>
                                        </div>

                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label class="form-label">Location</label>
                                            <select required class="form-select" id="Location" name="Location">
                                                <option>Select</option>
                                                <option <?php if ($isUpdate == 1 && $ad['FK_Location'] == "1") {
                                                            echo "selected";
                                                        } ?>>Goregaon</option>
                                                <option <?php if ($isUpdate == 1 && $ad['FK_Location'] == "2") {
                                                            echo "selected";
                                                        } ?>>Delhi</option>
                                            </select>
                                        </div>


                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-text-input" class="form-label">Price</label>
                                            <input class="form-control" type="number" placeholder="Price" required id="Price" name="Price" value="<?php if ($isUpdate == 1) {
                                                                                                                                                        echo $ad['Price'];
                                                                                                                                                    } ?>">
                                        </div>

                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-text-input" class="form-label">Packs</label>
                                            <input class="form-control" type="number" placeholder="Packs"  id="Packs" name="Packs" value="<?php if ($isUpdate == 1) {
                                                                                                                                                        echo $ad['Packs'];
                                                                                                                                                    } ?>">
                                        </div>

                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-text-input" class="form-label">Thumbnail URL</label>
                                            <input class="form-control" type="text" placeholder="ThumbnailURL" required id="ThumbnailURL" name="ThumbnailURL" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                            echo $ad['ThumbnailURL'];
                                                                                                                                                                        } ?>">
                                        </div>

                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-text-input" class="form-label">FloorPlan URL</label>
                                            <input class="form-control" type="text" placeholder="FloorPlanURL"  id="FloorPlanURL" name="FloorPlanURL" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                            echo $ad['FloorPlanURL'];
                                                                                                                                                                        } ?>">
                                        </div>



                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-tel-input" class="form-label">Images</label>
                                            <input type="file" name="Images" id="ProductImage" class="form-control">
                                        </div>

                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-tel-input" class="form-label">Video URL</label>
                                            <input placeholder="Video URL" type="text" name="VideoURL" id="VideoURL" class="form-control">
                                        </div>

                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-tel-input" class="form-label">Furnished/Unfurnished</label>
                                            <input required placeholder="Furnished/Unfurnished" type="text" name="Furnished/Unfurnished" id="Furnished/Unfurnished" class="form-control">
                                        </div>

                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-tel-input" class="form-label">BuildUp Area</label>
                                            <input placeholder="BuildUp Area" type="number" name="BuildUpArea" id="BuildUpArea" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-3">

                                            <label for="example-tel-input" class="form-label">Cabins Count</label>
                                            <input placeholder="Cabins Count" type="number" name="CabinsCount" id="CabinsCount" class="form-control">
                                        </div>

                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-tel-input" class="form-label">Reception Area</label>
                                            <input placeholder="Reception Area " type="number" name="ReceptionArea" id="ReceptionArea" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-tel-input" class="form-label">W/S</label>
                                            <input placeholder="W/S" type="number" name="W/S" id="W/S" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-tel-input" class="form-label">SR Manage</label>
                                            <input placeholder="SR Manage" type="number" name="SRManage" id="ReceptionArea" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-tel-input" class="form-label">ConferenceRoom Count</label>
                                            <input placeholder="ConferenceRoom Count" type="number" name="ConferenceRoomCount" id="ConferenceRoomCount" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-tel-input" class="form-label">MeetingRoom Count</label>
                                            <input placeholder="MeetingRoom Count" type="number" name="MeetingRoomCount" id="MeetingRoomCount" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-tel-input" class="form-label">ServerRoom Count</label>
                                            <input placeholder="ServerRoom Count" type="number" name="ServerRoomCount" id="ServerRoomCount" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-tel-input" class="form-label">GentsWashroom Count</label>
                                            <input placeholder="GentsWashroom Count" type="number" name="GentsWashroomCount" id="GentsWashroomCount" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-tel-input" class="form-label">GeneralWashroom Count</label>
                                            <input placeholder="GeneralWashroom Count" type="number" name="GeneralWashroomCount" id="GentsWashroomCount" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-tel-input" class="form-label">Ladies Washroom</label>
                                            <input placeholder="Ladies Washroom" type="number" name="ladiesWashroom" id="ladiesWashroom" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-tel-input" class="form-label">Pantry Count</label>
                                            <input placeholder="Pantry Count" type="number" name="PantryCount" id="PantryCount" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-tel-input" class="form-label">Storeroom Count </label>
                                            <input placeholder="Storeroom Count" type="number" name="StoreroomCount" id="StoreroomCount" class="form-control">
                                        </div>




                                        <div class="col-xl-4 col-md-6 mb-3">
                                            <label for="example-tel-input" class="form-label">Display Order</label>
                                            <input placeholder="BuildUp Area" type="text" name="DisplayOrder" id="DisplayOrder" class="form-control">
                                        </div>



                                        <div class="card-body">
                                            <div>
                                                <h5 class="card-title mb-4">Project SEO Details</h5>
                                                <input type="hidden" />
                                                <div class="row">
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Meta Title</label>
                                                            <input type="text" class="form-control" id="MetaTitle" name="MetaTitle">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Meta Description</label>
                                                            <input type="text" class="form-control" id="MetaDescription" name="MetaDescription">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Alt Tag</label>
                                                            <input type="text" class="form-control" id="altTag" name="altTag">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Lease OG Title</label>
                                                            <input type="text" id="LeaseOgTitle" name="LeaseOgTitle" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Lease OG Tag</label>
                                                            <input type="text" id="LeaseOgTag" name="LeaseOgTag" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Twitter Tag</label>
                                                            <input type="text" id="TwitterTag" name="TwitterTag" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>HI Tag</label>
                                                            <input type="text" id="HiTag" name="HiTag" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Keywords</label>
                                                            <input type="text" id="Keywords" name="Keywords" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <label for="example-tel-input" class="form-label">Twitter Tag </label>
                                                        <input type="text" name="TwitterTag" id="TwitterTag" class="form-control">
                                                    </div>

                                                </div>
                                                <!-- end row -->
                                            </div>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary w-md">Submit</button>
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
</div>

<!-- pristine js -->
<script src="assets/libs/pristinejs/pristine.min.js"></script>
<!-- form validation -->
<script src="assets/js/pages/form-validation.init.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    function aliascheck(val)
        {
            $.ajax({
              type: "POST",
               url: "alias_check.php",
               data: "alias_add_lease="+val,
                  
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
include("footer.php")
?>
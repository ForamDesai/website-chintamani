<?php
include("header.php");
include("../../Helper/connect.php");
$pid = 0;
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title and breadcrum -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add Projects</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                                <li class="breadcrumb-item active">Projects</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title breadcrum -->

            <!-- Main form starts-->
            <div class="row">
                <div class="col-12">
                    <div class="card-body">
                        <div class="card-body p-4">
                            <form action="addproject.php?pid=<?php echo $pid ?> " class="needs-validation" novalidate method="post" name="f1" enctype="multipart/form-data">
                                <div class="row">
                                    <!-- right pannel details-->
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Project Name</label>
                                                <input class="form-control" type="text" required id="specificfield" name="ProjectName" id="ProjectName">
                                            </div>

                                            <div class="col-lg-12">
                                                <label for="example-search-input" class="form-label">Short Description</label>
                                                <textarea class="form-control" type="text" rows="2" id="ProjectShortDescription" name="ProjectShortDescription"></textarea>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="mb-3">
                                                <label class="form-label">Status</label>
                                                <select class="form-select" name="ProjectStatus" id="ProjectStatus">
                                                    <option>Select</option>
                                                    <option>In Progress</option>
                                                    <option>Completed</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-tel-input" class="form-label">Thumbnail Image</label>
                                                <input required type="file" name="ThumbnailImageURL" id="ProjectImage" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-tel-input" class="form-label">FloorPlant Url</label>
                                                <input type="file" name="FloorPlantImageURL" id="ProjectFloorPlant" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-tel-input" class="form-label">Product Image1</label>
                                                <input type="file" name="ProjectImage1" id="ProjectImage1" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-tel-input" class="form-label">Product Image3</label>
                                                <input type="file" name="ProjectImage3" id="ProjectImage3" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-tel-input" class="form-label">Product Image5</label>
                                                <input type="file" name="ProjectImage5" id="ProjectImage5" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- left pannel details-->
                                    <div class="col-lg-6">
                                        <div class="mt-3 mt-lg-0">
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Project Alias</label>
                                                <input onkeyup="aliascheck(this.value);" required class="form-control" type="text" name="ProjectAlias" id="ProjectAlias">
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="example-search-input" class="form-label">Long Description</label>
                                                <textarea class="form-control" type="text" rows="4" id="ProjectLongDescription" name="ProjectLongDescription"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Project Type</label>
                                                <select required class="form-select" id="ProjectType" name="ProjectType">
                                                    <option>Select</option>
                                                    <option>Commercial</option>
                                                    <option>Residential</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-tel-input" class="form-label">Upload Brochure</label>
                                                <input type="file" name="ProjectBrochureURL" id="ProjectBrochureURL" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" id="ProjectAminities">Aminities</label>
                                                <select class="form-select">
                                                    <option>Select</option>
                                                    <option>Commercial</option>
                                                    <option>Residential</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-tel-input" class="form-label">Product Image2</label>
                                                <input type="file" name="ProjectImage2" id="ProjectImage2" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-tel-input" class="form-label">Product Image4</label>
                                                <input type="file" name="ProjectImage4" id="ProjectImage4" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-tel-input" class="form-label">Product Image6</label>
                                                <input type="file" name="ProjectImage6" id="ProjectImage6" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div>
                                            <h5 class="card-title mb-4">Project SEO Details</h5>
                                            <input type="hidden" />
                                            <div class="row">
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label>Meta Title</label>
                                                        <input type="text" class="form-control" id="MetaTitle" name="MetaTitle">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label>Meta Description</label>
                                                        <input type="text" class="form-control" id="MetaDescription" name="MetaDescription">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label>Alt Tag</label>
                                                        <input type="text" class="form-control" id="altTag" name="altTag">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label>Project OG Title</label>
                                                        <input type="text" id="ProjectOgTitle" name="ProjectOgTitle" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label>Project OG Tag</label>
                                                        <input type="text" id="ProjectOgTag" name="ProjectOgTag" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label>Twitter Tag</label>
                                                        <input type="text" id="TwitterTag" name="TwitterTag" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label>HI Tag</label>
                                                        <input type="text" id="HiTag" name="HiTag" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label>Keywords</label>
                                                        <input type="text" id="Keywords" name="Keywords" class="form-control" />
                                                    </div>
                                                </div>
                                                <!-- <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Project OG Tag</label>
                                                            <input type="text" id="ProjectOgTag" name="ProjectOgTag" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Project OG Tag</label>
                                                            <input type="text" id="ProjectOgTag" name="ProjectOgTag" class="form-control" />
                                                        </div>
                                                    </div> -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" name="submit" class="btn btn-primary w-md">Submit</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Main form End-->



    <!-- pristine js -->
    <script src="assets/libs/pristinejs/pristine.min.js"></script>
    <!-- form validation -->
    <script src="assets/js/pages/form-validation.init.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script>
        function aliascheck(val) {
            $.ajax({
                type: "POST",
                url: "alias_check.php",
                data: "alias_add_project=" + val,

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


    <?php
    //include("footer.php")
    ?>
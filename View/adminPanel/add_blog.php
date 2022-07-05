<?php
include("header.php");
include("../../Helper/connect.php");
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add Blogs</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">blogs</a></li>
                                <li class="breadcrumb-item active">Blog</li>
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
                                <form  action="addblog.php " class="needs-validation" novalidate method="post" name="f1"  enctype="multipart/form-data">
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Blog Title</label>
                                                    <input class="form-control" required name="BlogTitle" type="text"  id="BlogTitle">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Blog Owner</label>
                                                    <input class="form-control" name="BlogOwner" type="text"  id="ProjectAlias">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-search-input" class="form-label">Blog Date</label>
                                                    <input class="form-control" name="BlogDate" type="Date"  id="ProjectAlias">
                                                </div>



                                                <div class="mb-3">
                                                    <label for="example-tel-input" class="form-label"> Blog Thumb Image</label>
                                                    <input type="file" name="BlogThumbImage" required id=" BlogThumbImage" class="form-control">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Blog Alias</label>
                                                    <input onkeyup="aliascheck(this.value)" class="form-control" name="BlogAlias" type="text"  id="BlogAlias">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-search-input" class="form-label">Reading Time</label>
                                                    <input class="form-control" name="ReadingTime" type="number"  id="ReadingTime">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-search-input" required class="form-label">Blog Status</label>
                                                    <select class="form-select" id="BlogStatus" name="BlogStatus">
                                                        <option>Select</option>
                                                        <option value="10" >Published</option>
                                                        <option value="11" >Draft</option>
                                                    </select>
                                                </div>


                                                <div class="mb-3">
                                                    <label for="example-tel-input" class="form-label">Blog Image</label>
                                                    <input type="file" name="BlogImage" required id="BlogImage" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Blog description</h4>
                                                        
                                                    </div>
                                                    <div class="card-body">
                                                        <div id="ckeditor-classic"  name="BlogDescription"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
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
                                                            <label>Blog OG Title</label>
                                                            <input type="text" id="BlogOgTitle" name="BlogOgTitle" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Blog OG Tag</label>
                                                            <input type="text" id="BlogOgTag" name="BlogOgTag" class="form-control" />
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
                                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ckeditor -->
            <script src="assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>


            <!-- ckeditor -->
            <script src="assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

            <!-- init js -->
            <script src="assets/js/pages/form-editor.init.js"></script>

            <script src="assets/js/app.js"></script>

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
               data: "alias_add_blog="+val,
                  
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
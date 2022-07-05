<?php
include("header.php");
include("../../Helper/connect.php");

// Mridul's code
$id =  $_GET['pid'];
$query = "SELECT * FROM `blog_master` WHERE `PK_BlogID` = $id";
$exce = mysqli_query($con, $query);
echo $id;
if ($row = mysqli_fetch_array($exce)) {

    $BlogTitle = $row['BlogTitle'];
    $BlogOwner = $row['BlogOwner'];
    $BlogImage = $row['BlogImage'];
    $BlogThumbImage = $row['BlogThumbImage'];
    $BlogDescription = $row['BlogDescription'];
    $BlogStatus = $row['BlogStatus'];
    $BlogOgTag = $row['BlogOgTag'];
    $BlogOgTitle = $row['BlogOgTitle'];
    $BlogAlias = $row['BlogAlias'];
    $BlogDate = $row['BlogDate'];
    $ReadingTime = $row['ReadingTime'];
    $TwitterTag = $row['TwitterTag'];
    $HiTag = $row['HiTag'];
    

    $altTag = $row['altTag'];
    $MetaDescription = $row['MetaDescription'];
    $MetaTitle = $row['MetaTitle'];
    $DisplayOrder = $row['DisplayOrder'];
    $FK_Status = $row['FK_Status'];
    $Keywords = $row['Keywords'];

    
    
}
// echo $BlogAlias;

//check for edit
if (isset($_REQUEST['pid']) && $_REQUEST['pid'] > 0) {
    $pid = $_REQUEST['pid'];
    $isUpdate = 1;
} else {
    $isUpdate = 0;
}

if ($isUpdate == 1) {
    $ad = $link->rawQueryOne("select * from Blog_master where PK_BLogID=?", array($_REQUEST['pid']));
    if ($link->count > 0) {
        $project_id = $ad['PK_BlogID'];
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
                    <h4 class="mb-sm-0 font-size-18">Edit Blogs</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">blogs</a></li>
                            <li class="breadcrumb-item active">Edit Blog</li>
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
                                <form  action="editblog.php " class="needs-validation" novalidate method="post" name="f1"  enctype="multipart/form-data">
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Blog Title</label>
                                                    <input required type="hidden" name="pid" id="pid" value="<?php echo $id; ?> ">
                                                    <input class="form-control" name="BlogTitle" type="text" value="<?php echo $BlogTitle; ?>"  id="BlogTitle">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Blog Owner</label>
                                                    <input class="form-control" name="BlogOwner" type="text" value="<?php echo $BlogOwner; ?>"  id="ProjectAlias">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-search-input" class="form-label">Blog Date</label>
                                                    <input class="form-control" name="BlogDate" type="Date" value="<?php echo $BlogDate; ?>"   id="ProjectAlias">
                                                </div>



                                                <div class="mb-3">
                                                    <label for="example-tel-input" class="form-label"> Blog Thumb Image</label>
                                                    <input required type="file" name="BlogThumbImage" id=" BlogThumbImage" value="<?php echo $BlogThumbImage; ?>" class="form-control">
                                                    <br>
                                                        <div class="image-area">
                                                            <img class="photo" image-id="123" data-id="1" src="<?php echo $ad['BlogThumbImage']; ?>" alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                            <a class="remove-image"  style="display: inline;">&#215;</a>
                                                        </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Blog Alias</label>
                                                    <input onkeyup="aliascheck(this.value)" required class="form-control" name="BlogAlias" type="text" value="<?php echo $BlogAlias; ?>"  id="BlogAlias">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-search-input" class="form-label">Reading Time (in mins.)</label>
                                                    <input class="form-control" name="ReadingTime" type="number" value="<?php echo $ReadingTime; ?>"  id="ReadingTime">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-search-input" class="form-label">Blog Status</label>
                                                    <select required class="form-select" id="BlogStatus" name="BlogStatus">
                                                        <option>select</option>
                                                        <option value="10" <?php if($BlogStatus == 10){echo "selected";} ?> >Publised</option>
                                                        <option value="11" <?php if($BlogStatus == 11){echo "selected";} ?> >Draft</option>
                                                    </select>
                                                </div>


                                                <div class="mb-3">
                                                    <label for="example-tel-input" class="form-label">Blog Image</label>
                                                    <input required type="file" name="BlogImage" id="BlogImage" value="<?php echo $BlogImage; ?>" class="form-control">
                                                    <br>
                                                        <div class="image-area">
                                                            <img class="photo" image-id="123" data-id="1" src="<?php echo $ad['BlogImage']; ?>" alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                            <a class="remove-image"  style="display: inline;">&#215;</a>
                                                        </div>
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
                                                        <div id="ckeditor-classic"></div>
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
                                                            <input type="text" class="form-control" id="MetaTitle" value="<?php echo $MetaTitle; ?>" name="MetaTitle">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Meta Description</label>
                                                            <input type="text" value="<?php echo $MetaDescription; ?>" class="form-control" id="MetaDescription" name="MetaDescription">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Alt Tag</label>
                                                            <input type="text" class="form-control" id="altTag" value="<?php echo $altTag; ?>" name="altTag">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Blog OG Title</label>
                                                            <input type="text" id="BlogOgTitle" name="BlogOgTitle" value="<?php echo $BlogOgTitle; ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Blog OG Tag</label>
                                                            <input type="text" id="BlogOgTag" name="BlogOgTag" value="<?php echo $BlogOgTag; ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Twitter Tag</label>
                                                            <input type="text" id="TwitterTag" name="TwitterTag" value="<?php echo $TwitterTag; ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>HI Tag</label>
                                                            <input type="text" id="HiTag" name="HiTag" value="<?php echo $HiTag; ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Keywords</label>
                                                            <input type="text" id="Keywords" name="Keywords" value="<?php echo $Keywords; ?>" class="form-control" />
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

            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
            <script>
    function aliascheck(val)
        {
            $.ajax({
              type: "POST",
               url: "alias_check.php",
               data: "alias_edit_blog="+val,
                  
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
            include("footer.php");

            ?>

         
<?php
include("header.php");
include("../../Helper/connect.php");


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
                    <h4 class="mb-sm-0 font-size-18">Add Aminities</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Aminities</a></li>
                            <li class="breadcrumb-item active">Aminities</li>
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
                    <form  action="addaminities.php " class="needs-validation" novalidate method="post" name="f1"  enctype="multipart/form-data">
        <div class="row">
            
            <div class="col-lg-6">
                <div>
                    <div class="mb-3">
                        <label for="example-text-input" class="form-label">Amenity name</label>
                        <input name="amenity name" required class="form-control" type="text" placeholder="" id="BlogTitle">
                    </div>
                   
                    <!-- <div class="mb-3">
                        <label for="example-text-input" class="form-label">Alt Tag</label>
                        <input name="altTag"  class="form-control" type="text" placeholder="" id="BlogTitle">
                    </div> -->

                    <!-- <div class="mb-3">
                        <label for="example-tel-input" class="form-label">Gallery Image1</label>
						<input  type="file" name="GalleryImage1" id="GalleryImage1" class="form-control">
                    </div> -->
                    
                    <!-- <div class="mb-3">
                        <label for="example-tel-input" class="form-label">Gallery Image3</label>
						<input type="file" name="GalleryImage3" id="GalleryImage3" class="form-control">
                    </div> -->
                   
                </div>
            </div>

           <div class="col-lg-6">
                <!-- <div class="mt-3 mt-lg-0">
                    <div class="mb-3">
                        <label for="example-text-input" class="form-label">Interior Alias</label>
                        <input onkeyup="aliascheck(this.value)" required class="form-control" name="InteriorAlias" type="text" placeholder="" id="ProjectAlias">
                    </div>
                    <div class="mb-3">
                        <label for="example-text-input" class="form-label">Meta Description</label>
                        <input name="MetaDescription" class="form-control" type="text" placeholder="" id="BlogTitle">
                    </div>
                   
                    <div class="mb-3">
                        <label for="example-text-input" class="form-label">Keywords</label>
                        <input name="Keywords" class="form-control" type="text" placeholder="" id="BlogTitle">
                    </div>
                    <div class="mb-3">
                        <label for="example-tel-input" class="form-label">Gallery Image2</label>
						<input type="file" name="GalleryImage2" id="GalleryImage2" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="example-tel-input" class="form-label">Gallery Image4</label>
						<input type="file" name="GalleryImage4" id="GalleryImage4" class="form-control">
                    </div>
                </div> -->
            </div>

            <!-- <div class="card-body">
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

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <!-- <script>
    function aliascheck(val)
        {
            $.ajax({
              type: "POST",
               url: "alias_check.php",
               data: "alias_add_interior="+val,
                  
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
</script> -->
    
<?php
include("footer.php")
?>
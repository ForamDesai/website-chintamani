<?php
include("header.php");
include("../../Helper/connect.php");

// Mridul's code
$id =  $_GET['pid'];
$query = "SELECT * FROM `interior_master` WHERE `interior_master`.`PK_interior` = $id";
$exce = mysqli_query($con, $query);

if ($row = mysqli_fetch_array($exce)) {

    $InteriorTitle = $row['InteriorTitle'];
    $Alias = $row['Alias'];
    $MetaTitle = $row['Metatitle'];
    $MetaDescription = $row['MetaDescription'];
    $altTag = $row['altTag'];
    $Keywords = $row['Keywords'];
    $GalleryImage1 = $row['GalleryImage1'];
    $GalleryImage2 = $row['GalleryImage2'];
    $GalleryImage3 = $row['GalleryImage3'];
    $GalleryImage4 = $row['GalleryImage4'];
}?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Edit Interior</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Interiors</a></li>
                                <li class="breadcrumb-item active"> Edit Interior</li>
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
                            <form  action="editinterior.php " class="needs-validation" novalidate method="post" name="f1"  enctype="multipart/form-data">
                               
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Interior Title</label>
                                                    <input required value="<?php echo $InteriorTitle ?>" name="InteriorTitle" class="form-control" type="text" placeholder="Artisanal kale" id="BlogTitle">
                                                    <input type="hidden" name="pid" value=" <?php echo $id; ?>">
                                                </div>


                                                <div class="mb-3 ">
                                                    <label for="example-tel-input" class="form-label">Gallery Image1</label>
                                                    <input required type="file" name="GalleryImage1" id="product_image" class="form-control">
                                                    <div class="image-area my-4">
                                                        <img class="photo" image-id="123" data-id="1" src=<?php echo $ad['GalleryImage1']; ?>   alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                        <a  href="" onclick="" class="remove-image" style="display: inline;">
                                                        &#215;
                                                    </a>
                                                    </div>
                                                   
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-tel-input" class="form-label">Gallery Image3</label>
                                                    <input required type="file" name="GalleryImage3" id="product_image" class="form-control">

                                                    <div class="image-area my-4">
                                                        <img class="photo" image-id="123" data-id="1" src=<?php echo $ad['GalleryImage1']; ?>  alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                        <a class="remove-image" style="display: inline;">&#215;</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Interior Alias</label>
                                                    <input onkeyup="aliascheck(this.value)" required value = "<?php echo $Alias ?>" class="form-control" type="text" name="interior_alias" placeholder="Artisanal kale" id="ProjectAlias">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-tel-input" class="form-label">Gallery Image2</label>
                                                    <input required  type="file" name="GalleryImage2" id="product_image" class="form-control">
                                                    <div class="image-area my-4">
                                                        <img class="photo" image-id="123" data-id="1" src=<?php echo $ad['GalleryImage1']; ?>  alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                        <a class="remove-image" style="display: inline;">&#215;</a>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-tel-input" class="form-label">Gallery Image4</label>
                                                    <input  required type="file" name="GalleryImage4" id="product_image" class="form-control">
                                                    <div class="image-area my-4">
                                                        <img class="photo" image-id="123" data-id="1" src=<?php echo $ad['GalleryImage1']; ?>  alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                        <a class="remove-image" style="display: inline;">&#215;</a>
                                                    </div>
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
                                                        <input value="<?php echo $MetaTitle ?>" type="text" class="form-control" id="MetaTitle" name="MetaTitle">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label>Meta Description</label>
                                                        <input value="<?php echo $MetaDescription ?>" type="text" class="form-control" id="MetaDescription" name="MetaDescription">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label>Alt Tag</label>
                                                        <input value="<?php echo $altTag ?>" type="text" class="form-control" id="altTag" name="altTag">
                                                    </div>
                                                </div>



                                                <div class="col-xl-4 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label>Keywords</label>
                                                        <input value="<?php echo $Keywords ?>" type="text" id="Keywords" name="Keywords" class="form-control" />
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
            include("footer.php");

            ?>

         
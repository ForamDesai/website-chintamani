<?php
include("header.php");
include("../../Helper/connect.php");
$query="select * from interior_master where isDeleted=0";
$exce = mysqli_query($con, $query);


?>
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Interior</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Interior</a></li>
                            <li class="breadcrumb-item active">Interior</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
         <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-wrap gap-2 justify-content-end">
                            <button type="button" class="btn btn-success waves-effect waves-light"><a href="add_interior.php" style="color: white;">Add New Interior</button>
                        </div>
                    </div>
                    <div class="card-body">

                    <!-- Mridul removebtn -->
                    <!-- <div class="d-flex flex-wrap gap-2 ">
                            <button type="button" class="btn btn-secondary waves-effect waves-light" >All Projects</button>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                   Type of Project <i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Commercial</a>
                                    <a class="dropdown-item" href="#">Residential</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                   Status<i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Compelete</a>
                                    <a class="dropdown-item" href="#">In-Progress</a>
                                </div>
                            </div>
                        </div> -->
                        <br/>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Interior title</th>
                                        <th>Alias</th>
                                        <th>Gallery</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count=1;
                                    if(mysqli_num_rows($exce) > 0)
                                    {
                                     while($row = mysqli_fetch_array($exce))
                                     {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $count ++; ?></th>
                                        <td><?php echo $row['InteriorTitle'] ?></td>
                                        <td><?php echo $row['Alias'] ?></td>
                                        <td>
                                            <img src="<?php echo $row['GalleryImage1'];?>" width="70px" height="70px" />
                                            <img src="<?php echo $row['GalleryImage2'];?>" width="70px" height="70px" />
                                            <img src="<?php echo $row['GalleryImage3'];?>" width="70px" height="70px" />
                                            <img src="<?php echo $row['GalleryImage4'];?>" width="70px" height="70px" />
                                        </td>
                                        <td>
                                            <a href="edit_interior.php?pid=<?php echo $row['PK_interior']; ?>" class="btn btn-outline-secondary" title="Edit"><i class="fas fa-pen"></i></a>
                                        </td>
                                        <td>
                                            <a a onClick='javascript:confirmationDelete($(this));return false;'  href="deleteinterior.php?pid=<?php echo $row['PK_interior']; ?>" class="btn btn-outline-secondary" title="Delete"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                     }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <br/>
                        <nav aria-label="...">
                            <ul class="pagination  justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <span class="page-link"><i class="mdi mdi-chevron-left"></i></span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <span class="page-link">
                                        2
                                        <span class="sr-only">(current)</span>
                                    </span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="mdi mdi-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <script>
               function confirmationDelete(anchor) {
        var conf = confirm('Are You Sure Want To Delete ?');
        if (conf)
            window.location = anchor.attr("href");
    }
        </script>
         

    
<?php
include("footer.php")
?>
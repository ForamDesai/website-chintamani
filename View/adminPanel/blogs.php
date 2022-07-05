<?php
include("header.php");
include("../../Helper/connect.php");
$query = "select * from blog_master WHERE isDeleted = 0";
$exce = mysqli_query($con, $query);

$Total_no_of_rows = mysqli_num_rows($exce);
$rows_to_be_displayed = "3";
$no_of_pages = ceil($Total_no_of_rows / $rows_to_be_displayed);

if (isset($_GET["page_id"])) {
    $Pageid = $_GET["page_id"];
} else {
    $Pageid = 1;
}
$offset  = ($Pageid - 1) * $rows_to_be_displayed;
// offset- The number after which need to fetch the rows.
$query_for_pagniation = "select * from blog_master where isDeleted=0 LIMIT {$offset},{$rows_to_be_displayed}";
$exce_for_pagination = mysqli_query($con, $query_for_pagniation);


?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Blogs</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Blogs</a></li>
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
                        <div class="card-header">
                            <div class="d-flex flex-wrap gap-2 justify-content-end">
                                <button type="button" class="btn btn-success waves-effect waves-light"><a href="add_blog.php" style="color: white;">Add New Blog </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- <div class="d-flex flex-wrap gap-2"> -->
                            <div class="">


                                <br />
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Blog Title</th>
                                                <th>Blog Owner</th>
                                                <th>Blog Thumbnail Image</th>
                                                <th>Blog Image</th>
                                                <th>BlogDescription</th>
                                                <th>Blog Status</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $count = ($rows_to_be_displayed * ($Pageid - 1)) + 1;
                                            if (mysqli_num_rows($exce_for_pagination) > 0) {
                                                while ($row = mysqli_fetch_array($exce_for_pagination)) {
                                            ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $count++; ?></th>
                                                        <td><?php echo $row['BlogTitle'] ?></td>
                                                        <td><?php echo $row['BlogOwner'] ?></td>
                                                        <td><img src="<?php echo $row['BlogThumbImage'] ?>" width="70px" height="70px" /></td>
                                                        <td><img src="<?php echo $row['BlogImage'] ?>" width="70px" height="70px" /></td>
                                                        <td><?php echo $row['BlogDescription'] ?></td>
                                                        <td><?php if($row['BlogStatus'] == 10){echo "Published";}elseif($row['BlogStatus'] == 11){echo "Draft"; }?></td>
                                                        <td>
                                                            <a  href="edit_blog.php?pid=<?php echo $row['PK_BlogID']; ?>" class="btn btn-outline-secondary" title="Edit"><i class="fas fa-pen"></i></a>
                                                        </td>
                                                        <td>
                                                            <a a onclick='javascript:confirmationDelete($(this));return false;' href="deleteblog.php?pid=<?php echo $row['PK_BlogID']; ?>" class="btn btn-outline-secondary" title="Delete"><i class="fas fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <br />
                                <nav aria-label="...">
                                    <ul class="pagination  justify-content-end mb-0">
                                        <!-- <li class="page-item disabled">
                                    <span class="page-link"><i class="mdi mdi-chevron-left"></i></span>
                                </li> -->
                                        <?php
                                        for ($i = 1; $i <= $no_of_pages; $i++) {

                                        ?>
                                            <li class="page-item <?php if ($i == $Pageid) {
                                                                        echo 'active';
                                                                    } ?> "><a class="page-link" href="projects.php?page_id=<?php echo $i; ?>">
                                                    <?php echo $i; ?></a></li>

                                        <?php
                                        }
                                        ?>

                                        <!-- <li class="page-item">
                                    <a class="page-link" href="#"><i class="mdi mdi-chevron-right"></i></a>
                                </li> -->
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
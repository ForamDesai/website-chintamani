<?php
include("header.php");
include("../../Helper/connect.php");

$query = "select * from inquiry";
$exce = mysqli_query($con, $query);
  
// For Pagination
$Total_no_of_rows = mysqli_num_rows($exce);
$rows_to_be_displayed = "5";
$no_of_pages = ceil($Total_no_of_rows / $rows_to_be_displayed);

if (isset($_GET["page_id"])) {
    $Pageid = $_GET["page_id"];
} else {

    $Pageid = 1;
}
$offset  = ($Pageid - 1) * $rows_to_be_displayed;
// offset- The number after which need to fetch the rows.
$query_for_pagniation = "select * from inquiry  LIMIT {$offset},{$rows_to_be_displayed}";
$exce_for_pagination = mysqli_query($con, $query_for_pagniation);
?>

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">inquiry</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">inquiry</a></li>
                                <li class="breadcrumb-item active">inquiry</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <style>
                a:hover {
                    cursor: pointer;
                }
            </style>



            <div class="row ">
                <div class="col-12">
                    <!-- <div class="card">
                        <div class="card-header">
                            <div class="d-flex flex-wrap gap-2 justify-content-end">
                                <button type="button" class="btn btn-success waves-effect waves-light"><a href="add_project.php" style="color: white;">Add New Project</a></button>
                            </div>
                        </div> -->

                        <!-- <div class="card-body">
                            <div class="d-flex flex-wrap gap-4 mb-3">

                                <button class="btn btn-secondary " type="button" id="loadAllData" onclick="loadAllData()">
                                    <a style="text-decoration:none ;color:white" href="projects.php?page_id=1"> All Projects</a>
                                </button>



                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Project Type<i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div id="fetchvalue" name="fetchvalue" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a value="commercial" class="dropdown-item">Commercial</a>
                                        <a value="residential" class="dropdown-item">Residential</a>
                                    </div> 
                                    <select id="fetchvalue" name="fetchvalue">
                                <option value="Commercial">Commercial</option>
                                <option value="Residential">Residential</option>
                            </select>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Status<i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div id="fetchvalue1" name="fetchvalue1" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a onclick="hello('5')" class="dropdown-item">Compeleted</a>
                                        <a onclick="hello('7')" class="dropdown-item">In-Progress</a>
                                    </div>
                                </div>

                            </div> -->


                            <br />
                            <div class="testing">


                                <table class="table mb-0 ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email id</th>
                                            <th>Phone Number</th>
                                            <th>Query</th>
                                            <th>Date of Inquiry</th>
                                            <th>Respond</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $count = ($rows_to_be_displayed * ($Pageid - 1) + 1);
                                        if(mysqli_num_rows($exce_for_pagination) > 0) {
                                            while ($row = mysqli_fetch_array($exce_for_pagination)) {
                                        ?>
                                                <tr>
                                                    <th scope="row"><?php echo $count++; ?></th>
                                                    <td><?php echo $row['first_name'] ?></td>
                                                    <td><?php echo $row['EmailId'] ?></td>
                                                    <td><?php echo $row['phone_number'] ?></td>
                                                    <td><?php echo $row['Query'] ?></td>
                                                    <td><?php echo $row['DateOfInquiry'] ?></td>
                                                    
                                               
                                                    <td>
                                                        <a class="btn btn-outline-secondary" title="Edit"><i class="fas fa-pen"></i></a>
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

                            <!-- Pagination Starts here -->

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
                                                                } ?> "><a class="page-link" href="inquiry.php?page_id=<?php echo $i; ?>">
                                                <?php echo $i; ?></a></li>

                                    <?php
                                    }

                                    ?>

                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


<script type="text/javascript">
    function confirmationDelete(anchor) {
        var conf = confirm('Are You Sure Want To Delete ?');
        if (conf)
            window.location = anchor.attr("href");
    }



    // const loadAllData = () => {
    //     var value = $('#loadAllData').html();
    //     console.log(value);

    //     $.ajax({
    //         url: "fetchdata_for_project.php",
    //         type: 'POST',
    //         data: {all_data:value},
    //         beforeSend: function() {
    //             $(".testing").html("<h1>loading...</h1>");
    //         },
    //         success: function(data) {

    //             $(".testing").html(data);
    //             // console.log(data);
    //             // $(".testing").html("<h1>loading...</h1>");
    //         }
    //     });
    // }






    $(document).ready(function() {
        $('#fetchvalue a').on('click', function() {
            var value = $(this).val($(this).text()).val();
            // console.log(value);
            $.ajax({
                url: "fetchdata_for_project.php",
                type: 'POST',
                data: {
                    selected_data: value
                },
                beforeSend: function() {
                    $(".testing").html("<h1>loading...</h1>");
                },
                success: function(data) {

                    $(".testing").html(data);
                    // console.log(data);
                    // $(".testing").html("<h1>loading...</h1>");
                }
            });
        });
    });




    const hello = (a) => {
        // console.log(a);
        $.ajax({

            url: "fetchdata_for_project.php",
            type: 'POST',
            data: {
                request_status: a
            },
            // beforeSend: function() {
            //     $(".testing").html("<h1>loading...</h1>");
            // },
            success: function(data) {

                $(".testing").html(data);
                // console.log(data);
                // $(".testing").html("<h1>loading...</h1>");
            }

        })
    }

    // $(document).ready(function() {
    //     $('#fetchvalue1 ').on('click', function() {            
    //         console.log(value);
    //         $.ajax({
    //             url: "fetchdata_for_project.php",
    //             type: 'POST',
    //             data: {request_status:value},
    //             beforeSend: function() {
    //                 $(".testing").html("<h1>loading...</h1>");
    //             },
    //             success: function(data) {

    //                 $(".testing").html(data);
    //                 console.log(data);
    //                 // $(".testing").html("<h1>loading...</h1>");
    //             }
    //         });
    //     });
    // });
</script>


<?php
include("footer.php")
?>
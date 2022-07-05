<?php
    include("header.php");
    include("../../Helper/connect.php");
    $sql="SELECT * FROM inquiry ORDER BY DateOfInquiry ASC ";
    $exce = mysqli_query($con,$sql);
    $sql1 = "SELECT * FROM inquiry WHERE FK_Status = 1";
    $exce1 = mysqli_query($con,$sql1);
    $sql2 = "SELECT * FROM leasing_master WHERE isDeleted = 0";
    $exce2 = mysqli_query($con,$sql2);

    $count =  count($link->rawQuery("select * from inquiry"));
    $active = (count($link->rawQuery("select * from inquiry where FK_Status = 2"))*100)/$count;
    $closed = (count($link->rawQuery("select * from inquiry where FK_Status = 4"))*100)/$count;
    $FollowUp = (count($link->rawQuery("select * from inquiry where FK_Status = 7"))*100)/$count;
    

 

?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div><!-- end page title -->

                <!-- Count panel header -->
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center" >
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Project</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target=<?php
                                             $sql=$link->rawQuery("select * FROM project_master;" );
                                            
                                            echo  $link->count; ?>></span>
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                    </div> 
                                </div>
                                <div class="text-nowrap" >
                                    <span class="badge bg-soft-success text-success"> 
                                        <?php
                                            $sql=$link->rawQuery("select * FROM project_master where isDeleted=0 and FK_Status = 5;" );
                                            echo  $link->count;
                                        ?>
                                    </span>
                                    <span class="ms-1 text-muted font-size-13">completed</span>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Toatal Leased Projects</span>
                                        <h4 class="mb-3">
                                            <?php
                                                $sql=$link->rawQuery("select * FROM leasing_master where isDeleted=0;" );
                                            ?>
                                            <span class="counter-value" data-target=<?php echo  $link->count; ?>></span>
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                    </div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="badge bg-soft-danger text-danger">-29 Trades</span>
                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col-->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Available for Lease</span>
                                        <h4 class="mb-3">
                                             <?php
                                                $sql=$link->rawQuery("select * FROM project_master where isDeleted=0 and FK_Status = 5;" );
                                            ?>
                                            <span class="counter-value" data-target=<?php echo  $link->count; ?>></span>
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <div id="mini-chart3" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                    </div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="badge bg-soft-success text-success">+ $2.8k</span>
                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Inquiry</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="12.57">0</span>%
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                    </div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="badge bg-soft-success text-success">+2.95%</span>
                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->    
                </div><!-- end row-->
                <!--  End of Count panel header -->

                <!--   2nd row -->
                <div class="row">
                    <!-- 2nd row left panel -->
                    <div class="col-xl-8">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Inquiry List</h4>
                                    <!-- <div class="flex-shrink-0">
                                        <select class="form-select form-select-sm mb-0 my-n1">
                                            <option value="Today" selected="">Today</option>
                                            <option value="Yesterday">Yesterday</option>
                                            <option value="Week">Last Week</option>
                                            <option value="Month">Last Month</option>
                                        </select>
                                    </div> -->
                                </div><!-- end card header -->

                                <div class="card-body px-0">
                                    <div class="px-3" data-simplebar style="max-height: 352px;">
                                        <ul class="list-unstyled activity-wid mb-0">

                                        <?php
                                        $count = count($sql); 
                                        while($row = mysqli_fetch_array($exce)){
                                          
                                        
                                        ?>

                                            <li class="activity-list activity-border">
                                                <div class="activity-icon avatar-md">
                                                    <span class="avatar-title bg-soft-warning text-warning rounded-circle">
                                                    <i class="fa fa-user font-size-24"></i>
                                                    </span>
                                                </div>
                                                <div class="timeline-list-item">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 overflow-hidden me-4">
                                                        <span> <span style="font-weight:600" class="font-size-14 mb-1 ">Email: </span> &nbsp;&nbsp; <?php echo  $row['EmailId'];  ?> </span><br>
                                                            <span > <span style="font-weight:600" > Date Of Inquiry: </span> &nbsp;&nbsp; <?php echo $row['DateOfInquiry'];  ?></span>
                                                            <p class="text-truncate text-muted font-size-13"><?php echo $row['Query'];  ?></p>
                                                        </div>
                                                        
                                                        <div class="flex-shrink-0 text-end me-3">
                                                            <h6 class="mb-1">
                                                                <?php 
                                                                if($row['FK_Status'] === '2'){
                                                                    echo "Active";
                                                                }else{
                                                                    echo "Inactive";
                                                                }
                                                                ?>
                                                                
                                                            </h6>
                                                           
                                                        </div>

                                                        <div class="flex-shrink-0 text-end">
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>
            
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </li>
                                            <?php
                                        } 
                                            ?>

                                        </ul>
                                    </div>    
                                </div> <!-- end card body -->
                            </div> <!-- end card -->
                    </div> <!-- 2nd row left panel -->
                    
                    <!-- 2nd row right panel -->
                    <div class="col-xl-4">
                                <!-- card -->
                                <div class="card">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-4">
                                            <h3 class=" mx-auto">Inquiry Analysis</h3>
                                            <!-- <div class="ms-auto">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">World<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                        <a class="dropdown-item" href="#">USA</a>
                                                        <a class="dropdown-item" href="#">Russia</a>
                                                        <a class="dropdown-item" href="#">Australia</a>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div>
                                            <h5 style="display:inline" >Total Inquries</h5>  <h5 style="display:inline">: &nbsp;<?php  echo $count?></h5>  
                                        </div><br>

                                        <!-- <div id="sales-by-locations" data-colors='["#5156be"]' style="height: 250px"></div> -->

                                        <div class="px-2 py-2">
                                            <p class="mb-1">Active Inquries<span class="float-end"><?php echo round($active,1); ?>%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar a progress-bar-striped bg-primary" role="progressbar"
                                                    style="width: <?php echo $active.'%'; ?>" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75" >
                                                </div>
                                            </div>

                                            <p class="mt-3 mb-1">Closed Inquries <span class="float-end"><?php echo round($closed,1); ?>%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                                    style="width: <?php echo $closed.'%'; ?>" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
                                                </div>
                                            </div>

                                            <p class="mt-3 mb-1">Follow Up Inquries<span class="float-end"><?php echo round($FollowUp,1); ?>%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                                    style="width:  <?php echo $FollowUp.'%'; ?>" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                    </div> <!-- 2nd row right panel -->
                </div>

                <!-- 3rd row -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Daily Users</h4>
                                <!-- <div class="flex-shrink-0">
                                    <ul class="nav nav-tabs-custom card-header-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#buy-tab" role="tab">Buy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#sell-tab" role="tab">Sell</a>
                                        </li>
                                    </ul>
                                </div> -->
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="tab-content">
                                    <!-- <div class="tab-pane active" id="buy-tab" role="tabpanel">
                                        <div class="float-end ms-2">
                                            <h5 class="font-size-14"><i class="bx bx-wallet text-primary font-size-16 align-middle me-1"></i> <a href="#!" class="text-reset text-decoration-underline">$4335.23</a></h5>
                                        </div>
                                        <h5 class="font-size-14 mb-4">Buy Coins</h5>
                                        <div>
                                            <div class="form-group mb-3">
                                                <label>Payment method :</label>
                                                <select class="form-select">
                                                    <option>Direct Bank Payment</option>
                                                    <option>Credit / Debit Card</option>
                                                    <option>Paypal</option>
                                                    <option>Payoneer</option>
                                                    <option>Stripe</option>
                                                </select>
                                            </div>

                                            <div>
                                                <label>Add Amount :</label>
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text">Amount</label>
                                                    <select class="form-select" style="max-width: 90px;">
                                                        <option value="BT" selected>BTC</option>
                                                        <option value="ET">ETH</option>
                                                        <option value="LT">LTC</option>
                                                    </select>
                                                    <input type="text" class="form-control" placeholder="0.00121255">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <label class="input-group-text">Price</label>
                                                    <input type="text" class="form-control" placeholder="$58,245">
                                                    <label class="input-group-text">$</label>
                                                </div>

                                                <div class="input-group mb-3">
                                                    <label class="input-group-text">Total</label>
                                                    <input type="text" class="form-control" placeholder="$36,854.25">
                                                </div>
                                            </div>  

                                            <div class="text-center">
                                                <button type="button" class="btn btn-success w-md">Buy Coin</button>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- end tab pane -->
                                    <div class="tab-pane" id="sell-tab" role="tabpanel">
                                        <div class="float-end ms-2">
                                            <h5 class="font-size-14"><i class="bx bx-wallet text-primary font-size-16 align-middle me-1"></i> <a href="#!" class="text-reset text-decoration-underline">$4235.23</a></h5>
                                        </div>
                                        <h5 class="font-size-14 mb-4">Sell Coins</h5>

                                        <div>

                                            <div class="form-group mb-3">
                                                <label>Wallet ID :</label>
                                                <input type="email" class="form-control" placeholder="1cvb254ugxvfcd280ki">
                                            </div>

                                            <div>
                                                <label>Add Amount :</label>
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text">Amount</label>
                                                    
                                                    <select class="form-select" style="max-width: 90px;">
                                                        <option value="BT" selected>BTC</option>
                                                        <option value="ET">ETH</option>
                                                        <option value="LT">LTC</option>
                                                    </select>
                                                    <input type="text" class="form-control" placeholder="0.00121255">
                                                </div>

                                                <div class="input-group mb-3">
                                                
                                                    <label class="input-group-text">Price</label>
                                                    
                                                    <input type="text" class="form-control" placeholder="$23,754.25">
                                                    
                                                    <label class="input-group-text">$</label>
                                                </div>

                                                <div class="input-group mb-3">
                                                    <label class="input-group-text">Total</label>
                                                    <input type="text" class="form-control" placeholder="$6,852.41">
                                                </div>
                                            </div>  

                                            <div class="text-center">
                                                <button type="button" class="btn btn-danger w-md">Sell Coin</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->
                                </div>
                                <!-- end tab content -->
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                            
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Total Traffic</h4>
                                <div class="flex-shrink-0">
                                    <!-- <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#transactions-all-tab" role="tab">
                                                All 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#transactions-buy-tab" role="tab">
                                                Buy 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#transactions-sell-tab" role="tab">
                                                Sell  
                                            </a>
                                        </li>
                                    </ul> -->
                                    <!-- end nav tabs -->
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body px-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="transactions-all-tab" role="tabpanel">
                                        <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                            <table class="table align-middle table-nowrap table-borderless">
                                                <tbody>
                                                    <!-- <tr>
                                                        <td style="width: 50px;">
                                                            <div class="font-size-22 text-success">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Project name</h5>
                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr> -->

                                                    <!-- <tr>
                                                        <td>
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-success">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Buy LTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">16 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">1.88 LTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$94.22</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-success">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Buy ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">17 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.42 ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$84.32</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">18 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$145.80</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="font-size-22 text-success">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->
                                    <div class="tab-pane" id="transactions-buy-tab" role="tabpanel">
                                        <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                            <table class="table align-middle table-nowrap table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="font-size-22 text-success">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                      
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->
                                    <div class="tab-pane" id="transactions-sell-tab" role="tabpanel">
                                        <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                            <table class="table align-middle table-nowrap table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">18 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$145.80</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell LTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">16 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">1.88 LTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$94.22</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">17 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.42 ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$84.32</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    

                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->
                                </div>
                                <!-- end tab content -->
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">New Inquries</h4>
                                <!-- <div class="flex-shrink-0">
                                    <select class="form-select form-select-sm mb-0 my-n1">
                                        <option value="Today" selected="">Today</option>
                                        <option value="Yesterday">Yesterday</option>
                                        <option value="Week">Last Week</option>
                                        <option value="Month">Last Month</option>
                                    </select>
                                </div> -->
                            </div><!-- end card header -->

                            <div class="card-body px-0">
                                <div class="px-3" data-simplebar style="max-height: 352px;">
                                    <ul class="list-unstyled activity-wid mb-0">

                                    <?php
                                        // $count = count($sql); 
                                        while($row = mysqli_fetch_array($exce1)){
                                          
                                        
                                        ?>

                                            <li class="activity-list activity-border">
                                                <div class="activity-icon avatar-md">
                                                    <span class="avatar-title bg-soft-warning text-warning rounded-circle">
                                                    <i class="fa fa-user font-size-24"></i>
                                                    </span>
                                                </div>
                                                <div class="timeline-list-item">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 overflow-hidden me-4">
                                                        <span> <span style="font-weight:600" class="font-size-14 mb-1 ">Email: </span> &nbsp;&nbsp; <?php echo  $row['EmailId'];  ?> </span><br>
                                                            <span > <span style="font-weight:600" > Date Of Inquiry: </span> &nbsp;&nbsp; <?php echo $row['DateOfInquiry'];  ?></span>
                                                            <p class="text-truncate text-muted font-size-13"><?php echo $row['Query'];  ?></p>
                                                        </div>
                                                        
                                                        <!-- <div class="flex-shrink-0 text-end me-3">
                                                            <h6 class="mb-1">
                                                                <?php 
                                                                if($row['FK_Status'] === '2'){
                                                                    echo "Active";
                                                                }else{
                                                                    echo "Inactive";
                                                                }
                                                                ?>
                                                                
                                                            </h6>
                                                           
                                                        </div> -->

                                                        <div class="flex-shrink-0 text-end">
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>
            
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </li>
                                            <?php
                                        } 
                                            ?>

                                 
                                    </ul>
                                </div>    
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div><!-- end row -->

                <!-- 4throw -->
                <div class="col-xl-8">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1 ">Leased Projects List</h4>
                                   
                                </div><!-- end card header -->
                                <div class="card-body">
                    <div>
                    
                        <br/>
                        <div class="table-responsive ">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Lease Name</th>
                                        <th>Location</th>
                                        <th>Carpet Area</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count=1;
                                    if(mysqli_num_rows($exce2) > 0)
                                    {
                                     while($row = mysqli_fetch_array($exce2))
                                     {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $count ++; ?></th>
                                        <td><?php echo $row['Lease_Name'] ?></td>
                                        <td><?php echo $row['Location'] ?></td>
                                        <td><?php echo $row['CarpetArea'] ?></td>
                                       
                                    </tr>
                                    <?php
                                     }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <br/>
                        <!-- <nav aria-label="...">
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
                        </nav> -->
                       
                    </div>
                </div>
                            </div> <!-- end card -->
                    </div> <!-- 2nd row left panel -->
           
        </div><!-- container-fluid -->
    </div><!-- End Page-content -->
</div><!-- end main content --> 
<?php
include("footer.php");
?>



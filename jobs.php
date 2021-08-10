<?php include 'dbconn.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Jobs</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Simplebar -->
    <link type="text/css" href="assets/vendor/simplebar.min.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="assets/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">

    <!-- Flatpickr -->
    <link type="text/css" href="assets/css/vendor-flatpickr.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr.rtl.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr-airbnb.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr-airbnb.rtl.css" rel="stylesheet">
    <link type="text/css" href="assets/vendor/daterangepicker.css" rel="stylesheet">
    <link  rel="icon" type="image/x-icon" href="assets/images/icon.ico">

    <!--Kendo-->
    <link href="assets/css/kendo.default.min.css" rel="stylesheet" />
    <link href="assets/css/kendo.bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/kendo.common.min.css" rel="stylesheet" />



</head>

<body class="layout-mini">  

    <div class="preloader"></div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
            <div class="mdk-header__content">

                <div class="navbar navbar-expand-sm navbar-main navbar-dark  pr-0" id="navbar" style="background: #222;" data-primary>
                    <div class="container-fluid p-0">

                        <!-- Navbar toggler -->

                        <button class="navbar-toggler navbar-toggler-custom navbar-toggler-right d-block" type="button" data-toggle="sidebar">
                            <span class="material-icons">apps</span>
                        </button>


                        <!-- Navbar Brand -->
                        <a href="dashboard.php" class="navbar-brand ">
                            <img class="navbar-brand-icon" src="assets/images/stack-logo-white.svg" width="40" alt="car">
                            <span>Reben</span>
                        </a>


                        <ul class="nav navbar-nav ml-auto d-none d-md-flex">
                            <h4 id='time' style="color: white; margin-right: 20px;">Time</h4>
                           
                        </ul>

                        <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                            <li class="nav-item dropdown">
                                <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                    <img src="assets/images/avatar/demi.png" class="rounded-circle" width="32" alt="Frontted">
                                    <span class="ml-1 d-flex-inline">
                                        <span class="text-light">Admin</span>
                                    </span>
                                </a>
                              
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">    
                    
                <div class="container-fluid page__heading-container">
                        
                        <div class="page__heading d-flex align-items-center">
                            <div class="flex">                               
                                <h4 id="outstanding" class="m-0"> Outstanding Cash : GHS 0.00 </h4> 
                            </div>
                           
                        </div>
                    </div>
                   

                <div class="container-fluid page__container">   
                        
                    <div class="card" id="jobsCard" style="margin-Top:50px">
                            <div class="card-header">
                                <h3><i class="material-icons icon-muted  ml-3">directions_car</i> Jobs 
                                    <div style="float: right;">
                                        <a id="printList" class="btn btn-success ">Print PDF <i style="color:white" class="material-icons  ml-3">print</i></a>
                                        <a href="" class="btn btn-warning ml-3" data-toggle="modal" data-target="#modal-addclient"> New Job <i style="color:white" class="material-icons  ml-3">add</i></a>
                                    </div>
                                </h3>
                            </div>



                     <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values="[&quot;js-lists-values-employee-name&quot;]">
          
                        <table id='jobsTable' class="table mb-0 thead-border-top-0">
                            <thead>
                                <tr>
                                    <!-- <th scope="col">ID</th> -->
                                    <th scope="col">Name</th>
                                    <!-- <th scope="col">Phone</th> -->
                                    <!-- <th scope="col">Location</th> -->
                                    <th scope="col">Car Model</th>
                                    <!-- <th scope="col">Year</th> -->
                                    <th scope="col">Plate No</th>                                    
                                    <!-- <th scope="col">Color</th> -->
                                    <!-- <th scope="col">Type</th> -->
                                    <!-- <th scope="col">Transmission</th> -->
                                    <th scope="col">Problem</th>
                                    <th scope="col">Deadline</th>
                                    <th scope="col">Cost</th>
                                    <th scope="col">Amount Paid</th>
                                    <th scope="col">Balance</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>                                  

                                </tr>
                            </thead>
                            <tbody class="list" id="jobsList">

                            <?php
                                                          
                            
                                $conn = new mysqli($dbhost, $dbuser, $dbpass, $db)  or die("Connection failed". $conn -> error);
                                //echo "connected successfully"

                                $sql = "SELECT * FROM jobs ORDER BY EstimatedDate ASC";
                                $result = $conn -> query($sql);

                                $outstanding = 0;
                                if($result -> num_rows > 0){
                                    $arrayData = array();
                                    while($row = mysqli_fetch_array($result)){
                                                         
                                        //pushing data into array
                                       $arrayData[] = array(
                                           'Client' => $row["Client"],
                                           'Phone'  => $row['Phone'],
                                           'Location' => $row['LocationOfOwner'],
                                           'Model' => $row['CarModel'],
                                           'YearOfMake' => $row['YearOfMake'],
                                           'PlateNo' => $row['PlateNo'],
                                           'Color' => $row['Color'],
                                           'Type' => $row['CarType'],
                                           'Transmission' => $row['Transmission'],
                                           'Problem' => $row['Problem'],
                                           'EstimatedDate' => $row['EstimatedDate'],
                                           'AmountPaid' => $row['AmoutPaid'],
                                           'JobStatus' => $row['JobStatus']
                                       );

                                                                        

                                        $outstanding += ($row['EstimatedCost'] - $row['AmoutPaid']);
                                        //echo $outstanding;
                                        echo "<tr>";
                                        echo "<td>".$row['Client']."</td>";
                                        // echo "<td>".$row['Phone']."</td>";
                                        // echo "<td>".$row['LocationOfOwner']."</td>";
                                        echo "<td>".$row['CarModel']."</td>";
                                        // echo "<td>".$row['YearOfMake']."</td>";
                                        echo "<td>".$row['PlateNo']."</td>";
                                        // echo "<td>".$row['Color']."</td>";
                                        // echo "<td>".$row['CarType']."</td>";
                                        // echo "<td>".$row['Transmission']."</td>";
                                        echo "<td>".$row['Problem']."</td>";
                                        echo "<td>".$row['EstimatedDate']."</td>";
                                        echo "<td>".number_format($row['EstimatedCost'])."</td>";
                                        echo "<td>".number_format($row['AmoutPaid'])."</td>"; 
                                        echo "<td>".number_format($row['EstimatedCost'] - $row['AmoutPaid'])."</td>"; 
                                        if($row['JobStatus'] === 'In progress'){
                                            echo "<td><span class='badge badge-warning'>".$row['JobStatus']."</span></td>";
                                        }else{
                                            echo "<td><span class='badge badge-success'>".$row['JobStatus']."</span></td>";
                                        }                                                                            
                                        echo "<td style='width:120px'>
                                        <button type='submit' name='viewItem' class='viewItem btn btn-info btn-sm' data-toggle='modal' data-target='#modal-updateclient' title='Edit' id = ".$row['id']."> <i style = 'color:white' class='material-icons'>edit</i></button>                                        
                                        <button  class='removeItem btn btn-danger btn-sm' title='Delete job' id = ".$row['id']."> <i style = 'color:white' class='material-icons'>delete</i></button>               
                                        </td>";    
                                        echo "</tr>";
                                    }


                                    $data = json_encode($arrayData);
                                    echo "<script type=\"text/javascript\">
                                            var outstanding = document.getElementById('outstanding');
                                            outstanding.innerHTML = 'Outstanding Cash: GHS ' + ($outstanding).toLocaleString();
                                            let data = $data;
                                            console.log(data);
                                            
                                        </script>";                                    
                                        
                                }
                                else{
                                    print("no data found");
                                }                          
                            
                                //inserting into jobs table
                                // Check connection
                                if($conn === false){
                                    die("ERROR: Could not connect. " 
                                        . mysqli_connect_error());
                                }
                                else{
                                    if(isset($_POST['submit'])) {
                                    
                                        $id = 'RB'.rand();
                                        $clientName = mysqli_real_escape_string($conn, $_REQUEST['clientName']);
                                        $phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
                                        $location = mysqli_real_escape_string($conn, $_REQUEST['location']);
                                        $model = mysqli_real_escape_string($conn, $_REQUEST['model']);
                                        $prodYear = mysqli_real_escape_string($conn, $_REQUEST['prodYear']);
                                        $numberPlate = mysqli_real_escape_string($conn, $_REQUEST['numberPlate']);
                                        $bodyColor = mysqli_real_escape_string($conn, $_REQUEST['bodyColor']);
                                        $carType = mysqli_real_escape_string($conn, $_REQUEST['carType']);
                                        $transmission = mysqli_real_escape_string($conn, $_REQUEST['transmission']);
                                        $problem = mysqli_real_escape_string($conn, $_REQUEST['problem']);
                                        $paymentAmount = mysqli_real_escape_string($conn, $_REQUEST['paymentAmount']);
                                        $jobStatus = mysqli_real_escape_string($conn, $_REQUEST['jobStatus']);
                                        $estimatedCost = mysqli_real_escape_string($conn, $_REQUEST['estimatedCost']);
                                        $estimatedDateOfCompletion = mysqli_real_escape_string($conn, $_REQUEST['estimatedDateOfCompletion']);
                                        $createDate = date('Y-m-d H:i:s');
          
                                        $sqlInsert = "INSERT INTO jobs VALUES ('$id','$clientName','$phone','$location','$model','$prodYear',
                                                       '$numberPlate','$bodyColor','$carType','$transmission','$problem','$estimatedDateOfCompletion',
                                                       '$estimatedCost','$paymentAmount','', '$jobStatus','$createDate')";
                                          
                                          // use exec() because no results are returned
                                          //$conn->exec($sqlInsert);
                                        if(mysqli_query($conn, $sqlInsert)){
                                            echo "Records added successfully.";

                                            echo "<script type=\"text/javascript\">
                                                     document.getElementById('jobsList').innerHTML =  '';                                            
                                                  </script>"; 
                            
                                              

                                            $sql = "SELECT * FROM jobs ORDER BY createdAt DESC";
                                            $result = $conn -> query($sql);

                                            $outstanding = 0;
                                            if($result -> num_rows > 0){
                                               
                                                while($row = mysqli_fetch_array($result)){
                                                
                                                    $outstanding += ($row['EstimatedCost'] - $row['AmoutPaid']);
                                                    //echo $outstanding;
                                                    echo "<tr>";
                                                    echo "<td>".$row['Client']."</td>";
                                                    // echo "<td>".$row['Phone']."</td>";
                                                    // echo "<td>".$row['Location']."</td>";
                                                    echo "<td>".$row['CarModel']."</td>";
                                                    // echo "<td>".$row['YearOfMake']."</td>";
                                                    echo "<td>".$row['PlateNo']."</td>";
                                                    // echo "<td>".$row['Color']."</td>";
                                                    // echo "<td>".$row['Type']."</td>";
                                                    // echo "<td>".$row['Transmission']."</td>";
                                                    echo "<td>".$row['Problem']."</td>";
                                                    echo "<td>".$row['EstimatedDate']."</td>";
                                                    echo "<td>".number_format($row['EstimatedCost'])."</td>";
                                                    echo "<td>".number_format($row['AmoutPaid'])."</td>"; 
                                                    echo "<td>".number_format($row['EstimatedCost'] - $row['AmoutPaid'])."</td>"; 
                                                    if($row['JobStatus'] === 'In progress'){
                                                        echo "<td><span class='badge badge-warning'>".$row['JobStatus']."</span></td>";
                                                    }else{
                                                        echo "<td><span class='badge badge-success'>".$row['JobStatus']."</span></td>";
                                                    }                                                                            
                                                    echo "<td style='width:150px'>
                                                    <button  class='viewItem btn btn-info btn-sm' title='Edit' id = ".$row['id']."> <i style = 'color:white' class='material-icons'>edit</i></button>
                                                    <button  class='removeItem btn btn-danger btn-sm' title='Delete job' id = ".$row['id']."> <i style = 'color:white' class='material-icons'>close</i></button>               
                                                    </td>";    
                                                    echo "</tr>";
                                                }

                                                echo "<script type=\"text/javascript\">
                                                        var outstanding = document.getElementById('outstanding');
                                                        outstanding.innerHTML = 'Outstanding Cash: GHS ' + ($outstanding).toLocaleString();
                                                        
                                                    </script>"; 
                                        
                                          
                                                } 
                                            }
                                            else{
                                              echo "ERROR: Could not execute $sqlInsert. " . mysqli_error($conn);
                                          }
                                     }
                                }
                               

                                //editting record
                                if(isset($_POST['viewItem'])){
                                    echo "Edit me";
                                }
                               
                            ?>


                            </tbody>
                        </table>                           

                        <div class="card-body text-right">
                                <!-- Total Number of Orders: <span class="text-muted"><label id='totalOrders'></label></span> -->
                        </div>


                            </div>                                     
                    </div>   
                </div>
                             
            </div>
                <!-- // END drawer-layout__content -->

                <!-- drawer -->
                <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
                    <div class="mdk-drawer__content js-sidebar-mini" data-responsive-width="992px">

                        <div class="sidebar sidebar-mini sidebar-primary sidebar-left simplebar" data-simplebar>
                            <ul class="nav flex-column sidebar-menu mt-3" id="sidebar-mini-tabs" role="tablist">
                                <li class="sidebar-menu-item" href="dashboard.php" data-toggle="tooltip" data-title="Dashboards" data-placement="right" data-boundary="window">
                                    <a class="sidebar-menu-button" id = "dashboard" href="dashboard.php" data-toggle="tab" role="tab" aria-controls="sm_dashboards" aria-selected="true">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                        <span class="sidebar-menu-text">Dashboard</span>
                                    </a>
                                </li>
                               
                                <li class="sidebar-menu-item active" data-toggle="tooltip" data-title="Jobs List" data-placement="right" data-container="body" data-boundary="window">
                                    <a class="sidebar-menu-button" href="#sm_pages" data-toggle="tab" role="tab" aria-controls="sm_pages">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                        <span class="sidebar-menu-text">Jobs List</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item" data-toggle="tooltip" data-title="Inventory" data-placement="right" data-container="body" data-boundary="window">
                                    <a id='inventory' class="sidebar-menu-button" href="#sm_components" data-toggle="tab" role="tab" aria-controls="sm_components">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">build</i>
                                        <span class="sidebar-menu-text">Inventory</span>
                                    </a>
                                </li>

                                <li class="sidebar-menu-item" data-toggle="tooltip" data-title="Logout" data-placement="right" data-container="body" data-boundary="window">
                                    <a class="sidebar-menu-button" id='logout' href="index.php" data-toggle="tab" role="tab" aria-controls="sm_components">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" >power_settings_new</i>
                                        <span class="sidebar-menu-text">Logout</span>
                                    </a>
                                </li>
                             
                            </ul>
                        </div>

                      

                    </div>
                </div>
                <!-- // END drawer -->
            </div>
            <!-- // END drawer-layout -->

                      
                

        </div>
        <!-- // END header-layout__content -->

       

    </div>
    <!-- // END header-layout -->

    <!-- App Settings FAB -->
    <div id="app-settings">
        <app layout-active="mini" :layout-location="{
      'default': 'dashboard.php',
      'fixed': 'dashboard.php',
      'fluid': 'dashboard.php',
      'mini': 'dashboard.php'
    }"></app>
    </div>

    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Simplebar -->
    <script src="assets/vendor/simplebar.min.js"></script>

    <!-- DOM Factory -->
    <script src="assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- App -->
    <script src="assets/js/toggle-check-all.js"></script>
    <script src="assets/js/check-selected-row.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/sidebar-mini.js"></script>

      <!-- Kendo JS -->
    <script src="assets/js/kendo.web.min.js"></script>
    <script src="assets/js/knockout-3.1.0.js"></script>
    <script src="assets/js/knockout-kendo.min.js"></script>



    <script>
        $(document).ready(function (e){
            let time = new Date().toDateString();
            $('#time').text(time)
        })
    </script>


    <script>
        (function() {
            'use strict';
            // Self Initialize DOM Factory Components
            domFactory.handler.autoInit()

            // Connect button(s) to drawer(s)
            var sidebarToggle = document.querySelectorAll('[data-toggle="sidebar"]')
            sidebarToggle = Array.prototype.slice.call(sidebarToggle)

            sidebarToggle.forEach(function(toggle) {
                toggle.addEventListener('click', function(e) {
                    var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer'
                    var drawer = document.querySelector(selector)
                    if (drawer) {
                        drawer.mdkDrawer.toggle()
                    }
                })
            })

            let drawers = document.querySelectorAll('.mdk-drawer')
            drawers = Array.prototype.slice.call(drawers)
            drawers.forEach((drawer) => {
                drawer.addEventListener('mdk-drawer-change', (e) => {
                    if (!e.target.mdkDrawer) {
                        return
                    }
                    document.querySelector('body').classList[e.target.mdkDrawer.opened ? 'add' : 'remove']('has-drawer-opened')
                    let button = document.querySelector('[data-target="#' + e.target.id + '"]')
                    if (button) {
                        button.classList[e.target.mdkDrawer.opened ? 'add' : 'remove']('active')
                    }
                })
            })

            // SIDEBAR COLLAPSE MENUS
            $('.sidebar .collapse').on('show.bs.collapse', function(e) {
                e.stopPropagation()
                var parent = $(this).parents('.sidebar-submenu').get(0) || $(this).parents('.sidebar-menu').get(0)
                $(parent).find('.open').find('.collapse').collapse('hide');
                $(this).closest('li').addClass('open');
            });
            $('.sidebar .collapse').on('hidden.bs.collapse', function(e) {
                e.stopPropagation()
                $(this).closest('li').removeClass('open');
            });

            // ENABLE TOOLTIPS
            $('[data-toggle="tooltip"]').tooltip()

            // PRELOADER
            window.addEventListener('load', function() {
                $('.preloader').fadeOut()
                domFactory.handler.upgradeAll()
            })

        })()
   
        $('#logout').click(function (e){           
            window.location = "index.php"
        })

        $('#inventory').click(function (e){
            window.location = "inventory.php"
        })

        $('#dashboard').click(function (e){
            window.location = "dashboard.php"
        })
   </script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>

    <script>
        (function() {
            'use strict';

            $('[data-toggle="tab"]').on('hide.bs.tab', function(e) {
                $(e.target).removeClass('active')
            })

        })()
    </script>

    <!-- Flatpickr -->
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets/js/flatpickr.js"></script>

    <!-- Global Settings -->
    <script src="assets/js/settings.js"></script>
     

    <script>
        (function() {
            'use strict';

            // ENABLE sidebar menu tabs
            $('#sidebar-mini-tabs [data-toggle="tab"]').on('click', function(e) {
                e.preventDefault()
                $(this).tab('show')
            })
        })()
    </script>

    

        <!--modal-->
        <div id="modal-addclient" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="px-3">
                            <div class="d-flex justify-content-center mt-2 mb-4 navbar-light">
                                <a href="index.php" class="navbar-brand" style="min-width: 0">
                                    <img class="navbar-brand-icon" src="assets/images/logo.png" width="50" alt="Reben">
                                    <span>New Job</span>                                   
                                </a>                               
                            </div>
                            <center><h4>Fill information below</h4></center>
                            
                            <form action="jobs.php" method="post" style="margin-Top: 50px;">
                                
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">   
                                            <label>Name</label>                                
                                            <input class="form-control" type="text" name="clientName" required="" placeholder="Client Name">
                                        </div>
                                        <div class="col-md-4 mb-3">  
                                            <label>Phone Number</label>                                      
                                            <input class="form-control" type="phone" name="phone" required="" placeholder="Phone Number">
                                        </div>
                                        <div class="col-md-4 mb-3">  
                                            <label>Location</label>                                            
                                            <input class="form-control" type="text" name="location" placeholder="Location">
                                        </div>
                                    </div>
    
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">   
                                            <label>Car Model</label>                                      
                                            <input class="form-control" type="text" name="model" required="" placeholder="Car Model">
                                        </div>
                                        <div class="col-md-4 mb-3"> 
                                            <label>Year</label>                                             
                                            <input class="form-control" type="number" name="prodYear" placeholder="Production Year">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label>Plate Number</label>                                              
                                            <input class="form-control" type="text" name="numberPlate" required="" placeholder="Number Plate">
                                        </div>
                                    </div>
    
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">                                   
                                            <select name="bodyColor" class="form-control">
                                                <option value="">Select Body Color</option>
                                                <option value="Black">Black</option>
                                                <option value="White">White</option>      
                                                <option value="Gray">Gray</option>
                                                <option value="Silver">Silver</option> 
                                                <option value="Green">Green</option>
                                                <option value="Army Green">Army Green</option>
                                                <option value="Red">Red</option>      
                                                <option value="Blue">Blue</option>
                                                <option value="Brown">Brown</option>
                                                <option value="Orange">Orange</option>
                                                <option value="Gold">Gold</option>      
                                                <option value="Yellow">Yellow</option>
                                                <option value="Purple">Purple</option>  
                                                <option value="Pink">Pink</option>  
                                                <option value="Mix">Mix</option>  
                                                <option value="Other">Other/Unknown</option>     
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">                                       
                                            <select name="carType" class="form-control">
                                                <option value="">Select Car Type</option>
                                                <option value="Saloon">Saloon</option>
                                                <option value="4WD">4WD</option>      
                                                <option value="Pickup Truck">Pickup Truck</option>
                                                <option value="Other">Other</option>   
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">                                        
                                            <select name="transmission" class="form-control">
                                                <option value="">Select Transmission Type</option>
                                                <option value="Automatic">Automatic</option>
                                                <option value="Manual">Manual</option>     
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-8 mb-3">  
                                            <label>Problems</label>                                       
                                            <textarea class="form-control" type="text" name="problem" required="" placeholder="Problems with car"></textarea>
                                        </div>
                                        <div class="col-md-4 mb-3"> 
                                            <label>Cost (GHS)</label>                                             
                                            <input style="height:54px" class="form-control" type="number" name="estimatedCost" required="" placeholder="Estimated cost">
                                        </div>
                                                                             
                                    </div>
                                    <div class="form-row">   
                                        
                                    <div class="col-md-4 mb-3">  
                                            <label>Amount Paid</label>                                            
                                            <input class="form-control" type="number" name="paymentAmount" placeholder="Payment Amount">
                                        </div>  

                                    <div class="col-md-4 mb-3">  
                                            <label>Job Status</label>                                    
                                            <select name="jobStatus" class="form-control">
                                                <option value="">Select Status</option>
                                                <option value="In progress">In progress</option>
                                                <option value="Completed">Complete</option>   
                                                
                                            </select>
                                        </div>                                       
                                        <div class="col-md-4 mb-3">     
                                            <label>Estimated Completion Date</label>                                         
                                            <input class="form-control flatpickr-input input active" type="date" name="estimatedDateOfCompletion" >
                                        </div>
                                        <!-- <div class="col-md-4 mb-3">   
                                            <label>Client ID</label>                                           
                                            <input class="form-control " type="text" name="clientId" placeholder="ClientID">
                                        </div> -->
                                    </div>
                                   
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <!-- <button class="btn btn-outline-warning" style="width:100%" id=clear>Clear</button> -->
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <button class="btn btn-outline-success" name="submit"  style="width:100%" type="submit"> <i style = 'color:white' class='material-icons'>save</i>Save</button>
                                        </div>                                  
                                       
                                    </div>
                                </div>
                               
                            </form>

                           
                        </div>
                    </div> <!-- // END .modal-body -->
                </div> <!-- // END .modal-content -->
            </div> <!-- // END .modal-dialog -->
        </div>


        <div id="modal-updateclient" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="px-3">
                            <div class="d-flex justify-content-center mt-2 mb-4 navbar-light">
                                <a href="index.php" class="navbar-brand" style="min-width: 0">
                                    <img class="navbar-brand-icon" src="assets/images/logo.png" width="50" alt="Reben">
                                    <span>New Job</span>                                   
                                </a>                               
                            </div>
                            <center><h4>Fill information below</h4></center>
                            
                            <form action="jobs.php" method="post" style="margin-Top: 50px;">
                                
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">   
                                            <label>Name</label>                                
                                            <input class="form-control" type="text" name="clientName" required="" placeholder="Client Name">
                                        </div>
                                        <div class="col-md-4 mb-3">  
                                            <label>Phone Number</label>                                      
                                            <input class="form-control" type="phone" name="phone" required="" placeholder="Phone Number">
                                        </div>
                                        <div class="col-md-4 mb-3">  
                                            <label>Location</label>                                            
                                            <input class="form-control" type="text" name="location" placeholder="Location">
                                        </div>
                                    </div>
    
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">   
                                            <label>Car Model</label>                                      
                                            <input class="form-control" type="text" name="model" required="" placeholder="Car Model">
                                        </div>
                                        <div class="col-md-4 mb-3"> 
                                            <label>Year</label>                                             
                                            <input class="form-control" type="text" name="prodYear" placeholder="Production Year">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label>Plate Number</label>                                              
                                            <input class="form-control" type="text" name="numberPlate" required="" placeholder="Number Plate">
                                        </div>
                                    </div>
    
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">                                   
                                            <select name="bodyColor" class="form-control">
                                                <option value="">Select Body Color</option>
                                                <option value="Black">Black</option>
                                                <option value="White">White</option>      
                                                <option value="Gray">Gray</option>
                                                <option value="Silver">Silver</option> 
                                                <option value="Green">Green</option>
                                                <option value="Army Green">Army Green</option>
                                                <option value="Red">Red</option>      
                                                <option value="Blue">Blue</option>
                                                <option value="Brown">Brown</option>
                                                <option value="Orange">Orange</option>
                                                <option value="Gold">Gold</option>      
                                                <option value="Yellow">Yellow</option>
                                                <option value="Purple">Purple</option>  
                                                <option value="Pink">Pink</option>  
                                                <option value="Mix">Mix</option>  
                                                <option value="Other">Other/Unknown</option>     
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">                                       
                                            <select name="carType" class="form-control">
                                                <option value="">Select Car Type</option>
                                                <option value="Saloon">Saloon</option>
                                                <option value="4WD">4WD</option>      
                                                <option value="Pickup Truck">Pickup Truck</option>
                                                <option value="Other">Other</option>   
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">                                        
                                            <select name="transmission" class="form-control">
                                                <option value="">Select Transmission Type</option>
                                                <option value="Automatic">Automatic</option>
                                                <option value="Manual">Manual</option>     
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-8 mb-3">  
                                            <label>Problems</label>                                       
                                            <textarea class="form-control" type="text" name="problem" required="" placeholder="Problems with car"></textarea>
                                        </div>
                                        <div class="col-md-4 mb-3"> 
                                            <label>Cost (GHS)</label>                                             
                                            <input class="form-control" type="text" name="estimatedCost" required="" placeholder="Estimated cost">
                                        </div>
                                                                             
                                    </div>
                                    <div class="form-row">   
                                        
                                    <div class="col-md-4 mb-3">  
                                            <label>Amount Paid</label>                                            
                                            <input class="form-control" type="text" name="paymentAmount" placeholder="Payment Amount">
                                        </div>  

                                    <div class="col-md-4 mb-3">  
                                            <label>Job Status</label>                                    
                                            <select name="jobStatus" class="form-control">
                                                <option value="">Select Status</option>
                                                <option value="In progress">In progress</option>
                                                <option value="Completed">Complete</option>   
                                                
                                            </select>
                                        </div>                                       
                                        <div class="col-md-4 mb-3">     
                                            <label>Estimated Completion Date</label>                                         
                                            <input class="form-control flatpickr-input input active" type="date" name="estimatedDateOfCompletion" >
                                        </div>
                                        <!-- <div class="col-md-4 mb-3">   
                                            <label>Client ID</label>                                           
                                            <input class="form-control " type="text" name="clientId" placeholder="ClientID">
                                        </div> -->
                                    </div>
                                   
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <!-- <button class="btn btn-outline-warning" style="width:100%" id=clear>Clear</button> -->
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <button class="btn btn-outline-success" name="submit"  style="width:100%" type="submit"> <i style = 'color:white' class='material-icons'>save</i>Update Record</button>
                                        </div>                                  
                                       
                                    </div>
                                </div>
                               
                            </form>

                           
                        </div>
                    </div> <!-- // END .modal-body -->
                </div> <!-- // END .modal-content -->
            </div> <!-- // END .modal-dialog -->
        </div>


</body>

<script src="assets/js/jobs.js"></script>
<script src="assets/PrintPDF/js/kendo.all.min.js"></script>
<script src="assets/PrintPDF/js/pako_deflate.min.js"></script>
<!-- <script src="assets/js/toastr.js"></script> -->

</html>

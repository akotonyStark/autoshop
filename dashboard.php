<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

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

    <!-- Vector Maps -->
    <link type="text/css" href="assets/vendor/jqvmap/jqvmap.min.css" rel="stylesheet">
    <link  rel="icon" type="image/x-icon" href="assets/images/icon.ico"



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

                    <div class="container page__heading-container">
                        
                        <div class="page__heading d-flex align-items-center">
                            <div class="flex">                               
                                <h1 class="m-0">Dashboard</h1>
                            </div>
                            <a href="" class="btn btn-warning ml-3" data-toggle="modal" data-target="#modal-addclient"> + New Job</a>
                        </div>
                    </div>
                   



                    <div class="container page__container">                        

                        <div class="row card-group-row">
                            <div class="col-lg-4 col-md-6 card-group-row__col">
                                <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                                    <div class="flex">
                                        <div class="card-header__title text-muted mb-2">Today's Sales</div>
                                        <div class="text-amount">GHS 3,200</div>
                                        <!-- <div class="text-stats text-success">31.5% <i class="material-icons">arrow_upward</i></div> -->
                                    </div>
                                    <div><i class="material-icons icon-muted icon-40pt ml-3">gps_fixed</i></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 card-group-row__col">
                                <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                                    <div class="flex">
                                        <div class="card-header__title text-muted mb-2">Past Week's Sales</div>
                                        <div class="text-amount">GHS 8,920</div>
                                        <!-- <div class="text-stats text-success">31.5% <i class="material-icons">arrow_upward</i></div> -->
                                    </div>
                                    <div><i class="material-icons icon-muted icon-40pt ml-3">gps_fixed</i></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 card-group-row__col">
                                <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                                    <div class="flex">
                                        <div class="card-header__title text-muted mb-2">Past Month's Sales</div>
                                        <div class="text-amount">GHS 12,920</div>
                                        <!-- <div class="text-stats text-success">31.5% <i class="material-icons">arrow_upward</i></div> -->
                                    </div>
                                    <div><i class="material-icons icon-muted icon-40pt ml-3">gps_fixed</i></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 card-group-row__col">
                                <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                                    <div class="flex">
                                        <div class="card-header__title text-muted mb-2">Oustanding Debt</div>
                                        <div class="text-amount">GHS 2,590</div>
                                        <!-- <div class="text-stats text-danger">3.5% <i class="material-icons">arrow_downward</i></div> -->
                                    </div>
                                    <div><i class="material-icons icon-muted icon-40pt ml-3">watch_later</i></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 card-group-row__col">
                                <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                                    <div class="flex">
                                        <div class="card-header__title text-muted mb-2">Unfinished Jobs</div>
                                        <div class="text-amount">17</div>
                                        <!-- <div class="text-stats text-success">51.5% <i class="material-icons">arrow_upward</i></div> -->
                                    </div>
                                    <div><i class="material-icons icon-muted  icon-40pt ml-3">hourglass_empty</i></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 card-group-row__col">
                                <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                                    <div class="flex">
                                        <div class="card-header__title text-muted mb-2">Finished Jobs</div>
                                        <div class="text-amount">8</div>
                                        <!-- <div class="text-stats text-danger">3.5% <i class="material-icons">arrow_downward</i></div> -->
                                    </div>
                                    <div><i class="material-icons icon-muted icon-40pt ml-3">hourglass_full</i></div>
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
                                <li class="sidebar-menu-item active" data-toggle="tooltip" data-title="Dashboards" data-placement="right" data-boundary="window">
                                    <a class="sidebar-menu-button" href="#sm_dashboards" data-toggle="tab" role="tab" aria-controls="sm_dashboards" aria-selected="true">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                        <span class="sidebar-menu-text">Dashboard</span>
                                    </a>
                                </li>
                               
                                <li class="sidebar-menu-item " data-toggle="tooltip" data-title="Jobs List" data-placement="right" data-container="body" data-boundary="window">
                                    <a class="sidebar-menu-button" id="jobs" href="jobs.php" data-toggle="tab" role="tab" aria-controls="sm_pages">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                        <span class="sidebar-menu-text">Jobs List</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item" data-toggle="tooltip" data-title="Inventory" data-placement="right" data-container="body" data-boundary="window">
                                    <a class="sidebar-menu-button" href="#sm_components" data-toggle="tab" role="tab" aria-controls="sm_components">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">build</i>
                                        <span class="sidebar-menu-text">Inventory</span>
                                    </a>
                                </li>

                                <li class="sidebar-menu-item" data-toggle="tooltip" data-title="Logout" data-placement="right" data-container="body" data-boundary="window">
                                    <a class="sidebar-menu-button" id='logout' href="index.html" data-toggle="tab" role="tab" aria-controls="sm_components">
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
            window.location = "index.html"
        })

        $('#jobs').click(function (e){
            window.location = "jobs.php"
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

    <!-- Chart.js -->
    <script src="assets/vendor/Chart.min.js"></script>

    <!-- App Charts JS -->
    <script src="assets/js/charts.js"></script>

    <!-- Chart Samples -->
    <script>
        (function() {
            'use strict';

            Charts.init()

            var EarningsTraffic = function(id, type = 'line', options = {}) {
                options = Chart.helpers.merge({
                    elements: {
                        line: {
                            fill: 'start',
                            backgroundColor: settings.charts.colors.area
                        }
                    }
                }, options)

                var data = {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Traffic",
                        data: [10, 2, 5, 15, 10, 12, 15, 25, 22, 30, 25, 40]
                    }]
                }

                Charts.create(id, type, options, data)
            }

            var Products = function(id, type = 'line', options = {}, data) {
                options = Chart.helpers.merge({
                    elements: {
                        line: {
                            fill: 'start',
                            backgroundColor: settings.charts.colors.area,
                            tension: 0,
                            borderWidth: 1
                        },
                        point: {
                            pointStyle: 'circle',
                            radius: 5,
                            hoverRadius: 5,
                            backgroundColor: settings.colors.white,
                            borderColor: settings.colors.primary[700],
                            borderWidth: 2
                        }
                    },
                    scales: {
                        yAxes: [{
                            display: false
                        }],
                        xAxes: [{
                            display: false
                        }]
                    }
                }, options)

                data = data || {
                    labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
                    datasets: [{
                        label: "Earnings",
                        data: [400, 200, 450, 460, 220, 380, 800]
                    }]
                }

                Charts.create(id, type, options, data)
            }

            var Courses = function(id, type = 'line', options = {}) {
                options = Chart.helpers.merge({
                    elements: {
                        line: {
                            borderColor: settings.colors.success[700],
                            backgroundColor: settings.hexToRGB(settings.colors.success[100], 0.5)
                        },
                        point: {
                            borderColor: settings.colors.success[700]
                        }
                    }
                }, options)

                Products(id, type, options)
            }

            var LocationDoughnut = function(id, type = 'doughnut', options = {}) {
                options = Chart.helpers.merge({
                    tooltips: {
                        callbacks: {
                            title: function(a, e) {
                                return e.labels[a[0].index]
                            },
                            label: function(a, e) {
                                var t = "";
                                return t += '<span class="popover-body-value">' + e.datasets[0].data[a.index] + "%</span>"
                            }
                        }
                    }
                }, options)

                var data = {
                    labels: ["United States", "United Kingdom", "Germany", "India"],
                    datasets: [{
                        data: [25, 25, 15, 35],
                        backgroundColor: [settings.colors.success[400], settings.colors.danger[400], settings.colors.primary[500], settings.colors.gray[300]],
                        hoverBorderColor: "dark" == settings.charts.colorScheme ? settings.colors.gray[800] : settings.colors.white
                    }]
                }

                Charts.create(id, type, options, data)
            }

            ///////////////////
            // Create Charts //
            ///////////////////

            EarningsTraffic('#earningsTrafficChart')
            LocationDoughnut('#locationDoughnutChart')
            Products('#productsChart')
            Courses('#coursesChart')

        })()
    </script>

    <!-- Vector Maps -->
    <script src="assets/vendor/jqvmap/jquery.vmap.min.js"></script>
    <script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="assets/js/vector-maps.js"></script>

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
                                <a href="index.html" class="navbar-brand" style="min-width: 0">
                                    <img class="navbar-brand-icon" src="assets/images/logo.png" width="50" alt="Reben">
                                    <span>New Job</span>
                                </a>
                            </div>
    
                            <form action="#">
                                <center><h4>Fill information below:</h4></center>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">                                   
                                            <input class="form-control" type="text" id="clientName" required="" placeholder="Client Name">
                                        </div>
                                        <div class="col-md-4 mb-3">                                        
                                            <input class="form-control" type="phone" id="phone" required="" placeholder="Phone Number">
                                        </div>
                                        <div class="col-md-4 mb-3">                                        
                                            <input class="form-control" type="text" id="location" required="" placeholder="Location">
                                        </div>
                                    </div>
    
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">                                   
                                            <input class="form-control" type="text" id="model" required="" placeholder="Car Model">
                                        </div>
                                        <div class="col-md-4 mb-3">                                        
                                            <input class="form-control" type="text" id="prodYear" required="" placeholder="Production Year">
                                        </div>
                                        <div class="col-md-4 mb-3">                                        
                                            <input class="form-control" type="text" id="numberPlate" required="" placeholder="Number Plate">
                                        </div>
                                    </div>
    
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">                                   
                                            <select id="bodyColor" class="form-control">
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
                                            <select id="carType" class="form-control">
                                                <option value="">Select Car Type</option>
                                                <option value="Saloon">Saloon</option>
                                                <option value="4WD">4WD</option>      
                                                <option value="Pickup Truck">Pickup Truck</option>
                                                <option value="Other">Other</option>   
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">                                        
                                            <select id="transmission" class="form-control">
                                                <option value="">Select Transmission Type</option>
                                                <option value="Automatic">Automatic</option>
                                                <option value="Manual">Manual</option>     
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">                                   
                                            <textarea class="form-control" type="text" id="problem" required="" placeholder="Problem with car"></textarea>
                                        </div>
                                        <div class="col-md-4 mb-3">                                        
                                            <input class="form-control" type="text" id="estimatedCost" required="" placeholder="Estimated cost">
                                        </div>
                                        <div class="col-md-4 mb-3">                                        
                                            <input class="form-control flatpickr-input input active" type="text" id="estimatedDateOfCompletion" >
                                        </div>
                                    </div>
                                   
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <button class="btn btn-outline-warning" style="width:100%" type="submit">Clear</button>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <button class="btn btn-outline-success"  style="width:100%" type="submit">Save</button>
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

</html>
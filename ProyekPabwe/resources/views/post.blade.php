<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/img/png_del.png" type="image/gif" />
        <title>Lost & Found</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.css" rel="stylesheet">
        <style>
            #frame-image {
                /* 
                CSS Untuk croping gambar / foto 
    
                Disini Anda dapat menentukan lebar dan tinggi image
                */
                width: 180px;
                height: 180px;
                overflow: hidden;
    
                /* 
                CSS Untuk mengatur posisi gambar 
                Menjadikan frame / bingkai sebagai patokan koordinat left/top
                */
                position: relative;
            }
    
            #frame-image img {
                /*
                CSS Untuk croping gambar
                Membatasi tinggi gambar, membiarkan width-nya auto
                Bisa juga diganti jadi height: 320px jika tinggi gambar mau dipaksakan jadi 320px
                */
                max-height: 320px;
    
                /* 
                CSS Untuk mengatur posisi gambar 
                Left/top berpatokan pada frame
                Diisi dengan nilai minus untuk memposisikan keluar dari frame
                karena frame overflow-nya dibuat jadi hidden
                posisi yg keluar area frame jadi tidak terlihat
    
                Disini Anda dapat mengatur bagian/posisi gambar yg mana yg akan ditampilkan
                */
                position: absolute;
                left: -10px;
                top: -86px;
            }
        </style>
    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('dashboard')}}">
                    <img src="./img/png_del.png" alt="..." width="50" class="mr-3 shadow-sm">
                    <div class="sidebar-brand-text mx-3">LOST & FOUND</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Home -->
                <li class="nav-item">
                    <a class="nav-link" href="{{url('dashboard')}}">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Home</span></a>
                </li>

                <!-- Nav Item - Post Collapse Menu -->
                <li class="nav-item active">
                    <a class="nav-link collapsed" href="{{url('post')}}" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-plus"></i>
                        <span>Post</span>
                    </a>
                    <!-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Post:</h6>
                            <a class="collapse-item" href="{{url('lostform')}}">Lost</a>
                            <a class="collapse-item" href="{{url('foundform')}}">Found</a>
                        </div>
                    </div> -->
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('lostform')}}">
                        <i class="fas fa-fw fa-history"></i>
                        <span>Lost</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('foundform')}}">
                        <i class="fas fa-fw fa-history"></i>
                        <span>Found</span></a>
                </li>

                <!-- Nav Item - History -->
                <li class="nav-item">
                    <a class="nav-link" href="{{url('history')}}">
                        <i class="fas fa-fw fa-history"></i>
                        <span>History</span></a>
                </li>

                <!-- Nav Item - Profile -->
                <li class="nav-item">
                    <a class="nav-link" href="{{url('profil')}}">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Profile</span></a>
                </li>

                <!-- Nav Item - Help -->
                <li class="nav-item">
                    <a class="nav-link" href="{{url('help')}}">
                        <i class="fas fa-fw fa-question-circle"></i>
                        <span>Help</span></a>
                </li>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{url('pages')}}" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Pages</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Login Screens:</h6>
                            <a class="collapse-item" href="{{url('login')}}">Login</a>
                            <a class="collapse-item" href="{{url('register')}}">Register</a>
                            
                            
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                    aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Search for..." aria-label="Search"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">3+</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">1 December 2021</div>
                                        <span class="font-weight-bold">Go to check your things on the Post Site</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">1 December 2021</div>
                                        Get a lot of things with your honesty
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">1 December 2021</div>
                                        Check the Lost/Found page
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                            </li>


                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Cynthia Pardede</span>
                                    <img class="img-profile rounded-circle"
                                        src="img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{url('profil')}}">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Welcome to Lost & Found!</h1>
                        </div>
                        <p>Lost and Found is an application that will have IT Del’s students to inform about their lost belongings. 
                            It also help to inform the students wether their belongings has been found or not.</p>

                        <div class="dropdown-divider"></div>
                        <br>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">LOST :(</h6>
                                    </div>
                                    <div class="card bg-light bg-opacity-5">
                                        <div class="row row-cols-1 row-cols-md-3 w-90 p-3">
                                            <div class="col">
                                                <div class="card">
                                                    <center><img src="img/botol.jpg" class="card-img-top" id="frame-image" alt="..."></center>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Botol Minum</h5>
                                                        <p>Riski Simanjuntak</p>
                                                        <p class="small">17 Agustus 2019</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card">
                                                    <center><img src="img/payung1.jpg" class="card-img-top" id="frame-image" alt="..."></center>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Payung</h5>
                                                        <p>Hari Siburian</p>
                                                        <p class="small">1 September 2019</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card">
                                                    <center><img src="img/charger.jpg" class="card-img-top" id="frame-image" alt="..."></center>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Charger</h5>
                                                        <p>Jonggi Sitorus</p>
                                                        <p class="small">25 Desember 2019</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <center><a href="{{url('allItemLost')}}" class="btn text-light bg-primary">View All</a></center>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">FOUND :)</h6>
                                    </div>
                                    <div class="card bg-light bg-opacity-5">
                                        <div class="row row-cols-1 row-cols-md-3 w-90 p-3">
                                            <div class="col">
                                                <div class="card">
                                                    <center><img src="img/laptop.jpg" class="card-img-top" id="frame-image" alt="..."></center>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Laptop</h5>
                                                        <p>Riski Simanjuntak</p>
                                                        <p class="small">9 Februari 2020</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card">
                                                    <center><img src="img/charger.jpg" class="card-img-top" id="frame-image" alt="..."></center>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Charger</h5>
                                                        <p>Rio Simanjuntak</p>
                                                        <p class="small">11 September 2019</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card">
                                                    <center><img src="img/handphone2.jpg" class="card-img-top" id="frame-image" alt="..."></center>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Handphone</h5>
                                                        <p>Aryanti Sibarani</p>
                                                        <p class="small">5 November 2019</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <center><a href="{{url('allItemFound')}}" class="btn text-light bg-primary">View All</a></center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Lost and Found Copyright &copy; Kelompok 9 Proyek II Pabwe. All rights reserved.</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{url('login')}}">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
    </body>
</html>
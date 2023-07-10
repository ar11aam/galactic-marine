<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galactic Marine</title>
    <link rel="shortcut icon" type="image/png" href="{{ url('admin-panel/assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') }}">
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css') }}"
        rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">
    <!--JS-->
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('admin-panel/assets/css/styles.min.css') }}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="{{ url('tables') }}" class="text-nowrap logo-img mt-4">
                        <h3>Galactic Marine</h3>
                        <p style="color: #5D87FF">Admin Panel</p>
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Add</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('tables') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-alert-circle"></i>
                                </span>
                                <span class="hide-menu">Tables</span>
                            </a>
                        </li>
                        <li class="sidebar-item active">
                            <a class="sidebar-link" href="{{ url('product') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-cards"></i>
                                </span>
                                <span class="hide-menu">Product Cards</span>
                            </a>
                        </li>

                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Delete</span>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('homeProducts') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-cards"></i>
                                </span>
                                <span class="hide-menu">Cards</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('homeEntries') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-cards"></i>
                                </span>
                                <span class="hide-menu">Entries</span>
                            </a>
                        </li>


                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Admin</span>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('/admin') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-login"></i>
                                </span>
                                <span class="hide-menu">Admins</span>
                            </a>
                        </li>


                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">AUTH</span>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('/logout') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-login"></i>
                                </span>
                                <span class="hide-menu">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ url('admin-panel/assets/images/profile/user-1.jpg') }}"
                                        alt="" width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href="{{ url('login') }}"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="container-fluid">

                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                <h1 class="text-center my-2">Table Entries</h1>
                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title fw-semibold mb-4">Cummins</h5>
                        <form method="post" action="{{ url('/productCummins') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Part Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    name="productName" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Part Number</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    name="productNumber" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                        <hr>
                        <h5 class="card-title fw-semibold mb-4">ZF</h5>
                        <form method="post" action="{{ url('/productZf') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Part Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    name="productName" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Part Number</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    name="productNumber" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                        <hr>
                        <h5 class="card-title fw-semibold mb-4">Volvo</h5>
                        <form method="post" action="{{ url('/importVolvo') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Insert Excel File</label> <br> <br>
                                <input type="file" class="form-control-file" name="excelFile">

                                <button type="submit" style="margin-top: 10px"
                                    class="btn btn-primary">Upload</button> <br> <br>
                            </div>
                        </form>

                        <hr>
                        <h5 class="card-title fw-semibold mb-4">MTUF</h5>
                        <form method="post" action="{{ url('/importTables') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Insert Excel File</label> <br> <br>
                                <input type="file" class="form-control-file" name="excelFile">

                                <button type="submit" style="margin-top: 10px"
                                    class="btn btn-primary">Upload</button> <br> <br>
                            </div>
                        </form>

                        <hr>
                        <h5 class="card-title fw-semibold mb-4">MAN</h5>
                        <form method="post" action="{{ url('/importMan') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Insert Excel File</label> <br> <br>
                                <input type="file" class="form-control-file" name="excelFile">

                                <button type="submit" style="margin-top: 10px"
                                    class="btn btn-primary">Upload</button> <br> <br>


                            </div>
                        </form>

                        <hr>
                        <h5 class="card-title fw-semibold mb-4">Yamaha</h5>
                        <form method="post" action="{{ url('/importYamaha') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Insert Excel File</label> <br> <br>
                                <input type="file" class="form-control-file" name="excelFile">

                                <button type="submit" style="margin-top: 10px"
                                    class="btn btn-primary">Upload</button> <br> <br>

                            </div>
                        </form>

                        <hr>
                        <h5 class="card-title fw-semibold mb-4">Kohler</h5>
                        <form method="post" action="{{ url('/importKohler') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Insert Excel File</label> <br> <br>
                                <input type="file" class="form-control-file" name="excelFile">

                                <button type="submit" style="margin-top: 10px"
                                    class="btn btn-primary">Upload</button> <br> <br>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ url('admin-panel/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ url('admin-panel/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('admin-panel/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ url('admin-panel/assets/js/app.min.js') }}"></script>
    <script src="{{ url('admin-panel/assets/libs/simplebar/dist/simplebar.js') }}"></script>
</body>

</html>

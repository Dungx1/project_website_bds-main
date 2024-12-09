<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title> HPV - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/logo_sm.png">

    <!-- Plugins css -->
    <link href="../assets/libs/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
    <!-- Layout config Js -->
    <script src="../assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="../assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet" />
    <style>
        .leftmenu a {
            color: #ffff;
            line-height: 5px;
            font-family: Arial, Helvetica, sans-serif;
        }
        ul{
            display: inline-flex;
        }
        .li {
            margin: 10px 20px;
        }
    </style>
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                                <i class='bx bx-moon fs-22'></i>
                            </button>
                        </div>

                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user" src="https://i.pinimg.com/736x/08/e2/9f/08e29f19d6f03dbc37c5f540d3401fbc.jpg" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Admin</span>
                                    </span>
                                </span>
                            </button>
                            <!-- <div class="dropdown-menu dropdown-menu-end">
                                <h6 class="dropdown-header">Xin chào</h6>
                                <a class="dropdown-item" href="index.php?act=exit">
                                    <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>
                                    <span class="align-middle" data-key="t-logout">Đăng xuất</span>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.php" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="../assets/images/logo_sm.png" alt="" width="50px" height="auto">
                    </span>
                    <span class="logo-lg">
                        <img src="../assets/images/logo_blue.png" width="150px" alt="logo" height="auto">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="../assets/images/logo_sm.png" alt="" width="50px" height="auto">
                    </span>
                    <span class="logo-lg">
                        <a href="../index.php"><img src="../assets/images/logo_white.png" width="150px" alt="logo" height="auto"></a>
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">
                    <div id="two-column-menu">
                    </div>
                    <ul class="nav nav-sm flex-column">

                        <li class="nav-item">
                            <!-- <i class="fa-solid fa-house"></i> -->
                            <a href="#sidebarEcommerce" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce" data-key="t-ecommerce" style=" color: #ffff;">
                                Bất động sản
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarEcommerce">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="index.php?act=addbds" class="nav-link" data-key="t-products" style=" color: #ffff;"> - Thêm
                                            mới</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?act=listbds" class="nav-link" data-key="t-product-Details" style=" color: #ffff;"> - Danh sách bất động sản</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="#sidebarProjects" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProjects" data-key="t-projects" style=" color: #ffff;">
                                Loại bất động sản
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarProjects">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="index.php?act=addloaibds" class="nav-link" data-key="t-create-project" style=" color: #ffff;"> - Thêm loại </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?act=listloaibds" class="nav-link" data-key="t-create-project" style=" color: #ffff;"> - Danh sách loại </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="#sidebarTasks" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTasks" data-key="t-tasks" style=" color: #ffff;"> Tin
                                tức
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarTasks">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="index.php?act=addtintuc" class="nav-link" data-key="t-kanbanboard" style=" color: #ffff;">
                                            - Thêm tin mới </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?act=listtintuc" class="nav-link" data-key="t-list-view" style=" color: #ffff;">
                                            - Danh sách tin tức</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="#sidebarCRM" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCRM" data-key="t-crm" style=" color: #ffff;"> Danh mục
                                tin tức
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarCRM">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="index.php?act=add_dm_tintuc" class="nav-link" data-key="t-contacts" style=" color: #ffff;">
                                            - Thêm mới danh mục </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?act=list_dmtintuc" style=" color: #ffff;" class="nav-link" data-key="t-companies" style=" color: #ffff;">
                                            - Danh sách danh mục</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="index.php?act=listuser" class="nav-link" style=" color: #ffff;"> Người dùng
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="index.php?act=list_bds_tuvan" class="nav-link" style=" color: #ffff;">
                                Bất động sản tư vấn
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="index.php?act=list_nhanvien" class="nav-link" style=" color: #ffff;">
                                Nhân viên
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
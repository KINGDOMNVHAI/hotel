<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div>
                    <img src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIuMDA2IDUxMi4wMDYiIGhlaWdodD0iNTEyIiB2aWV3Qm94PSIwIDAgNTEyLjAwNiA1MTIuMDA2IiB3aWR0aD0iNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnPjxwYXRoIGQ9Im0yMTYuMDA2IDIwNi4wMDNjLTI5LjA1OCAwLTUwIDI0LjMxNi01MCA1My44NCAwIDMyLjQ1IDI0Ljk3NSA1My43MjkgNjIuNzggODUuOTM5IDYuNTg4IDUuNjEzIDEzLjQwMSAxMS40MTggMjAuNjM2IDE3Ljc0NyAxLjg4NSAxLjY0OSA0LjIzNCAyLjQ3NCA2LjU4NCAyLjQ3NHM0LjY5OS0uODI0IDYuNTg0LTIuNDc0YzcuMjM1LTYuMzI5IDE0LjA0OC0xMi4xMzQgMjAuNjM2LTE3Ljc0NyAzNy44MDUtMzIuMjEgNjIuNzgtNTMuNDg5IDYyLjc4LTg1LjkzOSAwLTI5LjUyNy0yMC45NDctNTMuODQtNTAtNTMuODQtMTkuODY0IDAtMzIuNDYzIDExLjM0Mi00MCAyMi4yOTUtNy41MzYtMTAuOTUzLTIwLjEzNi0yMi4yOTUtNDAtMjIuMjk1em00OS42NDQgNDcuNjQ2Yy4wNzYtLjI3NiA3Ljg0My0yNy42NDYgMzAuMzU2LTI3LjY0NiAxNy4xMDMgMCAzMCAxNC41NDggMzAgMzMuODQgMCAyMy4yMTUtMjAuOTg1IDQxLjA5NS01NS43NTEgNzAuNzE2LTQuNjEzIDMuOTMxLTkuMzM1IDcuOTU0LTE0LjI0OSAxMi4xOTctNC45MTQtNC4yNDMtOS42MzYtOC4yNjctMTQuMjQ5LTEyLjE5Ny0zNC43NjYtMjkuNjIxLTU1Ljc1MS00Ny41MDEtNTUuNzUxLTcwLjcxNiAwLTE5LjI5MiAxMi44OTctMzMuODQgMzAtMzMuODQgMjIuMjI2IDAgMzAuMDExIDI2LjQzIDMwLjM2NCAyNy42NzUgMS4yMDEgNC4zMjggNS4xNDIgNy4zMjUgOS42MzYgNy4zMjUgNC41MDQgMCA4LjQ1Mi0zLjAxMSA5LjY0NC03LjM1NHoiLz48Y2lyY2xlIGN4PSIxMjYuMDA2IiBjeT0iMTAyLjAwMyIgcj0iMTAiLz48cGF0aCBkPSJtNDQ3Ljc4NiAyMzcuODM3YzcuMDEyIDUuMzQzIDE1LjM4NyA4LjE2NiAyNC4yMiA4LjE2NiAyMi4wNTYgMCA0MC0xNy45NDQgNDAtNDAgMC0xMi41OTktNS43NTMtMjQuMjAzLTE1Ljc0Ni0zMS44MDlsLTUwLjI1NC0zOC42MjF2LTEyNS41N2MwLTUuNTIyLTQuNDc3LTEwLTEwLTEwaC02MGMtNS41MjMgMC0xMCA0LjQ3OC0xMCAxMHY2NC4wODlsLTg1Ljc4LTY1LjkyM2MtNy4wMTItNS4zNDMtMTUuMzg3LTguMTY2LTI0LjIyLTguMTY2cy0xNy4yMDggMi44MjMtMjQuMjU0IDguMTkxbC03Ni4xMzkgNTguNTE1Yy00LjM3OSAzLjM2NS01LjIwMSA5LjY0NC0xLjgzNSAxNC4wMjIgMy4zNjUgNC4zNzggOS42NDQgNS4yMDEgMTQuMDIzIDEuODM1bDc2LjEwNS01OC40ODljMy40OTktMi42NjUgNy42ODMtNC4wNzQgMTIuMS00LjA3NHM4LjYwMSAxLjQwOSAxMi4wNjcgNC4wNDlsMjE2LjAzNyAxNjYuMDI4YzUuMDE4IDMuODE5IDcuODk2IDkuNjIzIDcuODk2IDE1LjkyMyAwIDExLjAyOC04Ljk3MiAyMC0yMCAyMC00LjQxNyAwLTguNjAxLTEuNDA5LTEyLjA2NC00LjA0Ny0xMS4yMDItOC42MTUtMTg4LjgwMy0xNDUuMjEtMTk3LjgzOS0xNTIuMTYtMy40NjctMi42NjctOC4yNjUtMi43NzEtMTEuODQ1LS4yNTYtLjQ1My4zMTctMTk4LjEzNSAxNTIuMzc1LTE5OC4xNTYgMTUyLjM5Mi00LjAwOSAzLjA1OC05LjAyMSA0LjQ2NS0xNC4xMzMgMy45NjgtOS45MDItLjk1OS0xNS4yNzQtNS42MTYtMTcuNDItMTUuMTA0LTEuNzk4LTcuOTQ5IDEuMDIxLTE1Ljg4OSA3LjM5LTIwLjc0NGw2OC41MjktNTIuNjY1YzQuMzc5LTMuMzY1IDUuMjAxLTkuNjQ0IDEuODM1LTE0LjAyMnMtOS42NDUtNS4yMDEtMTQuMDIzLTEuODM1bC02OC40OTYgNTIuNjRjLTEyLjY0IDkuNjM2LTE4LjI4OCAyNS4zNjEtMTQuNzQxIDQxLjAzOSA0LjA1NyAxNy45MzggMTYuNDg3IDI4LjgwNSAzNC45OTEgMzAuNTk2IDEwLjE0NS45OTMgMjAuMTU3LTEuODM5IDI4LjE5Ny03Ljk3MWwtLjAxNS0uMDE5Yy40MjUtLjMxMyAxLjAwNS0uNzUgMS43OTEtMS4zNXYxMzcuMTk5Yy0yMi44ODEgNS40ODgtNDAuNTc1IDI0LjEwNS00NC44IDQ3LjY3OC0xMy4xOTIgOS4zMjgtMjEuMiAyNC40ODItMjEuMiA0MC42NiAwIDI3LjU3IDIyLjQzIDUwIDUwIDUwaDQxMmMyNy41NyAwIDUwLTIyLjQzIDUwLTUwIDAtMTYuMTc4LTguMDA4LTMxLjMzMi0yMS4yLTQwLjY2LTQuMjI2LTIzLjU4My0yMS45MzItNDIuMjA2LTQ0LjgtNDcuNjgydi0xMzcuMTkyem0tNjEuNzgtMjE3LjgzNGg0MHYxMDAuMmwtNDAtMzAuNzQxem0tMjI2IDQ3MmgtMTEwYy0xNi41NDIgMC0zMC0xMy40NTgtMzAtMzAgMC0xMC42ODUgNS44OTUtMjAuNjQ3IDE1LjM4NC0yNiAyLjg0OS0xLjYwNyA0LjczMS00LjUwNiA1LjA0Mi03Ljc2MyAxLjk1NS0yMC41MzMgMTguOTU0LTM2LjIzNyAzOS41NzUtMzYuMjM3IDEyLjg3NyAwIDI1LjA2MiA2LjM0MiAzMi41OTIgMTYuOTYzIDIuMzYgMy4zMjggNi41MDUgNC44OSAxMC40NzUgMy45NDQgMi41NjMtLjYxIDQuODMxLS45MDcgNi45MzMtLjkwNyAxNi4xNDkgMCAyOS44MDIgMTIuOTcgMjkuOTk4IDI5LjY0Ny0uODUyIDYuMDEyIDIuMzYyIDEwLjEyMyA2LjUzMiAxMS41NzYgNy43NCAyLjY5NiAxMy40NyAxMC4wMTQgMTMuNDcgMTguNzc2LS4wMDEgMTEuMDI5LTguOTczIDIwLjAwMS0yMC4wMDEgMjAuMDAxem0xNzIuMjE2LTU0LjY0NGMtNi4xODEgMy40OTctMTEuMjgzIDguNTQtMTQuODI2IDE0LjY0NWgtMTIyLjc4M2MtMy41NDUtNi4xMDctOC42NDUtMTEuMTQ5LTE0LjgyMy0xNC42NDUtLjE2OC0xLjgwMS0uNDM0LTMuNTg4LS43OTQtNS4zNjVoMTU0LjAyMWMtLjM2IDEuNzc2LS42MjYgMy41NjQtLjc5NSA1LjM2NXptLTEzNy41ODQgNTQuNjQ0YzMuNDEzLTUuODg3IDUuMzY4LTEyLjcyIDUuMzY4LTIwaDExMmMwIDcuMjggMS45NTYgMTQuMTEzIDUuMzY4IDIwem0yNzYuOTQzLTYzLjc2M2MuMzEgMy4yNTcgMi4xOTMgNi4xNTUgNS4wNDIgNy43NjMgOS40ODkgNS4zNTMgMTUuMzg0IDE1LjMxNSAxNS4zODQgMjYgMCAxNi41NDItMTMuNDU4IDMwLTMwIDMwaC0xMTBjLTExLjAyOCAwLTIwLTguOTcyLTIwLTIwIDAtOC43NzIgNS43NC0xNi4wODQgMTMuNDctMTguNzc2IDQuMjA2LTEuNDY1IDcuMzc5LTUuNTk5IDYuNTMyLTExLjU3Ni4xOTYtMTYuNjM1IDEzLjgxLTI5LjY0NyAyOS45OTgtMjkuNjQ3IDIuMTAyIDAgNC4zNy4yOTcgNi45MzMuOTA3IDMuOTY3Ljk0NCA4LjExNS0uNjE1IDEwLjQ3NS0zLjk0NCA3LjUzMS0xMC42MjEgMTkuNzE1LTE2Ljk2MyAzMi41OTItMTYuOTYzIDIwLjYxMy0uMDAxIDM3LjYxNyAxNS42ODUgMzkuNTc0IDM2LjIzNnptLTQ1LjU3NS01NS45MjJjLTE0Ljk0NSAxLjUyMy0yOC44NTYgOC42NzQtMzguODY2IDE5Ljk4NS0xLjc0Ny0uMi0zLjQ1MS0uMy01LjEzNC0uMy0xNS43NzcgMC0zMC41OTggNy41NC0zOS45NzkgMjBoLTE3Mi4wNDFjLTkuMzc3LTEyLjQ1Ny0yNC4yMDEtMjAtMzkuOTgtMjAtMS42ODQgMC0zLjM4OC4xLTUuMTM0LjMtMTAuMDEtMTEuMzEyLTIzLjkyLTE4LjQ2Mi0zOC44NjYtMTkuOTg1di0xNTEuMjI5YzE0LjUxNi0xMS4xNjUgMTUzLjI5Ni0xMTcuOTA3IDE2OS45OTktMTMwLjc1MWwxNzAuMDAxIDEzMC43NDl6Ii8+PC9nPjwvc3ZnPg==" width="60%", height="60%"/>
                </div>
                <div class="sidebar-brand-text mx-3">Admin SunLine<sup>©</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('list-room')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Danh sách phòng</span>
                </a>
                <a class="nav-link" href="{{route('list-booking')}}">
                    <i class="fas fa-ticket-alt"></i>
                    <span>Quản lý người đặt</span>
                </a>
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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                        action="{{route('list-room')}}" method="GET">
                        <div class="input-group">
                        <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                            <input type="submit" class="btn btn-primary" value="search">
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



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{$username}}</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <!-- <div class="dropdown-divider"></div> -->
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

                    @yield("NoiDung")

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Admin Page Sunline ©2021 </span>
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
                    <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('backend/js/demo/datatables-demo.js') }}"></script>

</body>

</html>

<x-header title="Dashboard - Edit"/>
@extends('layout.main')
@section('container')
     <!-- Page Wrapper -->
     <div id="wrapper">

        <!-- Sidebar -->
        <x-sidebar-dashboard />
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <x-topbar-dashboard />
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Profile Player</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center" style="border-bottom: 1px solid #dedede;">
                                        <h5 class="text-uppercase fw-bold">Edit Profile</h5>
                                    </div>


                                    <!-- Navtabs -->
                                    <x-nav-tabs />

                                    <div class="tab-content mt-3" id="profileTabContent">

                                        <!-- Form General -->
                                        <x-form-general />

                                        <!-- Form e-Football -->
                                        <x-form-e-football :playerGameInfo="$playerGameInfo" />

                                        <!-- Form e-Basket -->
                                        <x-form-e-basket :playerGameInfo="$playerGameInfo" />

                                        <!-- Form e-Tennis -->
                                        <x-form-e-tennis :playerGameInfo="$playerGameInfo" />

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
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

@endsection

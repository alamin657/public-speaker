@extends('backend.layouts.main')
@section('css')
  <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/extensions/dragula.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/themes/semi-dark-layout.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/pages/dashboard-analytics.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
    <!-- END: Custom CSS-->
@endsection


@section('content')

    <!-- Dashboard Analytics Start -->
     <div class="content-header row">
            </div>
            <div class="content-body">
                <h1>Dashboard</h1>
                {{-- <section id="dashboard-analytics">
                    <div class="row">
                      
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Website Analytics</h4>
                                    <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pb-1">
                                        <div class="d-flex justify-content-around align-items-center flex-wrap">
                                            <div class="user-analytics">
                                                <i class="bx bx-user mr-25 align-middle"></i>
                                                <span class="align-middle text-muted">Users</span>
                                                <div class="d-flex">
                                                    <div id="radial-success-chart"></div>
                                                    <h3 class="mt-1 ml-50">61K</h3>
                                                </div>
                                            </div>
                                            <div class="sessions-analytics">
                                                <i class="bx bx-trending-up align-middle mr-25"></i>
                                                <span class="align-middle text-muted">Sessions</span>
                                                <div class="d-flex">
                                                    <div id="radial-warning-chart"></div>
                                                    <h3 class="mt-1 ml-50">92K</h3>
                                                </div>
                                            </div>
                                            <div class="bounce-rate-analytics">
                                                <i class="bx bx-pie-chart-alt align-middle mr-25"></i>
                                                <span class="align-middle text-muted">Bounce Rate</span>
                                                <div class="d-flex">
                                                    <div id="radial-danger-chart"></div>
                                                    <h3 class="mt-1 ml-50">72.6%</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="analytics-bar-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                </section> --}}
            </div>
    <!-- Dashboard Analytics end -->


@endsection

@section('js')
  <!-- BEGIN: Vendor JS-->
    <script src="{{asset('backend/app-assets/vendors/js/vendors.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js')}}"></script>
    <script src="{{asset('backend/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')}}"></script>
    <script src="{{asset('backend/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('backend/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/extensions/dragula.min.js')}}"></script>
     <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('backend/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('backend/app-assets/js/core/app.js')}}"></script>
    <script src="{{asset('backend/app-assets/js/scripts/components.js')}}"></script>
    <script src="{{asset('backend/app-assets/js/scripts/footer.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('backend/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
    <script src="{{asset('backend/app-assets/js/scripts/datatables/datatable.js')}}"></script>

    <!-- END: Page JS-->
@endsection
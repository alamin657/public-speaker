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

    <!-- Add rows table -->
                <section id="add-row">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit</h4>
                                </div>
                                
                                <form method="post" action="{{ route('admin-about.update',$about->id) }}" enctype="multipart/form-data">

                                    @csrf
                                    @method('put')
                                    <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">
                                            {{-- <h1>fdkjf</h1> --}}
                                        </p>
                                       
                                        <div class="table-responsive">
                                           <div >
                                            <h5>Name</h5>
                                                <input value="{{$about-> name}}" type="text" name="name" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" required>
                                                <br>
                                            <h5>Title</h5>
                                                    <input value="{{$about-> title}}" type="text"  name="title" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" required>
                                            <h5 class="mt-3">Image</h5>
                                                <input type="file" name="image" class="form-control " id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" onchange="loadfile(event)" >
                                                  <img src="{{ asset('images/about/'.$about->image) }}" id="output" alt="img" width="100px" height="auto" class="mt-2 mx-1">
                                            <h5 class="mt-3">Description</h5>
                                                <input value="{{$about-> description}}" type="text" name="description" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                                
                                        </div>
                                          
                                      
                                      
                                     
                                        
                                        </div>
                                            <button type="submit" class="btn btn-primary mt-3 text-white  align-items-center"> Update
                                            </button>
                                    </div>
                                </div>
                                </form>
                         
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Add rows table -->     
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

     <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            // output.height =  '400';
        }
    </script>
@endsection
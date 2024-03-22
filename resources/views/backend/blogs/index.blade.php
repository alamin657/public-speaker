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
                                    <h4 class="card-title">Blog List</h4>
                                </div>
                                {{-- @if(session('success'))
                                    <div class="alert alert-success">
                                    {{ session('success') }}
                                    </div>
                                    @endif --}}
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">
                                        </p>
                                        <a href={{route('admin-blog.create')}} class="btn btn-primary mb-2  align-items-center"> Create
                                            </a>
                                        
                                        <div class="table-responsive">
                                            <table class="table add-rows">
                                                <thead>
                                                    <tr>
                                                      
                                                        <th> SL </th>
                                                        <th> Title </th>
                                                        <th> Sub Title </th>
                                                        <th> Description </th>
                                                        <th> Image </th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                   
                                                    @foreach ($blogs as $blog)
                                                        
                                                   
                                                    <tr>
                                                        
                                                        <td> {{ $blog->id }} </td>
                                                        <td>{{ $blog->title }}</td>
                                                        <td> {{ $blog->sub_title }} </td>
                                                        <td> {{ $blog->description }} </td>
                                                        <td>
                                                            <img src="{{ asset('images/blogs/'.$blog->image) }}" id="output" alt="img" width="100px" height="auto" class="mt-2 mx-1">
                                                       </td>
                                                        <td>
                                                            <div class="dropdown">
                                                             <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                
                                                                <a href="{{ route('admin-blog.edit', $blog->id) }}" class="dropdown-item">
                                                                        <i class="bx bx-edit-alt mr-1"></i> Edit
                                                                </a>

                                                             
                                                                    <form action="{{ route('admin-blog.destroy',$blog->id) }}" method="post">  
                                                                        @csrf @method('Delete')
                                                                        <button type="submit" class="dropdown-item"><i class="bx bx-trash mr-1"></i> delete</button>
                                                                    </form> 
                                                                </div>
                                                            </div>
                                                         </td> 




                                                        {{-- <th>
                                                          
                                                         
                                                        </th>
                                                          
                                                        <th>
                                                             <img src="{{ asset('images/gallery/'.$blog->image) }}" id="output" alt="img" width="100px" height="auto" class="mt-2 mx-1">
                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                         <td>
                                                            <div class="dropdown">
                                                             <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                
                                                                <a href="{{ route('admin-blog.edit', $blogs->id) }}" class="dropdown-item">
                                                                        <i class="bx bx-edit-alt mr-1"></i> Edit
                                                                </a>

                                                             
                                                                    <form action="{{ route('admin-blog.destroy',$gallery->id) }}" method="post"> @csrf @method('Delete')
                                                                        <button type="submit" class="dropdown-item"><i class="bx bx-trash mr-1"></i> delete</button>
                                                                    </form> 
                                                                </div>
                                                            </div>
                                                         </td> --}}
                                                       
                                                    </tr>
                                                    @endforeach

                                            </tbody>
                                            
                                                <tfoot>
                                                    <tr>
                                                        <th> ID </th>
                                                        <th> Title </th>
                                                        <th> Sub Title </th>
                                                        <th> Description </th>
                                                        <th> Image </th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                       
                                    </div>
                                </div>
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
@endsection
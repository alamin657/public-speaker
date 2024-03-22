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
                                
                                <form method="post" action="{{ route('admin-contact.update',$contact->id) }}" enctype="multipart/form-data">

                                    @csrf
                                    @method('put')
                                    <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">
                                          
                                        </p>
                                       
                                        <div class="table-responsive">
                                           <div >
                                            <h3>Contact Us</h3>
                                            
                                                <div class="contact-form-success alert alert-success d-none mt-4">
                                                    <strong>Success!</strong> Your message has been sent to us.
                                                </div>
                    
                                                <div class="contact-form-error alert alert-danger d-none mt-4">
                                                    <strong>Error!</strong> There was an error sending your message.
                                                    <span class="mail-error-message text-1 d-block"></span>
                                                </div>
                    
                                                <div class="row">
                                                    <div class="form-group col-lg-6">
                                                        <label class="form-label mb-1 text-2">Full Name</label>
                                                        <input type="text" data-msg-required="Please enter your name."
                                                            maxlength="100" class="form-control text-3   py-2" name="name" value="{{ $contact->name }}" >
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label class="form-label mb-1 text-2">Email Address</label>
                                                        <input type="email"   data-msg-required="Please enter your email address."
                                                            data-msg-email="Please enter a valid email address." maxlength="100"
                                                            class="form-control text-3  py-2" name="email" value="{{ $contact->email }}"  >
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-lg-6">
                                                        <label class="form-label mb-1 text-2">Phone</label>
                                                        <input type="number" data-msg-required="Please enter the phone."
                                                            maxlength="100" class="form-control text-3 py-2" name="phone" value="{{ $contact->phone }}"  >
                                                    </div>
                                                
                                                    <div class="form-group col-lg-6">
                                                        <label class="form-label mb-1 text-2">Address</label>
                                                        <input type="text" data-msg-required="Please enter the Address."
                                                            maxlength="100" class="form-control text-3 py-2" name="address" value="{{ $contact->address }}"  >
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col">
                                                        <label class="form-label mb-1 text-2">Message</label>
                                                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8"
                                                            class="form-control text-3  py-2" name="message"  > {{ $contact->message }}</textarea>
                                                    </div>
                                                </div>
                                                
                                        </div>
                                          {{-- image update     @if($contact->image != null)    @endif--}}
                                      
                                      
                                     
                                        
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
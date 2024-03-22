iuguguhguyhgyuh
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
<link rel="stylesheet" type="text/css"
    href="{{ asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/pages/dashboard-analytics.css') }}">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
<!-- END: Custom CSS-->

<!-- toaster css -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">

<!-- toaster toaster css -->
@endsection

@section('content')

<!-- Add rows table -->
<section id="add-row">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Setting</h4>
                </div>
                <form method="post" action="{{ route('admin.basicsetting.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text">
                            </p>
                            <div class="table-responsive">
                                <div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="my-3">
                                                <h3>Title</h3>
                                                <input type="text" name="bs_title" class="form-control" value="{{$settings->bs_title}}">
                                            </div>
                                            <div class="my-3">
                                                <h3>address</h3>
                                                <input type="text" name="bs_address" class="form-control" value="{{$settings->bs_address}}">
                                            </div>
                                            <div class="my-3">
                                                <h3>phone</h3>
                                                <input type="text" name="bs_phone" class="form-control" value="{{$settings->bs_phone}}">
                                            </div>
                                            <div class="my-3">
                                                <h3>Email</h3>
                                                <input type="text" name="bs_email" class="form-control" value="{{$settings->bs_email}}">
                                            </div>
                                            <div class="my-3">
                                                <h3>Facebook</h3>
                                                <input type="text" name="bs_facebook" class="form-control" value="{{$settings->bs_facebook}}">
                                            </div>
                                            <div class="my-3">
                                                <h3>youtube</h3>
                                                <input type="text" name="bs_youtube" class="form-control" value="{{$settings->bs_youtube}}">
                                            </div>
                                            <div class="my-3">
                                                <h3>Instagram</h3>
                                                <input type="text" name="bs_instagram" class="form-control" value="{{$settings->bs_instagram}}">
                                            </div>

                                            <div class="my-3">
                                                <h3>google location</h3>
                                                <textarea class="form-control" id="basicTextarea" rows="3" placeholder="" name="bs_map">{{ $settings->bs_map }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="my-3">
                                                <h3>Logo</h3>
                                                <input id="input_image" class="form-control" type="file" name="bs_logo">
                                                <img id="input_image_preview" class="mt-3" width="200px" height="120px"
                                                    src="{{asset('images/logo/'.$settings->bs_logo)}}" alt="">
                                            </div>
                                            <div class="my-3">
                                                <h3>Favicon</h3>
                                                <input id="input_image" class="form-control" type="file" name="bs_favicon">
                                                <img id="input_image_preview" class="mt-3" width="200px" height="120px"
                                                    src="{{asset('images/favicon/'.$settings->bs_favicon)}}" alt="">
                                            </div>
                                            <div class="my-3">
                                                <h3>Twitter</h3>
                                                <input type="text" name="bs_twitter" class="form-control" value="{{$settings->bs_twitter}}">
                                            </div>
                                            <div class="my-3">
                                                <h3>linkedin</h3>
                                                <input type="text" name="bs_linkedin" class="form-control" value="{{ $settings->bs_linkedin }}">
                                            </div>
                                            <div class="my-3">
                                                <h3>Footer Text</h3>
                                                <textarea type="text" name="bs_footertext" class="form-control">{{$settings->bs_footertext}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary my-3 text-white  align-items-center">
                                    update
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--/ Add rows table -->
@endsection

<script>
    $("#input_image").change(function () {
    let reader = new FileReader();
    reader.onload = (e) => {
        $("#input_image_preview").attr("src", e.target.result);
    };
    reader.readAsDataURL(this.files[0]);
});
$("#input_image-2").change(function () {
    let reader = new FileReader();
    reader.onload = (e) => {
        $("#input_image_preview-2").attr("src", e.target.result);
    };
    reader.readAsDataURL(this.files[0]);
});
</script>


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

<!-- toaster js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<!-- toaster js -->

<script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':

                    toastr.options.timeOut = 10000;
                    toastr.info("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();
                    break;
                case 'success':

                    toastr.options.timeOut = 10000;
                    toastr.success("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();

                    break;
                case 'warning':

                    toastr.options.timeOut = 10000;
                    toastr.warning("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();

                    break;
                case 'error':

                    toastr.options.timeOut = 10000;
                    toastr.error("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();

                    break;
            }
        @endif
    </script>
@endsection

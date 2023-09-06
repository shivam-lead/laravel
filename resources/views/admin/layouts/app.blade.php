<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    {{-- <title>Job Dashboard | Skote - Admin & Dashboard Template</title> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap Css -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('admin/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    @yield('header_extras')

    @include('admin.layouts.header')

    <div class="main-content">
    @yield('content')
    </div>
    @include('admin.layouts.footer')


    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="admin/libs/jquery/jquery.min.js"></script>
    <script src="admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="admin/libs/metismenu/metisMenu.min.js"></script>
    <script src="admin/libs/simplebar/simplebar.min.js"></script>
    <script src="admin/libs/node-waves/waves.min.js"></script>

    <!-- apexcharts -->
    <script src="admin/libs/apexcharts/apexcharts.min.js"></script>

    <!-- dashboard blog init -->
    <script src="admin/js/pages/dashboard-job.init.js"></script>

    <script src="admin/js/app.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
</script>

    </body>

</html>

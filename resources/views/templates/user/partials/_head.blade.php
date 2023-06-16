
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @if (Request::is('home')) Home | Pesawat - BPJS Kesehatan @endif
    </title>

    <meta name="description" content="Pesawat">
    <meta name="author" content="BPJS Kesehatan">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Pesawat">
    <meta property="og:site_name" content="Pesawat">
    <meta property="og:description" content="Pesawat">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">



    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" sizes="32x32" href="{{ asset('assets/images/logo/logo_02.svg') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/images/logo/logo_02.svg') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/logo/logo_02.svg') }}">
    <!-- END Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bs4/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bs4/css/fixedColumns.bootstrap4.min.css')}}">
    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    

    <!-- <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}"> -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/summernote/summernote-bs4.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.skinHTML5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/dropzone/dist/min/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/spinners.css')}}">

    <!-- <link rel="stylesheet" href="{{ asset('assets/js/plugins/jquery-ui-2/jquery-ui.min.css') }}"> -->




    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/oneui.min.css') }}">
    

    <!-- <script src="{{ asset('assets/js/pdf.js')}}"></script>
        <script src="{{ asset('assets/js/pdf.worker.js')}}"></script> -->

    <!-- <script src="{{ asset('assets/js/plugins/jquery-ui/jquery-ui.min.css') }}') }}"></script>

        <script src="{{ asset('assets/js/oneui.core.min.js') }}"></script> -->

    <!-- 

        <script src="{{ asset('assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script> -->

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
        <!-- END Stylesheets -->
        <script src="{{ asset('assets/js/oneui.core.min.js') }}"></script>
        
        <script src="{{ asset('assets/js/oneui.app.min.js') }}"></script>
        
    <!-- <link rel="stylesheet" href="https://code.jquery.com/jquery-3.3.1.min.js"> -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/jquery.dataTables.min.css') }}">
        <link rel="{{ asset('stylesheet" href="assets/css/fixedColumns.dataTables.min.css') }}"> -->

    <style type="text/css">
    /*th, td { white-space: nowrap; }
    div.dataTables_wrapper {
        width: 100%;
        margin: 0 auto;
        }*/
        td.nowrap {
            white-space:nowrap;
        }
    </style>
    <style type="text/css">
        div.dataTables_scrollHeadInner {
            width: 100%!important;
        }
        table.table.table-bordered.table-striped.dataTable.no-footer {
            width: 100%!important;
        }
    </style>
    <style>
        .btn-dark {
            background-color: #284b8c;
        }
    </style>
            
</head>


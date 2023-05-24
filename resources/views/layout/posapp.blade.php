<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-textdirection="{{__('trans.dir')}}">

<head>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="icon" href="/assets/imgs/logo/logoM.png">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0,minimal-ui">
    <meta name="description"
        content="SMART admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, SMART admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Smart </title>
    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <script src="/assets/jquery/dist/jquery.min.js" type="text/javascript"></script>
    {{-- <script src="/lib/jquery/dist/jquery.min.js" type="text/javascript"></script> --}}
    {{-- <script src="/assets/js/permissions/app.min.js"></script> --}}
    {{-- <script src="/assets/js/jquery-3.6.0.js" type="text/javascript"></script> --}}
    <script src="/assets/js/axios.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer">
    </script> --}}
    {{-- <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script> --}}
    <script src="/assets/js/jquery.validate.min.js"></script>



    <style>
        .has-card-view td{
            padding-top:2.5px !important;
            padding-bottom:2.5px !important;
        }
        .has-card-view td>.card-views{
            padding:0.7rem !important;
            background-color: #f2f4f7 !important;
        }
        .has-card-view td>.card-views>.card-view>.card-view-title{
            text-align: right !important;
        }
        .has-card-view td>.card-views>.card-view>.card-view-value{
            text-align: left !important;
        }
    </style>
    <style>
        @media (max-width: 576px) {
            .bootstrap-table .fixed-table-toolbar{
                display: flex !important;
                justify-content: space-between !important;
                align-items: center !important;
                padding: 0px 0.75rem !important;
                /* margin-left: -15px !important;
                margin-right: -15px !important; */
            }
            .dataTables_wrapper .dataTables_filter >label::after{
                right: 9px !important;
            }
            .bs-bars.float-left{
                max-width: 50% !important;
            }
            .bs-bars.float-left label{
                text-align: right !important;
                margin-bottom:0px !important;
            }
            .bs-bars.float-left label>input[type="search"]{
                width: 100% !important;
                font-size: 12px;
                padding-inline-start:21px !important;
            }
            .bootstrap-table .fixed-table-toolbar .columns-right{
                margin-left: 0px !important;
            }
            .bootstrap-table .fixed-table-toolbar .columns-right .btn{
                border:1px solid #f2f4f7 !important;
            }
            .bootstrap-table .fixed-table-toolbar::after{
                display: none !important;
            }
            .filter-section form .d-flex.align-items-center.FontAwesome>*{
                padding: 3px !important;
            }
            .table td, .table th{
                word-break: normal !important;
            }
            .table td a.show{
                margin: 0px !important;
                padding-left: 3px !important;
                padding-right: 3px !important;
            }
            .accountingYearStyle:not(.homepage){
                display: flex !important;
                justify-content: space-between !important;
                padding-left: 12px !important;
                padding-right: 12px !important;
                align-items: center !important;
                overflow: hidden !important;
                font-size: 10px !important;
                height: 1.5rem !important;
                border-radius: 12px;
                line-height: 1.25;
                color: #3F587E !important;
                background: #f1f3f4 !important;
            }
        }
    </style>
    {{-- <script src="/lib/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script> --}}

    @yield('additionalImportantStyle')
    <!-- BEGIN VENDOR CSS-->
    <style>
        :root {
            --header-background-color: #0f4f98;
            --background-color: #0f4f98;
            --submenu-background-color: #0f4f984d;
            --header-color: white;
            --buttons-background-color: #ef7b1f;
        }
    </style>
    <style>
        .requiredF::after {
            content: " * ";
            color: red;
        }

        .requiredF:hover::after {
            content: " هذا الحقل مطلوب ";
            color: red;
        }

        a.collapse-show-button[aria-expanded="false"]::after {
            content: "\f107" !important;
            color: black !important;
            font-weight: bold !important;
        }

        a.collapse-show-button[aria-expanded="false"] {
            font: normal normal normal 14px/1 FontAwesome;
            border-bottom: 1px solid gray !important;
            width: 100% !important;
            text-align: center !important;
        }

        a.collapse-show-button::after {
            content: "\f106" !important;
            color: black !important;
            font-weight: bold !important;
        }

        a.collapse-show-button {
            font: normal normal normal 14px/1 FontAwesome;
            border-bottom: 1px solid gray !important;
            width: 100% !important;
            text-align: center !important;
        }

        /* input:invalid:required {
            border: 1px solid red !important;
        } */
    </style>
    <link rel="stylesheet" type="text/css" href="/css/icheck.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min1.css">
    {{--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
        type="text/css"> --}}
    {{--
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css"> --}}
    <link rel="stylesheet" type="text/css" href="/assets/fonts/font-awesome-4.6.3/css/font-awesome.min.css"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="/css/pace.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="/css/app.min.css">
    <link rel="stylesheet" type="text/css" href="/css/colors.min.css">
    <!-- END STACK CSS-->
    <link rel="stylesheet" type="text/css" href="/css/flag-icon-css.css">
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/css/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="/css/vertical-overlay-menu.min.css">
    <link rel="stylesheet" type="text/css" href="/css/login-register.css">
    <!-- END Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/css/range.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-table.min.css">
    <link rel="stylesheet" type="text/css" href="/css/all.css">
    <link rel="stylesheet" type="text/css" href="/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="/css/account/bootstrap-treeview.css">
    <link rel="stylesheet" href="/css/account/treeview.css">
    {{--
    <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/css/responsive.dataTables.min.css"> --}}

    <link rel="stylesheet" type="text/css" href="/css/index2.css">

    <link rel="stylesheet" type="text/css" href="/css/general.css">

    <!-- this give error when using vuejs as it can not find the file -->
    <link rel="stylesheet" href="/css/error.min.css">
    <!-- BEGIN Custom CSS-->

    <link rel="stylesheet" type="text/css" href="/css/productStyle.css">
    <link rel="stylesheet" type="text/css" href="/css/mainStyle.css">
    <link rel="stylesheet" type="text/css" href="/css/style-rtl.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/spinnerStyle.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/fileup.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/fileup.theme2.min.css">
    <style>
    .fileup-file.fileup-image .hidden-fullscreen {
        z-index: 9999;
        background-color: #fff;
        position: fixed;
        left: 0px;
        top: 0px;
        text-align: center;
        width: 100vw;
        height: 100vh;
        background-size: contain;
        background-repeat: no-repeat no-repeat;
        background-position: center center;
        background-color: rgb(194, 194, 194);
    }

    .fileup-file.fileup-image .hidden-fullscreen .close:not(.print,.download) {
        position: absolute;
        z-index: 999999999999999999;
        right: 20px;
        top: 11px;
        background: rgb(0, 0, 0) !important;
        color: #fff;
        cursor: pointer;
        width: 30px;
        height: 30px;
        text-align: center;
        line-height: 30px;
        border-radius: 10em;
        /* padding: 2px 6px 3px; */
        text-decoration: none;
        font: 700 21px/20px sans-serif;
        background: rgb(255, 255, 255);
        border: 3px solid #fff;
        color: #FFF;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.5), inset 0 2px 4px rgba(0, 0, 0, 0.3);
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
        -webkit-transition: background 0.5s;
        transition: background 0.5s;
    }
    .fileup-file.fileup-image .hidden-fullscreen .print {
        position: absolute;
        z-index: 999999999999999999;
        right: 20px;
        top: 48px;
        background: rgb(0, 0, 0) !important;
        color: #fff;
        cursor: pointer;
        width: 30px;
        height: 30px;
        text-align: center;
        line-height: 30px;
        border-radius: 10em;
        /* padding: 2px 6px 3px; */
        text-decoration: none;
        font: 700 21px/20px sans-serif;
        background: rgb(255, 255, 255);
        border: 3px solid #fff;
        color: #FFF;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.5), inset 0 2px 4px rgba(0, 0, 0, 0.3);
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
        -webkit-transition: background 0.5s;
        transition: background 0.5s;
    }
    .fileup-file.fileup-image .hidden-fullscreen .download {
        position: absolute;
        z-index: 999999999999999999;
        right: 20px;
        top: 85px;
        background: rgb(0, 0, 0) !important;
        color: #fff;
        cursor: pointer;
        width: 30px;
        height: 30px;
        text-align: center;
        line-height: 30px;
        border-radius: 10em;
        /* padding: 2px 6px 3px; */
        text-decoration: none;
        font: 700 21px/20px sans-serif;
        background: rgb(255, 255, 255);
        border: 3px solid #fff;
        color: #FFF;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.5), inset 0 2px 4px rgba(0, 0, 0, 0.3);
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
        -webkit-transition: background 0.5s;
        transition: background 0.5s;
    }
    </style>
    <!-- END Custom CSS-->

    <link href="/css/filter.css" rel="stylesheet">
    {{--
    <link rel="stylesheet" href="/css/daterangepicker.css"> --}}
    <link rel="stylesheet" type="text/css" href="/assets/css/daterangepicker.css" />
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/site.custom.min.css" rel="stylesheet">

    {{--
    <link href="/css/select2.min.css" rel="stylesheet"> --}}
    <link href="/assets/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="/assets/css/bootstrap-treeview.min.css" />

    {{--
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    --}}

    <style>
        .container-fluid::after,
        .container::after,
        .row::after {
            display: table;
            content: '';
            clear: both;
        }

        ::after,
        ::before {
            -webkit-box-sizing: inherit;
            -moz-box-sizing: inherit;
            box-sizing: inherit;
        }

        .vertical-overlay-menu .main-menu .navigation li.has-sub>a:not(.mm-next):after {
            content: "\f105";
            font-family: FontAwesome;
            font-size: 1rem;
            display: inline-block;
            position: absolute;
            left: 20px;
            top: 10px;
            -webkit-transform: rotate(0);
            -moz-transform: rotate(0);
            -ms-transform: rotate(0);
            -o-transform: rotate(0);
            transform: rotate(0);
            -webkit-transition: -webkit-transform .2s ease-in-out;
            transition: -webkit-transform .2s ease-in-out;
        }
    </style>

    <style>
        .add-form-section i.font-large-1 {
            font-size: 1.5rem !important;
        }

        .fa {
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .support-container {
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 99999999999999999
        }

        button.chatbox-open {
            position: fixed;
            bottom: 20px;
            left: 0;
            width: 52px;
            height: 52px;
            color: #fff;
            background-color: #487ccf;
            background-position: center center;
            background-repeat: no-repeat;
            box-shadow: 12px 15px 20px 0 rgba(46, 61, 73, 0.15);
            border: 0;
            border-radius: 50%;
            cursor: pointer;
            margin: 16px;
            z-index: 999999999;
        }

        button.chatbox-close {
            position: fixed;
            bottom: 20px;
            left: 0;
            width: 52px;
            height: 52px;
            color: #fff;
            background-color: #487ccf;
            background-position: center center;
            background-repeat: no-repeat;
            box-shadow: 12px 15px 20px 0 rgba(46, 61, 73, 0.15);
            border: 0;
            border-radius: 50%;
            cursor: pointer;
            display: none;
            margin: 16px;
            z-index: 999999999;
        }


        .chatbox-popup {
            display: -webkit-box;
            display: flex;
            position: absolute;
            box-shadow: 5px 5px 25px 0 rgba(46, 61, 73, 0.2);
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            display: none;
            bottom: calc(2 * 18px + 52px);
            left: 16px;
            width: 377px;
            height: auto;
            background-color: #fff;
            border-radius: 16px;
            z-index: 999999999;

        }

        .chatbox-popup .chatbox-popup__header {
            box-sizing: border-box;
            display: -webkit-box;
            display: flex;
            width: 100%;
            padding: 16px;
            color: #fff;
            background-color: #487ccf;
            -webkit-box-align: center;
            align-items: center;
            justify-content: space-around;
            border-top-right-radius: 12px;
            border-top-left-radius: 12px;
        }

        .chatbox-popup .chatbox-popup__header .chatbox-popup__avatar {
            margin-top: -32px;
            background-color: #487ccf;
            border: 5px solid rgba(0, 0, 0, 0.1);
            border-radius: 50%;
        }

        .chatbox-popup .chatbox-popup__main {
            box-sizing: border-box;
            width: 100%;
            padding: calc(2 * 9px) 16px;
            line-height: calc(16px + 16px / 2);
            color: #888;
            text-align: center;
        }

        .chatbox-popup .chatbox-popup__footer {
            box-sizing: border-box;
            display: -webkit-box;
            display: flex;
            width: 100%;
            padding: 50px;
            border-top: 30px solid #ddd;
            -webkit-box-align: center;
            align-items: center;
            justify-content: space-around;
            border-bottom-right-radius: 100px;
            border-bottom-left-radius: 100px;
            display: block !important;
            float: none;
            text-align: center;
            margin-bottom: 10px;
        }




        .chatbox-panel {
            display: -webkit-box;
            display: flex;
            position: absolute;
            box-shadow: 5px 5px 25px 0 rgba(46, 61, 73, 0.2);
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            display: none;
            top: 0;
            left: 0;
            bottom: 0;
            width: 377px;
            background-color: #fff;
        }

        .chatbox-panel .chatbox-panel__header {
            box-sizing: border-box;
            display: -webkit-box;
            display: flex;
            width: 100%;
            padding: 16px;
            color: #fff;
            background-color: #487ccf;
            -webkit-box-align: center;
            align-items: center;
            justify-content: space-around;
            -webkit-box-flex: 0;
            flex: 0 0 auto;
            direction: ltr;
        }

        .chatbox-panel .chatbox-panel__main {
            box-sizing: border-box;
            width: 100%;
            padding: calc(2 * 16px) 16px;
            line-height: calc(16px + 16px / 2);
            color: #888;
            text-align: center;
            -webkit-box-flex: 1;
            flex: 1 1 auto;
        }

        .chatbox-panel .chatbox-panel__footer {
            box-sizing: border-box;
            display: -webkit-box;
            display: flex;
            width: 100%;
            padding: 16px;
            border-top: 1px solid #ddd;
            -webkit-box-align: center;
            align-items: center;
            justify-content: space-around;
            -webkit-box-flex: 0;
            flex: 0 0 auto;
        }

        .main-menu.menu-light .navigation>li ul li>a {
            padding: 10px 30px 10px 30px;
            font-size: 13px;
            text-overflow: clip;
        }
    </style>

    <script src="/js/sweetalert.min.js" defer></script>
    <link href="/css/loader.css" rel="stylesheet">

    <style>
        .textarea-not-resize {
            resize: none;
            height: 135px !important;
        }

        @media (max-width: 767px) {
            .footer-text {
                position: unset !important;
            }

            footer {
                text-align: right !important;
            }

            footer .px-2 {
                padding-right: initial !important;
            }
        }

        #overlay {
            display: none;
            width: 100%;
            height: 100%;
            top: 0;
            position: fixed;
            z-index: 9999;
        }

        #imgViewer::-webkit-scrollbar {
            -webkit-appearance: none;
            height: 10px;
        }

        #viewImg {
            overflow-x: unset;
            overflow-y: unset;
            top: 0px;
        }

        #imgViewer::-webkit-scrollbar-thumb {
            border-radius: 5px;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        }

        .image-modal-dismiss {
            color: #e5e6eb;
            font-size: 30px;
            transition: color 0.4s ease-in-out;
            opacity: inherit;
            font-weight: inherit;
            cursor: pointer;
        }

        .image-modal-header {
            background-color: rgba(0, 0, 0, 0.3);
            border-bottom: none;
        }
    </style>

    <link rel="stylesheet" href="/assets/css/bootstrap-treeview.min.css" />
    <link rel="stylesheet" href="/assets/css/jquery.treegrid.css">
    <style>
        .info.groupBy {
            text-align: right !important;
        }

        .treegrid-expander.treegrid-expander-expanded {
            visibility: hidden !important;
        }

        .navbar-semi-dark {
            background: var(--header-background-color);
            color: var(--header-color);
        }

        .navbar-semi-dark .fa {
            color: var(--header-color) !important;
        }

        .border-bottom-info {
            border-bottom: 1px solid var(--header-color);
        }

        .border-left-info {
            border-right: 1px solid var(--header-color);
        }

        .border-bottom-primary.border-bottom-lighten-3 {
            border-bottom: 1px solid var(--header-background-color) !important;
        }

        @media(min-width:768px) {
            .navbar-container.content.container-fluid {
                height: 100px;
                /* border-bottom-right-radius: 50px; */
                border-top-right-radius: 0px;
                background-color: var(--header-color);
            }

            li.nav-item.active {
                padding-bottom: 3px !important;
            }

            ul.nav.navbar-nav.d-flex.container-fluid.p-0.border-bottom-gray.square-border {
                /* border-bottom-left-radius: 30px; */
            }

            body.menu-collapsed ul.nav.navbar-nav.d-flex.container-fluid.p-0.border-bottom-gray.square-border {
                border-bottom-left-radius: 12px;
            }

            div.navbar-container:nth-child(3) {
                border-top-left-radius: 60px;
            }
        }

        @media(max-width:768px) {
            .header-line {
                display: none !important;
            }

            ul.nav.navbar-nav.d-flex.container-fluid.p-0.border-bottom-gray.square-border {
                border-bottom-left-radius: 12px;
            }

            body.menu-collapsed ul.nav.navbar-nav.d-flex.container-fluid.p-0.border-bottom-gray.square-border {
                border-bottom-left-radius: 12px;
            }

            .navbar-container.content.container-fluid.h-100 {
                border-top-left-radius: 60px !important;
            }

            .navbar-wrapper {
                background: #0f4f98;
            }
            .pxs-0{
                padding: 0px !important;
            }
            .pxs-1{
                padding:0.25rem !important;
            }
        }

        .filterbtn {
            min-height: 55px !important;
        }

        .navbar-wrapper.headerSty {
            background-color: var(--header-background-color);
        }

        .headerSty>div:nth-child(1) {
            border-bottom-left-radius: 25px;
        }

        .headerSty>div:nth-child(2) {
            height: 25px;
        }

        .headerSty>div:nth-child(1)>ul:nth-child(1)>li:nth-child(3)>div:nth-child(1)>div:nth-child(1) {
            background: white;
        }

        nav.header-navbar .navbar-brand img.brand-logo {
            width: 4rem !important;
        }

        nav.header-navbar .navbar-brand.nb-mobile img.brand-logo {
            width: 12rem !important;
        }

        body.vertical-layout.vertical-menu.menu-expanded .navbar .navbar-container {
            margin-right: 260px;
        }

        body.vertical-layout.vertical-menu.menu-collapsed .navbar .navbar-container {
            margin-right: 70px !important;
        }

        .headBtns .btn.btn-primary {
            background-color: var(--buttons-background-color) !important;
        }

        .content-wrapper {
            padding-top: 60px !important;
            /* border-top-left-radius: 60px; */
            background: #f9fbfe;
        }

        .app-content.content.container-fluid {
            background: var(--background-color);
        }
    </style>
    <style>
        @keyframes fade {
            0% {
                opacity: 1;
                fill: #ef7b1f;
            }

            50% {
                opacity: 1;
                fill: #12457c;
            }

            100% {
                opacity: 1;
                fill: #fff;
            }
        }

        #loading-container-tag {
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            position: fixed;
            z-index: 9999;
            display: none;
        }

        body.is_loading #loading-container-tag {
            display: block !important;
        }

        .loading-paper {
            min-width: 75px;
            max-width: 75px;
            border-bottom-right-radius: 39px;
            border-top-left-radius: 39px;
            fill: #06CDFF;
            padding: 5px;
        }


        .loading-container {
            /* background-color: #f9b53a !important; */
            min-height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row;
            height: 100% !important;
            opacity: 0.8;
        }

        .loader {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row;
            overflow: hidden;
            font-size: 0;
            flex-wrap: wrap;
            width: 120px;
            height: 120px;
            align-content: center;
        }

        .loader--fade .loader-item {
            animation-name: fade;
            animation-duration: 1200ms;
        }

        .loader--fade svg {
            min-width: 120px !important;
            min-height: 120px !important;
            height: -webkit-fill-available;
        }

        .loader-item {
            /* width: 50px;
            height: 50px;
            margin-left: 2px; */
            /* background-color: rgba(61, 92, 126, 0.7); */
            /* color: rgba(61, 92, 126, 0.7); */
            animation-duration: 1000ms;
            animation-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1);
            animation-iteration-count: infinite;
        }

        .loader-item:nth-child(1) {
            animation-delay: 100ms;
            /* transform: rotateX(180deg); */
        }

        .loader-item:nth-child(2) {
            animation-delay: 200ms;
        }

        .loader-item:nth-child(3) {
            animation-delay: 300ms;
            /* transform: rotate(-180deg); */
        }

        .loader-item:nth-child(4) {
            animation-delay: 400ms;
            /* transform: rotateY(180deg); */
        }

        .loader-item:nth-child(5) {
            animation-delay: 500ms;
        }

        .loader-item:nth-child(6) {
            animation-delay: 600ms;
        }

        .toast-message a {
            font: caption;
        }
        .bootstrap-table label input[type="search"] {
            display: inline-block;
        }
        .justify-content-end{
            justify-content: end !important;
        }
        .dropdown-toggle::after{
            top: 0px !important;
        }
    </style>
    <style>
        .text-blue{
            color:#414595 !important;
        }
    </style>
    @yield('additionalStyle')
    {{-- @livewireStyles --}}
</head>

<body data-open="click" data-menu="vertical-menu" data-col="2-columns"
    class="vertical-layout vertical-menu 2-columns  fixed-navbar" dir="{{__('trans.dir')}}">
    <!-- Google Tag Manager (noscript) -->

    <!-- End Google Tag Manager (noscript) -->

    <div id="overlay">
        <div id="loader"></div>
    </div>

    <div id="loading-container-tag">
        <div class="loading-container">
            <div class="loader loader--fade">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 343.66 390.25">
                    <g id="Layer_2" data-name="Layer 2">
                        <g id="Layer_1-2" data-name="Layer 1">
                            <polygon class="loader-item" points="0 104.46 0 295.12 164.19 390.25 164.19 199.17 0 104.46"
                                fill="#ef7b1f" />
                            <polygon class="loader-item"
                                points="279.18 61.9 229.1 33.22 171.14 0 6.94 94.3 64.28 127.41 113.66 155.87 171.14 189.01 335.74 94.3 279.18 61.9"
                                fill="#ef7b1f" />
                            <polygon class="loader-item"
                                points="179.05 199.17 179.05 390.25 343.66 295.12 343.66 104.46 179.05 199.17"
                                fill="#ef7b1f" />
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </div>
    <div id="app">
        <!-- Start needed for vuejs do not put and script tag inside it otherwise error will appear in console -->
        <input type="hidden" id="is_add_form_updated" value="0">
        <!-- support -->

        <!-- support -->
        <!-- navbar-fixed-top-->

        <!-- navbar-fixed-top-->

        @if (isset($path))
        @include('layout.header',['path'=>$path])
        @else
        @include('layout.header')
        @endif
        @include('layout.siderber')
        @yield('content')
        @include('layout.footer')



    </div>
        <!-- BEGIN VENDOR JS-->
        <script src="/js/mainscript.js" type="text/javascript"></script>
        <script src="/js/vendors.min.js" type="text/javascript" defer></script>
        <!-- END PAGE VENDOR JS-->
        {{-- <script src="/js/select2.min.js" defer></script> --}}
        <script src="/assets/js/select2.min.js"></script>
        {{-- <script src="/js/daterangepicker.js" defer></script> --}}
        <script type="text/javascript" src="/assets/js/daterangepicker.min.js"></script>

        <script src="/assets/js/bootstrap-table.min.js"></script>
        <script src="/assets/js/bootstrap-table-group-by.js"></script>
        <script src="/assets/js/tableExport.min.js"></script>
        <script src="/billsAssets/bootstrap-table/dist/extensions/mobile/bootstrap-table-mobile.js"></script>
         <script src="/billsAssets/bootstrap-table/dist/bootstrap-table-locale-all.js"></script>
        <script src="/assets/js/jspdf.min.js"></script>
        <script src="/assets/js/jspdf.plugin.autotable.js"></script>
        {{-- <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script> --}}
        <script src="/assets/js/bootstrap-table-export.min.js"></script>
        <script src="/assets/js/bootstrap-table-print.js"></script>
        <script type="text/javascript" src="/assets/js/moment.min.js"></script>

        {{-- <script src="https://unpkg.com/tableexport.jquery.plugin/libs/js-xlsx/xlsx.core.min.js"></script> --}}

        {{-- <script src="https://unpkg.com/tableexport.jquery.plugin/libs/jsPDF/jspdf.min.js"></script> --}}
        {{-- <script src="https://unpkg.com/tableexport.jquery.plugin/libs/jsPDF-AutoTable/jspdf.plugin.autotable.js">
        </script> --}}
        <script src="/assets/js/xlsx.core.min.js"></script>

        <script src="/js/utils.min.js"></script>
        <script type="text/javascript" charset="utf8" src="/assets/js/bootstrap-treeview.min.js"></script>
        <script src="<?php echo url('/'); ?>/assets/js/extensions/treegrid/bootstrap-table-treegrid.js"></script>
        <script src="<?php echo url('/'); ?>/js/bootstrap-table-cookie.min.js"></script>
        <script src="<?php echo url('/'); ?>/assets/js/jquery.treegrid.min.js"></script>



        <script src="/js/app-menu-logo.js" type="text/javascript" defer></script>
        <!-- BEGIN STACK JS-->
        <script src="/js/app-menu.js" type="text/javascript" defer></script>
        {{-- <script src="/js/bootstrap-table-print.min.js" type="text/javascript" defer></script> --}}

        <script src="/js/app.js" type="text/javascript" defer></script>
        <!-- END STACKL JS-->

        <!--END Data-table-->
        {{-- <script id="ze-snippet" src="/js/snippet.js"></script> --}}

        <script src="/js/picker-date-time.js"></script>

        <script>
            // jQuery(document).ready(function($) {
            //    $(window).on('resize', function() {
            //         var $win = $(window);
            //         var scroll = $win.scrollTop();
            //         var winWidth = $win.width();

            //         if (winWidth <= 767){
            //             $('.open-navbar-container').trigger('click');
            //         }else{
            //             return;
            //         }

            //     });
            // });
        </script>
        <script>
            function openmultisite(url) {
            window.open(url, Date.now(), "location=0,menubar=0,status=0,width=" + screen.availWidth + ",height=" +
                screen.availHeight);
        }
        window.addEventListener('DOMContentLoaded', function () {
            $(document).ready(function () {
                // For A Delete Record Popup
                $('.delete-item').click(function () {
                    var modal = $(this).attr('data-target');
                    var url = $(this).attr('data-url');
                    $(modal + ' .delete-form').attr("action", url);
                });

                $(document).on('click', '.assign-receipt-btn', function () {
                    let parentTr = $(this).closest('tr');
                    if (parentTr.hasClass('child')) {
                        let previesTr = parentTr.prev();
                        let lastTd = previesTr.children().last();
                        lastTd.children('.assign-receipt-btn').simulate("click");
                    }
                });



                // disable the other checkbox when one is selected
                $('.custom-control-input').on('change', function () {
                    $('.custom-control-input').prop('disabled', true);
                    $(this).prop('disabled', false)

                    this.form.submit()
                })
            });

            if (document.location.search.length) {
                //      $('#collapseExample').toggleClass("collapse in");
            }

        });

        </script>
        <script src="/js/app-menu-logo.js" type="text/javascript" defer></script>
        <script src="/js/mainscript.js" defer></script>
        <script src="/assets/js/toastr.min.js"></script>
        {{-- {!! Toastr::message() !!} --}}


        <script>
            window.addEventListener('DOMContentLoaded', function () {
            let notificationPage = 0;
            let notifications = [{
                url: "",
                content: "",
                readAt: ""
            }];
            // document.getElementById('notifications')
            //     .addEventListener("wheel", () => {

            //         $.ajaxSetup({
            //             headers: {
            //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //             }
            //         });
            //         if (notifications.length) {
            //             notificationPage++;
            //             $.ajax({
            //                 type: "GET",
            //                 url: ``,
            //                 dataType: "json",
            //                 data: {
            //                     page: notificationPage,
            //                 },
            //                 success: function (data) {
            //                     notifications = data.data.output;

            //                     notifications.forEach(function (notification) {
            //                         let url = notification.route;
            //                         let content = notification.content;
            //                         let readAt = notification.readAt;
            //                         let createdAt = notification.createdAt;
            //                         let template = `
            //                            <a href="${url}" class="list-group-item ${(readAt) ? '' : 'lightGray-bg'} "
            //                                    style="width: unset;height: unset;">
            //                                     <div class="" style="width: 20rem">
            //                                         <div class="">
            //                                             <p class="notification-text font-small-3 text-muted">
            //                                             ${content}
            //                                             </p>
            //                                         </div>
            //                                     </div>
            //                                     <small>${createdAt}</small>
            //                             </a>
            //                             <div class="ps-scrollbar-x-rail"
            //                                  style="left: 0px; bottom: 3px;">
            //                                 <div class="ps-scrollbar-x" tabindex="0"
            //                                      style="left: 0px; width: 0px;"></div>
            //                             </div>
            //                             `;
            //                         const liElement = document.createElement('li');
            //                         liElement.innerHTML = template;
            //                         const liNotificationsList = document.getElementById('notification-list').querySelectorAll('li');
            //                         document.getElementById('notification-list').insertBefore(liElement, liNotificationsList[liNotificationsList.length - 1]);
            //                     });
            //                 },
            //                 error: function (xhr, status, error) {
            //                     console.log(error);
            //                 },
            //             });
            //         }

            //     });



        });
        window.addEventListener('DOMContentLoaded', function () {
            (function ($) {
                //listen for any change in the forms that have 'add_form'
                // class to detect that the create form changed
                $('.add_form').on('keyup change paste', 'input, select, textarea', function () {
                    $('#is_add_form_updated').val("1");
                });
            })(jQuery);
            $(".add_form").submit(function (e) {
                // reset the hidden input value when submit form to
                // prevent displaying the not saved changes messages from displaying
                $('#is_add_form_updated').val("0");
            });

            $(window).on("beforeunload", function (e) {
                //warn user for unsaved changes before leaving the page
                if ($('#is_add_form_updated').val() == "1") {
                    return true;
                }
            });

            $(document).ready(function () {
                $('.product_image_transaction').on('click', function (e) {
                    $('#imgViewer').html('').append($(e.currentTarget).clone().removeClass('img-responsive')
                        .removeClass('img-thumbnail').addClass("w-100"));
                    $('#viewImg').modal('show');
                })
            });
        });

        </script>



        <script>
            // In your Javascript (external .js resource or <script> tag)
    // $(document).ready(function() {
    //     $('.filterAccountSelect').select2();
    //     $('.filterAccountingYearSelect').select2();
    // });


//      $(document).ready(function() {

// $(".form-phoneValid").validate({
//                 rules: {
//                 phone : {
//                 required: true,
//                 minlength: 9,
//                 number: true
//                 // phoneStartingWith5: true

//                 }
//                 },
//                 messages : {
//                     phone: {
//                      required: "يجب ادخال الرقم (يبدا بالرقم 5)",
//                     minlength: "رقم الهاتف يجب ان يكون من 9 ارقام ",
//                     number: " يجب ان يكون ارقام "
//                     // phoneStartingWith6: "يجب ان يبدا بالرقم 5"
//                     }

//                     }

//                 });
//       });
// window.addEventListener('offline', () => {
//    alert('الجهاز غير متصل بالانترنت   ');
// });

// Object.keys(window).forEach(key => {
//   if (/^on/.test(key)) {
//     window.addEventListener(key.slice(2), event => {
//      if (navigator.onLine == true) {
//     return true;
//   }else{
//       if (navigator.onLine == false) {
//           window.stop();
//        alert('الجهاز غير متصل بالانترنت   ');
//       }

//   }
//     });
//   }
// });

// // $(document).ready(function () {
//     $('img.users-avatar-shadow').error(function () {
//         $(this).attr('src','/assets/imgs/def/empty_user_img.png');
//     });
// // });
        </script>
        <script>
            $(document).ajaxStart(function(){
                $('body').addClass('is_loading');
            }).ajaxStop(function () {
                $('body').removeClass('is_loading');
            });
            $('form').submit(function () {
                $('body').addClass('is_loading');
            });
        </script>
        <script>
            $(function () {
                var height = window.innerHeight - $('.sidebar-h').offset().top - 32;
                $('.sidebar-h').attr('style',`height: ${height}px;`);
            });
        </script>
        <script src="/assets/js/img/imgApp.js"></script>
        @yield('additionalScripts')
        {{-- <script>
            $(function () {
                let $navToggel=$('.nav-item.hidden-md-up .nav-link.hidden-md-up.menu-toggle');
                var counter=0;
                var timer = setInterval(function() {
                    if($navToggel.hasClass('is-active')){
                        $navToggel.addClass('clickAutoSidebar')
                        $('.clickAutoSidebar').trigger('click');
                        $navToggel.removeClass('clickAutoSidebar')
                        clearInterval(timer);
                    }else if(counter>=3){
                        clearInterval(timer);
                    }
                    counter+=1;
                }, 1000);
            });
        </script> --}}


</body>

</html>

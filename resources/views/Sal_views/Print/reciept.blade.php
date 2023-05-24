<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>فاتورة مشتريات </title> --}}
    <link rel="stylesheet" type="text/css" href="/assets/fonts/font-awesome-4.6.3/css/font-awesome.min.css"
        type="text/css">
    <style>

    </style>
      <style>
        :root{
            --primary-color: '#f7bc55' : '#f7bc55';
            --primary-light: '#f7bc55' : '#f7bc55';
            --sub-color: '#0f4f99': '#0f4f99';
            --secondry-color: '#fff' : '#fff';
            --background-color: #fff;
        }
    </style>
    <style>
        @font-face {
            font-family: 'GE SS Two Light';
            /* src: url('/assets/fonts/GE_SS/ArbFONTS-GE-SS-Text-Bold_26.otf'); */
            src: url('/assets/fonts/GE_SS/ArbFONTS-GE-Snd-Book_1.ttf');
        }

        .company-title h4 {
            margin: 0px;
        }

        body {
            font-family: GE SS Two Light !important;
            font-weight: bold !important;
        }

        #layout_table .addlayout thead,
        #layout_table .addlayout thead tr,
        #layout_table .addlayout thead td {
            font-weight: bold !important;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: right;
            background-color: #fff;
        }
    </style>
    <style>
        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0;
        }

        .no-gutters>.col,
        .no-gutters>[class*="col-"] {
            padding-right: 0;
            padding-left: 0;
        }

        .col-1,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-10,
        .col-11,
        .col-12,
        .col,
        .col-auto,
        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm,
        .col-sm-auto,
        .col-md-1,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md,
        .col-md-auto,
        .col-lg-1,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg,
        .col-lg-auto,
        .col-xl-1,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl,
        .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
        }

        .row-cols-1>* {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .row-cols-2>* {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .row-cols-3>* {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .row-cols-4>* {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .row-cols-5>* {
            -ms-flex: 0 0 20%;
            flex: 0 0 20%;
            max-width: 20%;
        }

        .row-cols-6>* {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%;
        }

        .col-auto {
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }

        .col-1 {
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%;
        }

        .col-2 {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%;
        }

        .col-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .col-5 {
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%;
        }

        .col-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-7 {
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%;
        }

        .col-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }

        .col-9 {
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-10 {
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%;
        }

        .col-11 {
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%;
        }

        .col-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        @media (min-width: 576px) {
            .col-sm {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }

            .row-cols-sm-1>* {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .row-cols-sm-2>* {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .row-cols-sm-3>* {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .row-cols-sm-4>* {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .row-cols-sm-5>* {
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }

            .row-cols-sm-6>* {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .col-sm-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-sm-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }

            .col-sm-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .col-sm-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-sm-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .col-sm-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }

            .col-sm-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-sm-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }

            .col-sm-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }

            .col-sm-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-sm-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }

            .col-sm-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
            }

            .col-sm-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        @media (min-width: 768px) {
            .col-md {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }

            .row-cols-md-1>* {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .row-cols-md-2>* {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .row-cols-md-3>* {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .row-cols-md-4>* {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .row-cols-md-5>* {
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }

            .row-cols-md-6>* {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .col-md-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-md-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }

            .col-md-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .col-md-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-md-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .col-md-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }

            .col-md-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-md-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }

            .col-md-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }

            .col-md-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-md-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }

            .col-md-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
            }

            .col-md-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        @media (min-width: 992px) {
            .col-lg {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }

            .row-cols-lg-1>* {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .row-cols-lg-2>* {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .row-cols-lg-3>* {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .row-cols-lg-4>* {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .row-cols-lg-5>* {
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }

            .row-cols-lg-6>* {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .col-lg-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-lg-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }

            .col-lg-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .col-lg-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-lg-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .col-lg-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }

            .col-lg-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-lg-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }

            .col-lg-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }

            .col-lg-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-lg-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }

            .col-lg-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
            }

            .col-lg-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        @media (min-width: 1200px) {
            .col-xl {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }

            .row-cols-xl-1>* {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .row-cols-xl-2>* {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .row-cols-xl-3>* {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .row-cols-xl-4>* {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .row-cols-xl-5>* {
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }

            .row-cols-xl-6>* {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .col-xl-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-xl-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }

            .col-xl-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .col-xl-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-xl-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .col-xl-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }

            .col-xl-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-xl-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }

            .col-xl-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }

            .col-xl-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-xl-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }

            .col-xl-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
            }

            .col-xl-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        .table {
            width: 100%;
            margin-bottom: 1.93rem;
            color: #212529;
        }
        .table:not(#layout_table,.payments-table) th,
        .table:not(#layout_table,.payments-table) td {
            padding: 0.75rem;
            vertical-align: top;
            /* border-top: 1px solid #dee2e6; */
        }

        .table thead th {
            vertical-align: bottom;
            /* border-bottom: 2px solid #dee2e6; */
        }

        .table tbody+tbody {
            /* border-top: 2px solid #dee2e6; */
        }

        .table-sm th,
        .table-sm td {
            padding: 0.3rem;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-hover tbody tr:hover {
            color: #212529;
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-primary,
        .table-primary>th,
        .table-primary>td {
            background-color: #b8daff;
        }

        .table-primary th,
        .table-primary td,
        .table-primary thead th,
        .table-primary tbody+tbody {
            border-color: #7abaff;
        }

        .table-hover .table-primary:hover {
            background-color: #9fcdff;
        }

        .table-hover .table-primary:hover>td,
        .table-hover .table-primary:hover>th {
            background-color: #9fcdff;
        }

        .table-secondary,
        .table-secondary>th,
        .table-secondary>td {
            background-color: #d6d8db;
        }

        .table-secondary th,
        .table-secondary td,
        .table-secondary thead th,
        .table-secondary tbody+tbody {
            border-color: #b3b7bb;
        }

        .table-hover .table-secondary:hover {
            background-color: #c8cbcf;
        }

        .table-hover .table-secondary:hover>td,
        .table-hover .table-secondary:hover>th {
            background-color: #c8cbcf;
        }

        .table-success,
        .table-success>th,
        .table-success>td {
            background-color: #c3e6cb;
        }

        .table-success th,
        .table-success td,
        .table-success thead th,
        .table-success tbody+tbody {
            border-color: #8fd19e;
        }

        .table-hover .table-success:hover {
            background-color: #b1dfbb;
        }

        .table-hover .table-success:hover>td,
        .table-hover .table-success:hover>th {
            background-color: #b1dfbb;
        }

        .table-info,
        .table-info>th,
        .table-info>td {
            background-color: #bee5eb;
        }

        .table-info th,
        .table-info td,
        .table-info thead th,
        .table-info tbody+tbody {
            border-color: #86cfda;
        }

        .table-hover .table-info:hover {
            background-color: #abdde5;
        }

        .table-hover .table-info:hover>td,
        .table-hover .table-info:hover>th {
            background-color: #abdde5;
        }

        .table-warning,
        .table-warning>th,
        .table-warning>td {
            background-color: #ffeeba;
        }

        .table-warning th,
        .table-warning td,
        .table-warning thead th,
        .table-warning tbody+tbody {
            border-color: #ffdf7e;
        }

        .table-hover .table-warning:hover {
            background-color: #ffe8a1;
        }

        .table-hover .table-warning:hover>td,
        .table-hover .table-warning:hover>th {
            background-color: #ffe8a1;
        }

        .table-danger,
        .table-danger>th,
        .table-danger>td {
            background-color: #f5c6cb;
        }

        .table-danger th,
        .table-danger td,
        .table-danger thead th,
        .table-danger tbody+tbody {
            border-color: #ed969e;
        }

        .table-hover .table-danger:hover {
            background-color: #f1b0b7;
        }

        .table-hover .table-danger:hover>td,
        .table-hover .table-danger:hover>th {
            background-color: #f1b0b7;
        }

        .table-light,
        .table-light>th,
        .table-light>td {
            background-color: #fdfdfe;
        }

        .table-light th,
        .table-light td,
        .table-light thead th,
        .table-light tbody+tbody {
            border-color: #fbfcfc;
        }

        .table-hover .table-light:hover {
            background-color: #ececf6;
        }

        .table-hover .table-light:hover>td,
        .table-hover .table-light:hover>th {
            background-color: #ececf6;
        }

        .table-dark,
        .table-dark>th,
        .table-dark>td {
            background-color: #c6c8ca;
        }

        .table-dark th,
        .table-dark td,
        .table-dark thead th,
        .table-dark tbody+tbody {
            border-color: #95999c;
        }

        .table-hover .table-dark:hover {
            background-color: #b9bbbe;
        }

        .table-hover .table-dark:hover>td,
        .table-hover .table-dark:hover>th {
            background-color: #b9bbbe;
        }

        .table-active,
        .table-active>th,
        .table-active>td {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover>td,
        .table-hover .table-active:hover>th {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table .thead-dark th {
            color: #0f4f99;
            background-color: #343a40;
            border-color: #454d55;
        }

        .table .thead-light th {
            color: #495057;
            background-color: #e9ecef;
            border-color: #dee2e6;
        }

        .table-dark {
            color: #0f4f99;
            background-color: #343a40;
        }

        .table-dark th,
        .table-dark td,
        .table-dark thead th {
            border-color: #454d55;
        }

        .table-dark.table-bordered {
            border: 0;
        }

        .table-dark.table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .table-dark.table-hover tbody tr:hover {
            color: #0f4f99;
            background-color: rgba(255, 255, 255, 0.075);
        }

        @media (max-width: 575.98px) {
            .table-responsive-sm {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-sm>.table-bordered {
                border: 0;
            }
        }

        @media (max-width: 767.98px) {
            .table-responsive-md {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-md>.table-bordered {
                border: 0;
            }
        }

        @media (max-width: 991.98px) {
            .table-responsive-lg {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-lg>.table-bordered {
                border: 0;
            }
        }

        @media (max-width: 1199.98px) {
            .table-responsive-xl {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-xl>.table-bordered {
                border: 0;
            }
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive>.table-bordered {
            border: 0;
        }

        .col-form-label {
            padding-top: calc(0.375rem + 1px);
            padding-bottom: calc(0.375rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 1.5;
        }

        .col-form-label-lg {
            padding-top: calc(0.5rem + 1px);
            padding-bottom: calc(0.5rem + 1px);
            font-size: 1.25rem;
            line-height: 1.5;
        }

        .col-form-label-sm {
            padding-top: calc(0.25rem + 1px);
            padding-bottom: calc(0.25rem + 1px);
            font-size: 0.875rem;
            line-height: 1.5;
        }

        .form-row>.col,
        .form-row>[class*="col-"] {
            padding-right: 5px;
            padding-left: 5px;
        }

        .form-row>.col>.valid-tooltip,
        .form-row>[class*="col-"]>.valid-tooltip {
            left: 5px;
        }

        .form-row>.col>.invalid-tooltip,
        .form-row>[class*="col-"]>.invalid-tooltip {
            left: 5px;
        }

        .collapse:not(.show) {
            display: none;
        }

        .collapsing {
            position: relative;
            height: 0;
            overflow: hidden;
            transition: height 0.35s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .collapsing {
                transition: none;
            }
        }
    </style>
    <style>
        .justify-content-start {
            -ms-flex-pack: start !important;
            justify-content: flex-start !important;
        }

        .justify-content-end {
            -ms-flex-pack: end !important;
            justify-content: flex-end !important;
        }

        .justify-content-center {
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }

        .justify-content-between {
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }

        .justify-content-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important;
        }

        .align-items-start {
            -ms-flex-align: start !important;
            align-items: flex-start !important;
        }

        .align-items-end {
            -ms-flex-align: end !important;
            align-items: flex-end !important;
        }

        .align-items-center {
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        .align-items-baseline {
            -ms-flex-align: baseline !important;
            align-items: baseline !important;
        }

        .align-items-stretch {
            -ms-flex-align: stretch !important;
            align-items: stretch !important;
        }

        .align-content-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important;
        }

        .align-content-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important;
        }

        .align-content-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important;
        }

        .align-content-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important;
        }

        .align-content-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important;
        }

        .align-content-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important;
        }
    </style>
    <style>
        /* print */
        @media print {
            #stamp{
                object-fit: contain;
                width: -webkit-fill-available;
                min-height: -webkit-fill-available;
                position: absolute;
                z-index: 99999;
                max-height: 93px;
                max-width: 192px;
            }

            body,
            main {
                height: 100%;
            }
            .payments-table  td.col-1{
                -ms-flex: 0 0 8.333333% !important;
                flex: 0 0 8.333333% !important;
                max-width: 8.333333% !important;
                width: 8.333333% !important;
            }
            .payments-table td.col-3{
                -ms-flex: 0 0 25% !important;
                flex: 0 0 25% !important;
                max-width: 25% !important;
                width: 25% !important;
            }
            .payments-table td.col-4{
                -ms-flex: 0 0 33.333333%  !important;
                flex: 0 0 33.333333%  !important;
                max-width: 33.333333%  !important;
                width: 33.333333% !important;
            }
            .payments-table td.col-8{
                -ms-flex: 0 0 66.666667% !important;
                flex: 0 0 66.666667% !important;
                max-width: 66.666667% !important;
                width: 66.666667% !important;
            }
            page[size="A4"] {
                min-width: 21cm !important;
                width: 21cm !important;
                min-height: 29.7cm !important;
                height: 29.7cm !important;
            }

            button.print {
                display: none !important;
            }

            *,
            *::before,
            *::after {
                text-shadow: none !important;
                box-shadow: none !important;
            }

            a:not(.btn) {
                text-decoration: underline;
            }

            abbr[title]::after {
                content: " ("attr(title) ")";
            }

            pre {
                white-space: pre-wrap !important;
            }

            pre,
            blockquote {
                border: 1px solid #adb5bd;
                page-break-inside: avoid;
            }

            tr,
            img {
                page-break-inside: avoid;
            }

            p,
            h2,
            h3 {
                orphans: 3;
                widows: 3;
            }

            h2,
            h3 {
                page-break-after: avoid;
            }

            tfoot {
                display: table-row-group;
            }

            @page {
                size: auto;
                margin: 0mm;
            }

            body {
                min-width: 992px !important;
            }

            /* .container {
                min-width: 992px !important;
            } */

            .navbar {
                display: none;
            }

            .badge {
                border: 1px solid #000;
            }

            .table {
                border-collapse: separate !important;
            }

            .table-dark {
                color: inherit;
            }

            .table-dark th,
            .table-dark td,
            .table-dark thead th,
            .table-dark tbody+tbody {
                border-color: #dee2e6;
            }

            .table .thead-dark th {
                color: inherit;
                border-color: #dee2e6;
            }

            .qr-container,
            .qr-container img {
                max-width: 104px !important;
            }

            body,
            page {
                margin: 0;
                box-shadow: 0;
            }
            html{
                height: 29.7cm !important;
                min-height: 29.7cm !important;
            }
            body,
            main,
            page,
            page>.container,
            #layout_table{
                min-height: 29.7cm !important;
                height: 100%!important;
            }
            #layout_table>tbody{
                vertical-align: top !important;
            }
            #layout_table td.b-all-page{
                padding: 0px !important;
                border: 1px solid #f7bc55;
                border-top-right-radius: 21px !important;
                border-bottom-left-radius: 21px !important;
            }
        }

        .table {
            border-collapse: separate !important;
        }

        @media print {
            .d-print-none {
                display: none !important;
            }

            .d-print-inline {
                display: inline !important;
            }

            .d-print-inline-block {
                display: inline-block !important;
            }

            .d-print-block {
                display: block !important;
            }

            .d-print-table {
                display: table !important;
            }

            .d-print-table-row {
                display: table-row !important;
            }

            .d-print-table-cell {
                display: table-cell !important;
            }

            .d-print-flex {
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-print-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }

            .container {
                padding: 30px;
            }
        }

        page {
            background: white;
            /* display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5); */
            outline: none;
        }

        page[size="A4"] {
            width: 21cm !important;
            height: 29.7cm !important;
            min-width: 21cm !important;
            min-height: 29.7cm !important;
        }

        .offer {
            /* padding: 30px 30px; */
        }

        .logo,
        .qr-container {
            width: 102px;
            display: flex;
            align-items: center;
            justify-content: center;
            resize: horizontal;
            overflow: auto;
        }
        .logo img,
        .qr-container img{
            width: inherit;
        }
        table#layout_table{
            width: 100% !important;
        }

        .qr-container {
            /* height: 57%;
            width: 57%; */
        }

        .h-100 {
            height: 100% !important;
        }

        .flex-column {
            -ms-flex-direction: column !important;
            flex-direction: column !important;
        }
    </style>
    <style>
        .spliter {
            color: var(--primary-color);
            border-color: var(--primary-color);
            display: block;
            unicode-bidi: isolate;
            margin-block-start: 0.3em;
            margin-block-end: 0.3em;
            margin-inline-start: auto;
            margin-inline-end: auto;
            overflow: hidden;
            border-style: solid;
            border-width: 1px;
        }

        .spliter.termscond {
            color: #0f4f99;
            display: block;
            unicode-bidi: isolate;
            margin-block-start: 0em !important;
            margin-block-end: 0m !important;
            margin-inline-start: 0 !important;
            margin-inline-end: 0 !important;
            overflow: hidden;
            border-style: none;
            border-width: 0px !important;
        }

        .spliter.termscond::after {
            content: "";
            color: var(--primary-color);
            border-color: var(--primary-color);
            display: block;
            unicode-bidi: isolate;
            margin-block-start: 0.3em;
            margin-block-end: 0.3em;
            margin-inline-start: auto;
            margin-inline-end: auto;
            overflow: hidden;
            border-style: solid;
            border-width: 1px;
            width: 237px;
        }

        .custom-field {
            color: var(--primary-color);
            border-color: var(--primary-color);
            display: block;
            unicode-bidi: isolate;
            margin-block-start: 0.5em;
            margin-block-end: 0.5em;
            margin-inline-start: auto;
            margin-inline-end: auto;
            overflow: hidden;
            border-style: dashed;
            border-width: 1px;
            margin-top: 30px;
        }

        .additional-info .spliter {
            margin-left: -30px !important;
        }

        .container {
            padding: 30px;
        }

        .container.p-21 {
            padding: 0px;
        }

        .additional-info,
        .company-contact {
            color: var(--primary-color);
        }

        .invoice-type h1 {
            margin: 0px;
        }

        .invoice-type+.spliter {
            border-color: var(--primary-color);
            display: block;
            unicode-bidi: isolate;
            margin-block-start: 0.5em;
            margin-block-end: 0.5em;
            margin-inline-start: auto;
            margin-inline-end: auto;
            overflow: hidden;
            border-style: solid;
            border-width: 1px;
        }

        .company-title {
            color: #0f4f99;
        }

        #layout_table .addlayout table:not(.products-table) thead,
        #layout_table .addlayout table:not(.products-table) tfoot {
            color: #0f4f99;
            background-color: var(--primary-color);
        }
        #layout_table .addlayout table.products-table thead,
        #layout_table .addlayout table.products-table tfoot {
            color: white;
            background-color: #0f4f99;
        }

        #layout_table .addlayout table:not(.products-table) thead th:not(.prtl-12),
        #layout_table .addlayout table:not(.products-table) tfoot td {
            border-top: 0px;
            border-color: var(--primary-color);
            padding: 2.6px !important;
        }

        #layout_table .addlayout table:not(.payments-table) tbody td {
            border-top: 0px !important;
        }
        #layout_table .addlayout table.payments-table tbody td {
            padding-bottom: 0rem !important;
            padding-top: 0rem !important;
            padding-left: 0.3rem !important;
            padding-right: 0.3rem !important;
        }
        #layout_table .addlayout table.payments-table tbody td:not(.text-right) {
            text-align: center !important;
        }


        #layout_table .addlayout table td.internal {
            padding: 0px !important;
        }

        #layout_table .addlayout table td:not(.internal) .spliter {
            margin-left: -0.3rem !important;
            margin-right: -0.3rem !important;
        }

        #layout_table .addlayout table td.internal .plr {
            padding-left: 0.3rem !important;
            padding-right: 0.3rem !important;
        }

        #layout_table .addlayout table td.internal .plrt {
            padding-left: 0.3rem !important;
            padding-right: 0.3rem !important;
            padding-top: 0.3rem !important;
        }
        #layout_table .addlayout table td.internal .plr {
            padding-left: 0.3rem !important;
            padding-right: 0.3rem !important;
        }
        #layout_table .addlayout table td.internal .plr .blb[class*="col-"]{
            margin-left: -1px !important;
        }

        #layout_table .addlayout table {
            -webkit-border-horizontal-spacing: 0px;
            -webkit-border-vertical-spacing: 0px;
        }

        #layout_table .addlayout thead:not(.borderless),
        #layout_table .addlayout thead:not(.borderless) tr,
        #layout_table .addlayout thead:not(.borderless) th:first-child {
            border-top-right-radius: 21px !important;
        }

        #layout_table .addlayout table:not(.payments-table) tbody:not(.borderless),
        #layout_table .addlayout table:not(.payments-table) tbody:not(.borderless) tr,
        #layout_table .addlayout table:not(.payments-table) tbody:not(.borderless) td:last-child {
            border-bottom-left-radius: 21px !important;
        }

        #layout_table .addlayout table:not(.products-table,.payments-table) td {
            width: 50%;
        }
        #layout_table .addlayout table.products-table td {
            text-align: center !important;
        }

        #layout_table .addlayout table:not(.products-table) th {
            font-size: 1.3em !important;
        }
        #layout_table .addlayout table.products-table th {
            font-size: 1.12em !important;
        }

        #layout_table .addlayout table.signature td {
            width: 33.333333%;
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        #layout_table > tbody {
            background: url('/assets/imgs/logo/box.svg') center no-repeat;
            background-size: 30%;
        }

        .table-bordered-cus:not(.products-table) thead tr th:nth-child(2),
        .table-bordered-cus:not(.products-table) tbody tr td:nth-child(2) {
            border-right: 0px !important;
        }

        .table-bordered-cus:not(.products-table) thead tr th:nth-child(3),
        .table-bordered-cus:not(.products-table) tbody tr td:nth-child(3) {
            border-right: 0px !important;
        }

        .table-bordered-cus:not(.products-table) thead tr td.internal thead th:nth-child(1),
        .table-bordered-cus:not(.products-table) tbody tr td.internal tbody td:nth-child(1) {
            border-left: 0px !important;
            border-right: 0px !important;
        }
        #layout_table .addlayout table td.internal .blb {
            border-left: 1px solid #f7bc55;
        }
        html{
            height: 29.7cm !important;
            min-height: 29.7cm !important;
        }
        body,
        main,
        page,
        page>.container,
        #layout_table{
            min-height: 29.7cm !important;
            height: 100%!important;
        }
        #layout_table>tbody{
            vertical-align: top !important;
        }
        #layout_table td.b-all-page{
            padding: 0px !important;
            border: 1px solid #f7bc55;
            border-top-right-radius: 21px !important;
            border-bottom-left-radius: 21px !important;
        }

        .table-bordered-cus:not(.products-table) thead tr th,
        .table-bordered-cus:not(.products-table) tbody tr td {
            border: 1px solid #f7bc55;
        }
        .table-bordered-cus.products-table thead tr th,
        .table-bordered-cus.products-table tbody tr td {
            border-bottom: 1px solid #f7bc55;
        }
        table.table-bordered-cus.products-table{
            border: 1px solid #f7bc55;
            border-bottom: 0px !important;
        }
        table.products-table td{
            color: #0f4f99 !important;
        }

        .or-color-bold {
            color: #f7bc55;
            font-weight: bold;
        }

        .bl-color-bold {
            color: #0f4f99 !important;
            font-weight: bold;
        }
        .bl-color {
            color: #0f4f99 !important;
        }

        .row.ors+.spliter {
            border-color: #f7bc55 !important;
        }

        .text-left {
            text-align: left;
        }

        .w-100 {
            width: 100% !important;
        }

        .company-title h4 {
            font-size: 1.21em !important;
        }

        .additional-info h1 {
            font-size: 2.3em !important;
        }

        .bgor-cwh {
            background-color: #f7bc55;
            color: white !important;
            padding: 3px;
        }

        .bgor-cwh:first-child {
            border-top-right-radius: 7px;
            border-bottom-right-radius: 7px;
        }

        .bgor-cwh:last-child {
            border-top-left-radius: 7px;
            border-bottom-left-radius: 7px;
        }

        .m-0 {
            margin: 0px !important;
        }

        .text-center,
        #layout_table table thead tr th:not(.prtl-12) {
            text-align: center !important;
        }
        .prtl-12{
            padding: 2.6px !important;
            padding-right: 12px !important;
            text-align: right !important;
        }
        .pr-12 {
            padding-right: 12px !important;
        }

        p.pr-12 {
            overflow-wrap: anywhere;
        }

        .large-height {
            min-height: 3em !important;
        }

        #stamp:hover {
            cursor: grab;
        }
    </style>
    {{-- floating action button styles --}}
    <style>
        .fab {
            background: #f7bc55;
            background-color: #f7bc55;
            border-color: #f7bc55;
            width: 64px;
            height: 64px;
            border-radius: 50%;
            text-align: center;
            color: #0f4f99 !important;
            box-shadow: 0px 0px 3px rgba(247, 188, 85, 0.5), 3px 3px 3px rgba(15, 79, 153, 0.25);
            position: fixed;
            bottom: 48px;
            right: 48px;
            font-size: 2.6667em;
            display: inline-block;
            cursor: pointer;
        }

        .fab i {
            vertical-align: middle;
        }

        .fab.child {
            right: 58.66666667px;
            width: 42.66666667px;
            height: 42.66666667px;
            display: none;
            opacity: 1;
            font-size: 2em;
        }
        ryal{
            font-size: small;
        }

        table.products-table thead tr th{
            padding: 0.75rem !important;
        }
    </style>
</head>

<body>
    <main>
        <button class="print fab" onclick="printDiv('page')"><i class="fa fa-print"></i></button>
        <page class="offer" size="A4" id="page">
            <div class="container">
                <table id="layout_table" class="table">
                    <thead>
                        <tr>
                            <td>
                                <div class="container-header addlayout">
                                    <div class="row no-gutters">
                                        <div class="col-2">
                                            <div class="row no-gutters align-items-center justify-content-center h-100">
                                                <div class="">
                                                    <img src="/assets/imgs/logo/logoM.png"
                                                    alt="QRCode" width="100%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="company-info">
                                                <br>
                                                <div class="company-title">
                                                    <div class="row  no-gutters">
                                                        <div class="col-12">
                                                            <h4>
                                                                شركة مسار
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="company-contact">
                                                    <div class="row  no-gutters">
                                                        <div class="col-12">
                                                            <div class="row  no-gutters">
                                                                <div class="col-3"> </div>
                                                                <div class="col-9"></div>
                                                            </div>
                                                        </div>
                                                        <br>


                                                        <div class="col-9">
                                                            <div class="row  no-gutters">
                                                                <div class="col-4"> النشاطات : </div>
                                                                <div class="col-8">
                                                                    {{$Order_Print[0]->work_active}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="row  no-gutters">
                                                                <div class="col-3">المتطلبات</div>
                                                                <div class="col-9">
                                                                    {{$Order_Print[0]->requir}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="row  no-gutters">
                                                                <div class="col-3">قيمة الطلب
                                                                </div>
                                                                <div class="col-9">
                                                                    {{$Order_Print[0]->order_value}}

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="row  no-gutters">
                                                                <div class="col-3">ت : </div>
                                                                <div class="col-9">

                                                                     {{$Order_Print[0]->phone}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="row no-gutters align-items-center justify-content-center h-100">
                                                <div class="qr-container">
                                                    <img src="/img/large.jpg"
                                                    alt="QRCode" width="100%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="additional-info">
                                                <div class="row  no-gutters justify-content-end">
                                                    <div class="col-9">
                                                        <div class="invoice-type">
                                                            <h1>
الرد على الطلب

                                                            </h1>
                                                        </div>
                                                        <div class="spliter"></div>
                                                    </div>
                                                </div>
                                                <div class="row flex-column no-gutters align-content-end">
                                                    <div class="col-9">
                                                        <div class="row  no-gutters">
                                                            <div class="col-auto bgor-cwh">&nbsp;رقم الطلب :
                                                                {{$Order_Print[0]->id}}

                                                            </div>
                                                            <div class="col-auto bgor-cwh">
                                                                &nbsp;   &nbsp;
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row  no-gutters">
                                                            <div class="col-4">اسم م/ش   : </div>
                                                            <div class="col-8">
                                                                {{$Order_Print[0]->name}}

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row  no-gutters">
                                                            <div class="col-4">تاريخ الطلب : </div>
                                                            <div class="col-8">
                                                                {{$Order_Print[0]->updated_at}}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-9">
                                                        <div class="row  no-gutters">
                                                            <div class="col-4">تاريخ الطباعة : </div>
                                                            <div class="col-8">
                                                                {{ date('Y-m-d H:i:s') }}
                                                                {{-- {{date('Y-m-d', time())}} --}}
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="spliter"></div>
                            </td>
                        </tr>
                    </thead>
                    <tbody class="borderless">
                        <tr>
                            <td class="b-all-page">
                                <div class="container-body addlayout">
                                    {{-- <table class="table table-sm table-borderless table-bordered-cus m-0">
                                        <thead>
                                            <tr>
                                                <th colspan="2" class="prtl-12">العميل</th>
                                            </tr>
                                        </thead>
                                        <tbody class="borderless">
                                            <tr>
                                                <td>
                                                    <div class="container p-21">
                                                        <div class="container-body">
                                                            <div class="row no-gutters ors">
                                                                <div class="col-3 bl-color-bold">س/ت : </div>
                                                                <div class="col-9 bl-color-bold text-right"></div>
                                                            </div>
                                                            <div class="spliter"></div>
                                                            <div class="row no-gutters ors">
                                                                <div class="col-3 bl-color-bold">ض : </div>
                                                                <div class="col-9 bl-color-bold text-right">
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="container p-21">
                                                        <div class="container-body">
                                                            <div class="row no-gutters ors">
                                                                <div class="col-3 bl-color-bold">ع : </div>
                                                                <div class="col-9 bl-color-bold text-right"></div>
                                                            </div>
                                                            <div class="spliter"></div>
                                                            <div class="row no-gutters ors">
                                                                <div class="col-3 bl-color-bold">ت : </div>
                                                                <div class="col-9 bl-color-bold text-right">
                                                                   </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table> --}}
                                    <table class="table table-sm table-borderless table-bordered-cus m-0">
                                        <thead class="borderless">
                                            <tr>
                                                <th class="text-center"> الردود على الطلب</th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <table class="table table-sm table-borderless table-bordered-cus products-table">
                                        <thead class="borderless">
                                            <tr>
                                                <th> اسم المستخدم</th>
                                                <th>الرد</th>
                                                <th>تاريخ الرد</th>
                                                {{-- <th>الخصم</th> --}}
                                                {{-- <th>الإجمالي<ryal>(ريال)</ryal></th>
                                                <th>الضريبة<ryal>(ريال)</ryal></th>
                                                <th>ج.ب.ض<ryal>(ريال)</ryal></th> --}}
                                            </tr>
                                        </thead>
                                        <tbody class="table">
                                            {{-- رقم الطلب --}}
                                            <td></td>

                                            {{-- تفاصيل السلع --}}
                                            @foreach ($recieptPrint as $reciept )
                                            <tr>

                                                <td>{{$reciept->user}}</td>
                                                {{-- الكمية --}}
                                                {{-- السعر --}}
                                                <td>{{$reciept->answer}}</td>
                                                <td>{{$reciept->updated_at}}</td>
                                                {{-- <td>{{$recieptPrint[0]->status_sales_id}}</td> --}}
                                            </tr>

                                                @endforeach
                                                {{-- الخصم --}}
                                                {{-- <td>0</td> --}}
                                                {{-- الاجمالي --}}
                                                {{-- الضرييبة --}}
                                                {{-- <td></td>
                                               {{-- اجمالي بعد الضريبة --}}
                                                {{-- <td></td>  --}}

                                            </tr>
                                        </tbody>
                                    </table>
                                    {{-- <div class="row no-gutters justify-content-end">
                                        <div class="col-7">
                                            <table class="table table-sm table-borderless table-bordered-cus payments-table m-0">
                                                <tbody class="borderless">
                                                    <tr>
                                                        <td class="col-1 bl-color-bold">نقد : </td>
                                                        <td class="col-3 bl-color-bold"><sub>(ريال)</sub></td>
                                                        <td class="col-1 bl-color-bold">بنك : </td>
                                                        <td class="col-3 bl-color-bold"><sub>(ريال)</sub></td>
                                                        <td class="col-1 bl-color-bold">آجل</td>
                                                        <td class="col-3 bl-color-bold"><sub>(ريال)</sub></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-sm table-borderless table-bordered-cus payments-table m-0">
                                                <thead class="borderless">
                                                    <tr>
                                                        <th colspan="2">الإجمالي</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="borderless">
                                                    <tr>
                                                        <td class="col-8 bl-color-bold text-right">الإجمالي<ryal>(ريال)</ryal>غير(شاملة ضريبة القيمة المضافة):</td>
                                                        <td class="col-4 bl-color-bold"><sub>(ريال)</sub></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-8 bl-color-bold text-right">مجموع الخصومات<ryal>(ريال)</ryal>:</td>
                                                        <td class="col-4 bl-color-bold">0<sub>(ريال)</sub></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-8 bl-color-bold text-right">مجموع ضريبة القيمة المضافة<ryal>(ريال)</ryal>:</td>
                                                        <td class="col-4 bl-color-bold"><sub>(ريال)</sub></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-8 bl-color-bold text-right">إجمالي المبلغ المستحق<ryal>(ريال)</ryal>:</td>
                                                        <td class="col-4 bl-color-bold"><sub>(ريال)</sub></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="row no-gutters">
                                                <div class="col-12">

                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    {{-- <tfoot>
                        <tr>
                            <td>
                                <div class="container-footer addlayout"></div>
                            </td>
                        </tr>
                    </tfoot> --}}
                </table>
            </div>
        </page>
    </main>
    <script type="text/javascript" src="/assets/js/moment.min.js"></script>
    <script src="/assets/jquery/dist/jquery.min.js"></script>
    <script>
        function DiplayClock() {
            var currentTime = updateClock();
            document.getElementById("clock").firstChild.nodeValue = currentTime;
        }

        function updateClock() {
            var currentTime = new Date();

            var currentHours = currentTime.getHours();
            var currentMinutes = currentTime.getMinutes();
            var currentSeconds = currentTime.getSeconds();
            var currentDay = currentTime.getDate();
            var currentMonth = currentTime.getMonth();
            var currentYear = currentTime.getFullYear();
            currentMonth = (currentMonth == 0 ? 1 : currentMonth == 1 ? 2 : currentMonth == 2 ? 3 : currentMonth == 3 ? 4 :
                currentMonth == 4 ? 5 : currentMonth == 5 ? 6 : currentMonth == 6 ? 7 : currentMonth == 7 ? 8 :
                currentMonth == 8 ? 9 : currentMonth == 9 ? 10 : currentMonth == 10 ? 11 : currentMonth == 11 ? 12 : 0);
            // Pad the minutes and seconds with leading zeros, if required
            currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
            currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

            // Choose either "AM" or "PM" as appropriate
            var timeOfDay = (currentHours < 12) ? "ص" : "م";

            // Convert the hours component to 12-hour format if needed
            currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;

            // Convert an hours component of "0" to "12"
            currentHours = (currentHours == 0) ? 12 : currentHours;

            // Compose the string for display
            var currentTimeString = currentDay + "-" + currentMonth + "-" + currentYear + "  /  " + currentHours + ":" +
                currentMinutes + ":" + currentSeconds + " " + timeOfDay;

            return currentTimeString;
        }
    </script>
    <script>
        function printDiv(divName) {
            // var printContents = document.getElementById(divName).outerHTML;
            // var originalContents = document.body.innerHTML;

            // document.body.innerHTML = printContents;

            window.print();

            // document.body.innerHTML = originalContents;
            // dragElement(document.getElementById("stamp"));
        }
    </script>
    <script>
        //Make the DIV element draggagle:
        dragElement(document.getElementById("stamp"));

        function dragElement(elmnt) {
          var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
          if (document.getElementById(elmnt.id + "header")) {
            /* if present, the header is where you move the DIV from:*/
            document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
          } else {
            /* otherwise, move the DIV from anywhere inside the DIV:*/
            elmnt.onmousedown = dragMouseDown;
          }

          function dragMouseDown(e) {
            e = e || window.event;
            e.preventDefault();
            // get the mouse cursor position at startup:
            pos3 = e.clientX;
            pos4 = e.clientY;
            document.onmouseup = closeDragElement;
            // call a function whenever the cursor moves:
            document.onmousemove = elementDrag;
          }

          function elementDrag(e) {
            e = e || window.event;
            e.preventDefault();
            // calculate the new cursor position:
            pos1 = pos3 - e.clientX;
            pos2 = pos4 - e.clientY;
            pos3 = e.clientX;
            pos4 = e.clientY;
            // set the element's new position:
            elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
            elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
          }

          function closeDragElement() {
            /* stop moving when mouse button is released:*/
            document.onmouseup = null;
            document.onmousemove = null;
          }
        }
    </script>
</body>

</html>

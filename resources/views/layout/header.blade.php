<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-light lightGray-bg no-border">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <div class="navbar-wrapper headerSty">
        <div class="navbar-header navbar-semi-dark">
            <ul class="nav navbar-nav d-flex container-fluid p-0 border-bottom-gray square-border"
                style="flex-direction: column;">
                <li class="nav-item hidden-sm-down d-flex mb-1 desktop-menu" style="padding-top: 12px;">
                    <div class="col pr-1">
                        <div class="dropdown dropdown-user nav-item">
                            <a href="javascript:void(0)" data-toggle="dropdown" class="nav-link dropdown-user-link text-gray-dark" aria-expanded="false">
                                <i class="fa fa-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu">
                                @can('update_profile-user')

                                <a href="/update_profile" class="dropdown-item">
                                    تعديل الملف الشخصي
                                    </a>
                                    @endcan
                                    {{-- <a href="{{ route('register') }}" onclick="event.preventDefault(); document.getElementById('register-form').submit();" class="dropdown-item"><i class="ft ft-power"></i>نسيت كلمة </a> --}}
                                <a  onclick="event.preventDefault(); document.getElementById('register-form2').submit();" class="dropdown-item"><i class="ft ft-power"></i>تسجيل الخروج</a>
                                <form class="form" id="register-form2" action="{{route('logout')}}" method="POST" style="display: none;">
                                @csrf
                             </form>


                            </div>
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="nav-link nav-menu-main menu-toggle hidden-xs text-gray-dark is-active">
                        <i class="fa fa-angle-right"></i>
                    </a>

                </li>
                <li class="nav-item hidden-md-up float-xs-right d-flex">
                    <div class="col">
                        <a href="javascript:void(0)" class="nav-link nav-menu-main hidden-md-up menu-toggle d-inline-block"><i
                                class="ft-menu font-large-1">
                                <img src="/png/menu.svg" width="20px"></i></a>

                    </div>
                    <a href="/" class="navbar-brand nb-mobile hidden-md-up p-0"><img alt="SMART logo" src="/assets/imgs/logo/logo_white.png" class="brand-logo">

                    </a>
                    <div class="dropdown dropdown-user nav-item">
                        <a
                            data-toggle="dropdown" aria-expanded="false"
                            class="nav-link dropdown-user-link open-navbar-container pl-1">
                            <i class="fa fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            @can('update_profile-user')

                            <a href="/update_profile" class="dropdown-item"
                                ><i class="fa fa-address-card "></i>تعديل البوفايل
                            </a>
                            @endcan

                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('register-form').submit();" class="dropdown-item">
                                <i class="ft ft-power"></i>تسجيل الخروج
                            </a>
                            <form id="register-form" action="{{ route('logout') }}"
                                        method="POST"
                                        style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </li>
                <!-- ----------------logo-------------- -->
                {{-- <li class="nav-item hidden-md-up"><a href="/" class="navbar-brand"><img alt="SMART logo"
                            src="/assets/imgs/logo/logo_blue.png" class="brand-logo">

                    </a></li> --}}

                <li class="d-md-block" style="display:none;">
                    <!-- this cause navbar to be not working in sales link -->
                    <div class="mb-1 justify-content-center d-flex">
                        <div class="border-bottom-info border-left-info p-half rounded-circle user-avatar-cont">

                            <img  id="blah" align='middle'
                            src="{{ asset('storage/User_sal/User/personal_picture/') }}/{{{Auth::user()->personal_picture}}} "
                            onerror="{$(this).attr('src','/assets/imgs/def/empty_user_img.png');}"
                            alt=""  class="img-sm img-sm users-avatar-shadow rounded-circle" height="64" width="64">

                        </div>
                        <div class="profile-info">
                            <h5 class="media-heading text-bold-600 text-truncate">
                                <span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="مسير">
                                </span>
                            </h5>
                            <h6 class="font-small-1 arbFont-md">


                            </h6>
                            <div class="col-6 px-0 d-flex profile-actions">
                                <a class="hidden btn-primary btni font-small-2 rounded-circle" data-toggle="tooltip"
                                    data-placement="bottom" title="" data-original-title=""><i
                                        class="fa fa-edit"></i></a>
                                <a class="hidden btn-primary btni font-small-2 rounded-circle mx-1"
                                    data-toggle="tooltip" data-placement="bottom" title="" data-original-title=""><i
                                        class="fa fa-edit"></i></a>
                            </div>

                        </div>

                    </div>
                     <label class="w-100 text-center"> {{Auth::user()->name}}</label>

                </li>

            </ul>
        </div>
        <div class=""></div>
        <div class="navbar-container content container-fluid pxs-0">
            <div id="navbar-mobile" class="col-md-12 collapse navbar-toggleable-sm h-100">
                <div
                    class="header-cont d-flex align-items-center justify-content-between border-bottom-primary  border-bottom-lighten-3 h-100" style="flex-flow: row;
                    align-items: center;
                    justify-content: space-between;">
                    <ul class="nav navbar-nav" style="align-items: center;
                    justify-content: center;">
                        <!-- search -->
                        <li class="nav-item nav-search col-md-12 hidden"><a class="nav-link nav-link-search p-0"
                                href="javascript:void(0)"><i class="fa fa-search icon-search"></i></a>
                            <div class="search-input">
                                <input class="input hidden" type="text" placeholder="Explore Stack..." tabindex="0"
                                    data-search="template-search">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                        <!--HEADER -->
                        @if (isset($path))
                            <div class="content-header-left col-md-12 col-xs-12 pxs-1">
                                <!-- BREADCRUMBS  -->

                                <div class="row breadcrumbs-top">
                                    <div class="breadcrumb-wrapper col-xs-12">
                                        <ol class="breadcrumb m-0">
                                            @foreach ($path as $key => $pname)
                                                <li
                                                    class="breadcrumb-item {{ $key == sizeof($path) - 1 ? 'active' : '' }}">
                                                    <a>{{ $pname }}</a>
                                                </li>
                                            @endforeach

                                            {{-- <li class="breadcrumb-item"><a>{{$name}}</a>
                                            </li>
                                        <li class="breadcrumb-item active"><a href="javascript:void(0)">العملاء</a>
                                        </li> --}}
                                        </ol>
                                    </div>
                                </div>
                                <!-- END BREADCRUMBS -->

                            </div>
                        @endif
                        <!-- END HEADER -->

                    </ul>
                    <ul class="nav navbar-nav float-xs-right">
                        <li class="dropdown dropdown-user nav-item">

                            <div class="mobile-user-profile justify-content-center d-flex hidden-md-up dropdown-toggle nav-link dropdown-user-link p-0"
                            style="align-items: center;"
                                data-toggle="dropdown" aria-expanded="false">
                                <div class="border-bottom-info border-left-info p-half rounded-circle">

                                    <img  id="blah" align='middle'
                                    src="{{ asset('storage/Employees/img') }}/{{{Auth::user()->personal_picture}}} "
                                    onerror="{$(this).attr('src','/assets/imgs/def/empty_user_img.png');}"
                                    alt=""  class="img-sm img-sm users-avatar-shadow rounded-circle" height="64" width="64">
                                </div>
                            </div>
                            {{-- <div class="dropdown-menu dropdown-menu-right">
                                    <a href="/User.update_profile" class="dropdown-item"
                                    ><i class="fa fa-address-card "></i>{{ __('trans.Update_profile') }}</a>
                                        <div class="dropdown-divider"></div>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('register-form').submit();" class="dropdown-item"><i class="ft ft-power"></i>{{ __('trans.Log_out') }}</a>

                                <form id="register-form" action="{{ route('logout') }}"
                                          method="POST"
                                          style="display: none;">
                                    @csrf
                                </form>
                            </div> --}}
                        </li>

                    </ul>

                    <!-- logo -->
                    <ul class="nav navbar-nav hidden-sm-down float-xs-right">
                        <li class="nav-item "><a href="/" class="navbar-brand mx-0"><img
                                    alt="SMART-logo.png" src="/assets/imgs/logo/logoM.png" class="brand-logo">
                            </a></li>

                    </ul>
                </div>

            </div>

        </div>
        {{-- <div class="header-line" style="height: 39px;background-color: var(--header-background-color);"></div> --}}
    </div>
</nav>
<style>
    article, aside, figure, footer, header, hgroup,
    menu, nav, section { display: block; }
  </style>
{{-- <link class="jsbin" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" rel="stylesheet" type="text/css" /> --}}
{{-- <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script> --}}
<script class="jsbin" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<meta charset=utf-8 />

<!--[if IE]>
    <![endif]-->
    {{-- <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script> --}}

{{-- <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script> --}}

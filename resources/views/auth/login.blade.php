<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
{{--
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="cr admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, cr admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login</title>
    <link rel="apple-touch-icon" href="<?php echo url('/'); ?>/assets/imgs/faveicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo url('/'); ?>/assets/imgs/faveicon.png">
    <!-- Styles -->
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css-rtl/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo url('/'); ?>/assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo url('/'); ?>/assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css-rtl/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css-rtl/app.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css-rtl/colors.min.css">
    <!-- END STACK CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css/flags-icons/flag-icon-css.css">
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo url('/'); ?>/assets/css-rtl/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo url('/'); ?>/assets/css-rtl/core/menu/menu-types/vertical-overlay-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css/pages/login-register.css">
    <!-- END Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css/general.css">
    <!-- this give error when using vuejs as it can not find the file -->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css/mainStyle.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css-rtl/style-rtl.css">
</head> --}}
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="PIXINVENT">
    <title>Login</title>
    <link rel="apple-touch-icon" href="<?php echo url('/'); ?>/assets/imgs/faveicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo url('/'); ?>/assets/imgs/faveicon.png">
    <!-- Styles -->
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css-rtl/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo url('/'); ?>/assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/fonts/font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo url('/'); ?>/assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/vendors/css/extensions/pace.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css-rtl/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css-rtl/app.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css-rtl/colors.min.css">
    <!-- END STACK CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css/flags-icons/flag-icon-css.css">
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo url('/'); ?>/assets/css-rtl/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo url('/'); ?>/assets/css-rtl/core/menu/menu-types/vertical-overlay-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css/pages/login-register.css">
    <!-- END Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css/general.css">
    <!-- this give error when using vuejs as it can not find the file -->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css/mainStyle.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css-rtl/style-rtl.css">
    <style>
        body{
            background-image: url(/assets/imgs/logo/backlogolessrev.jpeg) !important;
            background-blend-mode: multiply;
        }
        .login-background-side{
            min-width: 25%;
            min-height: 100%;
            position: absolute;
            background-color: #ed9e1c;
            height: 100%;
            top: 0 !important;
            bottom: 0 !important;
        }
        input.no-border{
            border-bottom: 1px solid #ed9e1c !important;
        }
        select.no-border{
            border-bottom: 1px solid #ed9e1c !important;
        }
        .logo-section{
            height: calc(100% - 30px) !important;
        }
        .h-100{
            height: 100% !important;
        }
        .btn-primary {
            border-color: #ed9e1c!important;
            background-color: #ed9e1c!important;
            color: #FFF!important;
        }
        .btn-primary:hover {
            color: #fff!important;
            background-color: #0f4f98!important;
            border-color: #0f4f98!important;
        }
        .btn-outline-primary {
            border-color: #ed9e1c;
            background-color: transparent;
            color: #ed9e1c;
        }
        .btn-outline-primary:hover {
            background-color: #0f4f98;
            color: #FFF!important;
        }
        .card.d-flex{
            flex-direction: column;
        }
        .line-on-side {
            border-bottom: 1px solid #DADADA;
            line-height: .1em;
            margin: 10px 0 10px;
        }
        .loginCard{
            overflow: auto;
        }
        .error {
        color: red;
        }
        .col-xs-11.offset-xs-1 {
            margin-right: 4.333333% !important;
        }
        @media (max-width: 576px) {
            .p-xs-1{
                padding: 0.25rem !important;
            }
            .p-xs-2{
                padding: 0.5rem !important;
            }
            .p-xs-3{
                padding: 1rem !important;
            }
            .form-control-position{
                width: 2.166667rem;
                height: 2.166667rem;
                line-height: 2.166667rem;
            }
            .has-icon-left .form-control.input-lg {
                padding-left: 0.5rem;
                padding-right: 2.166667rem;
            }
        }
        section.logo-section img.logo {
    width: 11rem !important;
}
    </style>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <!-- End Google Tag Manager (noscript) -->
    <section class="flexbox-container logo-section">
        <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 m-0 loginCard">
                <div class="card-header no-border">
                    {{-- <li class="dropdown dropdown-language nav-item dropOpen" style="list-style-type: none;">
                        <a id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            class="dropdown-toggle nav-link"><i class="flag-icon  flag-icon-sa "></i><span
                                class="selected-language"></span></a>
                        <div aria-labelledby="dropdown-flag" class="dropdown-menu" display>
                            <a href="#" class="dropdown-item"><i class="flag-icon  flag-icon-us "></i> English
                            </a>
                        </div>
                    </li> --}}
                    <div class="card-title text-xs-center">
                        <div class="p-1">
                            <img src="<?php echo url('/'); ?>/assets/imgs/logo/logoM.png" alt="branding logo"
                                class="logo">
                        </div>
                    </div>
                    <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2">
                        <span>تسجيل الدخول </span>
                    </h6>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <form class="form-horizontal form-simple form-login" method="post" action="{{ route('login') }}"
                            name="loginForm" id=" loginForm1" >
                            @csrf
                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                <div class="row mb-1">
                                    <div class="col-md-7">
                                        <input type="phone" value=""
                                            class="form-control form-control-lg input-lg  @error('phone') is-invalid @enderror loginPhone"
                                            name="phone" id="" required="" title="من فضلك املأ هذا الحقل"
                                            placeholder="رقم الهاتف" value="{{ old('phone') }}" oninvalid=" "
                                            oninput=" ">
                                        <div class="form-control-position">
                                            <i class="ft-user"></i>
                                        </div>
                                        @error('phone')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-5">
                                        <select dir="rtl" name="country_code"
                                            class="form-control form-control-lg input-lg " style="font-size: 10px;">
                                            <option data-countryCode="SA" value="966" selected>Saudi
                                                Arabia (السعودية) (+966) </option>

                                        </select>
                                    </div>
                                </div>
                            </fieldset>

                            {{-- @error('phone')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror --}}

                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="password" value=""
                                    class="form-control form-control-lg input-lg   @error('password') is-invalid @enderror "
                                    name="password" id="" required="" title="من فضلك املأ هذا الحقل"
                                    placeholder="أدخل كلمة المرور" oninvalid=" " oninput=" ">
                                <div class="form-control-position">
                                    <i class="fa fa-key"></i>

                                </div>
                            </fieldset>
                            @error('password')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                            <fieldset class="form-group position-relative has-icon-left">
                                <div class="input-group">
                                    <div class="checkbox form-horizontal-checkbox">
                                        <label>
                                            <input type="checkbox" data-val="true"
                                                data-val-required="The Remember Me field is required." style="    margin-left: 10px;"
                                                id="lvm_RememberMe" name="lvm.RememberMe" value="true"><span
                                                class="checkbox-material"><span class="check"></span></span>تذكرني في
                                            المرة القادمة
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <button id="" type="submit" class="btn btn-primary btn-lg btn-block" href="#"><i
                                    class="ft-unlock"></i>
                                تسجيل الدخول</button>
                        </form>
                    </div>
                </div>
                {{-- <div class="card-footer">
                    <div class="">
                        <p class="float-sm-left text-xs-center m-0">
                            <a class="card-link forgotPassword" href="#">
                                نسيت كلمة المرور
                            </a>
                        </p>
                        <p class="float-sm-right text-xs-center m-0 createAccountBtn">
                            <a class="card-link" href="#">
                                إنشاء حساب جديد
                            </a>
                        </p>
                    </div>
                </div> --}}
            </div>
            <div class="card border-grey border-lighten-3 m-0 forgotPasswordCard" style="display: none;">
                <div class="card-header no-border" style="padding-bottom: 0px;">
                    <div class="card-title text-xs-center">
                        <div class="p-1">
                            <img src="assets/imgs/logo/vv.jpeg" alt="branding logo" class="logo">
                        </div>
                    </div>
                    <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2">
                        <span>إستعادة كلمة المرور</span>
                    </h6>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <form class="form-horizontal form-simple" method="POST" action="{{route('login')}}"
                            id=" loginForm2">
                            @csrf
                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                <input type="email" value="" class="form-control form-control-lg input-lg  "
                                    name="email" id="" required="" title="من فضلك املأ هذا الحقل"
                                    placeholder="أدخل الرقم الخاص بك" oninvalid=" "
                                    oninput=" ">
                                <div class="form-control-position">
                                    <i class="ft-user"></i>
                                </div>
                            </fieldset>
                            <button id="" type="submit" class="btn btn-primary btn-lg btn-block forgotPasswordBtn"><i
                                    class="ft-unlock"></i>
                                إستعادة كلمة المرور</button>
                        </form>
                    </div>
                </div>
                <div class="card-footer" style="padding-top:0px;display: inline-block;">
                    <div class="">
                        <p class="float-sm-left text-xs-center m-0">
                            <a class="card-link cancelForgotPassword" href="#">
                                إلغاء العملية وإكمال تسجيل الدخول؟
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card border-grey border-lighten-3 m-0 createAccountCard" style="display: none;">
                <div class="card-header no-border" style="padding-bottom:0px;">
                    {{-- <li class="dropdown dropdown-language nav-item dropOpen" style="list-style-type: none;">
                        <a id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            class="dropdown-toggle nav-link"><i class="flag-icon  flag-icon-sa "></i><span
                                class="selected-language"></span></a>
                        <div aria-labelledby="dropdown-flag" class="dropdown-menu" display>
                            <a href="#" class="dropdown-item"><i class="flag-icon  flag-icon-us "></i> English
                            </a>
                        </div>
                    </li> --}}
                    <div class="card-title text-xs-center">
                        <div class="p-1">
                            <img src="assets/imgs/logo/vv.jpeg" alt="branding logo" class="logo">
                        </div>
                    </div>
                    <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2">
                        <span>إنشاء حساب</span>
                    </h6>
                </div>
                <div class="card-body collapse in" style="padding-bottom:0px;padding-top: 0px;">
                    <div class="card-block">
                        <form class="form-horizontal form-simple" method="POST" action="{{ route('register') }}"
                            name="loginForm" id=" loginForm3">
                            @csrf
                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                <input type="text" value=""
                                    class="form-control form-control-lg input-lg  @error('name') is-invalid @enderror "
                                    name="name" id="" required="" title="من فضلك املأ هذا الحقل"
                                    placeholder="ال {{__('trans.truck30')}} " value="{{ old('name') }}"
                                    oninvalid=" " oninput=" ">
                                <div class="form-control-position">
                                    <i class="ft-user"></i>
                                </div>
                                @error('name')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </fieldset>

                            {{-- <fieldset class="form-group position-relative has-icon-left mb-1 phoneFieldset">
                                <input type="number" value=""
                                    class="form-control form-control-lg input-lg  @error('phone') is-invalid @enderror  phoneRegClass"
                                    name="phone" id="" required="" title="من فضلك املأ هذا الحقل"
                                    placeholder="رقم الهاتف" value="{{ old('phone') }}" oninvalid=" "
                                    oninput=" ">
                                <div class="form-control-position">
                                    <i class="ft-user"></i>
                                </div>
                                @error('phone')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </fieldset> --}}
                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                <div class="row mb-1">
                                    <div class="col-md-7">
                                        <input type="phone" value=""
                                            class="form-control form-control-lg input-lg  @error('phone') is-invalid @enderror loginPhone"
                                            name="phone" id="" required="" title="من فضلك املأ هذا الحقل"
                                            placeholder="رقم الهاتف" value="{{ old('phone') }}" oninvalid=" "
                                            oninput=" ">
                                        <div class="form-control-position">
                                            <i class="ft-user"></i>
                                        </div>
                                        @error('phone')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-5">
                                        <select dir="rtl" name="country_code"
                                            class="form-control form-control-lg input-lg " style="font-size: 10px;">
                                            <option data-countryCode="SA" value="966" selected>Saudi
                                                Arabia (السعودية) (+966) </option>

                                        </select>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="form-group position-relative has-icon-left mb-1 verfiyFieldset">
                                <input type="number" value=""
                                    class="form-control form-control-lg input-lg  verfiyRegClass"
                                    name="verfiy"  required="" title="من فضلك املأ هذا الحقل"
                                    placeholder="رمز التحقق"
                                    >
                            </fieldset>

                            <fieldset class="form-group position-relative has-icon-left mb-1 ">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 text-center mb-1">
                                        <button
                                            class="btnWidth btn btn-primary  dev-product-submit btn-custom-padding save-and-new-btn-color verfiyBtn"
                                            type="button"> ارسال الرمز
                                        </button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="form-group position-relative has-icon-left mb-1 verfiyBtnCheckCode">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 text-center mb-1">
                                        <button
                                            class="btnWidth btn btn-primary  dev-product-submit btn-custom-padding save-and-new-btn-color verfiyBtnCode"
                                            type="button"> تحقق
                                        </button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                <input type="password" value=""
                                    class="form-control form-control-lg input-lg  @error('password') is-invalid @enderror "
                                    name="password" id="" required="" title="من فضلك املأ هذا الحقل"
                                    placeholder="كلمة المرور" value="{{ old('password') }}"
                                    oninvalid=" " oninput=" ">
                                <div class="form-control-position">
                                    <i class="fa fa-key"></i>
                                </div>
                                @error('password')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                <select type="text" value=""
                                    class="form-control form-control-lg input-lg   @error('account_type') is-invalid @enderror"
                                    name="account_type" id="account_type" required="" title="من فضلك املأ هذا الحقل"
                                    value="{{ old('account_type') }}" placeholder="نوع المستخدم"
                                    oninvalid=" " oninput=" ">
                                    <option value="0" disabled selected>نوع المستخدم</option>
                                    <option value="company">شركة</option>
                                    <option value="individual">فرد</option>
                                </select>
                                @error('account_type')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
                                <select type="text" value=""
                                    class="form-control form-control-lg input-lg   @error('user_type') is-invalid @enderror"
                                    name="user_type" id="user_type" required="" title="من فضلك املأ هذا الحقل"
                                    value="{{ old('user_type') }}" placeholder="نوع الحساب"
                                    oninvalid=" " oninput=" ">
                                    <option value="0" disabled selected>نوع الحساب</option>
                                    <option value="charger">شاحن</option>
                                    <option value="transporter">ناقل</option>
                                </select>
                                @error('user_type')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </fieldset>
                            <div class="">
                                <p class="float-sm-left text-xs-center">
                                    بالتسجيل انت توافق على
                                    <a class="card-link" href="#">
                                        الشروط والاحكام
                                    </a>
                                </p>
                            </div>
                            <button id="" disabled type="submit" class="btn btn-primary btn-lg btn-block btn-createAcont"><i
                                    class="ft-unlock"></i>
                                إنشاء حساب</button>
                        </form>
                    </div>
                </div>
                <div class="card-footer" style="padding-top:0px;display: inline-block;">
                    <div class="">
                        <p class="float-sm-left text-xs-center m-0">
                            <a class="card-link loginBtn" href="#">
                                تملك حساب بالفعل؟ سجل دخولك من هنا.
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  END CONTENT -->
    <footer class="footer navbar-fixed-bottom footer-light navbar-border">
        <p class=" text-center mb-0 ">
           <span class=" d-xs-block d-md-inline-block">
            جميع الحقوق محفوظة لشركتي
                <a href="http://masarsoft.com/" target="_blank" class="text-bold-800 grey darken-2">مسار سوفت لتقنية المعلومات</a>
                و
                <a href="http://msoftar.com/" target="_blank" class="text-bold-800 grey darken-2">ام سوفت لتقنية المعلومات</a>
                .
            </span>
        </p>


        {{-- <label>أسم المستخدم : {{{Auth::user()->name}}}</label> --}}



    </footer>
    <script src="<?php echo url('/'); ?>/assets/js/jquery-3.6.0.js"></script>
    <script>
        $('#dropdown-flag').click(function() {
            if ($('.dropOpen').hasClass('open')) {
                $('.dropOpen').removeClass('open')
                $(this).attr('area-expanded', 'false');
            } else {
                $('.dropOpen').addClass('open')
                $(this).attr('area-expanded', 'true');
            }
        })
        $('.createAccountBtn').click(function() {
            $('.createAccountCard').show();
            $('.loginCard').hide();
        })
        $('.forgotPassword').click(function() {
            $('.forgotPasswordCard').show();
            $('.loginCard').hide();
        })
        $('.loginBtn').click(function() {
            $('.createAccountCard').hide();
            $('.loginCard').show();
        })
        $('.forgotPasswordBtn').click(function() {
            $('.forgotPasswordCard').hide();
            $('.loginCard').show();
        })
        $('.cancelForgotPassword').click(function() {
            $('.forgotPasswordCard').hide();
            $('.loginCard').show();
        })
        // =======================================
        $('.verfiyFieldset').hide();
        $('.verfiyBtnCheckCode').hide();

        @if(session()-> get('log') == 2)
        $('.createAccountBtn').trigger('click');
        @elseif(session()-> get('log') == 3)
        $('.forgotPassword').trigger('click');
        @else
        @endif


          $('.verfiyBtn').click(function() {
              phone= $('.phoneRegClass').val();
              if (phone.length==9){
                  if (phone.charAt(0)=='5') {
                       $('.phoneRegClass').removeClass('is-invalid');
                        $('.phoneFieldset .invalid-feedback').remove();

                        $.ajax({
                            method: 'post',
                            url: "",
                            cache: false,
                            data: {
                                "phone":phone,
                            "_token": "{{ csrf_token() }}"
                            },
                            error: function(xhr, status, error) {
                                var err = eval("(" + xhr.responseText + ")");
                                console.log(err.message);
                                alert(err.message);
                            },
                            success: function(response) {
                                console.log(response);
                                if (response==1) {
                                     $('.phoneFieldset').append(`<span class="error invalid-feedback">   الرقم مجود من قيل  </span>`);
                                } else {
                                    $('.').hide();
                                   $('.verfiyFieldset').show();
                                   $('.verfiyBtnCheckCode').show();
                                }

                            }
                        })

                  } else {
                     $('.phoneRegClass').addClass('is-invalid');
                  $('.phoneFieldset').append(`<span class="error invalid-feedback">يجب ان يبدا بالرقم 5 </span>`);
                  }
              } else {
                  $('.phoneRegClass').addClass('is-invalid');
                  $('.phoneFieldset').append(`<span class="error invalid-feedback">عدد الارقام يساوي 9 ارقام</span>`);

              }
            //   alert(phone);

        })

          $('.verfiyBtnCode').click(function() {
              code= $('.verfiyRegClass').val();
              console.log(code);
              if (code.length==6){
                    $('.verfiyRegClass').removeClass('is-invalid');
                    $('.verfiyFieldset .invalid-feedback').remove();


                       $.ajax({
                            method: 'post',
                            url: "",
                            cache: false,
                            data: {
                                "code":code,
                            "_token": "{{ csrf_token() }}"
                            },
                            error: function(xhr, status, error) {
                                var err = eval("(" + xhr.responseText + ")");
                                console.log(err.message);
                                alert(err.message);
                            },
                            success: function(response) {
                                console.log(response);
                                  if (response==1) {
                                  $('.verfiyRegClass').addClass('is-invalid');
                                  $('.verfiyFieldset').append(`<span class="error invalid-feedback">خطا في الكود المدخل </span>`);
                                  } else {
                                   $('.verfiyRegClass').attr('disabled','disabled');
                                   $('.verfiyBtnCode').attr('disabled','disabled');
                                    $('.btn-createAcont').removeAttr('disabled');
                                  }

                            }
                        })

              } else {
                  $('.verfiyRegClass').addClass('is-invalid');
                  $('.verfiyFieldset').append(`<span class="error invalid-feedback">عدد الارقام يساوي 6 ارقام</span>`);

              }
            //   alert(phone);

//         })     $(document).ready(function() {
//             jQuery.validator.addMethod("phoneStartingWith6", function(phone_number, element) {
//     phone_number = phone_number.replace(/\s+/g, "");
//     return this.optional(element) || phone_number.match(/^5\d{8,}$/);
// }, "يجب ان يبدا بالرقم 5");
$(".form-login").validate({
                rules: {
                phone : {
                required: true,
                minlength: 9,
                number: true,

                },
                password: {
                required: true,
                }
                },
                messages : {
                    phone: {
                    minlength: "رقم الهاتف يجب ان يكون من 9 ارقام ",
                    number: " يجب ان يكون ارقام ",
                    },
                    password: {
                    required: "يجب ادخال كلمة المرور صحيحة",
                    }

                    }

                });
$(".register-form").validate({
                rules: {
                name : {
                required: true,

                },
                phone : {
                required: true,
                minlength: 9,
                number: true,
                phoneStartingWith6: true
                },
                password: {
                required: true,
                }
                },
                messages : {
                    phone: {
                     required: "يجب ادخال الاسم)",

                    },
                    phone: {
                    minlength: "رقم الهاتف يجب ان يكون من 9 ارقام ",
                    number: " يجب ان يكون ارقام ",
                    },
                    password: {
                    required: "يجب ادخال كلمة المرور صحيحة",
                    // min: "يجب ان تتكون من 8 رموز"
                    }

                    }

                });
      });


    </script>
</body>

</html>

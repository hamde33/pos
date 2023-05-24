{{-- @extends('layout.posapp') --}}
{{-- @include('layout.loading') --}}
{{--
@section('additionalStyle') --}}
@extends('layout.posapp',['path'=>['الطلبات']])

{{-- @include('layout.loading') --}}

@section('additionalStyle')

@endsection

@section('content')


    @include('layout.loading')

{{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
{{-- <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css”> --}}
{{-- <meta charset="utf-8"> --}}
<meta name="viewport" content="width=device-width,
        initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
{{-- <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity=
"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous"> --}}

<style>
    .filter-row {
        background-color: #3abaf4;
        border-radius: 12px;
        color: white;
        padding-top: 3px;
        padding-bottom: 3px;
    }

    .filter-input {
        background-color: transparent;
        background: rgba(0, 0, 0, 0.2);
        background-image: none;
    }

    .select2-container--default .select2-selection--single,
    .select2-container--default .select2-selection--multiple {
        /* background-color: transparent; */
        border: 1px solid #fff;
        border-radius: 12px;
        color: white;
    }
    .select2-container--open .select2-dropdown--below {



}

    .select2-container .select2-selection--multiple {
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        min-height: 21px;
        user-select: none;
        -webkit-user-select: none;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow b,
    .select2-container--default .select2-selection--multiple .select2-selection__arrow b {
        border-color: #fff transparent transparent transparent !important;
        margin-top: -5px;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered,
    .select2-container--default .select2-selection--multiple .select2-selection__rendered {
        color: #fff;
        line-height: 14px !important;
    }

    .select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection_choice_display ,
    .select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice__display{
        padding-left: 12px;
        padding-right: 5px;
    }

    .select2-container--default .select2-selection--multiple .select2-selection_choice_remove {
        background-color: transparent;
        border: none;
        border-right: 1px solid #aaa;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
        color: #fff;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: transparent;
        border: 1px solid white;
        border-radius: 12px;
        box-sizing: border-box;
        display: inline-block;
        height: 21px;
        font-size: smaller;
    }
    .select2-container--classic .select2-selection--multiple, .select2-container--default .select2-selection--multiple {
min-height: 20px!important;
padding: 0px !important;
padding-right: 10px !important;
border-color: #D9D9D9!important;
}

    .select2-container--default.select2-container--focus .select2-selection--multiple {
        border: solid #afe6ff 1px;
        outline: 0;
        background-color: white !important;
    }
    .select2-container .select2-selection--single {
        height: 21px !important;
    }

    .select2-container--default .select2-search--dropdown .select2-search__field {
        height: 21px;
    }

    .select2-container--default .select2-results_option--highlighted.select2-results_option--selectable {
        background-color: #3abaf4;
    }

    .select2-results__option {
        padding: 0px;
    }

    .select2-container--default .select2-results__option--selected {
        background-color: #cff0ff;
    }

    .select2-search.select2-search--dropdown input:focus-visible {
        outline: -webkit-focus-ring-color auto 1px;
        outline-color: #3abaf4;
        outline-style: double;
        outline-width: 1px;
    }

    .accountingYearStyle {
        border: 1px solid;
        border-radius: 12px;
        height: 21px;
        text-align: center;
    }

    .accountingYearStyle:hover,
    .filter-action-icon.icon-left-arrow:hover {
        cursor: pointer;
    }

    .filter-action-icon {
        font-family: 'biolife', sans-serif !important;
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .filter-action-icon.icon-left-arrow {
        color: white;
        float: left;
        font-size: 27px;
    }



    .select2-container .select2-selection--multiple .select2-selection__rendered {
    display: inline !important;
    list-style: none;
    padding: 0;
    }
    .select2-container--default .select2-search--inline .select2-search__field {

    text-align: right !important;

}
.select2-container {
    text-align: right !important;

}
</style>
	{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}


    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close cancelEditnew" data-dismiss="modal" aria-hidden="true">

                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title NameToDelete" id="capitalizationModalLabel">
                        رقم الطلب <b></b></h4>
                </div>
                {{-- <form method="post" enctype="multipart/form-data" action="eidt-table"> --}}
                    <form method="post" enctype="multipart/form-data"
                    class="form form-horizontal striped-rows form-bordered dev-form-validate " id="deleteModal-post" action="eidt-table">
                    @csrf
                    <div class="modal-body">


                        <div class="container">

                            <div class="row mb-1">
                                <div class="col-md-3">

                                    <label for="" class="display-inline"> قيمة الطلب
                                    </label> <span class="required text-danger">*</span>
                                </div>
                                <div class="col-md-9">
                                    <input class="w-100 form-control order_value" required name="order_value" type="text" value=""
                                        id="">
                                        <input type="hidden" name="id" class="deleteModal" id="cancelEditdeleteModalkBtn">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default mx-1 modalclose" data-dismiss="modal">الغاء</button>
                        <span class="pull-right">
                            <button type="submit"
                                class="btn btn-primary ConfirmorderBtn" id="add-capitalization-btn">نعم </button>
                        </span>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="modal fade" id="importanceModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close cancelEditimportancekBtn" data-dismiss="modal" aria-hidden="true">

                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title NameToDelete" id="capitalizationModalLabel">
                        رقم الطلب <b></b></h4>
                </div>
                <form method="post" enctype="multipart/form-data"
                class="form form-horizontal striped-rows form-bordered dev-form-validate " id="forward-post" action="add-importance">
                {{-- <form method="post" enctype="multipart/form-data" action="add-importance"> --}}
                    @csrf
                    <div class="modal-body">
                        <div class="container">
                            <div class="row mb-1">

                                <div class="col-md-5 d-flex">
                                    <label for="ArabicName">
                                        نوع الاهمية</label>
                                    <span class="required text-danger">*</span>
                                </div>
                                <div class="col-md-7">
                                <select type="text" class="w-100 form-control import_id" name="import_id"
                                    id="" title="من فضلك املأ هذا الحقل" placeholder="نوع الاهمية"
                                    oninvalid=" " oninput=" "  required  >
                                    <option></option>
                                    @foreach ($importance as $imprt)
                                    <option value="{{ $imprt->id }}"> {{ $imprt->name }}</option>
                                    @endforeach
                                </select>
                                </div>
                                <input type="hidden" name="id" class="importanceModal" id="importanceModalid">

                             </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default mx-1 modalclose" data-dismiss="modal">الغاء</button>
                        <span class="pull-right">
                            <button type="submit"
                                class="btn btn-primary ConfirmddimportancekBtn" id="add-capitalization-btn">نعم </button>
                        </span>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="modal fade" id="new_labModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close cancelEditnew_labkBtn" data-dismiss="modal" aria-hidden="true">

                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title NameToDelete" id="capitalizationModalLabel">
                        رقم الطلب <b></b></h4>
                </div>
                {{-- <form method="post" enctype="multipart/form-data" action="add-neo_leap"> --}}
                    <form method="post" enctype="multipart/form-data"
                    class="form form-horizontal striped-rows form-bordered dev-form-validate " id="forward-post" action="add-neo_leap">
                    @csrf
                    <div class="modal-body">


                        <div class="container">

                            <div class="row mb-1">
                                <div class="col-md-3">

                                    <label for="" class="display-inline"> عدد الاجهزة
                                    </label> <span class="required text-danger">*</span>
                                </div>
                                <div class="col-md-9">
                                    <input class="w-100 form-control neo_leap" required name="neo_leap" type="number" value=""
                                        id="">
                                        <input type="hidden" name="id" class="new_labModalModal" id="idnew_labModalModal">

                                </div>
                            </div>

                        </div>
                    </div>





                    <div class="modal-footer">
                        <button type="button" class="btn btn-default mx-1 modalclose" data-dismiss="modal">الغاء</button>
                        <span class="pull-right">
                            <button type="submit"
                                class="btn btn-primary Confirmnew_labkBtn" id="add-capitalization-btn">نعم </button>
                        </span>
                    </div>
                </form>

            </div>
        </div>
    </div>
    @can('add_payment-orders')

    <div class="modal fade" id="deleterate" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close ConfirmcloseBtn" data-dismiss="modal" aria-hidden="true">

                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title NameTorate" id="capitalizationModalLabel">
                        رقم الطلب <b></b></h4>
                </div>
                {{-- <form method="post" enctype="multipart/form-data" action="get-order_rate"> --}}
                    <form method="post" enctype="multipart/form-data"
                    class="form form-horizontal striped-rows form-bordered dev-form-validate " id="forward-post" action="get-order_rate">
                    @csrf
                    <div class="modal-body">


                        <div class="container">

                            <div class="row mb-1">

                                    {{-- <input class="w-100 form-control order_status" required name="order_status" type="text" value=""
                                        id=""> --}}
                                        <div class="modal-body" style="text-align: center">
                                            <p class="truckNameToDelete">
                                                   هل تريد تحويل الطلب الى الحالة مدفوع
                                                <b></b>
                                            </p>
                                        </div>
                                        <input type="hidden" name="id" class="deleteModal" id="deleteModalid">
                                        <input type="hidden" name="pay"  value="1" >

                            </div>

                        </div>
                    </div>





                    <div class="modal-footer">
                        <button type="button" class="btn btn-default mx-1 modalclose" data-dismiss="modal">الغاء</button>
                        <span class="pull-right">
                            <button type="submit"
                                class="btn btn-primary ConfirmEditdeleteModalidkBtn" id="add-capitalization-btn">نعم </button>
                        </span>
                    </div>
                </form>

            </div>
        </div>
    </div>
    @endcan


    <div class="modal " id="capitalizationModal2" tabindex="-1" role="dialog"
        aria-labelledby="capitalizationModalLabel" style="top:20%">
        <div class="modal-dialog" role="document">
            <div class="modal-content filter-section-collapse">
                <div class="modal-header">
                    <button type="button" class="close cancelEditTruckBtn" data-dismiss="modal" aria-hidden="true">

                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title orderModalTitle" id="capitalizationModalLabel">
                        رقم الطلب <b></b></h4>
                </div>
                <div style="margin: 13px;margin-bottom: 0px;display: none;" role="alert" id="capitalization_added_msg"
                    class="alert alert-success"></div>
                <div style="margin: 13px;margin-bottom: 0px;" class="alert alert-danger hidden capitalization_error">
                    <div class="error-header">

                        <ul id="capitalization_error">
                        </ul>
                    </div>
                </div>
                <form method="POST" id="forward-post"  accept-charset="UTF-8"
                enctype="multipart/form-data"
                action="add-Order_status" class="formOrderChargerorder_id">
                    @csrf

                        {{-- @foreach ($Order_id as $id) --}}
                        <input type="hidden" name="order_status_id" class="order_status_id" id="order_status_idhidden">
                        {{-- @endforeach --}}

                            <div class="row" style="    margin-top: 14px;">
                                <div class="col-md-2 d-flex" style="
                                margin-right: 19px;">
                                    <label for="ArabicName">
                                        الرد</label>
                                    <span class="required text-danger">*</span>
                                </div>
                                <div class="col-md-6">
                                    <textarea id="answer_caler" name="answer" required rows="2" placeholder="أکتب ما ترید توضیحه لنا إضافة لاختیاراتک"
                                    cols="30" class="form-control form-control-lg input-lg  answer"
                                    maxlength="200">

                                            </textarea>
                                    {{-- <input class="w-100 form-control "
                                        name="answer" type="text" required > --}}
                                </div>
                                {{-- <div class="col-md-2">
                                    <button type="submit"
                                    class="btn btn-primary btn-min-width  " id="add-capitalization-btn">اضافة   <i class="fa fa-paper-plane" aria-hidden="true"></i>

                                </button>
                                    <button type="submit"
                                    class="btn btn-primary btn-min-width  myFunction" id="add-capitalization-btn">طباعة الردود

                                     <i class="fa fa-print" aria-hidden="true"></i>

                                </button>

                                </div> --}}
                            </div>
                            <input type="hidden" name="id" value="submit1" class="id" id="">


                            <input type="hidden" name="user" value="{{{Auth::user()->name}}}" class="" id="">
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default mx-1 modalclose" data-dismiss="modal fade">الغاء</button>
                                <span class="pull-right">
                                    <button type="submit"
                                        class="btn btn-primary ConfirmEditTruckBtn" id="add-capitalization-btn">نعم </button>
                                </span>
                            </div>
                        </form>

                        {{-- <table  class="table table-striped" id="order_id" data-pagination="true" data-backdrop="static"
                        data-show-footer="true" data-locale="ar-SA" data-show-refresh="true"
                        data-toolbar-align="right" data-thead-classes="table table-sm thead-mod"> --}}

                        {{-- </table> --}}

                    </div>


                        </div>
                    </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="capitalizationModal3" tabindex="-1" role="dialog"
    aria-labelledby="capitalizationModalLabel" style="top:20%">
    <div class="modal-dialog" role="document">
        <div class="modal-content filter-section-collapse">
            <div class="modal-header">
                <button type="button" class="close capitalizationadd" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title editModalTitle" id="capitalizationModalLabel">
                     <b></b>
                    اضافة طلب
                    </h4>
            </div>
            <div style="margin: 13px;margin-bottom: 0px;display: none;" role="alert" id="capitalization_added_msg"
                class="alert alert-success">
            </div>
            <div style="margin: 13px;margin-bottom: 0px;" class="alert alert-danger hidden capitalization_error">
                <div class="error-header">

                    <ul id="capitalization_error">
                    </ul>
                </div>
            </div>
            <form method="post" enctype="multipart/form-data"
                class="form form-horizontal striped-rows form-bordered dev-form-validate form-add" id="Modal3" action="add-addOrder">
                <div class="modal-body">
                    <div class="container">
                        <div class=" ">
                            <div class="row mb-1">
                                <div class="col-md-5 d-flex">
                                    <label for="ArabicName">
                                        اسم المؤسسة/الشركة</label>
                                    <span class="required text-danger">*</span>
                                </div>
                                <div class="col-md-7">
                                    <input class="w-100 form-control addcalerModal" placeholder="اسم المؤسسة/الشركة"  name="name"  title="يرجا ملى هاذا الحقل" required  type="text"  >
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-5">
                                    <label for="to_loc"> رقم الهاتف
                                    </label>
                                    <span class="required text-danger">*</span>

                                </div>
                                <div class="col-md-5">
                                            <input type="phone" value="" pattern="^\d{9}$"
                                            class="form-control form-control-lg input-lg addcalerModal @error('phone') is-invalid @enderror"
                                            name="phone" id="" required title="يجب ان يكون عدد الارقام 9"
                                            placeholder="رقم الهاتف" value="{{ old('phone') }}" >
                                                <div class="form-control-position">
                                                    <i class="ft-user"></i>
                                                </div>
                                                @error('phone')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                </div>
                                <div class="col-md-2">
                                    <select dir="rtl" name="country_code"
                                        class="w-100 form-control " style="font-size: 10px;">
                                        <option data-countryCode="SA" value="966" selected>Saudi
                                            Arabia (السعودية) (+966) &#x200e;</option>

                                    </select>
                                </div>
                            </div>
                            {{-- <div class="row mb-1">
                                <div class="col-md-5 d-flex">
                                    <label for="name">
                                        رقم الهاتف</label>
                                </div>
                                <div class="col-md-7">
                                    <input class="w-100 form-control  " title="يرجا ملى هاذا الحقل" name="phone" type="number"
                                        required >
                                </div>
                            </div> --}}
                        </div>
                        <div class=" ">
                            <div class="row mb-1">

                            <div class="col-md-5 d-flex">
                                <label for="ArabicName">
                                     نشاطات المؤسسة/الشركة</label>
                                <span class="required text-danger">*</span>
                            </div>
                                                      <input name="user_link" class="addcalerModal" type="hidden" value="{{{Auth::user()->link}}}" >
                                                      {{-- <input name="user_link" type="hidden" value="{{{Auth::user()->uid}}}" > --}}

                            <div class="col-md-7">

                            <select type="text"  class="w-100 form-control work_active types addcalerModal" name="work_active"
                             title="من فضلك املأ هذا الحقل" placeholder="نوع نشاطات"
                                oninvalid=" " oninput=" " required>
                                <option>خدمي</option>
                                <option>مقاولات</option>
                                <option>استثمار عقاري</option>
                                <option>استیراد وتصدیر</option>
                                <option>مراکز خدمة سیارات</option>
                                <option>مطاعم وکافیهات</option>
                                <option> صیدلیات</option>
                                <option> شرکات تقنیة </option>
                                <option> طاقة</option>
                                <option> مالیة </option>
                                <option value="2" > أخری </option>
                            </select>
                            @error('work_active1')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                            </div>
                            </div>
                            <div class="row mb-1 other"  style="display:none">
                                <div class="col-md-5 d-flex">
                                    <label for="ArabicName">
                                     </label>
                                     <span class="required text-danger">*</span>

                                </div>
                                <div class="col-md-7">
                                    <input class="w-100 form-control work_active1 addcalerModal @error('work_active1') is-invalid @enderror"   name="work_active1" type="text" >
                                </div>
                            </div>
                            {{-- <div class="row mb-1">
                                <div class="col-md-5 d-flex">
                                    <label for="ArabicName">
                                        طريقة وصول الرابط اليك.</label>
                                    <span class="required text-danger">*</span>
                                </div>
                                <div class="col-md-7">
                                <select type="text"  class="w-100 form-control  contact_id" name="contact_id"
                                 title="من فضلك املأ هذا الحقل" placeholder="نوع نشاطات"
                                    oninvalid=" " oninput=" " required>
                                    @foreach ($communicate as $commu)
                                    <option value="{{ $commu->id }}"> {{ $commu->name }}</option>
                                    @endforeach
                               </select>
                                 </div>
                            </div> --}}
                            {{-- @if ()

                            @else

                            @endif --}}
                            {{-- @if (Auth::user()->admin == 1) --}}
                            {{-- @if (Auth::user()->uid == "0") --}}
                            {{-- <input name="uid" type="hidden" class="uid" value="{{{Auth::user()->uid}}}"> --}}

                            {{-- @else --}}
                            @can('usersedie_in_order-orders')

                            <div class="row mb-1">

                            <div class="col-md-5 d-flex">
                                <label for="ArabicName">
                                    المستخدم</label>
                                <span class="required text-danger">*</span>
                            </div>
                            <div class="col-md-7">

                            <select type="text" class="w-100 form-control user_link addcalerModal" name="user_link"
                                id="" title="من فضلك املأ هذا الحقل" placeholder="نوع المستخدم"
                                 required>
                                @foreach ($username as $users)
                                <option value="{{ $users->link }}"> {{ $users->name }}</option>
                                @endforeach


                            </select>
                            @error('uid')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                            </div>
                            </div>
                            @endcan
                            {{-- @endif --}}
                            {{-- @else

                            <input name="uid" type="hidden" value="{{{Auth::user()->uid}}}" >
                            @endif --}}


                        </div>
                        <input name="order_id" type="hidden" class="id">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="active"  >المتطلبات
                                    </label>
                                </div>
                                <div class="col-md-6  " style="    margin-right: 46%;
                                margin-top: -6%;">
                                    <div class="row">
                                        <div class="form-check col-md-12">
                                            <input class="form-check-input addcalerModal" value="نقاط بيع(فاتور الاكترونية)"
                                                type="checkbox" name="requir[]" id="">
                                                @error('requir')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            <label class="form-check-label" for="">
                                                نقاط بيع(فاتور الاكترونية)
                                            </label>
                                        </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-check col-md-12">

                                                <input class=" form-check-input addcalerModal" value="مبيعات و مشتريات" type="checkbox"
                                                    name="requir[]" id="">
                                                <label class="form-check-label" for="">
                                                    مبيعات و مشتريات
                                                </label>
                                            </div>

                                        </div>
                                        <div class="row">

                                        <div class="form-check col-md-12">
                                            <input class="form-check-input addcalerModal" value="مخازن" type="checkbox"
                                                name="requir[]" id="">
                                            <label class="form-check-label" for="">
                                                مخازن
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check col-md-12">
                                            <input class="form-check-input addcalerModal" value="حسابات" type="checkbox"
                                                name="requir[]" id="">
                                            <label class="form-check-label" for="">
                                                حسابات
                                            </label>
                                        </div>
                                        </div>
                                        <div class="row">

                                        <div class="form-check col-md-12">
                                            <input class="form-check-input addcalerModal" value="شحن ونقل" type="checkbox"
                                                name="requir[]" id="active6">
                                            <label class="form-check-label" for="">
                                                شحن ونقل
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                     <div class="form-check col-md-12">
                                        <input class="form-check-input addcalerModal" value="شحن ونقل وسيط" type="checkbox"
                                            name="requir[]" id="">
                                        <label class="form-check-label" for="">
                                            شحن ونقل وسيط
                                        </label>
                                    </div>
                                    </div>

                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-md-5">
                                <label for="photo" > ملاحظات إضافیة
                                </label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group">
                                    <div class=" w-100">
                                        <textarea id="txtid" name="not" rows="4" placeholder="أکتب ما ترید توضیحه لنا إضافة لاختیاراتک"
                                        cols="50" class="form-control form-control-lg input-lg  addcalerModal @error('old') is-invalid @enderror "
                                        maxlength="200">

                              </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row mb-1">
                            <div class="col-md-5">
                                <label for="photo"> الحالة
                                </label>
                            </div>

                            <div class="col-md-7">
                                <div class="input-group">
                                    <div class=" w-100">
                                        <input class="form-check-input active" style="margin-right: 2%;" value="1"  type="checkbox"
                                        name="active" id="">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                </div>

                @csrf
                <div class="modal-footer">
                    <button type="button" class="btn btn-default mx-1" data-dismiss="modal">الغاء</button>
                    <span class="pull-right">
                        <button type="submit"
                            class="btn btn-primary capitalizationModaladd" id="add-capitalization-btn">أضافة</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

    <div class="modal fade" id="capitalizationModaledit" role="dialog"
        aria-labelledby="capitalizationModalLabel" style="top:20%">
        <div class="modal-dialog" role="document">
            <div class="modal-content filter-section-collapse">
                <div class="modal-header">
                    <button type="button" class="close canceladdaddBtn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title editModalTitle" id="capitalizationModalLabel">
                        رقم الطلب <b></b></h4>
                </div>
                <div style="margin: 13px;margin-bottom: 0px;display: none;" role="alert" id="capitalization_added_msg"
                    class="alert alert-success"></div>
                <div style="margin: 13px;margin-bottom: 0px;" class="alert alert-danger hidden capitalization_error">
                    <div class="error-header">

                        <ul id="capitalization_error">
                        </ul>
                    </div>
                </div>
                <form method="post" id="forward-post" enctype="multipart/form-data"
                    class="form form-horizontal striped-rows form-bordered dev-form-validate" action="eidt-edit_order">
                    <div class="modal-body">
                        @csrf

                        <div class="container">
                            <div class=" ">
                                <div class="row mb-1">
                                    <div class="col-md-5 d-flex">
                                        <label for="ArabicName">
                                            اسم المؤسسة/الشركة</label>
                                            <span class="required text-danger">*</span>

                                    </div>
                                        <div class="col-md-7">
                                            <input class="w-100 form-control name" required name="name" type="text"
                                                required>
                                        </div>

                                </div>


                                <div class="row mb-1">
                                    <div class="col-md-5">
                                        <label for="to_loc"> رقم الهاتف
                                        </label>
                                        <span class="required text-danger">*</span>

                                    </div>
                                    <div class="col-md-5">

                                                <input type="phone" value="" id="phone"  pattern="^\d{9}$"
                                                class="form-control form-control-lg input-lg  @error('phone') is-invalid @enderror"
                                                name="phone"required  title="يجب ان يكون عدد الارقام 9"
                                                placeholder="رقم الهاتف" value="{{ old('phone') }}" >
                                                    <div class="form-control-position">
                                                        <i class="ft-user"></i>
                                                    </div>
                                                    @error('phone')
                                                    <span class="error invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                    </div>
                                    <div class="col-md-2">
                                        <select dir="rtl" name="country_code"
                                            class="w-100 form-control " style="font-size: 10px;">
                                            <option data-countryCode="SA" value="966" selected>Saudi
                                                Arabia (السعودية) (+966) &#x200e;</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <input name="user_link" type="hidden" value="{{{Auth::user()->link}}}" >

                            <div class=" ">
                                <div class="row mb-1">

                                <div class="col-md-5 d-flex">
                                    <label for="ArabicName">
                                         نشاطات المؤسسة/الشركة</label>
                                    <span class="required text-danger">*</span>
                                </div>
                                <div class="col-md-7">

                                <select type="text"  class="w-100 form-control  @error('work_active1') is-invalid @enderror work_active typesedit" name="work_active"
                                    title="من فضلك املأ هذا الحقل" placeholder="نوع المستخدم"
                                    oninvalid=" "  oninput=" " required>
                                    {{-- <option value="{{ $Order_id->work_active }}" selected="selected">
                                        {{ $Order_id->work_active }}</option> --}}

                                    <option>خدمي</option>
                                    <option>مقاولات</option>
                                    <option>استثمار عقاري</option>
                                    <option>استیراد وتصدیر</option>
                                    <option>مراکز خدمة سیارات</option>
                                    <option>مطاعم وکافیهات</option>
                                    <option> صیدلیات</option>
                                    <option> شرکات تقنیة </option>
                                    <option> طاقة</option>
                                    <option> مالیة </option>
                                    <option value="3" > أخری </option>
                                </select>
                                </div>
                                @error('work_active1')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                                </div>
                                  <div class="row mb-1 otheredit" style="display:none" >
                                <div class="col-md-5 d-flex">
                                    <label for="ArabicName">
                                     </label>
                                    <span class="required text-danger">*</span>
                                </div>
                                <div class="col-md-7">
                                    <input class="w-100 form-control work_active1 @error('work_active1') is-invalid @enderror"   name="work_active1" type="text" >
                                </div>
                                @error('work_active1')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                                <input type="hidden" name="order_id" class="id" id="order_idModaledit">
                                {{-- <div class="row mb-1">
                                    <div class="col-md-5 d-flex">
                                        <label for="ArabicName">
                                            طريقة وصول الرابط اليك.</label>
                                        <span class="required text-danger">*</span>
                                    </div>
                                    <div class="col-md-7">
                                    <select type="text"  class="w-100 form-control  contact_id" name="contact_id"
                                     title="من فضلك املأ هذا الحقل" placeholder="نوع نشاطات"
                                        oninvalid=" " oninput=" " required>
                                        @foreach ($communicate as $commu)
                                        <option value="{{ $commu->id }}"> {{ $commu->name }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    </div> --}}
                                {{-- <input type="hidden" name="id"  class="id" id=""> --}}

                                {{-- <div class="row mb-1">

                                <div class="col-md-5 d-flex">
                                    <label for="ArabicName">
                                        المستخدم</label>
                                    <span class="required text-danger">*</span>
                                </div>
                                <div class="col-md-7">

                                <select type="text" class="w-100 form-control uid" name="uid"
                                    id="" title="من فضلك املأ هذا الحقل" placeholder=" المستخدم"
                                    oninvalid=" " oninput=" " required>
                                    @foreach ($username as $users)
                                    <option value="{{ $users->uid }}"
                                        >
                                        {{ $users->name }}</option>
                                    @endforeach


                                </select>
                                </div>
                                </div> --}}
                                {{-- @if (Auth::user()->uid == "0")
                                <input name="uid" type="hidden" class="uid" value="{{{Auth::user()->uid}}}">

                                @else --}}

                                @can('usersadd_in_order-orders')
                                <div class="row mb-1">
                                <div class="col-md-5 d-flex">
                                    <label for="ArabicName">
                                        المستخدم</label>
                                    <span class="required text-danger">*</span>
                                </div>
                                <div class="col-md-7">
                                <select type="text" class="w-100 form-control user_link" name="user_link"
                                    id="" title="من فضلك املأ هذا الحقل" placeholder="نوع المستخدم"
                                    oninvalid=" " oninput=" " required  >
                                    <option></option>
                                    @foreach ($username as $users)
                                    <option value="{{ $users->link }}"> {{ $users->name }}</option>
                                    @endforeach
                                </select>
                                </div>
                                </div>
                                @endcan
                                    {{-- @endif --}}
                                    <input name="status_sales_id" type="hidden" class="status_sales_id" value="1">
                            </div>


                            </div>
                            {{-- <div class="row mb-1">
                                <div class="col-md-5">
                                    <label for="photo"> الوظيفة
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class=" w-100">
                                            <input class=" w-100 form-control" type="text" name="job">

                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="active" style="margin-right: 5%;">المتطلبات
                                        </label>
                                    </div>
                                    <div class="col-md-6 " style=" margin-right: 46%;
                                    margin-top: -6%;">
                                        <div class="row">
                                            <div class="form-check col-md-12">


                                                <input class="form-check-input requir" id="active3" value="نقاط بيع(فاتور الاكترونية)"
                                                type="checkbox" name="requir[]"  >
                                            <label class="form-check-label" for="">
                                                نقاط بيع(فاتور الاكترونية)
                                            </label>
                                            </div>

                                            </div>
                                            <div class="row">

                                                <div class="form-check col-md-12">
                                                    <input class=" form-check-input" id="active2" value="مبيعات و مشتريات"   type="checkbox"
                                                            name="requir[]" id="">
                                                        <label class="form-check-label" for="">
                                                            مبيعات و مشتريات
                                                        </label>
                                                </div>
                                                </div>
                                            <div class="row">

                                            <div class="form-check col-md-12">
                                                <input class="form-check-input" value="مخازن" id="active1" type="checkbox"
                                                    name="requir[]" id="">
                                                <label class="form-check-label" for="">
                                                    مخازن
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check col-md-12">
                                                <input class="form-check-input" value="حسابات"  type="checkbox"
                                                    name="requir[]" id="active5">
                                                <label class="form-check-label" for="">
                                                    حسابات
                                                </label>
                                            </div>
                                            </div>
                                            <div class="row">

                                            <div class="form-check col-md-12">
                                                <input class="form-check-input" value="شحن ونقل"  type="checkbox"
                                                    name="requir[]" id="active6">
                                                <label class="form-check-label" for="">
                                                    شحن ونقل
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                         <div class="form-check col-md-12">
                                            <input class="form-check-input" value="شحن ونقل وسيط"  type="checkbox"
                                                name="requir[]" id="active4">
                                            <label class="form-check-label" for="">
                                                شحن ونقل وسيط
                                            </label>
                                        </div>
                                        </div>

                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-5">
                                    <label for="photo" style="margin-right: 5%;"> !ملاحظات إضافیة
                                    </label>
                                </div>
                                <input type="hidden" name="id" class="editTruckId">

                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class=" w-100">
                                            <textarea  id="txtid" name="not" rows="4" placeholder="أکتب ما ترید توضیحه لنا إضافة لاختیاراتک"
                                            cols="50" class="form-control form-control-lg input-lg not "
                                            maxlength="200">

                                                    </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="active">الحالة
                                        </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input name="active"  value="1" class="active" type="checkbox"
                                        name="active" id="active1">
                                    </div>
                                </div>
                            </div> --}}

                            </div>
                        </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default mx-1" data-dismiss="modal">الغاء</button>
                        <span class="pull-right">
                            <button type="submit"
                                class="btn btn-primary ConfirmeieditBtn" id="add-capitalization-btn">تعديل</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="capitalizationModal8" tabindex="-1"  role="dialog"
    aria-labelledby="capitalizationModalLabel" style="top:20%">
    <div class="modal-dialog" role="document">
        <div class="modal-content filter-section-collapse">
            <div class="modal-header">
                <button type="button" class="close cancelEditTruckBtn2" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title editModalTitle2" id="capitalizationModalLabel">
                    رقم الطلب <b></b></h4>
            </div>
            <div style="margin: 13px;margin-bottom: 0px;display: none;" role="alert" id="capitalization_added_msg"
                class="alert alert-success"></div>
            <div style="margin: 13px;margin-bottom: 0px;" class="alert alert-danger hidden capitalization_error">
                <div class="error-header">

                    <ul id="capitalization_error">
                    </ul>
                </div>
            </div>
            {{-- <form method="POST" id="modal8"  accept-charset="UTF-8"
            enctype="multipart/form-data"
            action="add-order_cases" class="formOrderChargerstatus_table"> --}}
            <form method="post" id="forward-post"  enctype="multipart/form-data"
            class="form form-horizontal striped-rows form-bordered dev-form-validate formOrderChargerstatus_table" action="add-order_cases">
            <div class="modal-body">

                    @csrf

                    <div class="container">

                        <div class="row" style="    margin-top: 14px;">
                            <div class="col-md-2 d-flex" style="
                            margin-right: 19px;">
                                <label for="ArabicName">
                                    الحالة</label>
                                <span class="required text-danger">*</span>
                            </div>
                            <input name="order_id" type="hidden" class="order_idhiddenxx">
                            <input name="id" type="hidden" class="id">
                            {{-- <input name="user_name" type="hidden" value="{{{Auth::user()->uid}}}" > --}}

                            <div class="col-md-6">
                                <select type="text"  class="w-100 form-control capitaliza" name="status_sales_id"
                                id="Modal8_caler" title="من فضلك املأ هذا الحقل" placeholder="نوع الحالة"
                                oninvalid=" " oninput=" " required  >
                                <option></option>


                            </select>

                            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}

                                {{-- <input class="w-100 form-control "
                                    name="answer" type="text" required > --}}
                            </div>
                            <div class="col-md-2">
                                <button type="submit"
                                class="btn btn-primary btn-min-width  ConfirmEditTruck2" id="add-capitalization-btn">اضافة   <i class="fa fa-paper-plane" aria-hidden="true"></i>

                            </button>


                            </div>
                        </div>

                          {{-- <input name="user_name" type="hidden" value="{{{Auth::user()->name}}}" > --}}
                        <input type="hidden" name="id" class="editTruckId">
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-default mx-1 modalclose" data-dismiss="modal">الغاء</button>
                    <span class="pull-right">
                        <button type="submit"
                            class="btn btn-primary " id="add-capitalization-btn">نعم </button>
                    </span>
                </div> --}}
            </form>

        <table id="status_table"
        data-click-to-select="true" data-pagination="true"
        data-side-pagination="server" data-show-refresh="true"
        data-locale="ar-SA" data-page-list="[10, 25, 50, 100, 200, All]"
        data-thead-classes="table table thead"
        data-classes="table table table-column table-striped table-hover"
        data-buttons-class="outline-primary" data-show-footer="true"
        data-query-params="queryParams" data-buttons="buttons1"
        data-search-align="left">
    </table>
        </div>
    </div>
</div>
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            @can('addorders-representative-orders')
             <div class="container-fluid p-0">
                    <div class="row d-flex justify-content-end align-items-center">
                        <div class="col-md-12 text-left">
                            <div class="btn-group headBtns">
                                <a class="text-white" target="popup">
                                    <button type="button" class="btn btn-primary btn-min-width btn-capitalizationModal3">
                                       اضافة <img alt="add" src="/png/plus.svg">
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan
            @can('filtering-representative-orders')
            <div style="background-color: var(--background-color);" >
                <button class="btn btn-primary w-100 filterbtn" type="button" data-toggle="collapse"
                    data-target="#collapseExample" aria-expanded="false"
                    aria-controls="collapseExample">
                    <div class="d-flex justify-content-between">
                        <span>فلترة </span><i class="fa fa-angle-down"></i>
                    </div>
                </button>
            </div>
            @endcan
            <div class="collapse filter-section-collapse" id="collapseExample">
                <form method="GET" action="" accept-charset="UTF-8"
                    class="form form-horizontal striped-rows form-bordered  dev-form-validate formOrderChargerFilter" >
                <div class="card card-body mb-0">
                    <div class="row">

                        @can('filteringuser-representative-orders')
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="category" style="line-height: 2.45;">المستخدم  </label>
                                    </div>
                                    <div class="col-md-8 mb-1">
                                        <select data-placeholder="" class="w-100 py-1 form-control js-users_uid-multi users_uid "
                                            multiple="multiple"
                                            type="search" id="" aria-controls="DataTables_Table_0" name="users_uid[]"
                                            style="border-radius: 15px; width: 100% !important; text-align: right;">
                                            <option>الكل</option>
                                            @foreach ($username as $users)
                                            <option value="{{ $users->link }}"> {{ $users->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endcan
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="category" style="line-height: 2.45;" >حالة الطلب</label>
                                    </div>
                                    <div class="col-md-8 mb-1">
                                        <select data-placeholder="Add tools"
                                            class="w-100 py-1 form-control  order_cases_search " name="order_cases_search" type="search" id=""
                                            aria-controls="DataTables_Table_0"

                                            style="border-radius: 15px;">

                                            <option>الكل</option>
                                            @foreach ($Orders as $users)
                                            <option value="{{ $users->id }}"> {{ $users->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="row">
                            <div class="form-group">
                                    <div class="col-md-6 hidden-md-down pr-0">
                                        <div class="d-flex">
                                            <div class="col-md-2 d-flex">
                                                <label for="category"
                                                    class="mb-0 line-height-1-45">التاريخ</label>
                                            </div>
                                            <div class="col d-flex">
                                                <div class="col-md-5 d-flex" style="    width: 39%;">

                                                    <input class="form-control date_from" name="from" type="date"
                                                        id="from">
                                                </div>
                                                <div class="col-md-5 d-flex" style="width: 41%;">

                                                    <input class="form-control date_to" name="to" type="date" id="to">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="category" style="line-height: 2.45;" > الدفع</label>
                                            </div>
                                            <div class="col-md-8 mb-1">
                                                <select data-placeholder="Add tools"
                                                    class="w-100 py-1 form-control order_rate_search " name="order_rate_search" type="search" id=""
                                                    aria-controls="DataTables_Table_0" name="status" style="border-radius: 15px;">

                                                    <option>الكل</option>

                                                    <option value="1" >مدفوع  </option>
                                                    <option value="0" >غير مدفوع  </option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label for="category" style="line-height: 2.45;" >الاجهزة</label>
                                            </div>
                                            <div class="col-md-8 mb-1">
                                                <select data-placeholder="Add tools"
                                                    class="w-100 py-1 form-control neo_leap_search " name="neo_leap_search" type="search" id=""
                                                    aria-controls="DataTables_Table_0" name="status" style="border-radius: 15px;">

                                                    <option>الكل</option>

                                                    <option value="1" >جهاز</option>
                                                    <option value="0" >بدون اجهزة </option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="category" style="line-height: 2.45;" >الاهمية</label>
                                            </div>
                                            <div class="col-md-8 mb-1">
                                                <select data-placeholder="الاهمية"  style="width: 100% !important;"
                                                    class="w-100 py-1 form-control   js-disabled-multi importance_search "  type="" id=""
                                                    aria-controls="DataTables_Table_0"
                                                    multiple="multiple"
                                                    name="importance_search[]">

                                                    @foreach ($importance as $imprt)
                                                    <option value="{{ $imprt->id }}"> {{ $imprt->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        <br>
                     <div class="text-center mt-1">
                        <button class=" btn btn-info btn-min-width mr-1 mb-1 datt">تطبيق</button>
                        <button type="reset" id="reset" class="btn btn-warning btn-min-width mr-1 mb-1">مسح</button>
                    </div>

                </div>
            </form>
        </div>
            <div>

                <section class="mt-1" id="configuration">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="div-collection" class=" content-row menuDisplayed sub-header-descr">
                                        <div class="row">
                                            <div class="col-md-12 table-responsive"   >
                                                <div id="DataTables_Table_0_wrapper"
                                                    class="dataTables_wrapper form-inline dt-bootstrap4 no-footer">
                                                    <div id="DataTables_Table_0_filter"
                                                        class="dataTables_filter" style=" float: left;">
                                                        <label>ابحث:<input type="search"
                                                                class="form-control input-sm id_sersh"  placeholder="بحث"
                                                                aria-controls="DataTables_Table_0"
                                                                id="customSearchField">
                                                        </label>
                                                    </div>
                                                </div>
                                                {{-- <button class="btn btn-primary" type="button" name="refresh" id="refresh-btn" aria-label="تحديث" title="تحديث"><i class="fa fa-sync"></i> </button> --}}

                                                <table id="table" class="table" data-show-print="true"
                                                data-click-to-select="true" data-pagination="true"
                                                data-side-pagination="server" data-show-refresh="true"
                                                data-locale="ar-SA"
                                                data-page-list="[10,25,50,100,200,All]"
                                                data-thead-classes="table table thead"
                                                data-classes="table table table-column table-striped table-hover"
                                                data-url="get-get_tablOrder"
                                                data-cookie-id-table="saveId"
                                                data-cookie="true"
                                                data-detail-view="true"
                                                data-detail-formatter="detailFormatter"
                                                data-buttons-class="outline-primary" data-show-footer="true"
                                                data-query-params="queryParams" data-buttons="buttons"
                                                data-search-selector="#customSearchField"
                                                data-toolbar="#DataTables_Table_0_wrapper"
                                                data-search-align="left">
                                            </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
              </div>
<script type="text/javascript">
$(document).ready(function() {
    $('.js-disabled-multi').select2();
});
$(document).ready(function() {
    $('.eidt-disabled-multi').select2();
});
$(document).ready(function() {
    $('.js-users_uid-multi').select2();
});
$('#refresh-btn').DataTable().ajax.reload();
 $(document).ready(function() {

   function RefreshTable() {
   table.innerHTML = '';
   $( "#table" ).load( "#table" );
   }

   $("#refresh-btn").on("click", RefreshTable);
});

// const capitalizationModaledit = new Vue({
//   el: '#capitalizationModaledit',
//   data: {
//     errors: [],
//     name: null,
//     phone: null,
//     movie: null
//   },

//   methods:{
//     checkForm: function (e) {


//       if (this.name && this.phone) {

//         return true;
//       }

//       this.errors = [];

//       if (!this.name) {
//         this.errors.push('Name required.');
//       }
//       var x = this.phone.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
//       if (!this.phone == x) {
//         this.phone = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');

//         this.errors.push('Age required.');
//       }

//       e.preventDefault();
//     }
//   }
// })
// export default {
//   emits: {
//     // no validation
//     click: null,

//     // with validation
//     submit: (payload) => {
//       if (payload.email && payload.password) {
//         return true
//       } else {
//         console.warn(`Invalid submit event payload!`)
//         return false
//       }
//     }
//   }
// }

</script>
{{-- <script src="extensions/cookie/bootstrap-table-cookie.js"></script> --}}
{{-- <script src="https://unpkg.com/bootstrap-table@1.21.0/dist/extensions/cookie/bootstrap-table-cookie.min.js"></script> --}}
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
        <script>
// الارد على الطلب



        var $order_id = $('#order_id')
        var assetId = 0;

        function dataAjaxRequest(params) {
            console.log(params);
            var url = '{{ route('get-Order_status') }}';
            params.data['assetId'] = assetId;
            $.get(url + '?' + $.param(params.data)).then(function(res) {
                console.log(res);
                params.success(res)
            });
        }
        function initiateorder_id(data) {
            var timer = setInterval(function() {
                assetId = data.id;
                var $order_id = $('#order_id' + data.id);
                $(function() {
            $order_id.bootstrapTable({
                ajax: 'dataAjaxRequest',
                  columns: [{
                     title: 'id',
                    field: 'id',
                    halign: 'center',
                    align: 'center'
                }, {
                    title: ' اسم المستخدم ',
                    field: 'user',
                    halign: 'center',
                    align: 'center',
                }, {
                    title: 'الرد',
                    field: 'answer',
                    halign: 'center',
                    align: 'center',
                }, {
                    title: 'وقت الاضافة',
                    field: 'updated_at',
                    halign: 'center',
                    align: 'center',
                    formatter: 'created_atFormatter',
                            },
                        ]
                    });
                })
                clearInterval(timer);
            }, 300);

        }
        // $('.btn-capitalizationModal2').click(function() {
        //     });
        function answer_add(id)
        {

            console.log(id);
            $('.orderModalTitle').children('b').text(' - ' + id);

                $('#capitalizationModal2 .order_status_id').val(id);
            $('#capitalizationModal2').appendTo('body').modal('show');
        }
        function value_order(id)
        {

            $.ajax({
                    type: 'get',
                    dataType: 'json',
                    url: '/get-Order_status2/' + id,

                    // data: JSON.stringify({ 'selectedTags':orderData }),
                    success: function(row2) {
                        //   row2.orderData = [];
                        // row2.cases = [];
                        // console.log(orderData);

                        // console.log(row2.orderData);
                        // console.log(row2.statusData);
                        $status_table.bootstrapTable('refreshOptions', {

                            data: row2.orderData
                        })
                        var data_item  = '';
                        // row2.orderData.forEach((item2, index)=>{
                        //     console.log(row2);

                        // if (item2.status_sales_id == "3") {
                        //     // console.log("ddddddddddddddddd");
                        // $("#eidetorder").hide();
                        //  } else {
                        //   $("#eidetorder").show();

                        //  }
                        // });

                    //     if (item.name == "تم اكمال الطلب") {
                    //         console.log("ddddddddddddddddd");

                    // // $("#capitalizationModal8 #eidetorder").hide();
                    //  } else {
                    //   $("#capitalizationModal8 #eidetorder").show();

                    //  }
                        row2.cases.forEach((item, index)=>{
                        //     data_item += '
                        //     <option> ' + item.name +'</option>

                        //    ',
                    //    return [
                        data_item +=

                            // '<option>' + item.name + '</option>';

                            '<option value="' + item.id + '" >' + item.name + '</option>';


                    //    ];
                        // row2.forEach((item, index)=>{

                            // console.log(item);
                            // $('#capitalizationModal8 .status').val(item.name);

                            // if (row2.orderData.status_sales_id == "1") {
                            //     $('#capitalizationModal8 .updated_at1').val(item.updated_at).val(moment().format('YYYY-MM-DDTHH:mm'));
                            //     $('#capitalizationModal8 .user_name3').val(item.user_name);
                            //     $('#capitalizationModal8 #order_cases3').trigger('click');
                            // } else {
                            //         $('#capitalizationModal8 #notactive').trigger('click');
                            //     }
                            // if (item.status_sales_id == "تم استلام الطلب") {
                            //     $('#capitalizationModal8 .updated_at2').val(item.updated_at).val(moment().format('YYYY-MM-DDTHH:mm'));
                            //     $('#capitalizationModal8 .user_name1').val(item.user_name);
                            //     $('#capitalizationModal8 #order_cases4').trigger('click');
                            // }
                            //  else
                            //     {
                            //     $('#capitalizationModal8 #notactive').trigger('click');
                            //     }
                            // if (item.status_sales_id == "تم اكمال الطلب") {
                            //     $("#capitalizationModal8 #other").hide();
                            //     $('#capitalizationModal8 .updated_at3').val(item.updated_at).val(moment().format('YYYY-MM-DDTHH:mm'));
                            //     $('#capitalizationModal8 .user_name4').val(item.user_name);
                            //     $('#capitalizationModal8 #order_cases2').trigger('click');

                            //     } else {
                            //      $("#capitalizationModal8  #other").show();
                            //      $('#capitalizationModal8 #notactive').trigger('click');
                            //         }

                                });
                                $('#capitalizationModal8 .capitaliza').html('');
                                $('.capitaliza').append(data_item);

                                $('#capitalizationModal8').on('hidden.bs.modal', function (e) {
                            $(this)
                                .find("input,textarea,select")
                                .val('')
                                .end()
                                .find(" input[type=text], input[type=text]")
                                .prop("", "")
                                .end();
                            })
                 }

                });

                clear_inputs('#capitalizationModal8');
                $('#capitalizationModal8').children('b').text(' - ');
                $('#capitalizationModal8 input[name="order_id"]').val(id);
                $('.editModalTitle2').children('b').text(' - ' + id);
                $('#capitalizationModal8 .orderModalTitle2').val(id);
                $('#capitalizationModal8 input[name="id"]').val(id);

                $('#capitalizationModal8').appendTo('body').modal('show');
        }
        function importance_open(id,import_id)
        {

            $('.NameToDelete').children('b').text(' - ' + id);
                $('.importanceModal').val(id);
                $('#importanceModal input[name="id"]').val(id);
                $('#importanceModal .import_id').val(import_id);
                $('#importanceModal').appendTo('body').modal('show');
        }
        function new_lab_open(id,neo_leap)
        {
            $('.NameToDelete').children('b').text(' - ' + id);
                $('.new_labModal').val(id);
                $('#new_labModal input[name="id"]').val(id);
                $('#new_labModal input[name="neo_leap"]').val(neo_leap);
                $('#new_labModal').appendTo('body').modal('show');

        }
        function myFunction(id) {
                window.location.href='reciept/'+id;
            }

        function detailFormatter(value, row, index)
        {
            if(row.ordercases22 || row.ordercases){
                if (row.ordercases22.ordercases.id == "3" || row.ordercases22.ordercases.id == "4") {


            // }

            var html = []
             var sizes = []

            html.push(
                // if '(' + row.ordercases22.ordercases.id + ' == "3" || ' + row.ordercases22.ordercases.id + ' == "4")' +
                // {
                    @can('answeradd-representative-orders')
                '<button onclick="myFunction(' + row.id + '); " class="btn btn-info" value="default">   <i class="fa fa-print"></i></button>' +
                '<button onclick="answer_add(' + row.id + '); " class="btn btn-info" value="default"> <i class="fa fa-plus"></i></button></button>' +
                @endcan
                // '<a class="xxxxxxxxxxxxxxxxxxxxx"  title="الجهاز" style="margin-left: 4px;"><i class="	fa fa-desktop"></i></a>' +
                @can('answeradd-representative-orders')
                '<table id="order_id' + row.id + '" class="order_id" data-click-to-select="true"' +
                'data-pagination="true" data-show-refresh="true"' +
                'data-locale="ar-SA" data-thead-classes="table table-sm thead-mod" data-buttons-class="primary"' +
                'data-side-pagination="server"' +
                '</table>'
                @endcan

                // }
                // 'else' +
                // {

                // }
            )

            initiateorder_id(row);
            return html.join('');


        }
            else{
                var html = []
                var sizes = []

            html.push(

                 @can('answeradd-representative-orders')
                 '<button onclick="answer_add(' + row.id + '); " class="btn btn-info" value="default"> <i class="fa fa-plus"></i></button></button>' +
                 '<button onclick="myFunction(' + row.id + '); " class="btn btn-info" value="default">   <i class="fa fa-print"></i></button>' +
                @endcan
                @can('value-representative-orders')
                '<button onclick="value_order(' + row.id + '); " class="btn btn-info" value="default">حالة  <i class="fa fa-first-order" style=" margin-right: 4px;"></i></button>' +
                @endcan
                @can('importance_open-representative-orders')
                '<button onclick="importance_open(' + row.id + ',' + row.import_id + '); " class="btn btn-info" value="default">الاهمية  <i class="fa fa-exclamation-triangle" style=" margin-right: 4px;"></i></button>' +
                @endcan
                @can('neo_leap-representative-orders')
                '<button onclick="new_lab_open(' + row.id + ',' + row.neo_leap + '); " class="btn btn-info" value="default"> الاجهزة<i class="fa fa-desktop" style=" margin-right: 5px;"></i></button>' +
                @endcan
                @can('answeradd-representative-orders')
                '<table id="order_id' + row.id + '" class="order_id" data-click-to-select="true"' +
                'data-pagination="true" ' +
                'data-locale="ar-SA" data-thead-classes="table table-sm thead-mod" data-show-refresh="true" data-buttons-class="primary"' +
                'data-side-pagination="server"' +
                '</table>' +
                @endcan
                ''
            )

            initiateorder_id(row);
            return html.join('');

            }
         }
            else{



}
        }

        //    initiateorder_id(row);
        //     return html.join('');
        // }

        // function detailFormatter(index, row) {

        //     $.ajax({
        //             type: 'get',
        //             dataType: 'json',
        //             url: '/get-Order_status/' + row.id,

        //             success: function(row2) {
        //                 $('#capitalizationModal2 #answer_caler').val('');
        //                 $order_id.bootstrapTable('refreshOptions', {
        //                     data: row2
        //                 })
        //                 // console.log(row2)
        //                 orderanswer(row2);


        //          }
        //         });


        // }
  $(document).ready(function() {
    //         jQuery.validator.addMethod(function(phone_number, element) {
    // return this.optional(element);});
$(".form-add").validate({
                rules: {
                phone : {
                minlength: 9,
                number: true,
                unique: true,

                },
                user_link: {
                required: true,
                },

                work_active1: {
                required: true,
                }
                },
                messages : {
                    phone: {

                    minlength: "رقم الهاتف يجب ان يكون من 9 ارقام ",
                    number: " يجب ان يكون ارقام ",
                    unique: "رقم الهاتف  موجود من قبل ",

                    },



                    }

                });


      });
function TotalFormatRate(data) {

    var field = this.field
                var res = data.map(function(row) {
                    if (row[field]) {
                        return row[field];
                    }else{
                        return 0.00;
                    }
                }).reduce(function(sum, i) {

                    return parseFloat(sum) + parseFloat(i)
                }, 0).toFixed(1);
                return res;
            }

            function idFormatter() {
                return 'الإجمالي'
            }

            function nameFormatter(data) {
                return data.length
            }
            function fuhamde(ind, row, el) {
                return `

                `;
            }

            function barcodeFormatter(data) {
                var field = this.field
                return '' + data.map(function(row) {
                return +row[field].substring(1)
            }).reduce(function(sum, i) {
                return sum + i
            }, 0)
            }
            function TotalFormatter(data) {
                // console.log(data)

                var field = this.field
                var res = data.map(function(row) {
                    if (row[field]) {
                        return row[field];
                    }else{
                        return 0.00;
                    }
                }).reduce(function(sum, i) {

                    return parseFloat(sum) + parseFloat(i)
                }, 0).toFixed(2);
                return res;
            }


            function TotalFormatternew_lab(data) {

                var field = this.field
                var res = data.map(function(row) {
                    if (row[field]) {
                        return row[field];
                    }else{
                        return 0.00;
                    }
                }).reduce(function(sum, i) {

                    return parseFloat(sum) + parseFloat(i)
                }, 0).toFixed(2);
                return res;
            }
//  function order_statusFormatter(value, row, index, field) {
//             row.user_rate =  parseFloat(row.order_status);
//             Math.round(row.user_rate);
//             return row.user_rate.toFixed();
//             if ($.isNumeric(row.user_rate)) {

//             } else {
//                 return 0;
//             }

//         }
            function PriceFootterFormatter(data) {
                    var field = this.field
                        var res = 0;
                        data.forEach(element => {
                        res += parseFloat(element.price);
                        });
                        // $totalView.val(res);
                        if ($.isNumeric(res)) {
                            res = parseFloat(res).toFixed(2);
                        }
                        return res;
                        }

        </script>
    <script type="text/javascript">
        $(document).ready(function(){

        $(".types").change(function(){

          var type = $(this).val();

           if(type  == "2"){
                $(".other").show();
              }else{
                $(".other").hide();
              }


        });

        });
        // if(ordercases22.ordercases.id  == "3"){
        //         $("#ddddddddddd").show();
        //       }else{
        //         $("#ddddddddddd").hide();
        //       }
        $(".table").change(function(){


            $table.reload();



});

        $(document).ready(function(){

        $(".typesedit").change(function(){

          var type = $(this).val();


          if(type  == "3"){
                $(".otheredit").show();
              }else{
                $(".otheredit").hide();
              }
        });


        });



        </script>
         <script>

            function discountFormatter(data) {
                var field = this.field
                var res = data.map(function(row) {
                    if (row[field]) {
                        return row[field];
                    } else {
                        return 0.00;
                    }
                }).reduce(function(sum, i) {
                    // console.log('sum')
                    // console.log(sum)
                    // console.log('i')
                    // console.log(i)
                    return parseFloat(sum) + parseFloat(i)
                }, 0).toFixed(2);
                return res;
            }

            function idFormatter() {
                return 'الإجمالي'
            }

            function nameFormatter(data) {
                return data.length
            }

            function barcodeFormatter(data) {
                var field = this.field
                return '$' + data.map(function(row) {
                    return +row[field].substring(1)
                }).reduce(function(sum, i) {
                    return sum + i
                }, 0)
            }
        </script>
    {{-- <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script> --}}
<script>
//    $('#capitalizationModal3 #Modal3').submit(function(e) {
//                 e.preventDefault();
//                 $.ajax({
//                     method: 'post',
//                     url: $(this).attr('action'),
//                     cache: false,
//                     data: $(this).serialize(),
//                     error: function(xhr, status, error) {
//                         var err = eval("(" + xhr.responseText + ")");
//                         console.log(err.message);
//                         alert(err.message);
//                     },
//                     success: function(response) {

//                         if (response) {
//                             // $(".detail-view").hide();
//                             // $('.btn btn-primary').trigger('click');
//                             $('#capitalizationModal3 .addcalerModal').val('');

//                                 $("#table").bootstrapTable('refresh')
//                             $('.capitalizationadd').trigger('click');
//                             $table.bootstrapTable('refresh');
//                             $('.capitalizationModaladd').removeAttr('disabled');



//                         }
//                     }
//                 })
//             });
   $('#importanceModal #forward-post').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    method: 'post',
                    url: $(this).attr('action'),
                    cache: false,
                    data: $(this).serialize(),
                    error: function(xhr, status, error) {
                        var err = eval("(" + xhr.responseText + ")");
                        console.log(err.message);
                        alert(err.message);
                    },
                    success: function(response) {

                        if (response) {
                            // $(".detail-view").hide();
                            // $('.btn btn-primary').trigger('click');
                            $Modal= $("#importanceModalid").val();
                                $("#table"+$Modal).bootstrapTable('refresh')
                            $('.cancelEditimportancekBtn').trigger('click');
                            $table.bootstrapTable('refresh');
                            $('.ConfirmddimportancekBtn').removeAttr('disabled');



                        }
                    }
                })
            });


    $('#capitalizationModal8 #forward-post').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    method: 'post',
                    url: $(this).attr('action'),
                    cache: false,
                    data: $(this).serialize(),
                    error: function(xhr, status, error) {
                        var err = eval("(" + xhr.responseText + ")");
                        console.log(err.message);
                        alert(err.message);
                    },
                    success: function(response) {

                        if (response) {
                            // $(".detail-view").hide();
                            // $('.btn btn-primary').trigger('click');
                            $xxxx= $("#order_idhiddenxx").val();
                                $("#status_table"+$xxxx).bootstrapTable('refresh')
                            $('.cancelEditTruckBtn2').trigger('click');
                            $order_id.bootstrapTable('refresh');
                            $('.ConfirmEditTruck2').removeAttr('disabled');



                        }
                    }
                })
            });
    $('#capitalizationModal2 #forward-post').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    method: 'post',
                    url: $(this).attr('action'),
                    cache: false,
                    data: $(this).serialize(),
                    error: function(xhr, status, error) {
                        var err = eval("(" + xhr.responseText + ")");
                        console.log(err.message);
                        alert(err.message);
                    },
                    success: function(response) {

                        if (response) {
                            // $(".detail-view").hide();
                            // $('.btn btn-primary').trigger('click');


                            $('#capitalizationModal2 #answer_caler').val('');
                            $orrrr= $("#order_status_idhidden").val();
                                $("#order_id"+$orrrr).bootstrapTable('refresh')
                            $('.cancelEditTruckBtn').trigger('click');
                            $order_id.bootstrapTable('refresh');
                            $('.ConfirmEditTruckBtn').removeAttr('disabled');
                        }
                    }
                })
            });
    $('#new_labModal #forward-post').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    method: 'post',
                    url: $(this).attr('action'),
                    cache: false,
                    data: $(this).serialize(),
                    error: function(xhr, status, error) {
                        var err = eval("(" + xhr.responseText + ")");
                        console.log(err.message);
                        alert(err.message);
                    },
                    success: function(response) {

                        if (response) {
                            // $(".detail-view").hide();
                            // $('.btn btn-primary').trigger('click');


                            $('#capitalizationModal2 #answer_caler').val('');
                            $new_lab= $("#idnew_labModalModal").val();
                                $("#table"+$new_lab).bootstrapTable('refresh')
                            $('.cancelEditnew_labkBtn').trigger('click');
                            $table.bootstrapTable('refresh');
                            $('.Confirmnew_labkBtn').removeAttr('disabled');
                        }
                    }
                })
            });
    $('#deleterate #forward-post').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    method: 'post',
                    url: $(this).attr('action'),
                    cache: false,
                    data: $(this).serialize(),
                    error: function(xhr, status, error) {
                        var err = eval("(" + xhr.responseText + ")");
                        console.log(err.message);
                        alert(err.message);
                    },
                    success: function(response) {

                        if (response) {
                            // $(".detail-view").hide();
                            // $('.btn btn-primary').trigger('click');


                            // $('#capitalizationModal2 #answer_caler').val('');



                            $Modald= $("#deleteModalid").val();
                                $("#table"+$Modald).bootstrapTable('refresh')
                            $('.ConfirmcloseBtn').trigger('click');
                            $table.bootstrapTable('refresh');
                            $('.ConfirmEditdeleteModalidkBtn').removeAttr('disabled');

                        }
                    }
                })
            });
    $('#capitalizationModaledit #forward-post').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    method: 'post',
                    url: $(this).attr('action'),
                    cache: false,
                    data: $(this).serialize(),
                    error: function(xhr, status, error) {
                        var err = eval("(" + xhr.responseText + ")");
                        console.log(err.message);
                        alert(err.message);
                    },
                    success: function(response) {

                        if (response) {
                            // $(".detail-view").hide();
                            // $('.btn btn-primary').trigger('click');
                            $('#deleteModal #answer_caler').val('');
                            $edit= $("#order_idModaledit").val();
                                $("#table"+$edit).bootstrapTable('refresh')
                            $('.canceladdaddBtn').trigger('click');
                            $table.bootstrapTable('refresh');
                            $('.ConfirmeieditBtn').removeAttr('disabled');

                            // $('#capitalizationModal2 #answer_caler').val('');

                        }
                    }
                })
            });
    $('#deleteModal #deleteModal-post').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    method: 'post',
                    url: $(this).attr('action'),
                    cache: false,
                    data: $(this).serialize(),
                    error: function(xhr, status, error) {
                        var err = eval("(" + xhr.responseText + ")");
                        console.log(err.message);
                        alert(err.message);
                    },
                    success: function(response) {

                        if (response) {
                            // $(".detail-view").hide();
                            // $('.btn btn-primary').trigger('click');
                            $('#deleteModal #answer_caler').val('');
                            $edit2= $("#cancelEditdeleteModalkBtn").val();
                                $("#table"+$edit2).bootstrapTable('refresh')
                            $('.cancelEditnew').trigger('click');
                            $table.bootstrapTable('refresh');
                            $('.ConfirmorderBtn').removeAttr('disabled');

                            // $('#capitalizationModal2 #answer_caler').val('');

                        }
                    }
                })
            });


    // $('#capitalizationModal8 #order_cases2').submit(function(e) {
    //             e.preventDefault();
    //             $.ajax({
    //                 method: 'post',
    //                 url: $(this).attr('action'),
    //                 cache: false,
    //             //     data: {
    //             //    "_token": "{{ csrf_token() }}",
    //             //    "id": id,
    //             //    "status_sales_id": status_sales_id,
    //             //    "order_id": order_id,

    //             //          },
    //                 data: $(this).serialize(),
    //                 error: function(xhr, status, error) {
    //                     var err = eval("(" + xhr.responseText + ")");
    //                     console.log(err.message);
    //                     alert(err.message);
    //                 },
    //                 success: function(response) {

    //                     if (response) {
    //                         // $('.btn btn-primary').trigger('click');


    //                         $('#capitalizationModal8 #answer_caler').val('');
    //                             $table.bootstrapTable('refreshOptions', {
    //                     data: response
    //                     })
    //                         $('.cancelEditTruckBtn').trigger('click');
    //                         $table.bootstrapTable('refresh');
    //                         $('.Confirmeiorder_cases2Btn').removeAttr('disabled');
    //                     }
    //                 }
    //             })
    //         });


    // $('#capitalizationModaledit #edit_order').submit(function(e) {
    //             e.preventDefault();
    //             $.ajax({

    //                 error: function(xhr, status, error) {
    //                     var err = eval("(" + xhr.responseText + ")");
    //                     console.log(err.message);
    //                     alert(err.message);
    //                 },
    //                 success: function(response) {

    //                     if (response) {
    //                         // $('#capitalizationModal3 #answer_caler').val('');

    //                         $('.canceladdaddBtn').trigger('click');
    //                         $table.bootstrapTable('refresh');
    //                         $('.ConfirmeidtckBtn').removeAttr('disabled');
    //                     }
    //                 }
    //             })
    //         });


    </script>

    <script>
        function clear_inputs(modal_id) {
            $(modal_id + ' .clrChk').each(function(index, element) {
                // element == this
                if ($(element).prop('checked') == true) {
                    $(element).prop('checked', false);
                    $(element).show();
                    $(element).parent('label').removeClass('hidden-checked');
                }
            });
        }
        $('.xxxxxxxxxxxxxxxxxxxxx').click(function() {
            $('#capitalizationModal2').appendTo('body').modal('show');
        });
        $(function() {
            $('.btn-capitalizationModal').click(function() {
                $('#capitalizationModal').appendTo('body').modal('show');
            });



            // $('.btn-capitalizationModal8').click(function() {
            //     $('#capitalizationModal8').appendTo('body').modal('show');
            // });
            $('.btn-capitalizationModal3').click(function() {

                $('#capitalizationModal3').appendTo('body').modal('show');
            });
            // $('.btn-capitalizationModal55').click(function() {
            //     $('#capitalizationModal55').appendTo('body').modal('show');
            // });

            $('.btn-deleteModal').click(function() {
                $('#deleteModal').appendTo('body').modal('show');
            });
            $('.btn-importance_open').click(function() {
                $('#importance_open').appendTo('body').modal('show');
            });

        })

        function check() {
            if ($("#checked").is(":checked")) {
                alert("Thanks for Attending");
                //Code to disable checkbox after checked
                $('#checked').attr('disabled', true);
            }
        }
        $('.checked').change(function(e) {
            if ($(this).prop('checked') == true) {
                // $(this).attr('disabled',true);
                $(this).hide();
                $(this).parent('label').addClass('hidden-checked');
            }
        })

    </script>
    <script>

function buttons1() {
    return @include('layout.elements.table_buttons');
    }

function buttons() {
    return @include('layout.elements.table_buttons');
    }

    var $table = $('#table');
        $(function() {
            $table.bootstrapTable('destroy').bootstrapTable({
                printPageBuilder:function(table) {
                        return `
                            <!DOCTYPE html>
                            <html dir="rtl" lang="ar">
                            <header>
                                <style type="text/css" media="print">
                                    @page {
                                        size: auto;
                                        margin: 25px 0 25px 0;
                                         direction: rtl;
                                    }
                                </style>
                                <style type="text/css" media="all">
                                    table {
                                        border-collapse: collapse;
                                        font-size: 12px;
                                         direction: rtl;
                                    }
                                    table,
                                    th,
                                    td {
                                        border: 1px solid grey;
                                    }
                                    th,
                                    td {
                                        text-align: center;
                                        vertical-align: middle;
                                    }
                                    p {
                                        font-weight: bold;
                                        margin-left: 20px;
                                    }
                                    table {
                                        width: 94%;
                                        margin-left: 3%;
                                        margin-right: 3%;
                                    }
                                    div.bs-table-print {
                                        text-align: center;
                                    }
                                </style>
                            </header>
                            <title>Print Table</title>
                            <body>
                                <div class="bs-table-print" style="
                                direction: rtl !important;">${table}</div>
                            </body>
                            </html>`
                    },
                columns: [{

                    title: 'رقم ',
                    field: 'id',
                    halign: 'center',
                    align: 'center'
                    // width: 100%
                },  {
                    title: 'اسم م/ش',
                    field: 'name',
                    halign: 'center',
                    align: 'center',
                }, {
                    title: ' الهاتف',
                    field: 'phone',
                    halign: 'center',
                    align: 'center',

                },  {
                     title: 'المتطلبات',
                    field: 'requir',
                    halign: 'center',
                    align: 'center',
                    width: "10",
                    widthUnit: "%",
                    cellStyle: (value, row, index) => {
                        if (row.isTotal) {
                            return {
                                css: {
                                    'font-weight': 'bold',
                                    'color': 'black',
                                    'border-top': '1px solid #E3EBF3',
                                }
                            }
                        } else {
                            return {
                                css: {
                                    'padding-right': '10px',
                                }
                            }
                        }

                    }

                },
                {
                    title: 'النشاطات',
                    field: 'work_active',
                    halign: 'center',
                    align: 'center',
                },

                @can('view_order_value-representative-orders')

                {
                    title: 'قيمة /ط',
                    field: 'order_value',
                    halign: 'center',
                    align: 'center',
                    footerFormatter: 'TotalFormatter'


                },
                @endcan
                    @can('viewrate-representative-orders')

                    {
                        title: 'نسبة /ط ',
                        field: 'Rate_sum',
                        halign: 'center',
                        align: 'center',
                        formatter: Rate_sumFormatter,
                        footerFormatter:'TotalFormatRate'



                    },
                @endcan
                     @can('vieworder_rate-representative-orders')
                        {
                    title: 'الدفع',
                    field: 'pay',
                    halign: 'center',
                    align: 'center',
                    events: window.operateEvents,
                    formatter: order_rateFormatter
                        },
                    @endcan

                {
                    title: '   الاجهزة ',
                    field: 'neo_leap',
                    halign: 'center',
                    align: 'center',
                    footerFormatter: 'TotalFormatternew_lab'

                },
                {
                    title: '  المستخدم ',
                    field: 'usersclakshin.name',
                    halign: 'center',
                    align: 'center',
                    sortable: 'true',
                        printFormatter: (value, row, index) => {
                            return row.usersclakshin.name;
                        }

                },
                 {
                    title: 'الحالة ',
                    field: 'ordercases22.ordercases.name',
                    halign: 'center',
                    align: 'center',
                    sortable: 'true',
                        printFormatter: (value, row, index) => {
                            return row.ordercases22.ordercases.name;
                        }
                },
                @can('viewimportan-representative-orders')
                {

                    title: 'الاهمية ',
                    field: 'importan.name',
                    halign: 'center',
                    align: 'center',
                    sortable: 'true',
                        printFormatter: (value, row, index) => {
                            return row.importan.name;
                        }
                    },
                        @endcan
                        {
                    title: 'التاريخ',
                    field: 'updated_at',
                    halign: 'center',
                    align: 'center',
                    formatter: 'created_atFormatter',
                    // formatter: activeFormatter',

                }, {
                    title: 'العمليات',
                    field: 'details',
                    halign: 'center',
                    align: 'center',
                    printIgnore:true,
                    footerFormatter: 'idFormatter',

                    events: window.operateEvents,
                    formatter: operateFormatter

                }]
            })
            // $order_id.bootstrapTable({
            //     uniqueId: 'id',

            //     columns: [{
            //         title: 'id',
            //         field: 'id',
            //         halign: 'center',
            //         align: 'center'
            //     }, {
            //         title: ' اسم المستخدم ',
            //         field: 'user',
            //         halign: 'center',
            //         align: 'center',
            //     }, {
            //         title: 'الرد',
            //         field: 'answer',
            //         halign: 'center',
            //         align: 'center',
            //     }, {
            //         title: 'وقت الاضافة',
            //         field: 'updated_at',
            //         halign: 'center',
            //         align: 'center',
            //         formatter: 'created_atFormatter',




            //     }]
            // })
            $status_table.bootstrapTable({
                uniqueId: 'id',

                columns: [{
                    title: 'id',
                    field: 'id',
                    halign: 'center',
                    align: 'center',
                    formatter: 'idFormatter',

                }, {
                    title: ' اسم المستخدم ',
                    field: 'orderuser_name.name',
                    halign: 'center',
                    align: 'center',
                    sortable: 'true',
                        printFormatter: (value, row, index) => {
                            return row.orderuser_name.name;
                        }
                }, {
                    title: 'الحالة',
                    field: 'ordercases.name',
                    halign: 'center',
                    align: 'center',
                    sortable: 'true',
                        printFormatter: (value, row, index) => {
                            return row.ordercases.name;
                        }
                }, {
                    title: 'وقت الاضافة',
                    field: 'updated_at',
                    halign: 'center',
                    align: 'center',
                    formatter: 'created_atFormatter',




                }]

            })

        })
        function created_atFormatter(value, row, index) {
            return row.updated_at.substr(0,16);

        }

//         $(".myFunction").click(function(e) {
//     e.preventDefault();
//     $('#capitalizationModal2 .id').val(id);
// console.log('id');
//     //  window.location.href='reciept/'+row.id;
// });
// function myFunction(value, row, index) {
//                 window.location.href='reciept/'${row.id};
//             }

        // function myFunction(value, row, index) {
        //         window.location.href='reciept/'+row.id;
        //     }
        function idFormatter() {
            return 'الإجمالي'
        }
        var $order_id = $('#order_id')
        var $status_table = $('#status_table')


        function idFormatter() {
            return 'الإجمالي'
        }
        function operateFormatter(value, row, index) {
            if(row.ordercases22 || row.ordercases){

            if (row.ordercases22.ordercases.id == "3" || row.ordercases22.ordercases.id == "4") {

            return [

                // @can('answeradd-representative-orders')
                // '<a class="answer" href="javascript:void(0) ' + row.id + '" title="الرد" style="margin-left: 4px;">',
                // '<i class="fa fa-commenting"></i>',
                // '</a>',
                // @endcan
                // @can('neo_leap-representative-orders')

                // '<a class="new_lab_open" href="javascript:void(0) ' + row.id + '" title="الجهاز" style="margin-left: 4px;">',
                // '<i class="	fa fa-desktop"></i>',
                // '</a>',
                // @endcan

                // '<a class="edit1" href="javascript:void(0)" title="edit1">',
                // '<i class="fa fa-circle-thin font-small-1 fa fa-ban"></i>',
                // '</a>',


                // @can('order_value-representative-orders')

                // '<a class="order_value" href="javascript:void(0)" title="قيمة"  >',
                // '<i class="fa fa-bar-chart"></i>',
                // '</a>',
                // @endcan
                // console.log(row.id);

                // @can('editorders-representative-orders')

                // '<a class="show" href="javascript:void(0)" title="show">',
                // '<i class="fa fa-eye"></i>',
                // '</a>',
                // @endcan

            ].join('')

                        // console.log("ddddddddddddddddddd");

            }


            else
            {

                return [
                // @can('value-representative-orders')

                // '<a class="value_order" href="javascript:void(0) ' + row.id + '" title="حالة" style="margin-left: 4px;">',
                // '<i class="fa fa-first-order"></i>',
                //  '</a>',
                // @endcan
                // @can('answeradd-representative-orders')
                // '<a class="answer" href="javascript:void(0) ' + row.id + '" title="الرد" style="margin-left: 4px;">',
                // '<i class="fa fa-commenting"></i>',
                // '</a>',
                // @endcan
                // '<a class="edit1" href="javascript:void(0)" title="edit1">',
                // '<i class="fa fa-circle-thin font-small-1 fa fa-ban"></i>',
                // '</a>',

                @can('editorders-representative-orders')
                '<a class="edit" href="javascript:void(0)" id="eidetorder5"  title="تعديل" style="margin-left: 4px;">',
                '<i class="fa fa-pencil"></i>',
                '</a>',
                @endcan
                @can('order_value-representative-orders')
                '<a class="order_value" javascript:void(0)" title="قيمة الطلب"  style="margin-left: 4px;">',
                '<i class="fa fa-bar-chart"></i>',
                '</a>',
                @endcan
                @can('whatsapp-orders')
                '<a class="whatsapp" href="https://api.whatsapp.com/send?phone=' + row.phone + '" title="لتواصل عبر الوتساب " target="_blank" style="margin-left: 4px;">',
                '<i class="fa fa-whatsapp"></i>',
                '</a>',
                @endcan
            //     @can('neo_leap-representative-orders')
            // //   '<a class="new_lab_open" href="javascript:void(0) ' + row.id + '" title="الجهاز" style="margin-left: 4px;">',
            // //   '<i class="	fa fa-desktop"></i>',
            // //   '</a>',
            //   @endcan
                // @can('importance_open-representative-orders')
                // '<a class="importance_open" href="javascript:void(0)" title="الاهمية"  style="margin-left: 4px;">',
                // '<i class="fa fa-exclamation-triangle"></i>',
                // '</a>',
                // @endcan
                // console.log(row.id);

                // @can('editorders-representative-orders')

                // '<a class="show" href="javascript:void(0)" title="show">',
                // '<i class="fa fa-eye"></i>',
                // '</a>',
                // @endcan

            ].join('')
            }
        }
        else
        {

        }
    }
        function selaryFormatter(value, row, index, field) {

        row.selary =  (row.rate) / ((row.order_value));

            }

        function queryParams(params) {
            if ($('.date_from').val() && $('.date_to').val()) {
                params.date_from = $('.date_from').val();
                params.date_to = $('.date_to').val();
            }
            $('.importance_search').select2({

maximumSelectionLength: 5,

});
            $('.users_uid').select2({

maximumSelectionLength: 5,

});
if ($('.importance_search').val()) {
      params.importance_search = $('.importance_search').val();
  }
if ($('.users_uid').val()) {
      params.link = $('.users_uid').val();
  }
            params.neo_leap_search = $('.neo_leap_search').find('option:selected').attr('value');
            // params.link = $('.users_uid').find('option:selected').attr('value');
            params.order_cases_search = $('.order_cases_search').find('option:selected').attr('value');
            params.order_rate_search = $('.order_rate_search').find('option:selected').attr('value');
            // params.importance_search = $('.importance_search').find('option:selected').attr('value');
            // params.id_sersh = $('.id_sersh').val();

            // if ($('.order_cases_search').val()) {
            //     params.order_cases_search = $('.order_cases_search').val();
            // }
            return params
        }
        $('.datt').click(function() {
            $table.bootstrapTable('refresh');
        });

        window.operateEvents = {
// الارد على الطلب
        //     'click .answer': function(e, value, row, index) {
        //         $.ajax({
        //             type: 'get',
        //             dataType: 'json',
        //             url: '/get-Order_status/' + row.id,

        //             success: function(row2) {
        //                 $('#capitalizationModal2 #answer_caler').val('');
        //                 $order_id.bootstrapTable('refreshOptions', {
        //                     data: row2
        //                 })
        //                 // console.log(row2)


        //          }
        //         });

        //         $('.orderModalTitle').children('b').text(' - ' + row.id);
        //         $('.myFunction').click(function (e) {
        //     e.preventDefault();
        //     window.location.href='reciept/'+ row.id;
        // });
        //         $('#capitalizationModal2 .order_status_id').val(row.id);
        //         $("#capitalizationModal2").appendTo('body').modal({"backdrop": "static"});

        //     },
            // حالة الطلب
            'click .value_order': function(e, value, row, index) {
                        // $('input').html('');


                $.ajax({
                    type: 'get',
                    dataType: 'json',
                    url: '/get-Order_status2/' + row.id,

                    // data: JSON.stringify({ 'selectedTags':orderData }),
                    success: function(row2) {
                        //   row2.orderData = [];
                        // row2.cases = [];
                        // console.log(orderData);

                        // console.log(row2.orderData);
                        // console.log(row2.statusData);
                        $status_table.bootstrapTable('refreshOptions', {

                            data: row2.orderData
                        })
                        var data_item  = '';
                        // row2.orderData.forEach((item2, index)=>{
                        //     console.log(row2);

                        // if (item2.status_sales_id == "3") {
                        //     // console.log("ddddddddddddddddd");
                        // $("#eidetorder").hide();
                        //  } else {
                        //   $("#eidetorder").show();

                        //  }
                        // });

                    //     if (item.name == "تم اكمال الطلب") {
                    //         console.log("ddddddddddddddddd");

                    // // $("#capitalizationModal8 #eidetorder").hide();
                    //  } else {
                    //   $("#capitalizationModal8 #eidetorder").show();

                    //  }
                        row2.cases.forEach((item, index)=>{
                        //     data_item += '
                        //     <option> ' + item.name +'</option>

                        //    ',
                    //    return [
                        data_item +=

                            // '<option>' + item.name + '</option>';

                            '<option value="' + item.id + '" >' + item.name + '</option>';


                    //    ];
                        // row2.forEach((item, index)=>{

                            // console.log(item);
                            // $('#capitalizationModal8 .status').val(item.name);

                            // if (row2.orderData.status_sales_id == "1") {
                            //     $('#capitalizationModal8 .updated_at1').val(item.updated_at).val(moment().format('YYYY-MM-DDTHH:mm'));
                            //     $('#capitalizationModal8 .user_name3').val(item.user_name);
                            //     $('#capitalizationModal8 #order_cases3').trigger('click');
                            // } else {
                            //         $('#capitalizationModal8 #notactive').trigger('click');
                            //     }
                            // if (item.status_sales_id == "تم استلام الطلب") {
                            //     $('#capitalizationModal8 .updated_at2').val(item.updated_at).val(moment().format('YYYY-MM-DDTHH:mm'));
                            //     $('#capitalizationModal8 .user_name1').val(item.user_name);
                            //     $('#capitalizationModal8 #order_cases4').trigger('click');
                            // }
                            //  else
                            //     {
                            //     $('#capitalizationModal8 #notactive').trigger('click');
                            //     }
                            // if (item.status_sales_id == "تم اكمال الطلب") {
                            //     $("#capitalizationModal8 #other").hide();
                            //     $('#capitalizationModal8 .updated_at3').val(item.updated_at).val(moment().format('YYYY-MM-DDTHH:mm'));
                            //     $('#capitalizationModal8 .user_name4').val(item.user_name);
                            //     $('#capitalizationModal8 #order_cases2').trigger('click');

                            //     } else {
                            //      $("#capitalizationModal8  #other").show();
                            //      $('#capitalizationModal8 #notactive').trigger('click');
                            //         }

                                });
                                $('#capitalizationModal8 .capitaliza').html('');
                                $('.capitaliza').append(data_item);

                                $('#capitalizationModal8').on('hidden.bs.modal', function (e) {
                            $(this)
                                .find("input,textarea,select")
                                .val('')
                                .end()
                                .find(" input[type=text], input[type=text]")
                                .prop("", "")
                                .end();
                            })
                 }

                });

                clear_inputs('#capitalizationModal8');
                $('#capitalizationModal8').children('b').text(' - ');
                $('#capitalizationModal8 input[name="order_id"]').val(row.id);
                $('.editModalTitle2').children('b').text(' - ' + row.id);
                $('#capitalizationModal8 .orderModalTitle2').val(row.id);
                $('#capitalizationModal8').appendTo('body').modal('show');

            },
            'click .edit': function(e, value, row, index) {
                $('.editModalTitle').children('b').text(' - ' + row.id);
                $('#capitalizationModaledit input[name="id"]').val(row.id);
                $('#capitalizationModaledit .not').val(row.not);
                $('#capitalizationModaledit input[name="user_link"]').val(row.user_link);
                $('#capitalizationModaledit input[name="work_active1"]').val(row.work_active);
                $('#capitalizationModaledit .work_active').val(row.work_active);
                $('#capitalizationModaledit .contact_id').val(row.contact_id);
                $('#capitalizationModaledit .user_link').val(row.user_link);
                $('#capitalizationModaledit input[name="phone"]').val(row.phone.substr(3));
                $('#capitalizationModaledit input[name="name"]').val(row.name);
                // if (('#capitalizationModaledit input[name="work_active1"]') == null) {

                //     $(".otheredit").hide();
                // } else {
                //     $(".otheredit").show();
                // }
                if (row.active == 1) {
                    $('#capitalizationModaledit #active1').trigger('click');
                } else {
                    $('#capitalizationModaledit #notactive').trigger('click');
                }
                    if (row.requir.includes ("مخازن")) {
                    $('#capitalizationModaledit #active1').trigger('click');
                } else {
                    $('#capitalizationModaledit #notactive').trigger('click');
                }
                    if (row.requir.includes ("مبيعات و مشتريات")  ) {
                    $('#capitalizationModaledit #active2').trigger('click');
                } else {
                    $('#capitalizationModaledit #notactive').trigger('click');
                }
                    if (row.requir.includes   ("نقاط بيع(فاتور الاكترونية)") ) {
                    $('#capitalizationModaledit #active3').trigger('click');
                } else {
                    $('#capitalizationModaledit #notactive').trigger('click');
                }
                     if (row.requir.includes ("شحن ونقل وسيط")  ) {
                    $('#capitalizationModaledit #active4').trigger('click');
                } else {
                    $('#capitalizationModaledit #notactive').trigger('click');
                }
                    if (row.requir.includes ("حسابات")) {
                    $('#capitalizationModaledit #active5').trigger('click');
                } else {
                    $('#capitalizationModaledit #notactive').trigger('click');
                }
                    if (row.requir.includes ("شحن ونقل") ) {
                    $('#capitalizationModaledit #active6').trigger('click');
                } else {
                    $('#capitalizationModaledit #notactive').trigger('click');
                }

                $('#capitalizationModaledit').on('hidden.bs.modal', function (e) {
                            $(this)
                                .find("input,textarea,select")
                                .val('')
                                .end()
                                .find("input[type=text],input[type=checkbox], input[type=text]")
                                .prop("", "")
                                .end();
                            })
                $('#capitalizationModaledit').appendTo('body').modal('show');
                },
                // عرض الطلب
        //     'click .show': function(e, value, row, index) {
        //         $('.editModalTitle').children('b').text(' - ' + row.name);

        //         // $('#capitalizationModaledit input[name="work_active"]').val(row.work_active);
        //         $('#capitalizationModal55 input[name="id"]').val(row.id);
        //         $('#capitalizationModal55 .not').val(row.not);
        //         $('#capitalizationModal55 input[name="uid"]').val(row.uid);
        //         $('#capitalizationModal55 input[name="work_active"]').val(row.work_active);
        //         $('#capitalizationModal55 .work_active').val(row.work_active);
        //         $('#capitalizationModal55 .work_active1').val(row.work_active);
        //         $('#capitalizationModal55 .uid').val(row.uid);
        //         $('#capitalizationModal55 input[name="phone"]').val(row.phone);
        //         $('#capitalizationModal55 .name').val(row.name);
        //         // $('#capitalizationModal55 input[name="requir"]').val(row.requir);
        //         // requir[] arrOfStr = str.split(",");

        //         if (row.requir.includes ("مخازن")) {
        //     $('#capitalizationModal55 #active8').trigger('click');
        // } else {
        //     $('#capitalizationModal55 #notactive').trigger('click');
        // }
        //         if (row.requir.includes ("مبيعات و مشتريات")  ) {
        //     $('#capitalizationModal55 #active9').trigger('click');
        // } else {
        //     $('#capitalizationModal55 #notactive').trigger('click');
        // }
        //         if (row.requir.includes   ("نقاط بيع(فاتور الاكترونية)") ) {
        //     $('#capitalizationModal55 #active10').trigger('click');
        // } else {
        //     $('#capitalizationModal55 #notactive').trigger('click');
        // }
        //         if (row.requir.includes ("شحن ونقل وسيط")  ) {
        //     $('#capitalizationModal55 #active11').trigger('click');
        // } else {
        //     $('#capitalizationModal55 #notactive').trigger('click');
        // }
        //         if (row.requir.includes ("حسابات")) {
        //     $('#capitalizationModal55 #active12').trigger('click');
        // } else {
        //     $('#capitalizationModal55 #notactive').trigger('click');
        // }
        //         if (row.requir.includes ("شحن ونقل") ) {
        //     $('#capitalizationModal55 #active13').trigger('click');
        // } else {
        //     $('#capitalizationModal55 #notactive').trigger('click');
        // }
        //         $('#capitalizationModal55').appendTo('body').modal('show');

        //         },
                // if (e.target.value === "Update") {
                //     $('.id').val(row.id);
                //     $('.work_active').val(row.work_active);
                //     $('.not').val(row.not);
                //     $('.uid').val(row.uid);
                //     $('.phone').val(row.phone);
                //     $('.name').val(row.name);
                //     $('.requir').val(row.requir);
                //     $('#capitalizationModaledit').appendTo('body').modal('show');

                // };
// قيمة الطلب
            'click .order_value': function(e, value, row, index) {
                $('.NameToDelete').children('b').text(' - ' + row.id);
                $('.deleteModal').val(row.id);
                $('#deleteModal input[name="id"]').val(row.id);
                $('#deleteModal input[name="order_value"]').val(row.order_value);

                $('#deleteModal').appendTo('body').modal('show');
                // $table.bootstrapTable('order_value', {
                //     field: 'id',
                //     values: [row.id]
                // })
            },
            'click .whatsapp': function(e, value, row, index) {
                $('#deleteModal input[name="phone"]').val(row.phone);


            },
            // 'click .whatsapp': function(e, value, row, index) {

            //     '<a class="new_lab_open" href="javascript:void(0) ' + row.id + '" title="الجهاز" style="margin-left: 4px;">',

            //     $('#deleteModal').appendTo('body').modal('show');
            //     // $table.bootstrapTable('order_value', {
            //     //     field: 'id',
            //     //     values: [row.id]
            //     // })
            // },
            'click .importance_open': function(e, value, row, index) {
                $('.NameToDelete').children('b').text(' - ' + row.id);
                $('.importanceModal').val(row.id);
                $('#importanceModal input[name="id"]').val(row.id);
                $('#importanceModal .import_id').val(row.import_id);
                $('#importanceModal').appendTo('body').modal('show');
            },
            'click .new_lab_open': function(e, value, row, index) {
                $('.NameToDelete').children('b').text(' - ' + row.id);
                $('.new_labModal').val(row.id);
                $('#new_labModal input[name="id"]').val(row.id);
                $('#new_labModal input[name="neo_leap"]').val(row.neo_leap);

                $('#new_labModal').appendTo('body').modal('show');
                // $table.bootstrapTable('order_value', {
                //     field: 'id',
                //     values: [row.id]
                // })
            },
            // اضافة نسبة للطلب
            'click .rate': function(e, value, row, index) {
                $('.NameTorate').children('b').text(' - ' + row.id);
                $('.deleterate').val(row.id);
                $('#deleterate input[name="id"]').val(row.id);
                $('#deleterate input[name="pay"]').val(row.pay);

                $('#deleterate').appendTo('body').modal('show');
                // $table.bootstrapTable('order_value', {
                //     field: 'id',
                //     values: [row.id]
                // })
            }
        }
        $('.driverSelect').on('change', function() {
             var option = $('option:selected', this).attr('status');
                //  console.log(option);
              $('.status_id').val(option).trigger('change');
                      });
        $('.driverSelect').trigger('change');

        function Rate_sumFormatter(value, row, index) {
        //    console.log(row);
        // if(row.hasOwnProperty('usersclakshin')){
        // if(row.usersclakshin.hasOwnProperty('rate')){
            // console.log(row.rate);
            // return row.rate;
            if(row.usersclakshin){
            row.suits2  =  parseFloat(row.usersclakshin.rate)  / (parseFloat('100') );
            row.Rate_sum  =  parseFloat(row.suits2)  *   parseFloat(row.order_value );
            if($.isNumeric(row.Rate_sum)){
                                    return row.Rate_sum.toFixed(2);
                                }else{
                                    return 0;
                                }

                            }
                            // row.Rate_sum  =  parseFloat(row.suits2) * parseFloat('100');
                            //  if($.isNumeric(row.Rate_sum)){
                            //         return row.Rate_sum;
                            //     }else{
                            //         return 0;
                            //     }
                        }

        // }
        // return row.rate;
    // }else{
    //     return 0;
    // }
    // console.log(row.usersclakshin.rate);
        // console.log(row.hasOwnProperty('usersclakshin'));


        function activeFormatter(value, row, index) {
            // console.log(value);
            // if (value == "تم اكمال الطلب") {
            //             $("#eidetorder").hide();

            // }
            // else
            // {
            //     $("#eidetorder").show();

            // }
        }

        // function demandcasesFormatter(value, row, index) {

        //     return [
        //         ` <div class="gbut">
        //                                 <button id="receivedstatus" type="button" class="btn btn-${(row.status_sales_id == 1)?"success":"danger"} minim" title=" تم العمل "></button>
        //                                 <button id="communicationstatus" type="button" class="btn btn-${(row.status_sales_id == 1)?"success":"danger"} minim" title="تم التواصل معى العميل"></button>
        //                                 <button id="Request_Acceptstatus" type="button" class="btn btn-${(row.status_sales_id == 1)?"success":"danger"} minim" title="لايوجد استجابة "></button>
        //                                 <button id="request_yesstatus" type="button" class="btn btn-${(row.request_yes == 1)?"success":"danger"} minim" title="تم القبول"></button>
        //                                 <button id="Request_notstatus" type="button" class="btn btn-${(row.Request_not == 1)?"success":"danger"} minim" title="تحت المعالجة"></button>
        //             </div>`
        //     ].join('')
        // }

        function order_rateFormatter(value, row, index) {
            if (value == 1) {

                return [
                    '<a class="" href="javascript:void(0)" style="color:green;" title="تم الدفع">',
                    '<i class="fa fa-usd fa-2x truckIsActive truck-active-' + row.id + '"></i>',
                    '<i class="checkbox-inline spinner-border spinner-border-sm truck-active-overlay-' + row.id +
                    '" role="status" aria-hidden="true" style="display:none;"></i>',
                    '</a>'
                ].join('')
            } else if (value == 0) {
                if(row.ordercases  || row.ordercases22){
                if (row.ordercases22.ordercases.id == "3") {

                return [
                    '<a class="rate" href="javascript:void(0)" style="color:red;" title="لم يتم الدفع">',
                    '<i class="fa fa-ban truckIsActive truck-active-' + row.id + '"></i>',
                    '<i class="spinner-border spinner-border-sm truck-active-overlay-' + row.id +
                    '" role="status" aria-hidden="true" style="display:none;"></i>',
                    '</a>'
                ].join('')
                    }else
                    {
                return [
                    '<a class="" href="javascript:void(0)" style="color:red;" title="يجب اكمال الطلب ">',
                    '<i class="fa fa-ban truckIsActive truck-active-' + row.id + '"></i>',
                    '<i class="spinner-border spinner-border-sm truck-active-overlay-' + row.id +
                    '" role="status" aria-hidden="true" style="display:none;"></i>',
                    '</a>'
                ].join('')
            }
        }
        else
        {

            return [
                    '<a class="rate" href="javascript:void(0)" style="color:red;" title="لم يتم الدفع">',
                    '<i class="fa fa-ban truckIsActive truck-active-' + row.id + '"></i>',
                    '<i class="spinner-border spinner-border-sm truck-active-overlay-' + row.id +
                    '" role="status" aria-hidden="true" style="display:none;"></i>',
                    '</a>'
                ].join('')

                return [
                    '<a class="" href="javascript:void(0)" style="color:red;" title="يجب اكمال الطلب ">',
                    '<i class="fa fa-ban truckIsActive truck-active-' + row.id + '"></i>',
                    '<i class="spinner-border spinner-border-sm truck-active-overlay-' + row.id +
                    '" role="status" aria-hidden="true" style="display:none;"></i>',
                    '</a>'
                ].join('')
        }
        }
    }

        function demandcasesFormatter(value, row, index) {
            if (value == 1) {
                return [
                    '<a class="" href="javascript:void(0)" title="مفعل">',
                    '<i class="fa fa-check-circle truckIsActive truck-active-' + row.id + '"></i>',
                    '<i class="spinner-border spinner-border-sm truck-active-overlay-' + row.id +
                    '" role="status" aria-hidden="true" style="display:none;"></i>',
                    '</a>'
                ].join('')
            } else if (value == 0) {
                return [
                    '<a class="" href="javascript:void(0)"  title="غير مفعل">',-
                    '<i class="fa fa-times-circle truckIsActive truck-active-' + row.id + '"></i>',
                    '<i class="spinner-border spinner-border-sm truck-active-overlay-' + row.id +
                    '" role="status" aria-hidden="true" style="display:none;"></i>',
                    '</a>'
                ].join('')
            }
        }
        // $('.truckDeleteForm').submit(function(e) {
        //     e.preventDefault();
        //     $.ajax({
        //         method: 'post',
        //         url: $(this).attr('action'),
        //         cache: false,
        //         data: $(this).serialize(),
        //         error: function(xhr, status, error) {
        //             var err = eval("(" + xhr.responseText + ")");
        //             console.log(err.message);
        //             alert(err.message);
        //         },
        //         success: function(response) {
        //             if (response == 1) {
        //                 $('.truckCancelDelete').trigger('click');
        //                 $table.bootstrapTable('refresh');
        //                 $('.truckConfirmDelete').removeAttr('disabled');
        //             }
        //         }
        //     })
        // });

        // $('#capitalizationModal2').submit(function(e) {
        //     e.preventDefault();
        //     $.ajax({
        //         method: 'post',
        //         url: $(this).attr('action'),
        //         cache: false,
        //         data: $(this).serialize(),
        //         error: function(xhr, status, error) {
        //             var err = eval("(" + xhr.responseText + ")");
        //             console.log(err.message);
        //             alert(err.message);
        //         },
        //         success: function(response) {
        //             if (response) {
        //                 $('.cancelEditTruckBtn').trigger('click');
        //                 $table.bootstrapTable('refresh');
        //                 $order_id.bootstrapTable('refresh');
        //                 $('.ConfirmEditTruckBtn').removeAttr('disabled');
        //             }
        //         }
        //     })
        // });
    </script>
    {{-- table Footer formatter --}}
    <script>
        function idFormatter() {
            return 'الإجمالي'
        }

        function nameFormatter(data) {
            return data.length
        }

        function barcodeFormatter(data) {
            var field = this.field
            return '$' + data.map(function(row) {
                return +row[field].substring(1)
            }).reduce(function(sum, i) {
                return sum + i
            }, 0)
        }

        function borrowerFormatter(data) {
            var field = this.field
            return data.map(function(row) {
                return +row[field]
            }).reduce(function(sum, i) {
                return sum + i
            }, 0)
        }

        function depiitorFormatter(data) {
            var field = this.field
            return data.map(function(row) {
                return +row[field]
            }).reduce(function(sum, i) {
                return sum + i
            }, 0)
        }
        // function footerStyle(row) {
        //     return {
        //         id: {
        //             classes: 'tfoot-mod'
        //         },
        //         name: {
        //             css: {
        //                 'font-weight': 'normal'
        //             }
        //         },
        //         barcode: {
        //             css: {
        //                 color: 'red'
        //             }
        //         }
        //     } [column.field]
        // }



        function balanceFormatter(data) {
                    var field = this.field
                        var res = 0;
                        data.forEach(element => {
                        res += parseFloat(element.order_status);
                        });
                    // console.log("fffffffffffffff")

                        // $totalView.val(res);
                        if ($.isNumeric(res)) {
                            res = parseFloat(res).toFixed(2);
                        }
                        return res;
                        }
    </script>
    {{-- table extra buttons Generator --}}
    <script>
        var $table = $('#table')
        var $order_id = $('#order_id')
        var $status_table = $('#status_table')
        var selections = []
        $table.on('check.bs.table uncheck.bs.table ' +
            'check-all.bs.table uncheck-all.bs.table',
            function() {
                $('#order_value').prop('disabled', !$table.bootstrapTable('getSelections').length)
                $('#value_order').attr('title', removeMsg())
                $('#answer').attr('title', removeMsg())
                $('#edit4').attr('title', removeMsg())
                // save your data, here just save the current page
                selections = getIdSelections()
                // push or splice the selections if you want to save all data selections
            })

        function getIdSelections() {
            return $.map($table.bootstrapTable('getSelections'), function(row) {
                return row.id
            })
        }
        // function getIdSelections() {
        //     return $.map($order_id.bootstrapTable('getSelections'), function(row) {
        //         return row.id
        //     })
        // }

        function removeMsg() {
            if (!$table.bootstrapTable('getSelections').length) {
                return 'selecte a row at least first';
            } else {
                return 'Delete all selected rows';
            }
        }
        // function removeMsg() {
        //     if (!$order_id.bootstrapTable('getSelections').length) {
        //         return 'selecte a row at least first';
        //     } else {
        //         return 'Delete all selected rows';
        //     }
        // }

        function buttons() {
            return {

                btnExportExcel: {
                    text: '',
                    icon: 'fa-file-excel',
                    event: function() {
                        $table.bootstrapTable('exportTable', {
                            type: 'xlsx'
                        });

                    },
                    attributes: {
                        id: 'exportexcel',
                        title: 'export excel file'
                    }
                }

            }
        }

        function buttons1() {
            return {

                btnExportExcelorder_id: {
                    text: '',
                    icon: 'fa-file-excel',
                    event: function() {
                        $order_id.bootstrapTable('exportTable', {
                            type: 'xlsx'
                        });

                    },
                    attributes: {
                        id: 'exportexcelorder_id',
                        title: 'export excel file'
                    }
                }

            }
        }
    </script>
    {{-- Select 2 Settings --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}

    {{-- Date selector stuff --}}
    <script type="text/javascript">
        $(function() {
            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                    'MMMM D, YYYY'));
                $('#accountingYear span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                    'MMMM D, YYYY'));
            }
            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1,
                        'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment()
                        .subtract(1, 'month').endOf('month')
                    ]
                }
            }, cb);
            $('#accountingYear').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1,
                        'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment()
                        .subtract(1, 'month').endOf('month')
                    ]
                }
            }, cb);
            cb(start, end);
        });

        $('.Button').click(function(e) {
            if (Page_IsValid) {
                if (isActionInProgress == 'No') {
                    isActionInProgress = 'Yes';
                } else {
                    e.preventDefault();
                    //alert('STOP');
                }
            }

        });

    </script>
    <script type="text/javascript">
        $(function() {
            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                    'MMMM D, YYYY'));
                $('#accountingYear span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                    'MMMM D, YYYY'));
            }
            // $('#reportrange').daterangepicker({
            //     startDate: start,
            //     endDate: end,
            //     ranges: {
            //         'Today': [moment(), moment()],
            //         'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1,
            //             'days')],
            //         'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            //         'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            //         'This Month': [moment().startOf('month'), moment().endOf('month')],
            //         'Last Month': [moment().subtract(1, 'month').startOf('month'), moment()
            //             .subtract(1, 'month').endOf('month')
            //         ]
            //     }
            // }, cb);
            // $('#accountingYear').daterangepicker({
            //     startDate: start,
            //     endDate: end,
            //     ranges: {
            //         'Today': [moment(), moment()],
            //         'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1,
            //             'days')],
            //         'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            //         'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            //         'This Month': [moment().startOf('month'), moment().endOf('month')],
            //         'Last Month': [moment().subtract(1, 'month').startOf('month'), moment()
            //             .subtract(1, 'month').endOf('month')
            //         ]
            //     }
            // }, cb);
            // cb(start, end);
        });

        $('.requestchecks').click(function() {
            $('.' + $(this).attr('data-timecontainer')).text(moment().format('Y-m-d H-m-s'));
            //2021-10-30T18:20
            $('.' + $(this).attr('data-timecontainer') + 'inp').val(moment().format('YYYY-MM-DDThh:mm')).trigger(
                'change');
            // $('.'+$(this).attr('data-timecontainer')+'inp').val(moment().format('Y-m-dTH:m'));
        });

        $('.Button').click(function(e) {
            if (Page_IsValid) {
                if (isActionInProgress == 'No') {
                    isActionInProgress = 'Yes';
                } else {
                    e.preventDefault();
                    //alert('STOP');
                }
            }

        });
    </script>
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.filterAccountSelect').select2();
            $('.filterAccountingYearSelect').select2();

        });
    </script>
    <script>
        // In your Javascript (external .js resource or <script> tag)
        // $('#capitalizationModal2 .close,.modal-backdrop,.modalclose').click(function(e) {
        //     // alert('lkjhgbv')
        //     // clear_inputs('#capitalizationModal2');
        //     // $('.editModalTitle').children('b').text(' - ');
        //     // $('.close ').html('');

        //     $('#capitalizationModal2 .editTruckId').val('');

        // })
        $('#capitalizationModal8 .close,.modal-backdrop,.modalclose').click(function(e) {
            clear_inputs('#capitalizationModal8');
            $('.editModalTitle').children('b').text(' - ');

            $('#capitalizationModal8 .editTruckId').val('');

        })
        $('#capitalizationModal2 .close,.modal-backdrop,.modalclose').click(function(e) {
            clear_inputs('#capitalizationModal8');
            $('.editModalTitle').children('b').text(' - ');

            $('#capitalizationModal2 .editTruckId').val('');

        })

        // $('#capitalizationModal3 .close,.modal-backdrop,.modalclose').click(function(e) {
        //     // alert('lkjhgbv')
        //     // clear_inputs('#capitalizationModal3');
        //     // $('.editModalTitle').children('b').text(' - ');
        //     // $('.close ').html('');

        //     $('#capitalizationModal3 .editTruckId').val('');

        // })
        // $('#capitalizationModal55 .close,.modal-backdrop,.modalclose').click(function(e) {
        //     // alert('lkjhgbv')
        //     // clear_inputs('#capitalizationModal55');
        //     // $('.editModalTitle').children('b').text(' - ');
        //     // $('.close ').html('');

        //     $('#capitalizationModal55 .editTruckId').val('');

        // })
        // $('#capitalizationModaledit .close,.modal-backdrop,.modalclose').click(function(e) {
        //     // alert('lkjhgbv')
        //     // clear_inputs('#capitalizationModal3');
        //     // $('.editModalTitle').children('b').text(' - ');
        //     // $('.close ').html('');

        //     $('#capitalizationModaledit .editTruckId').val('');

        // })
//         $(document).ready(function(){
// $("#phone").blur( function (e) {
//   var x = e.target.value.replace(/\D/g, '').match(/(\d{3})(\d{3})(\d{4})/);
//   e.target.value = x[1] + ' ' + x[2] + '-' + x[3];
// });
// });
//         document.getElementById('phone').addEventListener('input', function (e) {
//    e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
// //   e.target.value =  !x[2] ? x[1] :'(' x[3] ? '-' + x[3] : '' ') ' + x[2] + (x[3] ? '-' + x[3] : '') ;
// });
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> --}}

    <script>
        $('#biof-loading').hide();
    </script>
    <script>
        var $table = $('#table')
        var $order_id = $('#order_id')
        var $status_table = $('#status_table')
        var selections = []
        $table.on('check.bs.table uncheck.bs.table ' +
            'check-all.bs.table uncheck-all.bs.table',
            function() {
                $('#order_value').prop('disabled', !$table.bootstrapTable('getSelections').length)
                $('#order_value').attr('title', removeMsg())
                $('#edit').prop('disabled', !$table.bootstrapTable('getSelections').length)
                $('#edit').attr('title', removeMsg())
                $('#rate').prop('disabled', !$table.bootstrapTable('getSelections').length)
                $('#rate').attr('title', removeMsg())
                $('#value_order').prop('disabled', !$table.bootstrapTable('getSelections').length)
                $('#value_order').attr('title', removeMsg())
                $('#answer').prop('disabled', !$table.bootstrapTable('getSelections').length)
                $('#answer').attr('title', removeMsg())
                $('#show').prop('disabled', !$table.bootstrapTable('getSelections').length)
                $('#show').attr('title', removeMsg())
                // save your data, here just save the current page
                selections = getIdSelections()
                // push or splice the selections if you want to save all data selections
            })
        $order_id.on('check.bs.order_id uncheck.bs.order_id ' +
            'check-all.bs.order_id uncheck-all.bs.order_id',
            function() {

                // save your data, here just save the current page
                selections = getIdSelections()
                // push or splice the selections if you want to save all data selections
            })
        $status_table.on('check.bs.status_table uncheck.bs.status_table ' +
            'check-all.bs.status_table uncheck-all.bs.status_table',
            function() {

                // save your data, here just save the current page
                selections = getIdSelections()
                // push or splice the selections if you want to save all data selections
            })

        function getIdSelections() {
            return $.map($table.bootstrapTable('getSelections'), function(row) {
                return row.id
            })
        }
        function getIdSelections() {
            return $.map($order_id.bootstrapTable('getSelections'), function(row) {
                return row.id
            })
        }
        function getIdSelections() {
            return $.map($status_table.bootstrapTable('getSelections'), function(row) {
                return row.id
            })
        }

        function removeMsg() {
            if (!$table.bootstrapTable('getSelections').length) {
                return 'selecte a row at least first';
            } else {
                return 'Delete all selected rows';
            }
            if (!$order_id.bootstrapTable('getSelections').length) {
                return 'selecte a row at least first';
            } else {
                return 'Delete all selected rows';
            }
            if (!$status_table.bootstrapTable('getSelections').length) {
                return 'selecte a row at least first';
            } else {
                return 'Delete all selected rows';
            }
        }
        $('.formOrderChargerFilter').submit(function(e) {
        e.preventDefault();
        $table.bootstrapTable('refresh');
        });
        $('.formOrderChargerorder_id').submit(function(e) {
        e.preventDefault();
        $order_id.bootstrapTable('refresh');
        });
        $('.formOrderChargerstatus_table').submit(function(e) {
        e.preventDefault();
        $table.bootstrapTable('refresh');
        });
        // $('.formOrderChargerstatus_table').submit(function(e) {
        // e.preventDefault();
        // $status_table.bootstrapTable('refresh');
        // });
        function buttons() {
            return {

                btnExportExcel: {
                    text: '',
                    icon: 'fa-file-excel',
                    event: function() {
                        $table.bootstrapTable('exportTable', {
                            type: 'xlsx'
                        });
                    },

                    attributes: {
                        id: 'exportexcel',
                        title: 'export excel file'
                    }
                }

            }
        }


    </script>
{{-- <script src="extensions/cookie/bootstrap-table-cookie.js"></script> --}}

@endsection

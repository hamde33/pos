
@extends('layout.posapp', ['path' => ['اضافة مستخدم ']])

@section('additionalStyle')

    <link href="https://unpkg.com/bootstrap-table@1.20.2/dist/bootstrap-table.min.css" rel="stylesheet">
@endsection

@section('content')
    @include('layout.loading')
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
        .select2-container--open .select2-dropdown--below {

text-align: right !important;

}

.select2-container--classic.select2-container--focus, .select2-container--default.select2-container--focus {
    text-align: right !important;

}
    </style>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close deleteModalbtn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="deleteModalLabel">حذف المستخدم</h4>
                </div>
                <form action="remov-user" method="POST" enctype="multipart/form-data"
                    class="form DeleteForm delete-form">
                <div class="modal-body" style="text-align: center">
                    <p class="truckNameToDelete">
                        هل تريد حذف المستخدم
                        <b></b>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default mx-1 truckCancelDelete" data-dismiss="modal">لا</button>
                    <span class="pull-right">
                            @csrf
                            <input type="hidden" name="link" class="link" >
                            <input type="hidden" name="id" class="id" >
                            {{-- <input type="hidden" name="id" class="id"> --}}

                            {{-- <input type="hidden" name="id" class="truckSizeIdToDelete" id=""> --}}
                            <button type="submit" class="btn btn-primary deleteModalbtn">نعم</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

{{--
    <div class="modal fade" id="deleteModal1" tabindex="-1" role="dialog" aria-labelledby="deleteModal1Label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="deleteModalLabel"> </h4>
                </div>
                <form method="post" enctype="multipart/form-data" action="eidt-user" autocomplete="off">
                    @csrf
                    <div class="modal-body">


                        <div class="container">

                            <div class="row mb-1">
                                <div class="col-md-3">

                                    <label for="" class="display-inline"> حالة الحساب
                                    </label> <span class="required text-danger">*</span>
                                </div>
                                <div class="col-md-9">
                                    <input class="w-100 form-control active" required name="active" type="number"
                                        value="" id="">
                                    <input type="hidden" name="id" class="deleteModal1" id="">

                                </div>
                            </div>

                        </div>
                    </div>




                    <div class="modal-footer">
                        <button type="button" class="btn btn-default mx-1 modalclose" data-dismiss="modal">الغاء</button>
                        <span class="pull-right">
                            <button type="submit"
                                class="btn btn-primary" id="add-capitalization-btn">نعم </button>
                        </span>
                    </div>
                </form>

            </div>
        </div>
    </div> --}}
    <div class="modal fade" id="capitalizationModal3" tabindex="-1" role="dialog"
        aria-labelledby="capitalizationModal3Label" style="top:20%">
        <div class="modal-dialog" role="document">
            <div class="modal-content filter-section-collapse">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title editModalTitle" id="capitalizationModal3Label">
                        اضافة مستخدم <b></b></h4>
                </div>
                <div style="margin: 13px;margin-bottom: 0px;display: none;" role="alert" id="capitalization_added_msg"
                    class="alert alert-success"></div>
                <div style="margin: 13px;margin-bottom: 0px;" class="alert alert-danger hidden capitalization_error">
                    <div class="error-header">
                        <ul id="capitalization_error">
                        </ul>
                    </div>
                </div>
                <form method="POST" enctype="multipart/form-data" autocomplete="off"
                    class="form form-horizontal striped-rows form-bordered dev-form-validate form-add" action="add-create">
                    <div class="modal-body">
                        @csrf

                        <div class="container">
                            <div class=" ">
                                <div class="row mb-1">
                                    <div class="col-md-5 d-flex">
                                        <label for="ArabicName">
                                            الاسم</label>
                                        <span class="required text-danger">*</span>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="w-100 form-control "  placeholder="اسم المستخدم" name="name" type="text" required>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-5">
                                        <label for="to_loc"> رقم الهاتف
                                        </label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="phone" value="" title="يجب ان يكون عدد الارقام 9"  pattern="^\d{9}$"
                                            class="form-control form-control-lg input-lg  @error('phone') is-invalid @enderror"
                                            name="phone" id="" required=""
                                            placeholder="رقم الهاتف" value="{{ old('phone') }}">
                                        <div class="form-control-position">
                                            <i class="ft-user"></i>
                                        </div>
                                        @error('phone')
                                            <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-2">
                                        <select dir="rtl" name="country_code" class="w-100 form-control "
                                            style="font-size: 10px;">
                                            <option data-countryCode="SA" value="966" selected>Saudi
                                                Arabia (السعودية) (+966) &#x200e;</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=" ">
                                <div class="row mb-1">
                                    <div class="col-md-5 d-flex">
                                        <label for="ArabicName">
                                            النسبة</label>
                                        <span class="required text-danger">*</span>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="w-100 form-control "  placeholder="النسبة من مية " name="rate" type="number" required>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-5">
                                        <label for="roles"> الصلاحية
                                        </label>
                                    </div>
                                    <div class="col-md-7">
                                        {!! Form::select('roles[]', \Spatie\Permission\Models\Role::pluck('name', 'name')->all(), old('roles'), [
                                            'class' => 'w-100 form-control',
                                            'id' => 'role',
                                        ]) !!}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="category"> طلبات المستخدمين</label>
                                    </div>
                                    <div class="col-md-7 mb-1">
                                        <select class="w-100 form-control  js-disabled-multi "  placeholder="عرض طلبات المستخدم " style="width: 100% !important; text-align: right;" aria-controls=""
                                            name="access[]"
                                            multiple="multiple" >
                                            @foreach ($user as $users)
                                            <option value="{{ $users->id }}"> {{ $users->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-5 d-flex">
                                        <label for="name">
                                            كلمة السر</label>
                                    </div>
                                    <div class="col-md-7">

                                      <input type="password"
                                class="w-100 form-control password  @error('password') is-invalid @enderror "
                                name="password" id=""  title="يجب ان تتكون كلمة السر من 8 رموز "
                                placeholder="أدخل كلمة المرور" >
                            <div class="form-control-position">
                            </div>

                                                            @error('password')
                                                            <span class="error invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                        {{-- <input class="w-100 form-control "  name="password"
                                            type="password" > --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-5">
                                    <label for="photo"> الوظيفة
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class=" w-100">
                                            <input class=" w-100 form-control"  placeholder="الوظيفة" required type="text" name="job">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="active">الحالة
                                        </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input name="active" type="checkbox">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row mb-1">
                                    <div class="d-flex">
                                        <label for="notactive">
                                        </label>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default mx-1" data-dismiss="modal">الغاء</button>
                        <span class="pull-right">
                            <button type="submit"
                                class="btn btn-primary " id="add-capitalization-btn">أضافة</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="capitalizationModal2" tabindex="-1" role="dialog"
        aria-labelledby="capitalizationModalLabel" style="top:20%">
        <div class="modal-dialog" role="document">
            <div class="modal-content filter-section-collapse">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title editModalTitle" id="capitalizationModalLabel">
                        اسم المستخدم <b></b></h4>
                </div>
                <div style="margin: 13px;margin-bottom: 0px;display: none;" role="alert" id="capitalization_added_msg"
                    class="alert alert-success"></div>
                <div style="margin: 13px;margin-bottom: 0px;" class="alert alert-danger hidden capitalization_error">
                    <div class="error-header">

                        <ul id="capitalization_error">
                        </ul>
                    </div>
                </div>
                <form method="post" enctype="multipart/form-data" autocomplete="off"
                    class="form form-horizontal striped-rows form-bordered dev-form-validate "
                     action="eidt-user">
                    <div class="modal-body">
                        @csrf

                        <div class="container">
                            <div class=" ">
                                <div class="row mb-1">
                                    <div class="col-md-5 d-flex">
                                        <label for="ArabicName">
                                            الاسم</label>
                                        <span class="required text-danger">*</span>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="w-100 form-control " name="name" type="text" required>
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-md-5">
                                        <label for="to_loc"> رقم الهاتف
                                        </label>
                                    </div>
                                    <div class="col-md-5">
                                                <input type="phone" value=""  pattern="^\d{9}$" title="يجب ان يكون عدد الارقام 9"
                                                class="form-control form-control-lg input-lg  @error('phone') is-invalid @enderror"
                                                name="phone" id="" required
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
                            <div class=" ">
                                <div class="row mb-1">
                                    <div class="col-md-5 d-flex">
                                        <label for="ArabicName">
                                            النسبة</label>
                                        <span class="required text-danger">*</span>
                                    </div>
                                    <div class="col-md-7">
                                        <input class="w-100 form-control "  placeholder="النسبة من مية " name="rate" type="number" required>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-5">
                                        <label for="roles"> الصلاحية
                                        </label>
                                    </div>
                                    <div class="col-md-7">
                                        {!! Form::select('roles[]', \Spatie\Permission\Models\Role::pluck('name', 'name')->all(), $rolesUser->rolesD, [
                                            'class' => 'w-100 form-control rolesD',
                                            'id' => 'role',
                                        ]) !!}
                                        </select>

                                    </div>
                                </div>
                                <input type="hidden" name="id" class="capitalizationModal2" id="">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="category"> طلبات المستخدمين</label>
                                    </div>
                                    <div class="col-md-7 mb-1"  >
                                        {{-- <select class="w-100 form-control  access" style="width: 100% !important" aria-controls=""
                                            name="access[]"
                                            multiple="multiple" >
                                            @foreach ($user as $users)
                                            <option value="{{ $users->id }}"> {{ $users->name }}</option>
                                            @endforeach
                                        </select> --}}
                                        {{-- {!! Form::select('access[]', App\Models\Sal_Models\Users_sales::pluck('name', 'name')->all(), $user[0]->name, [
                                            'class' => 'w-100 form-control access',
                                            'access' => 'id',
                                            'multiple',

                                        ]) !!} --}}
                                         {{-- </select> --}}
                                         {{-- {!! Form::select('access[]', App\Models\Sal_Models\Users_sales::pluck('name', 'name')->all(), $user[0]->name, [
                                            'class' => 'w-100 form-control js-disabled-multi',
                                            'id' => 'id',
                                            'style' => 'width: 100% !important',
                                            'multiple',

                                        ]) !!} --}}
                                        {{-- {!! Form::select('access[]', App\Models\Sal_Models\Users_sales::pluck('name', 'id')->all(),["3"], [
                                            'class' => 'w-100 form-control js-disabled-multi',
                                            'id' => 'id',
                                            'style' => 'width: 100% !important',
                                            'multiple',

                                        ]) !!} --}}
                                        <select class="w-100 form-control  js-disabled-multi access" style="width: 100% !important" aria-controls=""
                                        name="access[]"
                                        multiple="multiple" >
                                        @foreach ($user as $users)
                                        <option value="{{ $users->id }}"> {{ $users->name }}</option>
                                        @endforeach
                                    </select>

                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-5 d-flex">
                                        <label for="name">
                                            كلمة السر</label>
                                    </div>
                                    <div class="col-md-7">

                                      <input type="password" value=""

                                class="w-100 form-control  password @error('password') is-invalid @enderror "
                                name="password" id=""  title="يجب ان تتكون كلمة السر من 8 رموز "
                                placeholder="أدخل كلمة المرور" oninvalid=" " >
                            <div class="form-control-position ">

                            </div>
                                @error('password')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                                        {{-- <input class="w-100 form-control "  name="password"
                                            type="password" > --}}
                                    </div>
                                </div>

                            </div>


                            <div class="row mb-1">
                                <div class="col-md-5">
                                    <label for="photo"> الوظيفة
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class=" w-100">
                                            <input class=" w-100 form-control"  placeholder="الوظيفة" required type="text" name="job">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="active">الحالة
                                        </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input name="active" value="1" class="" type="checkbox"
                                            id="active1">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-1">
                                <div class="col-md-5">
                                    <label for="photo"> رابط المستخدم
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class=" w-100">
                                            <a value="" onclick="myFunction()">
                                                <input name="link" readonly class=" w-100 form-control" value=""
                                                    id="myInput">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default mx-1" data-dismiss="modal">الغاء</button>
                        <span class="pull-right">
                            <button type="submit"
                                class="btn btn-primary" id="add-capitalization-btn">تعديل</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            @can('useradd-user')
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


            <div style="background-color: var(--background-color);">
                <div class="bg-primary filter-section col rounded mx-1">

                    <div class="mb-0">
                        <div class="d-flex align-items-center FontAwesome p-1">

                        </div>
                    </div>
                </div>
            </div>

            <div class="collapse filter-section-collapse" id="collapseExample">
                {{-- <form method="GET" action="" accept-charset="UTF-8"
                    class="form form-horizontal striped-rows form-bordered
        dev-form-validate" > --}}

                <div class="card card-body mb-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="category" style="line-height: 2.45;">مرحلة الطلب</label>
                                    </div>
                                    <div class="col-md-8 mb-1">
                                        <select data-placeholder="Add tools"
                                            class="w-100 py-1 form-control completion_status " type="search"
                                            id="" aria-controls="DataTables_Table_0" name="status"
                                            style="border-radius: 15px;">

                                            <option>الكل</option>
                                            <option value="1" option-value="Request_not">تحت المعالجة</option>
                                            <option value="1" option-value="communication">المراحل</option>
                                            <option value="1" option-value="Request_Accept">لايوجد استجابة </option>
                                            <option value="1" option-value="request_yes">تم القبول</option>
                                            <option value="1" option-value="received"> تم العمل </option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="category" style="line-height: 2.45;">التزام </label>
                                    </div>
                                    <div class="col-md-8 mb-1">
                                        <select data-placeholder="Add tools" class="w-100 py-1 form-control active "
                                            type="search" id="" aria-controls="DataTables_Table_0"
                                            name="status" style="border-radius: 15px;">
                                            <option value="" option-value="active">الكل</option>
                                            <option value="1" option-value="active"> مفعل</option>
                                            <option value="0" option-value="active"> غير مفعل </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 hidden-md-down pr-0">
                                        <div class="d-flex">
                                            <label for="category" class="mb-0 line-height-1-45"
                                                style="line-height: 3.45;">االتاريخ</label>
                                            <div class="col d-flex">
                                                <div class="col-md-8 d-flex">
                                                    <label for="from" class="mr-1 line-height-1-45">
                                                    </label>
                                                    <input class="form-control date_from " name="from"
                                                        style="      margin-right: 61%;
                                                        width: 120%;
                                                        border-radius: 15px;"
                                                        type="date" id="from">
                                                </div>
                                                <div class="col-md-8 d-flex">
                                                    <label for="to" class="mr-1 line-height-1-45">
                                                    </label>
                                                    <input class="form-control date_to "
                                                        style="       margin-right: 62%;
                                                        width: 123%;"
                                                        name="to" type="date" id="to">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for="category">القيمة</label>
                                        </div>
                                        <div class="col-md-5">

                                            <input class="form-control " placeholder="من" name="amount_from" type="number">
                                        </div>

                                        <div class="col-md-5">

                                            <input class="form-control " placeholder="إلى" name="amount_to" type="number">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                    </div>
                    {{-- <div class="row">
                            <div class="col-lg-6">
                                <div class="col-md-2 w-100-ipad-portrait pl-0 ml-0">
                                    <label for="cost_center_id" style="font-size: 13px;">مركز التكلفة</label>
                                </div>
                                <div class="col-md-10 w-100-ipad-portrait pl-5 pr-5 mb-1">
                                    <select name="cost_center_id" id="cost_center_id"
                                        class="w-100 py-1 form-control select2-tag" style="width:100%">
                                        <option value="">الكل</option>
                                        <option value="main_center">المركز الرئيسي</option>
                                        <option value="1">01 -
                                            مركز الرئسي</option>
                                        <option value="2">01-01
                                            مركز تكلفة صيدلية</option>
                                    </select>
                                </div>
                            </div>
                        </div> --}}

                    {{-- <div class="row ">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="category">القيمة الغير مستخدمة</label>
                                        </div>
                                        <div class="col-md-4">

                                            <input class="form-control " placeholder="من" name="not_allocated_amount_from"
                                                type="number">
                                        </div>

                                        <div class="col-md-4">

                                            <input class="form-control " placeholder="إلى" name="not_allocated_amount_to"
                                                type="number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    <div class="text-center mt-1">
                        <button class=" btn btn-info btn-min-width mr-1 mb-1 datt">تطبيق</button>
                        <button type="reset" id="reset"
                            class="btn btn-warning btn-min-width mr-1 mb-1">مسح</button>
                    </div>
                </div>

            </div>


            </form>

            <div>
                <section class="mt-1" id="configuration">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="div-collection" class=" content-row menuDisplayed sub-header-descr">


                                        <div class="row">
                                            <div class="col-md-12 table-responsive table-wrapper">
                                                <div id="DataTables_Table_0_wrapper"
                                                    class="dataTables_wrapper form-inline dt-bootstrap4 no-footer">
                                                    <div id="DataTables_Table_0_filter" class="dataTables_filter"
                                                        style=" float: left;">
                                                        <label>ابحث:<input type="search"
                                                                class="form-control input-sm name_sersh"
                                                                placeholder="ابحث بااسم المستخدم"
                                                                aria-controls="DataTables_Table_0" id="customSearchField">
                                                        </label>
                                                    </div>
                                                </div>
                                                <table id="table" data-show-print="true" data-click-to-select="true"
                                                    data-pagination="true" data-side-pagination="server"
                                                    data-show-refresh="true" data-locale="ar-SA"
                                                    data-page-list="[10, 25, 50, 100, 200, All]"
                                                    data-thead-classes="table table thead" data-toggle="table"
                                                    data-height="460" class="table table-hover"
                                                    style="white-space: nowrap"
                                                    data-classes="table table table-column table-striped table-hover"
                                                    data-url="get-get_user" data-cell-style="cellStyle"
                                                    data-buttons-class="outline-primary" data-show-footer="true"
                                                    data-query-params="queryParams" data-buttons="buttons"
                                                    data-search-selector="#customSearchField"
                                                    data-toolbar="#DataTables_Table_0_wrapper" data-search-align="left">
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
        </div>
        </section>
    </div>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script> --}}
    <script>
      $(document).ready(function() {
    //         jQuery.validator.addMethod(function(phone_number, element) {
    // return this.optional(element);});
$(".form-add").validate({
                rules: {

                    password: {
                required: true,
                },


                },
                messages : {
                    password: {

                    required: "   يجب ادخال كلمة السر",

                    },



                    }

                });


      });
        $( document ).ready(function() {
    $('input').attr('autocomplete','off');
});
$(document).ready(function() {
    $('.js-disabled-multi').select2();
});
// $(".js-disabled").select2();
// $(".js-disabled-multi").select2();

// $(".js-programmatic-enable").on("click", function () {
//   $(".js-disabled").prop("disabled", false);
//   $(".js-disabled-multi").prop("disabled", false);
// });

// $(".js-programmatic-disable").on("click", function () {
//   $(".js-disabled").prop("disabled", true);
//   $(".js-disabled-multi").prop("disabled", true);
// });
    //             $(document).ready(function() {
    //         jQuery.validator.addMethod("phoneStartingWith6", function(phone_number, element) {
    // phone_number = phone_number.replace(/\s+/g, "");
    // return this.optional(element);});


//       });



        function myFunction() {
            /* Get the text field */
            var copyText = document.getElementById("myInput");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);

            /* Alert the copied text */
            alert("Copied the text: " + copyText.value);
        }
    </script>

    <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>

    <script>
        $('.DeleteForm').submit(function(e) {
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
                    console.log(response);
                    $('.deleteModalbtn').trigger('click');
                    if (response == 0) {

                        toastr.error('هذا الصف مرتبط ببيانات اخرى!!!', 'تحذير', {
                            timeOut: 10000,
                            closeButton: true,
                            extendedTimeOut: 30000,
                            progressBar: true,
                            positionClass: "toast-top-full-width"
                        });
                    } else {
                        $('.deleteModalbtn').trigger('click');
                        $table.bootstrapTable('refresh');

                    }
                }
            })
        });
        // let origin = location.origin;
        // window.location.getElementById("demo").innerHTML = origin;
        // window.location.origin
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
        $(function() {
            $('.btn-capitalizationModal').click(function() {
                $('#capitalizationModal').appendTo('body').modal('show');
            });
            $('.btn-capitalizationModal2').click(function() {
                $('#capitalizationModal2').appendTo('body').modal('show');
            });
            $('.btn-deleteModal').click(function() {
                $('#deleteModal').appendTo('body').modal('show');
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
        var $table = $('#table')
        $(function() {
            $table.bootstrapTable('destroy').bootstrapTable({
                printPageBuilder: function(table) {
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
                    title: 'id',
                    field: 'id',
                    halign: 'center',
                    align: 'center'
                }, {
                    title: ' الاسم ',
                    field: 'name',
                    halign: 'center',
                    align: 'center',
                }, {
                    title: ' الهاتف',
                    field: 'phone',
                    halign: 'center',
                    align: 'center',
                }, {
                    title: 'النسبة',
                    field: 'rate',
                    halign: 'center',
                    align: 'center',

                }, {
                    title: 'الوظيفة',
                    field: 'job',
                    halign: 'center',
                    align: 'center',

                }, {


                    title: 'الحالة',
                    field: 'active',
                    halign: 'center',
                    align: 'center',
                    formatter: 'activeFormatter'
                }, {

                    title: ' وقت الاضافة ',
                    field: 'updated_at',
                    halign: 'center',
                    align: 'center',
                    formatter: 'created_atFormatter',


                }, {
                    title: 'العمليات',
                    field: 'details',
                    halign: 'center',
                    align: 'center',
                    events: window.operateEvents,
                    formatter: operateFormatter
                }]
            })
            // $('.toolbar input').change(function() {
            //     var classes = $('.toolbar input:checked').next().text()
            //     $table.bootstrapTable('refreshOptions', {
            //         theadClasses: classes
            //     })
            // })
        })

        function operateFormatter(value, row, index) {
            return [
                @can('useredit-user')

                    '<a class="edit" href="javascript:void(0)" title="edit">',
                    '<i class="fa fa-pencil"></i>',
                    '</a>  ',
                @endcan
                @can('userremove-user')


                    '<a class="remove" href="javascript:void(0) ' + row.link + '" title="Remove">',
                        '<i class="fa fa-trash"></i>',
                        '</a>'
                @endcan

            ].join('')
        }

        function queryParams(params) {
            if ($('.date_from').val() && $('.date_to').val()) {
                params.date_from = $('.date_from').val();
                params.date_to = $('.date_to').val();
            }
            params.optionValueName = $('.completion_status').find('option:selected').attr('option-value');
            params.optionValue = $('.completion_status').find('option:selected').attr('value');
            params.name = $('.name').val();
            params.name_sersh = $('.name_sersh').val();

            if ($('.completion_status').val()) {
                params.completion_status = $('.completion_status').val();
            }
            return params
        }
        $('.datt').click(function() {
            $table.bootstrapTable('refresh');
        });
        window.operateEvents = {
            'click .edit': function(e, value, row, index) {
                // clear_inputs('#capitalizationModal2');

                $('.editModalTitle').children('b').text(' - ' + row.name);
                // $('#capitalizationModal2 .editTruckId').val(row.id);
                $('#capitalizationModal2 input[name="id"]').val(row.id);
                $('#capitalizationModal2 input[name="name"]').val(row.name);
                $('#capitalizationModal2 input[name="password"]').val(row.password);
                $('#capitalizationModal2 input[name="job"]').val(row.job);
                // $('#capitalizationModal2 .active').val(row.active);
                $('#capitalizationModal2 .rolesD').val(row.rolesD);
                // $('#capitalizationModal2 .access').val(row.access);
                $('#capitalizationModal2 .access').val(row.access);

                $('#capitalizationModal2 input[name="rate"]').val(row.rate);
                var base_url = window.location.origin;
                $('#capitalizationModal2  input[name="link"]').val(base_url + '/OrderTable?tokn=' + row.link);
                $('#capitalizationModal2 input[name="phone"]').val(row.phone.substr(3));
                if (row.active == 1) {
                    $('#capitalizationModal2 #active1').trigger('click');
                } else {
                    $('#capitalizationModal2 #notactive').trigger('click');
                }
                var log = JSON.parse(row.access);
                $('.js-disabled-multi.access').val(log).trigger('change');
                // row.user.forEach((item, index)=>{
                        //     data_item += '
                        //     <option> ' + item.name +'</option>

                        //    ',
                    //    return [
                        // data_item +=
                            // '<option>' + item.name + '</option>';

                            // '<option value="' + item.id + '" >' + item.name + '</option>';

                        // });



                // if (row.access.includes ("مخازن")) {
                //     $('#capitalizationModal2 #access').trigger('click');
                // } else {
                //     $('#capitalizationModal2 #notactive').trigger('click');
                // }

                // if (row.Request_not == 1) {
                //     $('.checked[name="Request_not"]').prop('checked', true).hide().parent('label').addClass(
                //         'hidden-checked');
                // }
                // if (row.request_yes == 1) {
                //     $('.checked[name="request_yes"]').prop('checked', true).hide().parent('label').addClass(
                //         'hidden-checked');
                // }
                // if (row.received == 1) {
                //     $('.checked[name="received"]').prop('checked', true).hide().parent('label').addClass(
                //         'hidden-checked');
                // }
                // if (row.Request_Accept == 1) {
                //     $('.checked[name="Request_Accept"]').prop('checked', true).hide().parent('label').addClass(
                //         'hidden-checked');
                // }
                // if (row.communication == 1) {
                //     $('.checked[name="communication"]').prop('checked', true).hide().parent('label').addClass(
                //         'hidden-checked');
                // }
                $('.password').attr("autocomplete", "off");
                   setTimeout('$(".password").val("");');
                $('#capitalizationModal2').appendTo('body').modal('show');
            },
            'click .remove': function(e, value, row, index) {
                $('.truckNameToDelete').children('b').text(' - ' + row.name);
                $('#deleteModal').val(row.id);
                $('#deleteModal input[name="link"]').val(row.link);
                $('#deleteModal input[name="id"]').val(row.id);
                $('#deleteModal').appendTo('body').modal('show');
                // $table.bootstrapTable('remove', {
                //     field: 'id',
                //     values: [row.id]
                // })
            }
        }

        function activeFormatter(value, row, index) {
            if (value == 1) {
                return [
                    '<a class="" href="javascript:void(0)" title="مفعل">',
                    '<i class="fa fa-check-circle truckIsActive truck-active-' + row.id + '"></i>',
                    '<i class="checkbox-inline spinner-border spinner-border-sm truck-active-overlay-' + row.id +
                    '" role="status" aria-hidden="true" style="display:none;"></i>',
                    '</a>'
                ].join('')
            } else if (value == 0) {
                return [
                    '<a class="" href="javascript:void(0)" style="color:red;" title="غير مفعل">',
                    '<i class="fa fa-times-circle truckIsActive truck-active-' + row.id + '"></i>',
                    '<i class="spinner-border spinner-border-sm truck-active-overlay-' + row.id +
                    '" role="status" aria-hidden="true" style="display:none;"></i>',
                    '</a>'
                ].join('')
            }
        }

        function created_atFormatter(value, row, index) {
            return row.updated_at.substr(0, 16);

        }

        function demandcasesFormatter(value, row, index) {

            return [
                ` <div class="gbut">
                                        <button id="receivedstatus" type="button" class="btn btn-${(row.received == 1)?"success":"danger"} minim" title=" تم العمل "></button>
                                        <button id="communicationstatus" type="button" class="btn btn-${(row.communication == 1)?"success":"danger"} minim" title="تم التواصل معى العميل"></button>
                                        <button id="Request_Acceptstatus" type="button" class="btn btn-${(row.Request_Accept == 1)?"success":"danger"} minim" title="لايوجد استجابة "></button>
                                        <button id="request_yesstatus" type="button" class="btn btn-${(row.request_yes == 1)?"success":"danger"} minim" title="تم القبول"></button>
                                        <button id="Request_notstatus" type="button" class="btn btn-${(row.Request_not == 1)?"success":"danger"} minim" title="تحت المعالجة"></button>
                    </div>`
            ].join('')
        }
        // function demandcasesFormatter(value, row, index) {
        //     if (value == 1) {
        //         return row.request_yes;
        //         return [
        //             '<a class="" href="javascript:void(0)" title="مفعل">',
        //             '<i class="fa fa-check-circle truckIsActive truck-active-' + row.id + '"></i>',
        //             '<i class="spinner-border spinner-border-sm truck-active-overlay-' + row.id +
        //             '" role="status" aria-hidden="true" style="display:none;"></i>',
        //             '</a>'
        //         ].join('')
        //     } else if (value == 0) {
        //         return [
        //             '<a class="" href="javascript:void(0)"  title="غير مفعل">',-
        //             '<i class="fa fa-times-circle truckIsActive truck-active-' + row.id + '"></i>',
        //             '<i class="spinner-border spinner-border-sm truck-active-overlay-' + row.id +
        //             '" role="status" aria-hidden="true" style="display:none;"></i>',
        //             '</a>'
        //         ].join('')
        //     }
        // }

        $('#capitalizationModal2 #editTruckSizeForm').submit(function(e) {
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
                // success: function(response) {
                //     if (response) {
                //         $('.cancelEditTruckBtn').trigger('click');
                //         $table.bootstrapTable('refresh');
                //         $('.ConfirmEditTruckBtn').removeAttr('disabled');
                //     }
                // }
            })
        });
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
        // $('#capitalizationModal3').submit(function(e) {
        //         e.preventDefault();
        //         $.ajax({
        //             error: function(xhr, status, error) {
        //                 var err = eval("(" + xhr.responseText + ")");
        //                 console.log(err.message);
        //                 alert(err.message);
        //             },

        //         })
        //     });

    </script>
    {{-- table extra buttons Generator --}}
    <script>
        var $table = $('#table')
        var selections = []
        $table.on('check.bs.table uncheck.bs.table ' +
            'check-all.bs.table uncheck-all.bs.table',
            function() {
                $('#remove').prop('disabled', !$table.bootstrapTable('getSelections').length)
                $('#remove').attr('title', removeMsg())
                // save your data, here just save the current page
                selections = getIdSelections()
                // push or splice the selections if you want to save all data selections
            })

        function getIdSelections() {
            return $.map($table.bootstrapTable('getSelections'), function(row) {
                return row.id
            })
        }

        function removeMsg() {
            if (!$table.bootstrapTable('getSelections').length) {
                return 'selecte a row at least first';
            } else {
                return 'Delete all selected rows';
            }
        }

        function buttons() {
            return {
                btnExportPdf: {
                    text: '',
                    icon: 'fa-file-pdf',
                    event: function() {
                        $table.bootstrapTable('exportTable', {
                            type: 'pdf'
                        });
                    },
                    // attributes: {
                    //     id: 'exportpdf',
                    //     title: 'export pdf file'
                    // }
                },
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
    {{-- Select 2 Settings --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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
        $(function() {
            $('.btn-capitalizationModal4').click(function() {
                $('#capitalizationModal4').appendTo('body').modal('show');
            });
            $('.btn-capitalizationModal3').click(function() {
                // $('input[name="password"]').attr('autocomplete','off');
                $('.password').attr("autocomplete", "off");
              setTimeout('$(".password").val("");');
                $('#capitalizationModal3').appendTo('body').modal('show');
            });

        })
        // In your Javascript (external .js resource or <script> tag)
        // $('#capitalizationModal2 .close,.modal-backdrop,.modalclose').click(function(e) {
        // alert('lkjhgbv')
        // clear_inputs('#capitalizationModal2');
        // $('.editModalTitle').children('b').text(' - ');
        // $('.close ').html('');

        //     $('#capitalizationModal2 .editTruckId').val('');

        // })
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
        $('#biof-loading').hide();
    </script>
    <script>
        var $table = $('#table')
        var selections = []
        $table.on('check.bs.table uncheck.bs.table ' +
            'check-all.bs.table uncheck-all.bs.table',
            function() {
                $('#remove').prop('disabled', !$table.bootstrapTable('getSelections').length)
                $('#remove').attr('title', removeMsg())
                // save your data, here just save the current page
                selections = getIdSelections()
                // push or splice the selections if you want to save all data selections
            })

        function getIdSelections() {
            return $.map($table.bootstrapTable('getSelections'), function(row) {
                return row.id
            })
        }

        function removeMsg() {
            if (!$table.bootstrapTable('getSelections').length) {
                return 'selecte a row at least first';
            } else {
                return 'Delete all selected rows';
            }
        }

        function buttons() {
            return {
                // btnExportPdf: {
                //     text: '',
                //     icon: 'fa-file-pdf',
                //     event: function() {
                //         $table.bootstrapTable('exportTable', {
                //             type: 'pdf'
                //         });
                //     },
                //     // attributes: {
                //     //     id: 'exportpdf',
                //     //     title: 'export pdf file'
                //     // }
                // },
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
        // $('#capitalizationModal3 #editTruckSizeForm').submit(function(e) {
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
        //                 $('.ConfirmEditTruckBtn').removeAttr('disabled');
        //             }
        //         }
        //     })
        // });
    </script>
    <!-- http://127.0.0.1:8000/ordercoblet?tokn=10b8b528-d32d-45c9-9411-51c4cc1be960 -->
@endsection

@extends('layout.posapp', ['path' => [ ' صلاحية ']])
@section('additionalStyle')
    <style>
        .justify-content-end {
            justify-content: end !important;
        }

        #capitalizationModal .modal-dialog,
        #capitalizationModal2 .modal-dialog {
            max-width: 75%;
        }

        @media(max-width: 768px) {

            #capitalizationModal .modal-dialog,
            #capitalizationModal2 .modal-dialog {
                max-width: -webkit-fill-available;
            }

            .custom-mobileview .tab-pane.active.show {
                position: fixed;
                top: 18% !important;
                left: 50% !important;
                left: 50%;
                -ms-transform: translateX(-50%) translateY(-50%);
                -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                width: 90%;
                background-color: white !important;
                opacity: 1;
            }

            .mobile-full-width {
                -ms-flex: 0 0 100% !important;
                -webkit-box-flex: 0 !important;
                flex: 0 0 100% !important;
                max-width: 100% !important;
                padding: 0px !important;
            }

            .col-mob-12 {
                -ms-flex: 0 0 33.333333% !important;
                -webkit-box-flex: 0 !important;
                flex: 0 0 33.333333% !important;
                max-width: 33.333333% !important;
            }

            .row>* {
                padding-left: 0px !important;
                padding-right: 0px !important;
            }
        }

        @media(max-width: 444px) {
            .col-mob-12 {
                -ms-flex: 0 0 50% !important;
                -webkit-box-flex: 0 !important;
                flex: 0 0 50% !important;
                max-width: 50% !important;
            }
        }

        @media(max-width: 340px) {
            .col-mob-12 {
                -ms-flex: 0 0 100% !important;
                -webkit-box-flex: 0 !important;
                flex: 0 0 100% !important;
                max-width: 100% !important;
            }
        }
    </style>
@endsection
@section('content')
    {{-- <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css"> --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    {{-- <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script> --}}
    <link rel="stylesheet" href="/assets/css/permissions.css">
    <link rel="stylesheet" href="/assets/css/permissions/permissions.css">
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            @can('add-powers')
            <div class="container-fluid p-0">
                <div class="row d-flex justify-content-end align-items-center">

                    <div class="col-md-12 text-left">
                        <div class="btn-group headBtns">
                            <a class="text-white" target="popup"
                                >
                                <button type="button" class="btn btn-primary btn-min-width btn-capitalizationModal">
                                   اضافة <img alt="add" src="/png/plus.svg">
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endcan


        <div style="background-color: var(--background-color);    margin-left: 16px;
        margin-right: 15px;" >
            <div class="bg-primary filter-section col rounded mx-1">

                <div class="mb-0">
                    <div class="d-flex align-items-center FontAwesome p-1">

                    </div>
                </div>
            </div>
        </div>

            <div>
                <section class="mt-1" id="configuration">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="">
                                        <div id="div-collection" class=" content-row menuDisplayed sub-header-descr">
                                            {{-- <div class="row">
                                                <div class="col-md-12 p-0">
                                                    <div id="DataTables_Table_0_wrapper"
                                                        class="dataTables_wrapper form-inline dt-bootstrap4 no-footer">
                                                        <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                            <label><input type="search" class="form-control input-sm"
                                                                    placeholder="" aria-controls="DataTables_Table_0"
                                                                    id="customSearchField">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <table id="table" data-show-print="true" data-click-to-select="true"
                                                        data-pagination="true" data-page-list="[10, 25, 50, 100, 200, All]"
                                                        data-side-pagination="server" data-mobile-responsive="true"
                                                        data-check-on-init="true" data-locale="ar-SA"
                                                        data-thead-classes="table table thead"
                                                        data-classes="table table table-column table-striped table-hover"
                                                        data-url="get-index" data-query-params="queryParams"
                                                        data-buttons-class="outline-primary"
                                                        data-buttons="buttons" data-search-selector="#customSearchField"
                                                        data-toolbar="#DataTables_Table_0_wrapper" data-search-align="left">
                                                    </table>
                                                </div>
                                            </div> --}}

                                        <div class="row">
                                            <div class="col-md-12 table-responsive"   >
                                                <div id="DataTables_Table_0_wrapper"
                                                    class="dataTables_wrapper form-inline dt-bootstrap4 no-footer">
                                                    <div id="DataTables_Table_0_filter"
                                                        class="dataTables_filter" style=" float: left;">
                                                        <label><input type="search" class="form-control input-sm"
                                                            placeholder="" aria-controls="DataTables_Table_0"
                                                            id="customSearchField">
                                                    </label>
                                                    </div>
                                                </div>
                                                <table id="table" data-show-print="true" data-click-to-select="true"
                                                        data-pagination="true" data-page-list="[10, 25, 50, 100, 200, All]"
                                                        data-side-pagination="server" data-mobile-responsive="true"
                                                        data-check-on-init="true" data-locale="ar-SA"
                                                        data-thead-classes="table table thead"
                                                        data-classes="table table table-column table-striped table-hover"
                                                        data-url="get-index" data-query-params="queryParams"
                                                        data-buttons-class="outline-primary" {{-- data-show-footer="true" --}}
                                                        data-buttons="buttons" data-search-selector="#customSearchField"
                                                        data-toolbar="#DataTables_Table_0_wrapper" data-search-align="left">
                                                    </table>

                                            </div>
                                        </div>
                                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                                aria-labelledby="deleteModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title" id="deleteModalLabel">
                                                                الصلاحية</h4>
                                                        </div>
                                                        <div class="modal-body" style="text-align: center;">
                                                            <p class="truckNameToDelete">
                                                               هل تريد حذف <b></b></p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                class="btn btn-default mx-1 truckCancelDelete"
                                                                data-dismiss="modal">لا</button>
                                                            <span class="pull-right">
                                                                <form action="remov-destroy" method="POST"
                                                                    enctype="multipart/form-data"
                                                                    class="form truckDeleteForm delete-form">
                                                                    @csrf
                                                                    <input type="hidden" name="id"
                                                                        class="truckSizeIdToDelete" id="">
                                                                    <button type="submit"
                                                                        class="btn btn-primary truckConfirmDelete">نعم</button>
                                                                </form>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="modal fade custom-css" id="capitalizationModal" tabindex="-1"
                                                    role="dialog" aria-labelledby="capitalizationModalLabel" style="top:0%"
                                                    data-backdrop="static" data-keyboard="false" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content filter-section-collapse">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span></button>
                                                                <h4 class="modal-title editModalTitle"
                                                                    id="capitalizationModalLabel">
                                                                    اضافة صلاحية <b></b></h4>
                                                            </div>
                                                            <div style="margin: 13px;margin-bottom: 0px;display: none;"
                                                                role="alert" id="capitalization_added_msg"
                                                                class="alert alert-success"></div>
                                                            <div style="margin: 13px;margin-bottom: 0px;"
                                                                class="alert alert-danger hidden capitalization_error">
                                                                <div class="error-header">
                                                                    <ul id="capitalization_error">
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <form method="post" enctype="multipart/form-data"
                                                                action="add-store">
                                                                <div class="modal-body">
                                                                    <div class="card">
                                                                        <br>
                                                                        <div class="card-body">
                                                                            <div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 col-12 ">
                                                                                        <label class="col-md-4 col-12">اسم
                                                                                            الصلاحية <span
                                                                                                class="required text-danger">*</span></label>

                                                                                        <input
                                                                                            class="col-md-12 col-12 form-control"
                                                                                            name="name" type="text"
                                                                                            style="border-color: #9c9c9c;"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="col-sm-12 col-12 ">
                                                                                        <div
                                                                                            class="row justify-content-between">
                                                                                            <label
                                                                                                class="col-md-4 col-12">الاذونات
                                                                                                <span
                                                                                                    class="required text-danger">*</span></label>

                                                                                            {{-- <button type="submit"
                                                                                        style="width: 120px;"
                                                                                        class="btn btn-primary submitBtn">إرسال</button> --}}
                                                                                        </div>
                                                                                        <br />
                                                                                        <div class="row">
                                                                                            <div class="col-12">
                                                                                                <div class="nav flex-row nav-pills"
                                                                                                    id="v-pills-section-tab"
                                                                                                    role="tablist"
                                                                                                    aria-orientation="vertical">
                                                                                                    <a class="nav-link"
                                                                                                        id="v-pills-allSections-tab"
                                                                                                        data-toggle="pill"
                                                                                                        href="#v-pills-allSections"
                                                                                                        role="tab"
                                                                                                        aria-controls="v-pills-allSections"
                                                                                                        aria-selected="false">
                                                                                                        <span>{{ Form::checkbox('', 'allSections', false, [
                                                                                                            'class' => 'name',
                                                                                                            'section-check-all-sections',
                                                                                                            'data-name' => 'allSections',
                                                                                                        ]) }}</span>
                                                                                                        الكل
                                                                                                    </a>
                                                                                                    @foreach ($permission->groupBy('section_ar_name') as $section => $sectionvalue)
                                                                                                        <a class="nav-link"
                                                                                                            id="v-pills-{{ preg_replace('/\s+/', '', $section) }}-tab"
                                                                                                            data-toggle="pill"
                                                                                                            href="#v-pills-section-{{ preg_replace('/\s+/', '', $section) }}"
                                                                                                            role="tab"
                                                                                                            aria-controls="v-pills-section-{{ preg_replace('/\s+/', '', $section) }}"
                                                                                                            aria-selected="false">
                                                                                                            <span>{{ Form::checkbox('', $section, false, [
                                                                                                                'class' => 'name',
                                                                                                                'section-check-all',
                                                                                                                'data-name' => $section,
                                                                                                                'data-section' => 'allSections',
                                                                                                            ]) }}</span>
                                                                                                            {{ $section }}
                                                                                                        </a>
                                                                                                    @endforeach
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <div class="tab-content"
                                                                                                    id="v-pills-section-tabContent">
                                                                                                    <div class="tab-pane fade"
                                                                                                        id="v-pills-allSections"
                                                                                                        role="tabpanel"
                                                                                                        aria-labelledby="v-pills-allSections-tab">
                                                                                                        إختيار جميع الصلاحيات
                                                                                                    </div>
                                                                                                    @foreach ($permission->groupBy('section_ar_name') as $section => $sectionvalue)
                                                                                                        <div class="tab-pane fade"
                                                                                                            id="v-pills-section-{{ preg_replace('/\s+/', '', $section) }}"
                                                                                                            role="tabpanel"
                                                                                                            aria-labelledby="v-pills-{{ preg_replace('/\s+/', '', $section) }}-tab">
                                                                                                            <div
                                                                                                                class="row tables-tabs-row pt-1">
                                                                                                                <div class="col-4 mobile-full-width"
                                                                                                                    style="max-height: 430px;overflow-y:auto;">
                                                                                                                    <div class="nav flex-column nav-pills vertical-nav-pills"
                                                                                                                        id="v-pills-{{ preg_replace('/\s+/', '', $section) }}-tables-tab"
                                                                                                                        role="tablist"
                                                                                                                        aria-orientation="vertical">
                                                                                                                        @foreach ($sectionvalue->groupBy('ar_description') as $table => $tablevalue)
                                                                                                                            <a class="nav-link vertical-pills-tab"
                                                                                                                                id="v-pills-{{ preg_replace('/\s+/', '', $table) }}-tab"
                                                                                                                                data-toggle="pill"
                                                                                                                                href="#v-pills-{{ preg_replace('/\s+/', '', $section . $table) }}"
                                                                                                                                role="tab"
                                                                                                                                aria-controls="v-pills-{{ preg_replace('/\s+/', '', $section . $table) }}"
                                                                                                                                aria-selected="false">
                                                                                                                                <span>{{ Form::checkbox('', $section . $table, false, [
                                                                                                                                    'class' => 'name',
                                                                                                                                    'table-section-check-all',
                                                                                                                                    'data-section' => $section,
                                                                                                                                    'data-name' => $section . $table,
                                                                                                                                ]) }}</span>
                                                                                                                                {{ $table }}
                                                                                                                            </a>
                                                                                                                        @endforeach
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-8 mobile-full-width">
                                                                                                                    <div class="tab-content"
                                                                                                                        id="v-pills-{{ preg_replace('/\s+/', '', $section) }}-tables-tabContent">
                                                                                                                        @foreach ($sectionvalue->groupBy('ar_description') as $table => $tablevalue)
                                                                                                                            <div class="tab-pane fade"
                                                                                                                                id="v-pills-{{ preg_replace('/\s+/', '', $section . $table) }}"
                                                                                                                                role="tabpanel"
                                                                                                                                aria-labelledby="v-pills-{{ preg_replace('/\s+/', '', $table) }}-tab">
                                                                                                                                <div
                                                                                                                                    class="row">
                                                                                                                                    @foreach ($tablevalue as $tablePermissions)
                                                                                                                                        <div
                                                                                                                                            class="col-3 col-mob-12 text-right">
                                                                                                                                            <input
                                                                                                                                                value="{{ $tablePermissions->id }}"
                                                                                                                                                type="checkbox"
                                                                                                                                                data-table-section="{{ $section . $table }}"
                                                                                                                                                class="btn-check name"
                                                                                                                                                name="permission[]"
                                                                                                                                                id="flexSwitchCheck{{ $tablePermissions->id }}"
                                                                                                                                                autocomplete="off">
                                                                                                                                            <label
                                                                                                                                                class="btn btn-outline-{{ $tablePermissions->en_name == 'view' ? 'primary' : ($tablePermissions->en_name == 'update' ? 'warning' : ($tablePermissions->en_name == 'create' ? 'success' : ($tablePermissions->en_name == 'delete' ? 'danger' : 'primary'))) }}"
                                                                                                                                                for="flexSwitchCheck{{ $tablePermissions->id }}">{{ $tablePermissions->ar_name }}</label>
                                                                                                                                        </div>
                                                                                                                                        {{-- <label>{{
                                                                                                                        Form::checkbox('permission[]',
                                                                                                                        $tablePermissions->id,
                                                                                                                        false,
                                                                                                                        array('class'
                                                                                                                        =>
                                                                                                                        'name','data-table-section'=>$table))
                                                                                                                        }}
                                                                                                                        {{
                                                                                                                        $tablePermissions->ar_name
                                                                                                                        }}</label> --}}
                                                                                                                                        <br />
                                                                                                                                    @endforeach
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        @endforeach
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @endforeach
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                    </div>
                                                                </div>
                                                                @csrf
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default mx-1"
                                                                        data-dismiss="modal">الغاء</button>
                                                                    <span class="pull-right">
                                                                        <button type="submit"
                                                                            onclick="createAssetAction(&#39;capitalization&#39;)"
                                                                            class="btn btn-primary"
                                                                            id="add-capitalization-btn">حفظ</button>
                                                                    </span>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade custom-css" id="capitalizationModal2" tabindex="-1"
                                                    role="dialog" aria-labelledby="capitalizationModal2Label" style="top:0%"
                                                    data-backdrop="static" data-keyboard="false" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content filter-section-collapse">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span></button>
                                                                <h4 class="modal-title editModalTitle"
                                                                    id="capitalizationModal2Label">
                                                                    تعديل الصلاحية <b></b></h4>
                                                            </div>
                                                            <div style="margin: 13px;margin-bottom: 0px;display: none;"
                                                                role="alert" id="capitalization_added_msg"
                                                                class="alert alert-success"></div>
                                                            <div style="margin: 13px;margin-bottom: 0px;"
                                                                class="alert alert-danger hidden capitalization_error">
                                                                <div class="error-header">
                                                                    <ul id="capitalization_error">
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <form method="post" enctype="multipart/form-data"
                                                                action="eidt-update">
                                                                <div class="modal-body">
                                                                    <div class="card">
                                                                        <br>
                                                                        <div class="card-body">
                                                                            <div
                                                                                style="border-style: ridge; padding-top: 9px;">
                                                                                <input type="hidden" name="id"
                                                                                    class="id">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 col-12 ">
                                                                                        <label class="col-md-4 col-12">اسم
                                                                                            الصلاحية <span
                                                                                                class="required text-danger">*</span></label>

                                                                                        <input
                                                                                            class="col-md-12 col-12 form-control ruleName"
                                                                                            name="name" type="text"
                                                                                            style="border-color: #9c9c9c;">
                                                                                    </div>
                                                                                    <input style="display:none;"
                                                                                        type="text"
                                                                                        class="form-control ruleId"
                                                                                        name="id">
                                                                                    <div class="col-sm-12 col-12 ">
                                                                                        <div
                                                                                            class="row justify-content-between">
                                                                                            <label
                                                                                                class="col-md-4 col-12">الاذونات<span
                                                                                                    class="required text-danger">*</span></label>

                                                                                            {{-- <button type="submit"
                                                                                        style="width: 120px;"
                                                                                        class="btn btn-primary submitBtn">إرسال</button> --}}
                                                                                        </div>
                                                                                        <br />
                                                                                        <div class="row">
                                                                                            <div class="col-12">
                                                                                                <div class="nav flex-row nav-pills"
                                                                                                    id="v-pills-section-update-tab"
                                                                                                    role="tablist"
                                                                                                    aria-orientation="vertical">
                                                                                                    <a class="nav-link"
                                                                                                        id="v-pills-allSections-update-tab"
                                                                                                        data-toggle="pill"
                                                                                                        href="#v-pills-update-allSections"
                                                                                                        role="tab"
                                                                                                        aria-controls="v-pills-update-allSections"
                                                                                                        aria-selected="false">
                                                                                                        <span>{{ Form::checkbox('', 'allSections', false, [
                                                                                                            'class' => 'name',
                                                                                                            'section-check-all-sections',
                                                                                                            'data-name' => 'allSections',
                                                                                                        ]) }}</span>
                                                                                                        الكل
                                                                                                    </a>
                                                                                                    @foreach ($permission->groupBy('section_ar_name') as $section => $sectionvalue)
                                                                                                        <a class="nav-link"
                                                                                                            id="v-pills-{{ preg_replace('/\s+/', '', $section) }}-update-tab"
                                                                                                            data-toggle="pill"
                                                                                                            href="#v-pills-update-{{ preg_replace('/\s+/', '', $section) }}"
                                                                                                            role="tab"
                                                                                                            aria-controls="v-pills-update-{{ preg_replace('/\s+/', '', $section) }}"
                                                                                                            aria-selected="false">
                                                                                                            <span>{{ Form::checkbox('', $section, false, [
                                                                                                                'class' => 'name',
                                                                                                                'section-check-all',
                                                                                                                'data-name' => $section,
                                                                                                                'data-section' => 'allSections',
                                                                                                            ]) }}</span>
                                                                                                            {{ $section }}
                                                                                                        </a>
                                                                                                    @endforeach
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <div class="tab-content"
                                                                                                    id="v-pills-section-update-tabContent">
                                                                                                    <div class="tab-pane fade"
                                                                                                        id="v-pills-update-allSections"
                                                                                                        role="tabpanel"
                                                                                                        aria-labelledby="v-pills-allSections-update-tab">
                                                                                                        إختيار جميع الصلاحيات
                                                                                                    </div>
                                                                                                    @foreach ($permission->groupBy('section_ar_name') as $section => $sectionvalue)
                                                                                                        <div class="tab-pane fade"
                                                                                                            id="v-pills-update-{{ preg_replace('/\s+/', '', $section) }}"
                                                                                                            role="tabpanel"
                                                                                                            aria-labelledby="v-pills-{{ preg_replace('/\s+/', '', $section) }}-update-tab">
                                                                                                            <div
                                                                                                                class="row tables-tabs-row pt-1">
                                                                                                                <div class="col-4 mobile-full-width"
                                                                                                                    style="max-height: 430px;overflow-y:auto;">
                                                                                                                    <div class="nav flex-column nav-pills vertical-nav-pills"
                                                                                                                        id="v-pills-{{ preg_replace('/\s+/', '', $section) }}-update-tables-tab"
                                                                                                                        role="tablist"
                                                                                                                        aria-orientation="vertical">
                                                                                                                        @foreach ($sectionvalue->groupBy('ar_description') as $table => $tablevalue)
                                                                                                                            <a class="nav-link vertical-pills-tab"
                                                                                                                                id="v-pills-{{ preg_replace('/\s+/', '', $table) }}-update-tab"
                                                                                                                                data-toggle="pill"
                                                                                                                                href="#v-pills-{{ preg_replace('/\s+/', '', $section . $table) }}-update"
                                                                                                                                role="tab"
                                                                                                                                aria-controls="v-pills-{{ preg_replace('/\s+/', '', $section . $table) }}-update"
                                                                                                                                aria-selected="false">
                                                                                                                                <span>{{ Form::checkbox('', $section . $table, false, [
                                                                                                                                    'class' => 'name',
                                                                                                                                    'table-section-check-all',
                                                                                                                                    'data-section' => $section,
                                                                                                                                    'data-name' => $section . $table,
                                                                                                                                ]) }}</span>
                                                                                                                                {{ $table }}
                                                                                                                            </a>
                                                                                                                        @endforeach
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-8 mobile-full-width">
                                                                                                                    <div class="tab-content"
                                                                                                                        id="v-pills-{{ preg_replace('/\s+/', '', $section) }}-update-tables-tabContent">
                                                                                                                        @foreach ($sectionvalue->groupBy('ar_description') as $table => $tablevalue)
                                                                                                                            <div class="tab-pane fade"
                                                                                                                                id="v-pills-{{ preg_replace('/\s+/', '', $section . $table) }}-update"
                                                                                                                                role="tabpanel"
                                                                                                                                aria-labelledby="v-pills-{{ preg_replace('/\s+/', '', $table) }}-update-tab">
                                                                                                                                <div
                                                                                                                                    class="row">
                                                                                                                                    @foreach ($tablevalue as $tablePermissions)
                                                                                                                                        <div
                                                                                                                                            class="col-3 col-mob-12 text-right">
                                                                                                                                            <input
                                                                                                                                                value="{{ $tablePermissions->id }}"
                                                                                                                                                type="checkbox"
                                                                                                                                                data-table-section="{{ $section . $table }}"
                                                                                                                                                class="btn-check name"
                                                                                                                                                name="permission[]"
                                                                                                                                                id="flexSwitchUpdateCheck{{ $tablePermissions->id }}"
                                                                                                                                                autocomplete="off">
                                                                                                                                            <label
                                                                                                                                                class="btn btn-outline-{{ $tablePermissions->en_name == 'view' ? 'primary' : ($tablePermissions->en_name == 'update' ? 'warning' : ($tablePermissions->en_name == 'create' ? 'success' : ($tablePermissions->en_name == 'delete' ? 'danger' : 'primary'))) }}"
                                                                                                                                                for="flexSwitchUpdateCheck{{ $tablePermissions->id }}">{{ $tablePermissions->ar_name }}</label>
                                                                                                                                        </div>
                                                                                                                                        {{-- <label>{{
                                                                                                                        Form::checkbox('permission[]',
                                                                                                                        $tablePermissions->id,
                                                                                                                        false,
                                                                                                                        array('class'
                                                                                                                        =>
                                                                                                                        'name','data-table-section'=>$table))
                                                                                                                        }}
                                                                                                                        {{
                                                                                                                        $tablePermissions->ar_name
                                                                                                                        }}</label> --}}
                                                                                                                                        <br />
                                                                                                                                    @endforeach
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        @endforeach
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @endforeach
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                    </div>
                                                                    @csrf
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default mx-1"
                                                                            data-dismiss="modal">الغاء</button>
                                                                        <span class="pull-right">
                                                                            <button type="submit"
                                                                                onclick="createAssetAction(&#39;capitalization&#39;)"
                                                                                class="btn btn-primary"
                                                                                id="add-capitalization-btn">حفظ</button>
                                                                        </span>
                                                                    </div>
                                                            </form>
                                                        </div>
                                                    </div>
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
    </div>
    </div>
@endsection
@section('additionalScripts')
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script>
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
    </script>
    <script>
        var $table = $('#table')
        $(function() {
            $table.bootstrapTable('destroy').bootstrapTable({
                columns: [{


                        title: 'الرقم',
                        field: 'id',
                        halign: 'center',
                        align: 'center'
                    },

                    {
                        title: 'اسم الصلاحية ',
                        field: 'name',
                        halign: 'center',
                        align: 'center',
                    }, {
                        title: 'تاريخ الاضافة',
                        field: 'created_at',
                        halign: 'center',
                        align: 'center',
                        formatter: 'created_atFormatter',

                        // , formatter: 'activeFormatter'
                    }, {
                        title: 'العمليات',
                        field: 'details',
                        halign: 'center',
                        align: 'center',
                        events: window.operateEvents,
                        formatter: operateFormatter
                    }
                ]
            })
            // $('.toolbar input').change(function() {
            //     var classes = $('.toolbar input:checked').next().text()
            //     $table.bootstrapTable('refreshOptions', {
            //         theadClasses: classes
            //     })
            // })
        })
        function created_atFormatter(value, row, index) {
            return row.created_at.substr(0,16);

        }
        function operateFormatter(value, row, index) {
            return [
                @can('update-powers')

                    '<a class="edit" href="javascript:void(0)" title="edit">',
                    '<i class="fa fa-pencil"></i>',
                    '</a>  '
                @endcan
                @can('delet-powers')

                    , '<a class="remove" href="javascript:void(0)" title="Remove">', '<i class="fa fa-trash"></i>',
                    '</a>'
                @endcan

            ].join('')
        }

        function queryParams(params) {
            if ($('.date_from').val() && $('.date_to').val()) {
                params.date_from = $('.date_from').val();
                params.date_to = $('.date_to').val();
            }
            if ($('.truckStatus').val()) {
                params.truckStatus = $('.truckStatus').val();
            }
            return params
        }
        $('.date_to').change(function() {
            $table.bootstrapTable('refresh');
        });
        window.operateEvents = {
            'click .edit': function(e, value, row, index) {
                $('.ruleId').val(row.id);
                $('.ruleName').val(row.name);
                getUserPermissions(row.name);
                $('#capitalizationModal2').appendTo('body').modal('show');
                // $('.editModalTitle').children('b').text(' - ' + row.name);
                // $('#capitalizationModal2 .roleId').val(row.id);
                // $('#capitalizationModal2 input[name="name"]').val(row.name);
                //       $.ajax({
                //     method: 'get'
                //     , url:'/permission.get/'+row.id
                //     , cache: false

                //     , error: function(xhr, status, error) {
                //         var err = eval("(" + xhr.responseText + ")");
                //         console.log(err.message);
                //         alert(err.message);
                //     }
                //     , success: function(response) {
                //         console.log(response);
                //         $('.permission').empty();
                //          $('.permission').append('  <label for="active">الاذونات </label>  <br/>');
                //          $('.permission').append(response);
                //         // response.forEach(element => {
                //         //     $('.permission').append(`
            //         //     <div class="col-xl-3 col-lg-4 col-sm-6 col-12">\
            //         //    <label><input class="name" name="permission[]" type="checkbox" checked value="${element.id}">\
            //         //     ${element.name}</label>\
            //         //      </div>\
            //         //     `);


                //         // });
                //         $('#capitalizationModal2').appendTo('body').modal('show');
                //     }
                // })

                //     if (row.active == 1) {
                //         $('#capitalizationModal2 #active').trigger('click');
                //     } else {
                //         $('#capitalizationModal2 #notactive').trigger('click');
                //     }

            },
            'click .remove': function(e, value, row, index) {
                $('.truckNameToDelete').children('b').text(' - ' + row.ar_name);
                $('.truckSizeIdToDelete').val(row.id);
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
                    '<i class="spinner-border spinner-border-sm truck-active-overlay-' + row.id +
                    '" role="status" aria-hidden="true" style="display:none;"></i>', '</a>'
                ].join('')
            } else if (value == 0) {
                return [
                    '<a class="" href="javascript:void(0)" style="color:red;" title="غير مفعل">',
                    '<i class="fa fa-times-circle truckIsActive truck-active-' + row.id + '"></i>',
                    '<i class="spinner-border spinner-border-sm truck-active-overlay-' + row.id +
                    '" role="status" aria-hidden="true" style="display:none;"></i>', '</a>'
                ].join('')
            }
        }
        $('.truckDeleteForm').submit(function(e) {
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
                    if (response == 1) {
                        $('.truckCancelDelete').trigger('click');
                        $table.bootstrapTable('refresh');
                        $('.truckConfirmDelete').removeAttr('disabled');
                    }
                }
            })
        });
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
                success: function(response) {
                    if (response) {
                        $('.cancelEditTruckBtn').trigger('click');
                        $table.bootstrapTable('refresh');
                        $('.ConfirmEditTruckBtn').removeAttr('disabled');
                    }
                }
            })
        });
    </script>
    {{-- Table Footer formatter --}}
    <script>
        $('.formFilter').submit(function(e) {
            e.preventDefault();
            $table.bootstrapTable('refresh');
        })

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
    </script>
    {{-- Table extra buttons Generator --}}
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
            return @include('layout.elements.table_buttons');
        }
    </script>
    <script>
        // In your Javascript (external .js resource or <script> tag)
        // $(document).ready(function() {
        //     $('.filterAccountSelect').select2();
        //     $('.filterAccountingYearSelect').select2();
        // });
    </script>

    <script>
        function initiatePermissionsModal(modalId) {
            $('#' + modalId + ' input[section-check-all],#' + modalId + ' input[table-section-check-all],#' + modalId +
                ' input[section-check-all-sections]').mouseover(function() {
                $(this).parents('a.nav-link ').removeAttr('data-toggle')
            }).mouseout(function() {
                $(this).parents('a.nav-link ').attr('data-toggle', 'pill')
            });
            $('#' + modalId + ' input[section-check-all]').change(function(e) {
                $(`#${modalId} input[data-section="${$(this).val()}"]`).prop('checked', $(this).prop('checked'))
                    .trigger('change');
            });
            $('#' + modalId + ' input[section-check-all-sections]').change(function(e) {
                $(`#${modalId} input[data-section="${$(this).val()}"]`).prop('checked', $(this).prop('checked'))
                    .trigger('change');
            });
            $('#' + modalId + ' input[table-section-check-all]').change(function(e) {
                $(`#${modalId} input[data-table-section="${$(this).val()}"]`).prop('checked', $(this).prop(
                    'checked')).trigger('change');
                var uncheckedCounter = 0;
                var checkedCounter = 0;
                $(`#${modalId} input[data-section="${$(this).attr('data-section')}"]`).each(function(index,
                element) {
                    // element == this
                    if ($(element).prop('checked') == false) {
                        uncheckedCounter += 1;
                    } else {
                        checkedCounter += 1;
                    }
                });
                if (uncheckedCounter > 0) {
                    $(`#${modalId} input[data-name="${$(this).attr('data-section')}"]`).prop('checked', false);
                } else {
                    $(`#${modalId} input[data-name="${$(this).attr('data-section')}"]`).prop('checked', true);
                }
            });
            $('#' + modalId + ' input[data-table-section]').change(function(e) {
                var uncheckedCounter = 0;
                var checkedCounter = 0;
                $(`#${modalId} input[data-table-section="${$(this).attr('data-table-section')}"]`).each(function(
                    index, element) {
                    // element == this
                    if ($(element).prop('checked') == false) {
                        uncheckedCounter += 1;
                    } else {
                        checkedCounter += 1;
                    }
                });
                var sectionname = $(`#${modalId} input[data-name="${$(this).attr('data-table-section')}"]`).attr(
                    'data-section');
                if (uncheckedCounter > 0) {
                    $(`#${modalId} input[data-name="${$(this).attr('data-table-section')}"]`).prop('checked',
                    false);
                    if (!isTableSectionChecked(sectionname, modalId)) {
                        $(`#${modalId} input[data-name="${sectionname}"]`).prop('checked', false);
                        if (!isTableSectionChecked('allSections', modalId)) {
                            $('#' + modalId + ' input[section-check-all-sections]').prop('checked', false);
                        }
                    }
                } else {
                    $(`#${modalId} input[data-name="${$(this).attr('data-table-section')}"]`).prop('checked', true);
                    if (isTableSectionChecked(sectionname, modalId)) {
                        $(`#${modalId} input[data-name="${sectionname}"]`).prop('checked', true);
                        if (isTableSectionChecked('allSections', modalId)) {
                            $('#' + modalId + ' input[section-check-all-sections]').prop('checked', true);
                        }
                    }
                }
            });
        }

        function isTableSectionChecked(selector, modalId) {
            var uncheckedCounter = 0;
            var checkedCounter = 0;
            $(`#${modalId} input[data-section="${selector}"]`).each(function(index, element) {
                // element == this
                if ($(element).prop('checked') == false) {
                    uncheckedCounter += 1;
                } else {
                    checkedCounter += 1;
                }
            });
            if (uncheckedCounter > 0) {
                return false;
            } else {
                return true;
            }
        }
        $('#capitalizationModal .close').click(function(e) {
            if (confirm('سيتم حذف التقدم والصلاحيات اللتي تم اختيارها؟')) {
                $('#capitalizationModal .close').attr('data-dismiss', "modal");
                $('#capitalizationModal input[type="checkbox"]').prop('checked', false);
                $('#capitalizationModal [aria-selected="true"]').prop('aria-selected', "false");
                $('#capitalizationModal .active').removeClass('active');
                $('#capitalizationModal .show').removeClass('show');
            } else {
                $('#capitalizationModal .close').removeAttr('data-dismiss');
                e.preventDefault();
            }
        });
        $('#capitalizationModal2 .close').click(function(e) {
            if (confirm('سيتم حذف التقدم والصلاحيات اللتي تم اختيارها؟')) {
                $('#capitalizationModal2 .close').attr('data-dismiss', "modal");
                $('#capitalizationModal2 input[type="checkbox"]').prop('checked', false);
                $('#capitalizationModal2 [aria-selected="true"]').prop('aria-selected', "false");
                $('#capitalizationModal2 .active').removeClass('active');
                $('#capitalizationModal2 .show').removeClass('show');

            } else {
                $('#capitalizationModal2 .close').removeAttr('data-dismiss');
                e.preventDefault();
            }
        });
        $(function() {
            initiatePermissionsModal('capitalizationModal');
            initiatePermissionsModal('capitalizationModal2');
        });

        function getUserPermissions(ruleName) {
            $.ajax({
                method: 'post',
                url: "get-permissionsByRoleName",
                dataType: 'json',
                delay: 250,
                data: {
                    _token: '{{ csrf_token() }}',
                    ruleName: ruleName,
                },
                error: function(xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    console.log(err.message);
                    alert(err.message);
                },
                success: function(data) {
                    $.each(data, function(indexInArray, valueOfElement) {
                        // $(`#capitalizationModal2 input[data-table-section][value="${valueOfElement}"]`).prop('checked',true).trigger('change');
                        $(`#capitalizationModal2 #flexSwitchUpdateCheck${valueOfElement}`).prop(
                            'checked', true).trigger('change');
                    });
                    // console.log(data);
                },
                cache: false
            });
        }
        // var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
        // triggerTabList.forEach(function (triggerEl) {
        // var tabTrigger = new bootstrap.Tab(triggerEl)

        // triggerEl.addEventListener('click', function (event) {
        // event.preventDefault()
        // tabTrigger.show()
        // })
        // })
    </script>
@endsection

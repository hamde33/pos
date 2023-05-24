@extends('layout.posapp', ['path' => ['/تعديل الملف الشخصي ', \Auth::user()->name]])
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- CONTENT -->
                <section id="horizontal-form-layouts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body collapse in">
                                    <div class="add-form-section card-block filter-section-collapse">
                                        <form method="post" action="eidt-update_profile"
                                            class="form form-horizontal striped-rows form-bordered dev-form-validate"
                                            enctype="multipart/form-data" accept-charset="UTF-8" id="">
                                            <div class="row">
                                                <div class="col-lg-8  col-md-9 col-xs-12">
                                                    <div class="col-md-12 form-body">
                                                        <h4 class="form-section"><i class="ft-user"></i>
                                                            اكمال الملف الشخصى</h4>
                                                        <div class="form-group row">
                                                            <div class="col-md-3">
                                                                <label for="name">الاسم </label>
                                                                <span class="required text-danger">*</span>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input class="form-control" name="name" type="text"
                                                                    value="{{ \Auth::user()->name }}" id="name"
                                                                    required>
                                                                @error('name')
                                                                    <span
                                                                        class="error invalid-feedback">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="row mb-1">
                                                            <div class="col-md-3">
                                                                <label for="to_loc"> رقم الهاتف
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                        <input type="phone"  pattern="^\d{9}$"  value="{{substr(\Auth::user()->phone,3) }}"
                                                                        class="form-control form-control-lg input-lg  @error('phone') is-invalid @enderror"
                                                                        name="phone" id="" required="" title="يجب ان يكون عدد الارقام 9"
                                                                        placeholder="رقم الهاتف" oninvalid=" " oninput=" ">
                                                                            <div class="form-control-position">
                                                                                <i class="ft-user"></i>
                                                                            </div>
                                                                            @error('phone')
                                                                            <span class="error invalid-feedback">{{ $message }}</span>
                                                                            @enderror
                                                            </div>
                                                            <div class="col-md-3">
                                                                <select dir="rtl" name="country_code"
                                                                    class="form-control form-control-lg input-lg " style="font-size: 10px;">
                                                                    <option data-countryCode="SA" value="966" selected>Saudi
                                                                        Arabia (السعودية) (+966) &#x200e;</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        </div>
                                                         @error('phone')
                                                         <span class="error invalid-feedback">{{ $message }}</span>
                                                        @enderror

                                                        {{-- <div class="form-group row">
                                                        <div class="col-md-3">
                                                            <label for="mobile">العنوان </label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input class="form-control" name="address" type="text"
                                                                value="{{Auth::user()->address}}" id="address">
                                                                @error('address')
                                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                                @enderror
                                                        </div>
                                                    </div> --}}
                                                        <div class="form-group row">
                                                            <div class="col-md-3">
                                                                <label for="password">كلمة السر</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input class="form-control password" name="password"
                                                                    type="password" id="password">
                                                                @error('password')
                                                                    <span
                                                                        class="error invalid-feedback">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row passwordDiv">
                                                            <div class="col-md-3">
                                                                <label for="password"> تاكيد كلمة السر </label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input class="form-control password_confirmation"
                                                                    name="password_confirmation" type="password"
                                                                    id="password_confirmation">
                                                                @error('password_confirmation')
                                                                    <span
                                                                        class="error invalid-feedback">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="row mb-1">
                                                            <div class="col-md-3">
                                                                <label for="photo"> رابط المستخدم
                                                                </label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <div class=" w-100">
                                                                        <a value="" onclick="myFunction()">
                                                                            <input name="link"  class=" w-100 form-control" value="{{ Request::root() }}/OrderTable?tokn={{(\Auth::user()->link) }}"
                                                                                id="myInput">

                                                                        </a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @csrf
                                                        {{-- <div class="form-group row">
                                                        <div class="col-md-3">
                                                            <label for="mobile">الدولة </label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input class="form-control" name="country" type="text"
                                                                value="{{Auth::user()->country}}" id="">
                                                                @error('country')
                                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                                @enderror
                                                        </div>
                                                    </div> --}}
                                                        <input value="{{ Auth::user()->id }}" name="id" type="hidden">
                                                        {{-- <div class="form-group row">
                                                        <div class="col-md-3">
                                                            <label for="mobile">المدينة </label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input class="form-control" name="city" type="text"
                                                                value="{{Auth::user()->city}}" id="">
                                                                @error('city')
                                                                <span class="error invalid-feedback">{{ $message }}</span>
                                                                @enderror
                                                        </div>
                                                    </div> --}}

                                                        <div class="form-group row">
                                                            <div class="row mb-1">
                                                                <div class="col-md-3">
                                                                    <label for="personal_picture">
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-9 p-0" id="imgApp">
                                                                    <div class="input-group">
                                                                        <div class=" w-100">
                                                                            @include('layout.elements.imageUpdateTemp',['input_id'=>'personal_pictureInput','input_name'=>'personal_picture','multiple'=>'false','required'=>'false','images'=>Auth::user(),'srcKey'=>'personal_picture','path'=>'storage/User_sal/User/personal_picture/','uidkey'=>'id','utable'=>'users_sales','ucolumn'=>'personal_picture'])

                                                                            {{-- <input class=" w-100 form-control select2-tag"
                                                                            title="لم يتم اختيار اي ملف"
                                                                            name="personal_picture" type="file"
                                                                            onchange="readURL(this,'personal_picture');$('.personal_picture').show();">
                                                                            <img
                                                                            onerror="$(this).hide()"
                                                                            src="{{ asset('storage/User/personal_picture/') }}/{{ Auth::user()->personal_picture}}"
                                                                            style="width: 70%;"
                                                                            class="rounded mx-auto  personal_picture" /> --}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="row mb-1">
                                                                <div class="col-md-3">
                                                                    <label for="active"> مفعل </label>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="input-group">
                                                                        <div class=" w-100">
                                                                            <i id="active" style="font-size: 20px;"
                                                                                class="{{ Auth::user()->active == 1 ? 'fa fa-check-circle text-success' : 'fa fa-times-circle text-danger' }}">
                                                                            </i>
                                                                            <i class="spinner-border spinner-border-sm truck-active-overlay"
                                                                                role="status" aria-hidden="true"
                                                                                style="display:none;"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions  text-xs-center btnConfirm">

                                                <button
                                                    class="btnWidth btn btn-primary  dev-product-submit btn-custom-padding save-and-new-btn-color"
                                                    name="submit" type="submit" dev-value="save_new">
                                                    تعديل </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            /* Get the text field */
            var copyText = document.getElementById("myInput");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);
            /* Alert the copied text */
            // .val(base_url + '/OrderTable?tokn=' + row.link);
            toastr.success('تمت  نسخ الرابط !!!','نجاح'+ copyText.value,{
                timeOut:10000,closeButton:true,extendedTimeOut:30000,progressBar:true,positionClass:"toast-top-full-width"});
            // alert("Copied the text: " + copyText.value);
        }
    </script>
    <script>
        function readURL(input, imgclassname) {
            const size = (input.files[0].size / 1024).toFixed(2);
            if (size > 500) {
                alert("يجب ان لا يكون حجم الصوره اقل من 500 KB");
                $(input).val(null);
                return;
                $('.' + imgclassname).hide();
            } else {
                $('.' + imgclassname).show();
            }
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.' + imgclassname).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function checkPasswordMatch() {
            var password = $("#password").val();
            var confirmPassword = $("#password_confirmation").val();
            if (password != confirmPassword) {
                $('.btnConfirm').hide();
                $('.passwordDiv .invalid-feedback').remove();
                $('.passwordDiv').append('<span class="error invalid-feedback"> كلمة السر غير متطابقة</span>');
            } else {
                $('.btnConfirm').show();
                $('.passwordDiv .invalid-feedback').remove();
                $('.passwordDiv').append('<span class="success invalid-feedback">كلمة السر متطابقة</span>');
            }
        }
        $(document).ready(function() {
            $("#password_confirmation").keyup(checkPasswordMatch);
            $("#password").keyup(checkPasswordMatch);

            //  $('.account_type').on('change',function() {
            //       if ($(this).val()==='individual') {
            //           $('input[name="address"]').removeAttr('required');
            //           $('input[name="com_register_number"]').removeAttr('required');
            //           $('input[name="tax_certificate_photo"]').removeAttr('required');
            //           $('input[name="tax_certificate_number"]').removeAttr('required');
            //           $('input[name="com_register_photo"]').removeAttr('required');
            //       } else {
            //           $('input[name="address"]').attr('required');
            //           $('input[name="com_register_number"]').attr('required');
            //           $('input[name="tax_certificate_photo"]').attr('required');
            //           $('input[name="tax_certificate_number"]').attr('required');
            //           $('input[name="com_register_photo"]').attr('required');

            //       }


            //   });
        });
    </script>
@endsection
@section('additionalScripts')
    <script>
        $(function() {
            initiateUpdateImgApp('imgApp');
        });
    </script>
@endsection

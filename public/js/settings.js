function saveSettings(){
    if($('#is_valid_image_size').val() == "1"){
        $('input').removeClass('is-invalid');
        $('.invalid-feedback').addClass('hidden');
        var formData = getSettingFormData();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: $('#setting_form').attr('action'),
            type: 'POST',
            data: formData,
            dataType: "json",
            cache: false,
            contentType: false,
            processData: false,
            success: function () {
                // stepsForward();
                nextPrev(1);
                $('.settings_steps_checkbox').removeClass('white');
            }, error: function (xhr, status, error) {
                displaySettingErrors(xhr);
                $('#save_continue').prop('disabled', false);
            },
        });
    }
}

function getSettingFormData(){
    var file_data =  $('input[name="img"]')[0].files[0];
    var vat_name =  $('#tax_id_number').val();
    var address =  $('input[name="address"]').val();
    var formData = new FormData();
    formData.append('name_ar', $('input[name="name_ar"]').val());
    formData.append('name_en', $('input[name="name_en"]').val());
    formData.append('tax_id_name', $('#tax_id_name').val());
    formData.append('tax_id_number', vat_name !== undefined? vat_name : "");
    formData.append('country', $('.niceCountryInputMenuInputHidden').val());
    formData.append('address', address !== undefined? address : "");
    if($('#enable_currency_edit').val() == 1){
    formData.append('currency', $('#currency').val());
    }
    formData.append('enable_currency_edit', $('#enable_currency_edit').val());
    formData.append('preferred_language', $('#preferred_language').val());
    formData.append('token', $('#token').val());
    if(file_data !== undefined)
        formData.append('img', file_data);
    return formData;
}

function displaySettingErrors(xhr){
    $.each( xhr.responseJSON.errors, function( key, value) {
        $('#'+ key).addClass('is-invalid');
        $('.'+ key + '_error').text(value);
        $('.'+ key + '_error').removeClass('hidden');
    });
}

// function stepsForward(){
//     var activeTab = $('.tab-pane.active');
//     var nextTab = activeTab.next();
//     tabMove(activeTab, nextTab)
// }

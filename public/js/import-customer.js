function importCustomers() {
    $('.uploader_txt').text('');
    $('.errors').addClass('hidden');
    $('.errors_list').empty();
    var formData = new FormData();
    var file_data = $('#upload_customers')[0].files[0];
    if (file_data !== undefined)
        formData.append('sheet', file_data);
    formData.append('token', $('#token').val());
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: $('#import_customers_form').attr('action'),
        type: 'POST',
        data: formData,
        dataType: "json",
        cache: false,
        contentType: false,
        processData: false,
        success: function () {
            resetImportSections();
            $('.success_msg').removeClass('hidden');
            $('.company_data_steps_checkbox').removeClass('white');
        }, error: function (xhr, status, error) {
            $('[type="submit"]').prop('disabled', false);
            var listed_errors = [];
            $.each(xhr.responseJSON.errors, function (key, value) {
                $('.errors').removeClass('hidden');
                if(key == ''){
                    listed_errors.push(value);
                    $('#errors_list').append('<li>' + value + '</li>');
                }else if (!listed_errors.includes(value[0])) {
                    listed_errors.push(value[0]);
                    $('#errors_list').append('<li>' + value[0] + '</li>');
                }
            })
        },complete: function (data) {
            $('#import_customers_form')[0].reset(); // this will reset the form fields
        }
    });
}

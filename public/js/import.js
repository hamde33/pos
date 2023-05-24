$(".importUpload").change(function (event) {
    resetErrorsSuccessMsg();
    readURLText(this);
});

$("#upload_customers").change(function (event) {
    resetErrorsSuccessMsg();
    readURLText(this, 'customers');
});

$("#upload_suppliers").change(function (event) {
    resetErrorsSuccessMsg();
    readURLText(this, 'suppliers');
});

$("#upload_product").change(function (event) {
    resetErrorsSuccessMsg();
    readURLText(this, 'product');
});

$("#upload_service").change(function (event) {
    resetErrorsSuccessMsg();
    readURLText(this, 'service');
});

$("#upload_expense").change(function (event) {
    resetErrorsSuccessMsg();
    readURLText(this, 'expense');
});

$("#upload_account_balance").change(function (event) {
    resetErrorsSuccessMsg();
    readURLText(this, 'account_balance');
});

function readURLText(input, type){
    if(type !== undefined)
        $('#type').val(type)

    if (input.files && input.files[0]) {
        var filename = $(input).val();
        filename = filename.substring(filename.lastIndexOf('\\') + 1);
        $( "." + type + "_uploader_txt").text(filename);
        if(type === 'product' || type === 'service' || type === 'expense'){
            importProducts();
        }else if(type === 'customers') {
            importCustomers();
        }else if(type === 'suppliers') {
            importSuppliers();
        }else if(type === 'account_balance') {
            importAccountBalances();
        }
    }
}

function showToaster(){
    var current_lang = $('#language').val();
    $.toast({
        text :'',
        heading: '<i class="fa fa-check-circle"> ' + current_lang === 'en' ? 'Successfully Added' : 'تمت الاضافة بنجاح' + '</i>',
        showHideTransition: 'fade',
        allowToastClose: true,
        hideAfter: 3500,
        loader: false,
        loaderBg: '#9EC600',
        stack: 8,
        position: 'top-center',
        bgColor: '#487ccf',
        textColor: '#eee',
        textAlign: 'center',
        icon: false,
    })
}

function stepsBack(){
    var activeTab = $('.tab-pane.active');
    var prevTab = activeTab.prev();
    tabMove(activeTab, prevTab)
}
function resetImportSections(){
    $('.errors_list').empty();
    $('.errors').addClass('hidden');
    $('.success_msg').addClass('hidden');
    $('input[type="file"]').val("");
    $('.uploader_txt').text("");
}

function resetErrorsSuccessMsg(){
    $('.errors_list').empty();
    $('.errors').addClass('hidden');
    $('.success_msg').addClass('hidden');
}

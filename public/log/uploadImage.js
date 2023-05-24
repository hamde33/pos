function readURL(input, previewInput) {
    if (input.target.files && input.target.files[0]) {
        var f = input.target.files[0];
        var reader = new FileReader();
        reader.onload = (function () {
            return function (e) {
                document.getElementById(previewInput).src = e.target.result;
            };
        })(f, previewInput);
        reader.readAsDataURL(f);
    }
}


var registrationImageInput = document.getElementById('inputFileRegistrationImage');
var transportionImageInput = document.getElementById('inputFileTransportionImage');
var registrationCompanyImageInput = document.getElementById('inputFileCompanyRegistrationImage');
var registrationPersonImageInput = document.getElementById('inputFilePersonRegistrationImage');
var driverIDImageInput = document.getElementById('inputFileDriverIDImage');
var driverLicenseImageInput = document.getElementById('inputFileDriverLicenseImage');
var truckRegistrationImageInput = document.getElementById('inputFileTruckRegistrationImage');

if (registrationImageInput) {
    registrationImageInput.addEventListener('change', function (e) { readURL(e, 'image-upload-preview-registration') }, false);
    document.getElementById('image-upload-preview-registration').addEventListener('click', function () { registrationImageInput.click() }, false);
}

if (transportionImageInput) {
    transportionImageInput.addEventListener('change', function (e) { readURL(e, 'image-upload-preview-transportion') }, false);
    document.getElementById('image-upload-preview-transportion').addEventListener('click', function () { transportionImageInput.click() }, false);
}

if (registrationCompanyImageInput) {
    registrationCompanyImageInput.addEventListener('change', function (e) { readURL(e, 'image-upload-preview-registration-company') }, false);
    document.getElementById('image-upload-preview-registration-company').addEventListener('click', function () { registrationCompanyImageInput.click() }, false);
}

if (registrationPersonImageInput) {
    registrationPersonImageInput.addEventListener('change', function (e) { readURL(e, 'image-upload-preview-registration-person') }, false);
    document.getElementById('image-upload-preview-registration-person').addEventListener('click', function () { registrationPersonImageInput.click() }, false);
}

if (driverIDImageInput) {
    driverIDImageInput.addEventListener('change', function (e) { readURL(e, 'image-upload-preview-driver-id') }, false);
    document.getElementById('image-upload-preview-driver-id').addEventListener('click', function () { driverIDImageInput.click() }, false);
}

if (driverLicenseImageInput) {
    driverLicenseImageInput.addEventListener('change', function (e) { readURL(e, 'image-upload-preview-driver-license') }, false);
    document.getElementById('image-upload-preview-driver-license').addEventListener('click', function () { driverLicenseImageInput.click() }, false);
}

if (truckRegistrationImageInput) {
    truckRegistrationImageInput.addEventListener('change', function (e) { readURL(e, 'image-upload-preview-truck-registration') }, false);
    document.getElementById('image-upload-preview-truck-registration').addEventListener('click', function () { truckRegistrationImageInput.click() }, false);
}

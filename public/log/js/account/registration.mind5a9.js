function post(n,t){return new Promise((i,r)=>{var u={url:`${apiRoot}/${n}`,type:"post",data:JSON.stringify(t),contentType:"application/json",success:n=>{i(n)},fail:()=>{r()}};token&&(u.headers={Authorization:`Bearer ${token}`});$.ajax(u)})}function onRegistrationComplete(){$("#registrationOverlay").hide();$(".complete-registration").hide();$("#registrationCompleted").show();setTimeout(function(){if(isCompleteRegistration){location.href="../home/dashboard";return}$("#loginTab").click()},2e3)}function setError(n){$("#error").text(n);setTimeout(()=>{$("#error").text("")},5e3)}function checkPhone(n){return $.get(apiRoot+"/users/check-phone?phone="+encodeURIComponent(n))}function sendCode(){var i,t,n,r;if(validatePhone()){if(phoneRegistered)return $("#phoneRegistered").fadeIn(),setTimeout(function(){$("#phoneRegistered").fadeOut()},2e3),!1}else return $("#phoneInvalid").fadeIn(),setTimeout(function(){$("#phoneInvalid").fadeOut()},2e3),!1;for(i=$("#rvm_SelectedCode").val(),t="",n=0;n<countryCodes.length;n++)if(countryCodes[n].alpha2===i){t=countryCodes[n].dialCodes;break}return r=t+$("#mobilePhone").val(),$.post(apiRoot+"/users/verify-phone?phone="+encodeURIComponent(r)).done(function(){$("#phoneVerificationCode").show();codeSent=!0;$("#sendVerificationCode").hide();$("#codeWasSent").fadeIn();setTimeout(function(){$("#codeWasSent").fadeOut()},5e3)}).fail(function(){$("#codeSentError").show();$("#sendVerificationCode").show()})}function validatePhone(){var n=$("#mobilePhone").val();return n&&n.length>=8&&n.length<=14?($("#phoneInvalid").hide(),$("#phoneRegistered").hide(),!0):($("#phoneInvalid").show(),!1)}function getBase64File(n){return new Promise((t,i)=>{const r=new FileReader;r.readAsDataURL(n);r.onload=()=>t({base64:r.result.substr(r.result.indexOf(",")+1),fileName:n.name,contentType:n.type});r.onerror=n=>i(n)})}var codeSent=!1,phone,phoneIsValid,phoneRegistered;$(function(){$("#mobilePhone").on("blur",function(){$("#sendVerificationCode").hide();var n=$("#rvm_SelectedCode").val(),t=countryCodes.find(t=>t.alpha2===n);phone=t.dialCodes+$(this).val();validatePhone()&&checkPhone(phone).done(function(n){phoneRegistered=n;phoneRegistered===!0?$("#phoneRegistered").show():sendCode()}).fail(function(){})});$(".datepicker").datetimepicker({format:"MM/DD/YYYY"});$("#loginTab").click(function(){$("#loginTab").removeClass("fade");$("#regTab").addClass("fade");$("#reg").hide();$("#lgn").show()});$("#regTab").click(function(){$("#regTab").removeClass("fade");$("#loginTab").addClass("fade");$("#reg").show();$("#lgn").hide()});$("#shipperAccountType").on("change",function(){isCompanyAccount=!isCompanyAccount});$("#userType").on("change",function(){$(this).val()==="2"?$("#userAccountType").show():$("#userAccountType").hide()});$(".btn-file").find('[type="file"]').on("change",function(){if(this.files&&this.files[0]){var n=this.files[0],t=new FileReader,i=this;t.onload=function(){return function(n){$(i).parent().next().attr("src",n.target.result)}}(n);t.readAsDataURL(n)}});$(".skip-docs").on("click",function(){if(isCompleteRegistration)return location.href="../home/dashboard",!1;$("#loginTab").click()});$("#registrationForm").on("submit",function(){var i=$(this).valid(),n,t;return i?(n=$("#userType").val(),t={firstName:$("#firstName").val(),lastName:$("#lastName").val(),mobilePhone:phone,phoneVerificationCode:$("#phoneVerificationCode").val(),password:$("#password").val(),confirmPassword:$("#password").val(),userType:n,isCompanyAccount:isCompanyAccount},$("#registrationOverlay").fadeIn(),post("users/sign-up",t).then(function(t){if(!t.isSuccess)return setError(t.error),$("#registrationOverlay").hide(),!1;token=t.data.idToken;user=t.data.user;$("#registrationOverlay").hide();n==="2"?($("#completeRegistrationShipper").show(),isCompanyAccount?$("#shipperCompany").show():$("#shipperIndividual").show()):n==="3"?$("#completeRegistrationCarrier").show():onRegistrationComplete();$("#registration").hide()},function(){$("#registrationOverlay").hide()}),!1):!1});$("#completeShipperRegistrationForm").on("submit",function(){var f=$(this).valid(),n;if(!f)return!1;if(isCompanyAccount){var t=document.getElementById("registrationImage"),i=document.getElementById("vatRegistrationImage"),e=t.files.length?getBase64File(t.files[0]).then(function(n){return post(`users/${user.id}/company-registration`,n)}):Promise.resolve(!0),o=i.files.length?getBase64File(i.files[0]).then(function(n){return post(`users/${user.id}/vat-registration`,n)}):Promise.resolve(!0);user.isCompanyAccount=!0;user.companyRegistrationNumber=$("#companyRegistrationNumber").val();user.companyRegistrationExpirationDate=$("#companyRegistrationExpirationDate").val();user.vatRegistrationNumber=$("#vatRegistrationNumber").val();n=post(`users/${user.id}/shipper`,user);Promise.all([e,o,n]).then(onRegistrationComplete)}else{var r=document.getElementById("idImage"),u=document.getElementById("profilePhoto"),s=r.files.length?getBase64File(r.files[0]).then(function(n){return post(`users/${user.id}/person-id`,n)}):Promise.resolve(!0),h=u.files.length?getBase64File(u.files[0]).then(function(n){return post(`users/${user.id}/photo`,n)}):Promise.resolve(!0);user.isCompanyAccount=!1;user.personIDNumber=$("#idNumber").val();n=post(`users/${user.id}/shipper`,user);Promise.all([s,h,n]).then(onRegistrationComplete)}return $("#registrationOverlay").show(),!1});$("#completeCarrierRegistrationForm").on("submit",function(){var r=$(this).valid(),i;if(!r)return!1;var n=document.getElementById("carrierRegistrationImage"),t=document.getElementById("transportationLicenseImage"),u=n.files.length?getBase64File(n.files[0]).then(function(n){return post(`users/${user.id}/company-registration`,n)}):Promise.resolve(!0),f=t.files.length?getBase64File(t.files[0]).then(function(n){return post(`users/${user.id}/transportation-license`,n)}):Promise.resolve(!0);return user.isCompanyAccount=!0,user.companyRegistrationNumber=$("#carrierCompanyRegistrationNumber").val(),user.companyRegistrationExpirationDate=$("#carrierCompanyRegistrationExpirationDate").val(),user.companyTransportionLicense=$("#transportationLicenseNumber").val(),user.companyTransportionLicenseExpirationDate=$("#transportationLicenseExpirationDate").val(),i=post(`users/${user.id}/carrier`,user),Promise.all([u,f,i]).then(onRegistrationComplete),$("#registrationOverlay").show(),!1});isCompleteRegistration?(userType==="2"?($("#completeRegistrationShipper").show(),isCompanyAccount?($("#shipperCompany").show(),$("#companyRegistrationNumber").val(user.companyRegistrationNumber),$("#companyRegistrationExpirationDate").data("DateTimePicker").date(new Date(user.companyRegistrationExpirationDate)),$("#vatRegistrationNumber").val(user.vatRegistrationNumber),user.companyRegistrationImageUrl&&($("#registrationImagePreview").attr("src",user.companyRegistrationImageUrl),$("#registrationImage").removeAttr("required")),user.vatRegistrationImageUrl&&($("#vatRegistrationImagePreview").attr("src",user.vatRegistrationImageUrl),$("#vatRegistrationImage").removeAttr("required"))):($("#shipperIndividual").show(),$("#idNumber").val(user.personIDNumber),user.personIDImageUrl&&($("#idImagePreview").attr("src",user.personIDImageUrl),$("#idImage").removeAttr("required")),user.pictureUrl&&$("#profilePhotoPreview").attr("src",user.pictureUrl))):userType==="3"&&($("#carrierCompanyRegistrationNumber").val(user.companyRegistrationNumber),$("#carrierCompanyRegistrationExpirationDate").data("DateTimePicker").date(new Date(user.companyRegistrationExpirationDate)),$("#transportationLicenseNumber").val(user.companyTransportionLicense),$("#transportationLicenseExpirationDate").data("DateTimePicker").date(new Date(user.companyTransportionLicenseExpirationDate)),user.companyRegistrationImageUrl&&($("#carrierRegistrationImagePreview").attr("src",user.companyRegistrationImageUrl),$("#carrierRegistrationImage").removeAttr("required")),user.companyTransportionLicenseImageUrl&&($("#transportationLicenseImagePreview").attr("src",user.companyTransportionLicenseImageUrl),$("#transportationLicenseImage").removeAttr("required")),$("#completeRegistrationCarrier").show()),$("#regTab").click()):$("#registration").show()});
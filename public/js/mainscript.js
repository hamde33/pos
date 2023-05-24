// $(document).ready(function () {
//     $("span .btn-primary").click(function ($e) {
//         $(this).prop('disabled', true);
//         $("#delete-form").submit();
//         $('form').submit();
//     });
// });
$(document).ready(function () {
    //  $('.form').on('submit', function(e) {
    //     $(this).find(":submit").prop('disabled',true);
    // })

    $(document).on('submit', '.form' ,  function(e) {
        $(this).find(":submit").prop('disabled',true);
    });

  
 
   $(document).ajaxComplete(function( event, xhr, settings ) {
   $(this).find(":submit").removeAttr("disabled");
});


});

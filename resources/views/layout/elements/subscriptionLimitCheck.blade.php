<script>
    $(function () {
        $('.{{$trigger}}').click(function () {  
            $.ajax({
                type: "post",
                url: "{{route('subscription-limitcheck')}}",
                data: {
                    {{$limited}}:true,
                    _token:'{{csrf_token()}}'
                },
                success: function (response) {
                    console.log(response);
                    if (response) {
                        $('.{{$submit}}').submit();
                    }else{
                        toastr.error(
                            'تم تجاوز عدد {{$limitable}} المسموح به, يرجى الترقية لاشتراك اعلى <a href="https://msmart.space/#/subscribePage" target="_blank"><u><b>للمزيد</b></u></a> !!!',
                            'خطأ : تجاوز العدد المسموح',
                            {timeOut:0,closeButton:true,extendedTimeOut:0,progressBar:true,positionClass:"toast-top-full-width"}
                        );
                    }
                }
            });
        });
    });
</script>
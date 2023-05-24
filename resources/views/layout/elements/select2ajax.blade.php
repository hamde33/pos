<script>
    $(document).ready(function() {
        $('{{(isset($selectId))? '#'.$selectId : (isset($selectClass)? '.'.$selectClass:'')}}').select2({
            ajax: {
                method: 'post',
                url: "{{route($routeName)}}",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                return {
                    _token:'{{csrf_token()}}',
                    q: params.term, // search term
                    page: params.page
                };
                },
                error: function(xhr, status, error) {
                    
                    },
                processResults: function (data, params) {
                params.page = params.page || 1;
                return {
                    results: data.items,
                    pagination: {
                    more: (params.page * 10) < data.total_count
                    }
                };
                },
                cache: true
            },
            placeholder: 'إبحث عن {{$selectArName}}',
            templateResult: format{{$selectName}},
            templateSelection: format{{$selectName}}Selection,
            @if($allowClear)
                allowClear: true,
            @endif
        });
        function format{{$selectName}}(data) {
            if (data.loading) {
                return data.text;
            }

            var $container = $(
                "<div class='select2-result-{{$selectName}} clearfix'>" +
                "<div class='select2-result-{{$selectName}}__meta'>" +
                "<div class='select2-result-{{$selectName}}__title'></div>" +
                "</div>" +
                "</div>"
            );

            $container.find(".select2-result-{{$selectName}}__title").text(data.{{$objectName}});
            return $container;
        }

        function format{{$selectName}}Selection(data) {
            return data.{{$objectName}} || data.text;
        }
    })
</script>

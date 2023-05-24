{
btnRefresh: {
text: 'refresh',
icon: 'fa-redo',
event: function() {
    @isset($refreshAction)
        @if ($refreshAction == 'reloadWindow')
        window.location.reload();
        @elseif($refreshAction == 'submitForm')
        $('#{{$formSubmit}}').submit();
        @else
        $table.bootstrapTable('refresh');
        @endif
    @else
    $table.bootstrapTable('refresh');
    @endisset
},
attributes: {
id: 'refresh',
title: 'تحديث',
}
},
btnExportExcel: {
text: '',
icon: 'fa-file-excel',
event: function() {
$table.bootstrapTable('exportTable', {
type: 'xlsx',
fileName: 'تصدير اكسل _ '+moment().format('YYYY_MM_DD')
});
$table.bootstrapTable('refresh');
},
attributes: {
id: 'exportexcel',
title: 'export excel file'
}
}
@isset($showPrint)
,
btnPrintA4: {
text: '',
icon: 'fa-print',
event: function() {

    $('.{{$A4printForm}}').attr('action','{{route('report-filterAccountStatementA4')}}').submit();
},
attributes: {
id: 'printA4',
title: 'Print A4 Report'
}
}
@endisset
@isset($showImport)
,
btnImport: {
text: '',
icon: 'fa-upload',
event: function() {
   window.location.href = '/setting/p_import';
},
attributes: {
id: 'importPro',
title: ' Import Products'
}
}
@endisset
@isset($routeName)
,
btnPrintA4: {
text: '',
icon: 'fa-print',
event: function() {
window.location.href = "{{$routeName}}";
},
attributes: {
id: 'printA4',
title: 'Print A4 Report'
}
}
@endisset
@isset($routeName2)
,
btnPrintminified: {
text: '',
icon: 'fa-eye',
event: function() {
window.location.href = "{{$routeName2}}";
},
attributes: {
id: 'btnPrintminified',
title: 'Print simple Report'
}
}
@endisset
@isset($routeName3)
,
btnPrintminifieder: {
text: '',
icon: 'fa-file',
event: function() {
window.location.href = "{{$routeName3}}";
},
attributes: {
id: 'btnPrintminified',
title: 'Print simple summarized Report'
}
}
@endisset
}

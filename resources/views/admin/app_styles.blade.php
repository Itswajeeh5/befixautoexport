<link rel="stylesheet" href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/css/fontawesome-iconpicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/css/sb-admin-2.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/css/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/css/jquery-ui.css') }}">
<link rel="stylesheet" href="{{ asset('backend/css/jquery.timepicker.css') }}">
<link rel="stylesheet" href="{{ asset('backend/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/css/bootstrap4-toggle.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/css/spacing.css') }}">
<link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
@php
$g_settings = \App\Models\GeneralSetting::where('id',1)->first();
@endphp
@if($g_settings->layout_direction == 'rtl')
    <link rel="stylesheet" href="{{ asset('backend/css/rtl.css') }}">
@endif
@extends('admin.main')

@section('title')
Quản lý thông tin
@endsection

@section('title_content')
Kích cỡ màn hình
@endsection

@section('content')
@include('admin/modules/displays')
@endsection

@section('script')


<script src="js/appme.js"></script>

@endsection
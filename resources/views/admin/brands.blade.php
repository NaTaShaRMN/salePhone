@extends('admin.main')

@section('title')
Quản lý thông tin
@endsection

@section('title_content')
Nhãn hiệu
@endsection

@section('content')
@include('admin/modules/brands')
@endsection

@section('script')


<script src="js/appme.js"></script>

@endsection
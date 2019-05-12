@extends('admin.main')

@section('title')
Quản lý thông tin
@endsection

@section('title_content')
Màu sắc
@endsection

@section('content')
@include('admin/modules/colors')
@endsection

@section('script')


<script src="js/appme.js"></script>

@endsection
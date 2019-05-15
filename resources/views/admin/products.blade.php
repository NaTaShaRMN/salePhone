@extends('admin.main')

@section('title')
Quản lý thông tin
@endsection

@section('title_content')
QUẢN LÍ SẢN PHẨM
@endsection

@section('content')
@include('admin/modules/products')
@endsection

@section('script')



<script src="js/appme.js"></script>

@endsection
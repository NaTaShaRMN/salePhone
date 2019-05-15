@extends('admin.main')

@section('title')
Quản lý thông tin
@endsection

@section('title_content')
Đơn đặt hàng
@endsection

@section('content')
@include('admin/modules/orders')
@endsection

@section('script')

<script src="js/appme.js"></script>

@endsection
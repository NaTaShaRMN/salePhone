@extends('admin.main')

@section('title')
Quản lý thông tin
@endsection

@section('title_content')
Đơn đặt hàng chi tiết
@endsection

@section('content')
@include('admin/modules/orderdetails')
@endsection

@section('script')

<script src="js/appme.js"></script>

@endsection
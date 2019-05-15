@extends('admin.main')

@section('title')
Quản lý thông tin
@endsection

@section('title_content')
Quản lý người dùng
@endsection

@section('content')
@include('admin/modules/users')
@endsection

@section('script')

<script src="js/appme.js"></script>

@endsection
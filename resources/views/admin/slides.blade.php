@extends('admin.main')

@section('title')
Quản lý thông tin
@endsection

@section('title_content')
Slide
@endsection

@section('content')
@include('admin/modules/slides')
@endsection

@section('script')


<script src="js/appme.js"></script>

@endsection
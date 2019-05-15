@extends('admin.main')

@section('title')
Quản lý thông tin
@endsection

@section('title_content')
Bình luận
@endsection

@section('content')
@include('admin/modules/comments')
@endsection

@section('script')


<script src="js/appme.js"></script>

@endsection
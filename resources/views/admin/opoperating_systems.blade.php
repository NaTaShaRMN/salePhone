@extends('admin.main')

@section('title')
Quản lý thông tin
@endsection

@section('title_content')
BỘ NHỚ TRONG
@endsection

@section('content')
@include('admin/modules/opoperating_systems')
@endsection

@section('script')


<script src="js/appme.js"></script>

@endsection
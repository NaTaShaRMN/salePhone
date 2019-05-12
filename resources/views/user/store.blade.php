@extends('user.main')
@section('title')
Trang chủ
@endsection

@section('header')
@include('user/modules/header_md')
@endsection

@section('store')
@include('user/modules/store_md')
@endsection

@section('letter')
@include('user/modules/letter_md')
@endsection

@section('footer')
@include('user/modules/footer_md')
@endsection
@extends('user.main')
@section('title')
Thông tin cá nhân
@endsection

@section('header')
@include('user/modules/header_md')
@endsection

@section('user_info')
@include('user/modules/user_info_md')
@endsection

@section('letter')
@include('user/modules/letter_md')
@endsection

@section('footer')
@include('user/modules/footer_md')
@endsection
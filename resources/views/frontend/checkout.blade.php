@extends('frontend.main')
@section('title')
Trang chủ
@endsection

@section('header')
@include('frontend/modules/header_md')
@endsection

@section('checkout')
@include('frontend/modules/checkout_md')
@endsection

@section('letter')
@include('frontend/modules/letter_md')
@endsection

@section('footer')
@include('frontend/modules/footer_md')
@endsection
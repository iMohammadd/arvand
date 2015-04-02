@extends('master')
@section('title') لیست خودروها @endsection
@section('heading')
    خودرو ها
@endsection
@section('body')
    @include('cars.list')
@endsection
@section('sidebar')
    @include('sidebar')
@endsection
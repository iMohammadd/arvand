@extends('master')
@section('title') لیست خودروها @endsection
@section('heading')
    خودرو ها
@endsection
@section('body')
    @include('manufactor.list')
@endsection
@section('sidebar')
    @include('sidebar')
@endsection
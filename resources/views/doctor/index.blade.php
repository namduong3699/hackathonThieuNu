@extends('Doctor/main')

@section('title')
Index
@endsection

@section('header')
@include('Doctor/modules/header')
@endsection

@section('content')
<h1>Welcome {{Auth::user()->name}}</h1>
@endsection

@section('footer')
@include('Doctor/modules/footer')
@endsection
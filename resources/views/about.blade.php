@extends('layout.master')

@section('content')
@section('title', 'About')
<h1>About Page</h1>


@include('partials.contactform')

@endsection


@section('style')
  <style>
    body{
        background:white;
    }
  </style>
@endsection


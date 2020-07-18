@extends('layout.master')

<h1>Extra Page
</h1>
@section('extr')
      @parent

     @component('component.alert')
     @slot('title')
      This is a Title
     @endslot
     Something wrong

     @endcomponent

     
    @endsection

    
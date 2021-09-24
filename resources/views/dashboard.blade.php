@extends('layout')

@section('style')
<link rel="stylesheet" href="{{ asset('/css/') }}">

@endsection

@section('content')
    <h1 class="text-danger"> Welcome {{ (Auth::user()->gender == 'Male')? 'Mr '. Auth::user()->name : 'Mme ' . Auth::user()->name }} !</h1>
@endsection

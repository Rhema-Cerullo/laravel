@extends('layout')

@section('style')
<link rel="stylesheet" href="{{ asset('/css/') }}">

@endsection

@section('content')
    <h1 class="text-danger"> Welcome {{ ($user->gender == 'Male')? 'Mr '. $user->name : 'Mme ' . $user->name }} !</h1>
@endsection

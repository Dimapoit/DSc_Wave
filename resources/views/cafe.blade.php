@extends('layouts.master')

@section('title', 'cafe')

@section('menu')
    @parent
@endsection

@section('content')

    @include('partials._comingsoon')

@endsection

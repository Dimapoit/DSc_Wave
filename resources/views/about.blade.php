@extends('layouts.master')

@section('menu')
    @parent
@endsection

@section('content')

    @include('partials._smallheader')

    @include('partials._about')

@endsection

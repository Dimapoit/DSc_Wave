@extends('layouts.master')

@section('title', 'Contact')

@section('menu')
    @parent
@endsection

@section('content')

    @include('partials._smallheader')

    @include('partials._feedback')

    <div id="map" class="map"></div>
@endsection

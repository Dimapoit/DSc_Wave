@extends('layouts.master')

@section('title', 'DSC-Wave')

@section('menu')
    @parent
@endsection

@section('content')

    @include('partials._slider')



    @include('partials._about')

    @include('partials._dancedirections')


    @include('partials._coaches')



{{--    @include('partials._recentblog')--}}

{{--    @include('partials._feedback')--}}

    @include('partials._photogallery')

@endsection

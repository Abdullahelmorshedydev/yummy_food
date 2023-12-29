@extends('web.site.app')

@section('pageTitle')
    @include('web.site.partials._page-banner', ['title' => 'Special Menu'])
@endsection

@section('content')
    @include('web.site.partials._menu')

    @include('web.site.partials._qt')
@endsection

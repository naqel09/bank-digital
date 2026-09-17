@extends('layouts.app')

@section('container')
    @include('components.home.hero')
    @include('components.home.stats')
    @include('components.home.features')
    @include('components.home.kalkulator')
    @include('components.home.steps')
    @include('components.home.security')
    @include('components.home.cta')
@endsection
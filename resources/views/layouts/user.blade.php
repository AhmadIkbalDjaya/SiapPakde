@extends('layouts.main')

@push('style')
    <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
    @stack('userStyle')
@endpush
@section('body')
    @include('components.navbar')
    @yield('content')
    @include('components.footer')
@endsection
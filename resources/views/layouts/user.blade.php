@extends('layouts.main')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/user/userStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    @stack('userStyle')
@endpush
@push('script')
    @stack('userScript')
@endpush
@section('body')
    @include('components.navbar')
    @yield('content')
    @include('components.footer')
@endsection
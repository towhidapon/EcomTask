
@extends('frontend.layouts.master')
@section('content')
	<!--header-->
	@include('frontend.partials.header')

@yield('panel')

	@include('frontend.partials.footer')
@endsection

@extends('layouts.app')

@push('header')
@endpush

@section('content')
<section class="container">
	@include('socios.profiles.hilton')
	@include('socios.profiles.victor')
	@include('socios.profiles.jhonatan')
	@include('socios.profiles.nubia')
	@include('sections.cta')
</section>
@endsection
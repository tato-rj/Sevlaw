@extends('layouts.app')

@push('header')
@endpush

@section('content')
<section class="container">
	@include('socios.profiles.hilton')
	@include('socios.profiles.gustavo')
	@include('socios.profiles.victor')
	@include('sections.cta')
</section>
@endsection
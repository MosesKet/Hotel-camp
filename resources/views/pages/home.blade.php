@extends('layouts.main')

@section('title','Home')

@section('content')

<!-- Site Main -->
<div class="site-main">

	@include('sections.slider')
	
	@include('sections.rooms')
	
	@include('sections.about')
	
	@include('sections.features')
	
	@include('sections.gallery')
	
	@include('sections.video')
	
	@include('sections.offers')
	
	@include('sections.testimonials')

</div>
<!-- Site Main End -->

@stop
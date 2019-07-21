@extends('layouts.main')

@section('title','About Us')

@section('content')

<!-- Site Main -->
<div class="site-main">

	@include('sections.title', ['page' => 'About Us'], ['pagetitle' => 'YOUR PERFECT ESCAPE'])
	
	@include('sections.about')
	
	@include('sections.grid')
	
	@include('sections.team')
	
	@include('sections.features-about')
	
	@include('sections.video')
	
	@include('sections.history')
	
	@include('sections.testimonials')

</div>
<!-- Site Main End -->

@stop
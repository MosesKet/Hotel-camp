@extends('layouts.main')

@section('title','Contact Us')

@section('content')

<!-- Site Main -->
<div class="site-main">

	@include('sections.title', ['page' => 'Contact Us'], ['pagetitle' => 'GET IN TOUCH WITH US'])
	
	@include('sections.contact')
	
</div>
<!-- Site Main End -->

@stop
@extends('layouts.main')

@section('title','Services')

@section('content')

<!-- Site Main -->
<div class="site-main">

	@include('sections.title', ['page' => 'Our Services'], ['pagetitle' => 'OUR FACILITIES'])
	
	@include('sections.services')

</div>
<!-- Site Main End -->

@stop
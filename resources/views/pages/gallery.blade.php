@extends('layouts.main')

@section('title','Gallery')

@section('content')

<!-- Site Main -->
<div class="site-main">

	@include('sections.title', ['page' => 'Gallery'], ['pagetitle' => 'DISCOVER THE GRANDIUM'])
	
	@include('sections.gallery-main')

</div>
<!-- Site Main End -->

@stop
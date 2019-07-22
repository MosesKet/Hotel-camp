@extends('layouts.main')

@section('title','Home')

@section('content')

<!-- Site Main -->
<div class="site-main">

	@include('sections.slider')

	@include('sections.rooms')

	@include('sections.about')

	@include('sections.gallery')

	@include('sections.features')

</div>
<!-- Site Main End -->

@stop

@extends('layouts.main')

@section('title','Rooms')

@section('content')

<!-- Site Main -->
<div class="site-main">

	@include('sections.title', ['page' => 'Rooms'], ['pagetitle' => 'EXPERIENCE THE FREEDOM'])
	
	@include('sections.rooms-main')

</div>
<!-- Site Main End -->

@stop
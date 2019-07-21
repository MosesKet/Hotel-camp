@extends('layouts.main')

@section('title','Rooms')

@section('content')

<!-- Site Main -->
<div class="site-main">

	@include('sections.title', ['page' => 'Single Room'], ['pagetitle' => 'EXPERIENCE THE FREEDOM'])
	
	@include('sections.room-details')

</div>
<!-- Site Main End -->

@stop
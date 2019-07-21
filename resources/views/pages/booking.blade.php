@extends('layouts.main')

@section('title','Reservation')

@section('content')

<!-- Site Main -->
<div class="site-main">

	@include('sections.title', ['page' => 'Booking'], ['pagetitle' => 'STAY THE GRANDIUM'])
	
	@include('sections.booking')

</div>
<!-- Site Main End -->

@stop
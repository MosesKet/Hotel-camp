@component('mail::message')

	<strong>Name:</strong>{{ $data['name'] }}<br>
	<strong>Surmane:</strong>{{ $data['surname'] }}
	<strong>email:</strong>{{ $data['email'] }}
	<strong>phone:</strong>{{ $data['phone'] }}<br>
	<strong>Message</strong>
	
	{{ $data['message'] }}
	
@endcomponent

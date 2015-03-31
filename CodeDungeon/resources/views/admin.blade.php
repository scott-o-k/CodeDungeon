@extends('layout')

@section('content')

@foreach($users->getArray() as $student )

	<div class="student-container">
		<a href="">
			<h2> </h2>

	</div>

@endforeach

@stop
@extends('layout')

@section('content')

<div class="container">

	<div class="step-container">
		<h3>Welcome, {{ Auth::user()->first_name }}!</h3>
		<h3 class="application">Application ID: {{ $application->application_id }}

		<h2>Pre-work Checklist</h2>
		<div>
			Congratulations on taking the first step in becoming a Web Developer. You will find the 
			pre­work is arranged in mini­milestones. Each milestone has objectives for you to achieve. 
			Don't worry if you don't immediately understand the terms and concepts; we've included 
			materials in each milestone to help you learn.
		</div>

	</div>

	<div class="step-container">

			<h2>Step 0</h2>
			<h2>Setup Accounts</h2>
			
			Please make an account at these websites if you don’t have one already:
				<li>
					<form class="accounts-form" method="POST" action="/api/application_google/{application_id}" id="google"> 
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<a href="http://plus.google.com/">Google Plus</a>:
						<label>Username</label>
						<input name="google_username" value="{{ $application->google_username }}">
						<button type="submit" class="btn btn-primary" name="google">Add</button>
					</form>
				</li>

				<li>
					<form class="accounts-form" method="POST" action="/api/application_github/{application_id}" id="github">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<a href="http://github.com/">GitHub</a>:
						<label>Username</label>
						<input action="" name="github_username" value="{{ $application->github_username }}">
						<button type="submit" class="btn btn-primary" name="github">Add</button>
					</form>
				</li>

				<li>
					<form class="accounts-form" method="POST" action="/api/application_twitter/{application_id}" id="twitter">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<a href="http://twitter.com/">Twitter</a>:
						<label>Username</label>
						<input name="twitter_username" value="{{ $application->twitter_username}}">
						<button type="submit" class="btn btn-primary" name="twitter">Add</button>
					</form>
				</li>
			
			<div class="incomplete">Incomplete</div>
			<div class="complete">Complete</div>

	</div>

	<div class="step-container">

			<h2>Step 1</h2>
			<h2>Terminology</h2>
			
			<div class="incomplete">Incomplete</div>
			<div class="complete">Complete</div>

	</div>

{{-- 	@foreach ($steps->getArray() as $step)

		<div class="step-container">
			<h2>Step {{ $step->step_id }}</h2>
			<h2>{{ $step->title }}</h2>
			
			<div class="incomplete">Incomplete</div>
			<div class="complete">Complete</div>

		</div>

	@endforeach --}}
	
		<div class="step-container">

			<h2>Step 2</h2>
			<h2>Sublime Text Editor</h2>
			
			<div class="incomplete">Incomplete</div>
			<div class="complete">Complete</div>

	</div>

	<div class="step-container">

			<h2>Step 3</h2>
			<h2>HTML Basic Concepts</h2>
			
			<div class="incomplete">Incomplete</div>
			<div class="complete">Complete</div>

	</div>

	<div class="step-container">

			<h2>Step 4</h2>
			<h2>CSS Basic Selectors</h2>
			
			<div class="incomplete">Incomplete</div>
			<div class="complete">Complete</div>

	</div>

	<div class="step-container">

			<h2>Step 5</h2>
			<h2>Unix Basics</h2>
			
			<div class="incomplete">Incomplete</div>
			<div class="complete">Complete</div>

	</div>

	<div class="step-container">

			<h2>Step 6</h2>
			<h2>Learning Git and GitHub</h2>
			
			<div class="incomplete">Incomplete</div>
			<div class="complete">Complete</div>

	</div>
</div>
@stop
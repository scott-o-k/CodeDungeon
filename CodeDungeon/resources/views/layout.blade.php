<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Code Dungeon Web Development Bootcamp</title>
	<link rel="stylesheet" href="http://necolas.github.io/normalize.css/3.0.2/normalize.css">
	<link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="header-logo"></div>
			</div>
		</div>		

		<div class="container">
			<div class="top-links">
				@if(Auth::check())


					<a class="login-link" href="auth/logout">Logout</a>

					@if(isset($application))

						<a class="apply-now-button" href="/auth/logout">LOGOUT</a>

					@else 

						<a class="apply-now-button" href="/applyNow">PRE-WORK</a>

					@endif
				
				@else

					<a class="login-link" href="/auth/login" title="Login">Have you registered already? Login</a>
				
					<a class="apply-now-button" href="/">APPLY</a>
					
				@endif
			</div>
		</div>
	</header>
	
	<nav>
		<div class="container">
			<div class="row">
				<div>
					<a href="/about" title="About">About</a>
					<a href="/FAQ" title="FAQ">FAQ</a>
					<a href="/#applyNow">Contact</a>
				</div>
			</div>
		</div>
	</nav>
	
	<main>
		
		
			
		@yield('content')


	</main>

	<footer>
		<div class="container">
			<div class="tagline">WHERE LEARNING TO PROGRAM IS A BAFFLING ORDEAL</div>
			<div class="copyright">© 2015</div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="{{ URL::asset('javascript/main.js') }}"></script>


</body>
</html>
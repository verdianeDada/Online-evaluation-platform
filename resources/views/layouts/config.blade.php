<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<title>{{ config('app.name', 'Laravel') }}</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="{{ asset('images/uplogo.png') }}" />
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Styles -->

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet"> -->
	<link href="{{ asset('css/parsley.css') }}" rel="stylesheet">
	<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('css/exalab-style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/exalab-color.css') }}" rel="stylesheet">
	<link href="{{ asset('css/nav-bar.css') }}" rel="stylesheet">
	<link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
</head>

<body style="margin-top: 75px;">

	@yield('body')

	<footer class="reveal">
		<div class="container">
			<div class="row ">
				<a class="navbar-brand cursive animate__animated animate__pulse animate__infinite" href="{{ url('/') }}">
					{{ config('app.name', 'Laravel') }}
				</a>
			</div>
			<div class="row" style="margin: 15px; 0">
				<p class="cursive" style="color: #c9c1c1;">Thank you for visiting this demo web application of mine.</p>
				<p style="color: #c9c1c1;" class="cursive">Any question, suggestion or advice of yours? Please use the
					<a href="/about#contact-me" style="text-decoration: underline">Contact Me</a> form. You may also use my
					<b>LinkedIn</b> and
					<b>Github</b> accounts’ links just below.
					<br>I’ll be glad to hear from you :-)</p>
			</div>
			<div class="row">
				<ul class="footer-social center">
					<li>
						<a target="_blank" href="https://cm.linkedin.com/in/verdiane-dada-919b72190">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</li>
					<li>
						<a target="_blank" href=" https://github.com/verdianeDada/">
							<i class="fab fa-github"></i>
						</a>
					</li>
				</ul>
				<p style="color: #c9c1c1;">
					<i class="fa fa-envelope "></i> &nbsp;
					<a href="mailto:geraldine.dada@gmail.com" class="cursive">geraldine.dada@gmail.com</a>
				</p>
			</div>
		</div>
		<div class="container-fluid footer-bottom-area">
			<div class="row">
				<div class="copyright-area">
					<div class="copyright">
						<p style="color: #c9c1c1; padding-top: 20px;">Copyright © 2019-2022 All Rights reserved by
							<b>Geraldine Verdiane DADA</b>
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- <script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<script src="{{ asset('js/parsley.js') }}"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	 crossorigin="anonymous"></script> -->
	 <script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/parsley.js') }}"></script>
	<!-- <script src="../form.js"></script> -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



	<script src="{{ asset('js/myscript.js') }}"></script>
</body>

</html>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand cursive animate__rubberBand animate__animated animate__infinite" href="{{ url('/') }}" style="color: #0a650a !important;  font-size: 24px !important;
  font-weight: bolder">
		{{ config('app.name', 'Laravel') }}
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
	 aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		@if (Auth::guest())
		<form id="login-form" class="form-inline my-2 my-lg-0 mr-auto" method="POST" action="{{ route('login') }}" data-parsley-validate>
			{{ csrf_field() }} @if ($errors->has('email'))
			<div class="form-group">
				<span class="help-block">
					<strong class="color-alarm">{{ $errors->first('email') }}</strong>
				</span>
			</div>
			@endif @if ($errors->has('password'))
			<div class="form-group">
				<span class="help-block">
					<strong class="color-alarm">{{ $errors->first('password') }}</strong>
				</span>
			</div>
			@endif
			<div class=" margin-0">
				<div class="form-group ">
					<div class=" margin-0">
						<div class="">
							<i class="fa login fa-user color" style="font-size: 20px; margin-right: 6px;"></i>
						</div>
						<div class="">
							<input id="login-phone" type="number" class="form-control" placeholder="Eg: 672778972" name="email" required="required" data-parsley-required-message=""
							 data-parsley-length-message="" data-parsley-type="digits" data-parsley-length="[9,9]" value="{{ old('email') }}" autofocus>
						</div>
					</div>
				</div>

				<div class="form-group ">
					<div class=" margin-0">
						<div class="">
							<i class="fa login fa-lock color" style="font-size: 20px; margin-right: 6px;"></i>
						</div>
						<div class="">
							<input id="login-password" type="password" class="form-control" name="password" required="required" data-parsley-required-message=""
							 placeholder="Password">
						</div>
					</div>
				</div>

				<div class="form-group ">
					<div>
						<button type="submit" class="btn btn-primary" name="login" style="border-radius: 5px; margin-right: 5px;">
							Login
						</button>

						<a class="btn btn-primary" data-toggle="modal" id="mediumButton" data-target="#mediumModal" title="Register" style="border-radius: 5px;">Register
						</a>

					</div>

				</div>
			</div>
		</form>
		@endif
		<ul class="navbar-nav ml-auto" style>
			<li class="nav-item {{ Request::path() === '/' ? 'active' : null }}">
				<a class="nav-link" href="{{ url('/' )}}"> Home</a>
			</li>
			@if (!Auth::guest())
			<li class="nav-item {{ Request::path() === 'home' ? 'active' : null }}">
				<a class="nav-link" href="{{ url('home' )}}">My tests
				</a>
			</li>
			@endif
		@if (Auth::check() && Auth::user()->isTeacher && Auth::user()->isAdmin)
			<li class="nav-item {{ Request::path() === 'sitemanagement' ? 'active' : null }}">
				<a class="nav-link" href="{{ url('sitemanagement' )}}"> Human ressources</a>
			</li>
		@endif
		@if (Auth::check() && Auth::user()->isAdmin)
			<li class="nav-item {{ Request::path() === 'newstaff' ? 'active' : null }}">
				<a class="nav-link" href="{{ url('newstaff' )}}"> News & staff</a>
			</li>
@endif
			<li class="nav-item dropdown {{ Request::path() === 'about' ? 'active' : null }}">
				<a class="nav-link dropdown-toggle" href="{{ url('about' )}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
				 aria-expanded="false">
					About
					<span class="caret expand_caret"></span>
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{ url('about' )}}">About</a>
					<a class="dropdown-item" href=""></a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="{{ url('about' )}}#contact-me">Contact-me</a>
				</div>
			</li>
			@if (!Auth::guest())
			<li class="nav-item dropdown ">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
				 aria-expanded="false">
					<span style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;max-width: 161px; text-transform: capitalize;">{{Auth::user()->name}}</span>
					<span class="caret expand_caret"></span>
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href=" {{ route( 'logout') }} " onclick="event.preventDefault(); document.getElementById(
					 'logout-form').submit(); ">Sign Out</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
					<a class="dropdown-item" href=""></a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href=""></a>
				</div>
			</li>
			@endif
		</ul>

	</div>
</nav>
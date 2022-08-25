<div id="barre-nav">
	<nav class="navbar navbar-default" style="position absolute">
		<div class="container-fluid">

			<div class="navbar-header">

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<!-- <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo" style="margin: 0; height:auto; padding: 0; width:20%">
                </a> -->
				<a class="navbar-brand cursive" href="{{ url('/') }}">
					{{ config('app.name', 'Laravel') }}
				</a>
			</div>

			<!-- <div class="right nav navbar-nav"> -->
			<div class="collapse navbar-collapse" id="app-navbar-collapse">
				<!-- <ul class="nav navbar-nav">
					<li class="{{ Request::path() === '/' ? 'active' : null }}">
						<a href="{{ url('/' )}}">Home</a>
					</li>
				</ul> -->
				@if (Auth::guest())
				<form id="login-form" class="form" method="POST" action="{{ route('login') }}" data-parsley-validate>
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
					<div class="row margin-0">
						<div class="form-group col-lg-5">
							<div class="row margin-0">
								<div class="col-lg-2">
									<i class="fa login fa-user color"></i>
								</div>
								<div class="col-lg-10">
									<input id="login-phone" type="number" class="form-control" placeholder="Eg: 672778972" name="email" required="required" data-parsley-required-message=""
									 data-parsley-length-message="" data-parsley-type="digits" data-parsley-length="[9,9]" value="{{ old('email') }}"
									 autofocus>
								</div>
							</div>
						</div>

						<div class="form-group col-lg-5">
							<div class="row margin-0">
								<div class="col-lg-2">
									<i class="fa login fa-lock color"></i>
								</div>
								<div class="col-lg-10">
									<input id="login-password" type="password" class="form-control" name="password" required="required" data-parsley-required-message=""
									 placeholder="Password">
								</div>
							</div>
						</div>

						<div class="form-group col-lg-4">
							<div>
								<button type="submit" class="btn btn-primary" name="login">
									Login
								</button>

								<a class="btn btn-primary" data-toggle="modal" id="mediumButton" data-target="#mediumModal" title="Register">Register
								</a>

							</div>

						</div>
					</div>
				</form>

				@else

				<div id="app-navbar-collapse" class=" collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<!-- <li class="{{ Request::path() === '/' ? 'active' : null }}">
                                    <a href="{{ url('/' )}}" >Home</a>
                                </li> -->
						<li class="{{ Request::path() === 'home' ? 'active' : null }}">
							<a href="{{ url('home' )}}">My tests</a>
						</li>

						@if (Auth::check() && Auth::user()->isTeacher && Auth::user()->isAdmin)
						<li class="{{ Request::path() === 'sitemanagement' ? 'active' : null }}">
							<a href="{{ url('sitemanagement' )}}">
								</i> Human ressources</a>
						</li>
						@endif @if (Auth::check() && Auth::user()->isAdmin)
						<li class="{{ Request::path() === 'newstaff' ? 'active' : null }}">
							<a href="{{ url('newstaff' )}}">
								</i> News & staff </a>
						</li>
						@endif
						<li class="{{ Request::path() === 'about' ? 'active' : null }}">
							<a href="{{ url('about' )}}">
								</i> About </a>
						</li>
						<li class="dropdown">
							<div class="my-li">
								<i class="dropdown-toggle btn name glyphicon glyphicon-user color-black" data-toggle="dropdown" role="button" aria-expanded="false"
								 style="font-size: 23px;font-family:'Glyphicons Halflings'">
									<span class="caret"></span>
								</i>

								<ul class="dropdown-menu" role="menu">
									<li class="color">{{Auth::user()->name}}</li>
									<li>
										<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
											Logout
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
										</form>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
				@endif
			</div>
		</div>
	</nav>
</div>
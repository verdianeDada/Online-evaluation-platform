@extends('layouts.config') @section('body') @include ('auth.login') @include('welcome-page.register-modal')
<div id="about-page">
	<div class="container-fluid h-100 " style="background-color: #fff; text-align: center;">
		@if(session('message'))
		<div class='alert alert-success' style="width: 100%">
			{{ session('message') }}
		</div>
		@endif @if($errors->any())
		<div class="alert alert-danger" style="width: 100%">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
	</div>
	<div class="container-fluid" style="background-color: #f1f1f1">
		<div class="about-me">
			<div class="row  animate__animated animate__backInUp">
				<div class="col-md-6">
					<img src="{{ asset('images/verdiane.jpg') }}" alt=" Verdiane DADA" class="img-responsive mid" style="width: 60%">
				</div>
				<div class="col-md-6" style="text-align:left; padding-right: 90px;">
					<h1 class="color bold" style="margin-top:0px">Who I am</h1>
					<div class="line"></div>
					<p>
						Hello,
					</p>
					<p>
						I'm called
						<b>Geraldine Verdiane DADA.</b>
					</p>
					<p>
						I am
						<b>perfectly bilingual</b> ( French and advanced English); a smiling and friendly person; a hard worker who is always
						eager to learn new concepts;I have the ability to work effectively in a team and under pressure; stress resistant;
						organized and punctual.
					</p>
					<p>
						I'm actually closing a master degree in
						<b>
							<a href="https://www.polytechnique.cm/">National Advanced School of Engineering, Yaounde 1</a>
						</b> in the field of
						<b>Information Systems and Mathematical Engineering</b> and I've graduated from
						<b>Higher Technical Teacher Training College of Bamenda </b> in the field of
						<b>Fundamental Computer Science</b> in 2019.
					</p>
					<p>
						Apart from being a
						<b>Full Stack Web developer</b>, I have +3 years of experience as
						<b>Information Technology Teacher</b> and as
						<b>IT User Support</b>.
					</p>
					<p>
						<b>
							Consult my Curriculum Vitae
							<a href="https://github.com/verdianeDada/Certificates/blob/main/Fr-En%20CV%20Developpement-support%20DADA.pdf">
								Here</a>
						</b>
					</p>

				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color: #fff">
		<div class="row reveal">
			<div class="col-md-6 text-about" style="text-align:left; padding-left: 94px;">
				<h1 class="color bold" style="margin-top:0px">About "Online Evaluation Platform"</h1>
				<div class="line"></div>
				<p>
					This web application was designed and implemented <b>from scratch </b>by me as an end of Second Cycle Project. This was in 2019 when I was enrolled
					in the
					<b>Higher Technical Teacher Training College of Bamenda</b>.
				</p>
				<p>
					In fact, in my beloved country (Cameroon), there is a so called
					<b>“anglophone crisis”</b> which started since 2017. As students, it was very difficult for us to be physically in school
					since we were afraid of being kidnapped or even killed by the strikers. It was then difficult to write exams and get
					the corrections related to them, get in touch with the departmental news as well as with our teachers since their contacts
					were not publicly available.
				</p>
				<p>
					Taking into consideration our situation, I decided to build and propose this Online Evaluation Platform, designed for the
					Computer Science department’s courses and context.
				</p>
				<p>
					I've build this web application
					<b>from Scratch</b> using:
					<ul>
						<li>
							<code>
                                Laravel  version: 5.4
                            </code>
						</li>
						<li>
							<code>
                                VueJS  version: 2.6.4
                            </code>
						</li>
						<li>
							<code>
                                Bootstrap  version: 4.3.1
                            </code>
						</li>
					</ul>
				</p>
			</div>
			<div class="col-md-6">
				<img src="{{ asset('images/about.jpg') }}" alt=" Verdiane DADA" class="img-responsive mid">
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color: #f1f1f1">
		<div class="row reveal">
			<div class="col-md-6">
				<img src="{{ asset('images/objectives.jpg') }}" alt=" Verdiane DADA" class="img-responsive mid">
			</div>
			<div class="col-md-6 text-about" style="text-align:left; padding-right: 94px;">
				<h1 class="color bold" style="margin-top:0px;">Objectives</h1>
				<div class="line"></div>
				<p>
					As specific objectives, I wanted to built a functionnal web application which would:
				</p>
				<ul>
					<li>
						<p>
							Provide suitable online area to our beloved lecturers, where they will be able to set and schedule test papers wherever they
							are and at the end of the set time, download the test report as pdf file format to finally send it to the school record
							office.
						</p>
					</li>
					<li>
						<p>
							Provide a user-friendly personal area where our students will be able to write their exams online, and as soon as the test
							paper ending time reaches, download to its correction such as to learn from their mistakes
						</p>
					</li>
					<li>
						<p>
							Provide a suitable notice area where students will get information about the activities undertaken by the departmental club,
							such as the schedule of extra classes, the maintenance day, requests from the department, etc.
						</p>
					</li>
					<li>
						<p>
							To easily get in touch with our departmental ‘staff as well as our delegates as soon as an issue occurs, one of our aim is
							to provide to the whole department, a very comfortable area each will be able to get their phone numbers, names and
							email addresses.

						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color: #fff">
		<div class="row reveal">
			<div class="col-md-6 text-about" style="text-align:left; padding-left: 94px;">
				<h1 class="color bold" style="margin-top:0px">How it works?</h1>
				<div class="line"></div>
				<p>
					This web application takes into consideration 05 different types of actors which are:
				</p>
				<p>
					<span class="bold color">1) The main administrator: </span>
					He/she can be the a head of option, the department secretary, a teacher or a priviledge person. The department administrator
					can:
					<ul>
						<li>Edit, block and delete users' accounts</li>
						<li>Edit, block and delete courses and attribute them to teachers</li>
						<li>Post, edit and delete departmental staff information</li>
						<li>Attribute and delete failed courses to students</li>
						<li>Post, edit and delete departmental news</li>
					</ul>

				</p>
				<p>
					<span class="bold color">2) The junior administrator: </span>
					He/she is a student and can:
					<ul>
						<li>Post, edit and delete departmental staff information</li>
						<li> Post, edit and delete departmental news</li>
					</ul>

				</p>
				<p>
					<span class="bold color">3) A Computer Science Teacher: </span>
					The teacher can:
					<ul>
						<li>Create test papers for the courses he/she has been attributed</li>
						<li> Get the final results after a test paper is obsolete</li>
					</ul>
				</p>
				<p>
					<span class="bold color">4) An enrolled student: </span>
					A student can:
					<ul>
						<li>Write test papers</li>
						<li> Get test paper correction when it is obsolete</li>
					</ul>
				</p>
				<p>
					<span class="bold color">5) A guest: </span>
					It is anyone who has loaded our welcome page and has not yet login.The guest can:
					<ul>
						<li>View departmental news and the Computer Science departmental staff</li>
						<li> Get acces to the 
							<a href="#">About </a>page</li>
					</ul>
				</p>
				<p>
					You can use the following credentials to be identified as a
					<b>teacher-administrator</b> with the following credentials
					<b>Phone: 672121212 ; Password: "dada"</b> or as a
					<b>student administrator</b> with the following credentials
					<b>Phone: 673131313; Password: "madom"</b>

				</p>
			</div>
			<div class="col-md-6">
				<img src="{{ asset('images/how_works.jpg') }}" alt=" Verdiane DADA" class="img-responsive mid">
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color: #f1f1f1;padding-top: 50px" id="contact-me">
		<div class="row ">
			<div class="col-md-6">
				<img src="{{ asset('images/contact.jpg') }}" alt=" Verdiane DADA" class="img-responsive mid">
			</div>
			<div class="col-md-6 text-about " style="text-align:left;  padding-right: 94px;">
				<h1 class="color bold" style="margin-top:0px;">Contact me</h1>
				<div class="line"></div>
				<!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc8VwUvVjcsSe8jGgODe0fUNq9GtccoXeXAMDR4Pv4ijvTydA/viewform?embedded=true" width="640" height="812" frameborder="0" marginheight="0" marginwidth="0">Chargement…</iframe> -->

				<div id="contact-me">
					<form class="form-horizontal" method="POST" action="/contact" style="margin-top: 30px;">

						{{ csrf_field() }}

						<!-- <div class="form-group">
							<label for="Name">Your name: </label>
							<input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
						</div>
						<div class="form-group">
							<label for="email">Your Email: </label>
							<input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
						</div> -->
						<div class="form-group" style=" margin-top: 30px;">
							<label for="subject">Subject: </label>
							<input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required>
						</div>
						<div class="form-group" style=" margin-top: 30px;">
							<label for="message">Email and Message: </label>
							<textarea type="text" class="form-control" id="message" placeholder="Enter your message here" name="message" required> </textarea>
						</div>
						<div class="form-group" style=" margin-top: 30px;">
							<button type="submit" class="btn btn-primary" value="Send" style="width:100%">Send Message</button>
						</div>

					</form>
				</div>

			</div>
		</div>
	</div>

</div>

@endsection
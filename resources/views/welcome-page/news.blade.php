<section id="welcome-news " class="client-section ptb-80 section--bg bg-overlay-white bg_img" data-background style="background-image: url(/images/news.jpg); background-color: none !important;">
	<div class="container reveal">
		<div class="row justify-content-center">
			<div class="text-center center">
				<div class="section-header ">
					<h1 class="section-title" style=" color: #fff !important; font-weight:200; font-family: cursive; font-weight: 400; font-size: 33px;">
						Department latest news
					</h1>
					<span class="title-border">
						<i class="fa fa-book-open" style="font-size:34px; color:#c9c1c1"></i>
					</span>
				</div>
			</div>
		</div>
		<!-- news slide -->
		<div class="row">
			<div class="container all-news">
				@foreach($news as $news)
				<div class="a-news subject-item section--bg">
					<div class="subject-content">
						<h3 class="bold capitalize  center cursive" style="color:#fff;  margin-bottom: 25px; font-size: 22px;">{{$news->title}}</h3>
						<p class="news-text cursive" style="color:#c9c1c1; font-size: 16px;">{{$news->text}}</p>
					</div>

				</div>
				@endforeach
			</div>

		</div>
	</div>

</section>
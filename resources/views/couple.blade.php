<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>Anniversary Game</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="description" content="Realtime Anniversary Game in Presentation for online video call">
		<meta name="author" content="Unnikrishnan S">

		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/reveal.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/theme/laravel.css') }}" id="theme">

		<!-- Theme used for syntax highlighting of code -->
		<link rel="stylesheet" href="{{ asset('/lib/css/monokai.css') }}">

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="reveal" id="couple">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">

				<section>
					<h2>Join the game</h2>
                    <form id="example_name_form" name="example_name_form" method="POST">
							@csrf
						<div class="form-group">
						    <input type="text" name="example_name" class="form-control" id="exampleName" aria-describedby="exampleNameHelp" placeholder="Enter your name">
						</div>
						<input class="btn btn-primary submit-button" type="submit" value="Join" />
						<div><small id="validation"></small></div>
					</form>
					<div id="example_name_wait" style="display: none;" class="wait spinner-border text-success" role="status">
					  <span class="sr-only">Loading...</span>
					</div>
					<p id="example_name_form_result"></p>
                </section>
                <section>
                    <h5 id="question">Please enter name and click 'Join' in the previous slide to join the game.</h5>
                    <p>
                        <form id="question_answer_form" name="question_answer_form" style="display: none;" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="question_id" value="100" />
                                <input type="text" name="answer" class="form-control" id="answer" aria-describedby="answer" placeholder="Enter your answer">
                            </div>
                            <input class="btn btn-primary submit-button" type="submit" value="Submit Answer" />
                            <div><small id="validation"></small></div>
                        </form>
                        <div id="example_name_wait" style="display: none;" class="wait spinner-border text-success" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </p>
                </section>
				<section style="text-align: left;">
					<h1>Woohoo!</h1>
					<p>
                        Happy wedding anniversary<br>
                        {{--<a href="https://github.com/unnikrishnans/laravel_echo_presentation">github.com/unnikrishnans/laravel_echo_presentation</a> <br>
						<a href="https://twitter.com/unni_in">@unni_in</a> <br>
						<a href="https://unni.in">https://unni.in</a>--}}
					</p>
				</section>

			</div>

		</div>

		<script src="{{ asset('/js/reveal.js') }}"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
		<script>

			// More info https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				center: true,
				hash: false,
				slideNumber: false,
				transition: 'convex', // none/fade/slide/convex/concave/zoom

				// More info https://github.com/hakimel/reveal.js#dependencies
				dependencies: [
					{ src: '/plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: '/plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: '/plugin/highlight/highlight.js' },
					{ src: '/plugin/search/search.js', async: true },
					{ src: '/plugin/zoom-js/zoom.js', async: true },
					{ src: '/plugin/notes/notes.js', async: true }
				]
			});

		</script>
        <script src="{{ asset('/js/audience.js') }}"></script>
	</body>
</html>

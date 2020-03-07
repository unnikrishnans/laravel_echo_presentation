<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>Laravel Echo</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="description" content="Presentation of Laravel Echo to be presented at Laravel Meetup">
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

		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">
				<section>
                    <img class="plain" src="/img/laravel.min.svg" alt="Laravel">
					<h1>Laravel Echo</h1>
					<h3>Real-time Interactions</h3>
					<p>
						<small>
                            Presented by <a href="https://unni.in">Unnikrishnan S</a>
                        </small>
					</p>
					<p>
						<small> 
                            <a href="https://unni.in">https://unni.in</a> 
                            | 
                            <a href="https://twitter.com/unni_in">@unni_in</a></small>
					</p>
				</section>

				<section>
					<h2>Live Example</h2>
                    <form id="example_name_form" name="example_name_form" method="POST">
							@csrf
						<div class="form-group">
						    <input type="text" name="example_name" class="form-control" id="exampleName" aria-describedby="exampleNameHelp" placeholder="Enter your name">
						</div>
						<input class="btn btn-primary" type="submit" value="Send name to presentation" / >
						<div><small id="validation"></small></div>
					</form>
					<div id="example_name_wait" style="display: none;" class="spinner-border text-success" role="status">
					  <span class="sr-only">Loading...</span>
					</div>
					<p id="example_name_form_result"></p>
                </section>

				<section style="text-align: left;">
					<h1>THE END</h1>
					<p>
                        Questions? <br>
                        <a href="https://github.com/unnikrishnans/laravel_echo_presentation">github.com/unnikrishnans/laravel_echo_presentation</a> <br>
						<a href="https://twitter.com/unni_in">@unni_in</a> <br>
						<a href="https://unni.in">https://unni.in</a>
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
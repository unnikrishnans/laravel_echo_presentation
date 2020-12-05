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
        <link rel="stylesheet" href="css/app.css">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/laravel.css" id="theme">

		<!-- Theme used for syntax highlighting of code -->
		<link rel="stylesheet" href="lib/css/monokai.css">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="reveal">

			<div class="slides">
				<section>
                    <img class="plain" src="/img/anniversary/anniversary.png" alt="Happy Wedding Anniversary">
					<!--<h1>Happy Wedding Anniversary</h1>-->
					<!--<h4>Wedding Anniversary Game</h4>
					<p>
						<small>
                            Presented by <a href="https://unni.in">Unnikrishnan S</a>
                        </small>
					</p>
					<p>
						<small>
                            <a href="https://unni.in">https://unni.in</a>
                            |
                            <a href="https://twitter.com/unni_in">@unni_in</a>
                        </small>
					</p>-->
				</section>

                <!-- Join -->
                <section>
                    <div id="example-name-set" count="0"></div>
                    <h2 id="example-name-title">Join the game</h2>
                    <p id="example-name-url">
                        Open {{--<span class="high_score">https://</span>--}}<a href="https://bit.ly/Akhil-Lalitha">bit.ly/Akhil-Lalitha</a>
                    </p>
                    <p id="example-name-help-text">
                        Enter your name and click 'Join'
                    </p>
                    <p id="example-name-help-text-down"></p>
                    <img class="plain laravel-color" src="/img/anniversary/bit.ly_Akhil-Lalitha.svg" alt="bit.ly/Akhil-Lalitha" />
                </section>

                <!-- WebSocket? -->
                <section>
                    <section>
                        <h5 id="sendQuestion" question_id="0">Start</h5>
                        <p>
                            <ul id="answers">
                                {{--answers will come here as the couples answer--}}
                            </ul>
                        </p>
                        <div><small id="validation"></small></div>
                        <div><small id="success"></small></div>
                    </section>
                    <section>
                        <h5>Score card</h5>
                        <p>
                            <ul id="players"></ul>
                        </p>
                    </section>
                </section>


				<section style="text-align: left;">
					<h1>WOOHOO!</h1>
					<p>
                        Happy wedding anniversary<br>
                        {{--<a href="https://github.com/unnikrishnans/laravel_echo_presentation">github.com/unnikrishnans/laravel_echo_presentation</a> <br>
						<a href="https://twitter.com/unni_in">@unni_in</a> <br>
						<a href="https://unni.in">https://unni.in</a>--}}
					</p>
				</section>

			</div>

		</div>

		<script src="js/reveal.js"></script>
        <script src="js/app.js"></script>
		<script>

			// More info https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				center: true,
				hash: true,
                slideNumber: true,
				transition: 'convex', // none/fade/slide/convex/concave/zoom

				// More info https://github.com/hakimel/reveal.js#dependencies
				dependencies: [
					{ src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/highlight/highlight.js' },
					{ src: 'plugin/search/search.js', async: true },
					{ src: 'plugin/zoom-js/zoom.js', async: true },
					{ src: 'plugin/notes/notes.js', async: true }
				]
			});

		</script>
        <script src="/js/presentation.js"></script>
	</body>
</html>

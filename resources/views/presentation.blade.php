<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>Laravel Echo</title>

		<meta name="description" content="Presentation of Laravel Echo to be presented at Laravel Meetup">
		<meta name="author" content="Unnikrishnan S">

		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
					<h2>History</h2>
                    <p>
        				<ul>
        					<li>HTML - 1993</li>
        					<li>Client-side scripting languages</li>
        					<ul>
        						<li>
                                    JavaScript  -  1995
                                </li>
        						<li>
                                    ActionScript  -  1998
                                </li>
        						<li>
                                    Iframe  -  IE  -  1996
                                </li>
        						<li>
                                    XMLHttpRequest (Ajax)  -  IE 5.0  -  1999
                                    <ul><li>XHR Long-Polling and XHR Streaming</li></ul>
                                </li>
                                <li>
                                    True-realtime web model (mc2labs.net) - 2000
                                </li>  
                                <li>
                                    Web Interactive Management (Java + Macromedia Flash) - 2001
                                </li>
                                <li>
                                    WebSocket - Google Chrome 4 - 2009
                                </li>
        					</ul>
        				</ul>
                    </p>
				</section>

				<!-- Example of nested vertical slides -->
				<section>
                    <aside class="notes">
                        https://www.ably.io/blog/websockets-vs-long-polling/
                        <br>
                        https://pusher.com/websockets
                        <br>
                        WebSockets represent a long awaited evolution in client/server web technology. They allow a long-held single TCP socket connection to be established between the client and server which allows for bi-directional, full duplex, messages to be instantly distributed with little overhead resulting in a very low latency connection.
                    </aside>
					<h2>What is a WebSockets?</h2>
					<p>long-held single TCP socket connection</p>
                    <p>bi-directional, full duplex, messages</p>
                    <p>instantly distributed</p>
                    <p>little overhead</p>
                    <p>very low latency connection</p>
                    <p>cross domain communication</p>
                    <p>compatibility with client and server</p>
				</section>

				<section>
					<h2>How it works?</h2>
					<p>
						
					</p>
				</section>

				<section>
					<h2>Live Example</h2>
					<p>
						open https://<a href="https://unni.in/">unni.in/laravel-echo</a>
					</p>
					<p>
						Enter your name in text field
					</p>
				</section>

				<section>
					<h2>How i build this live example</h2>
					<p>
						Laravel echo
                        brodcast
                        pusher
					</p>
				</section>

				<section>
                    <h2>Controller</h2>
                    <pre><code class="hljs" data-trim data-line-numbers="1-5,8-11,18-22">
Broadcast::channel('order.{orderId}', 
    function ($user, $orderId) {
    return $user->id === 
        Order::findOrNew($orderId)->user_id;
});


Echo.private(`order.${orderId}`)
    .listen('ShippingStatusUpdated', (e) => {
        console.log(e.update);
});

/**
 * Get the channels the event should broadcast on.
 *
 * @return \Illuminate\Broadcasting\PrivateChannel
 */
public function broadcastOn()
{
    return new PrivateChannel(
        'order.'.$this->update->order_id);
}
                    </code></pre>
                    </p>
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

		<script src="js/reveal.js"></script>

		<script>

			// More info https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				center: true,
				hash: true,

				transition: 'slide', // none/fade/slide/convex/concave/zoom

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

	</body>
</html>

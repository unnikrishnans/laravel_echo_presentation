<form id="example_name_form" name="example_name_form" method="POST">
		@csrf
	<div class="form-group">
	    <input type="text" name="example_name" class="form-control" id="exampleName" aria-describedby="exampleNameHelp" placeholder="Enter your name">
	</div>
	<input class="btn btn-primary" type="submit" value="Send name to presentation" / >
	<div><small id="validation"></small></div>
</form>
$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
    });

$(document).ajaxStart(function(){
  $("#example_name_wait").show();
});

$(document).ajaxComplete(function(){
  $("#example_name_wait").hide();
});


function submitName(example_name){
	$.ajax({
           type:'POST',
           url:'/audience/submit-name',
           data:{ example_name: example_name },
           success:function(data){
				$("#example_name_form_result").html("Assigned username <span class='laravel-color'>@"+data.name+"</span> for you. Check if its displayed on presentation.");
				$("#example_name_form").hide();
           },
           fail:function(e){
  				$("#example_name_form #validation").html(
  					'Something happened, Please refresh the page and try again');
           }

        });
}


$( "form[name=example_name_form]" ).submit(function( event ) {
  event.preventDefault();
  var example_name = $("input[name=example_name]").val().trim();
  if(example_name != ""){
  		submitName(example_name);
  } else {
  		$("#example_name_form #validation").html(
  			'Please enter your name and click the button');
  }
});

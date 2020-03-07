Echo.channel('publish.name')
    .listen('PublishName', (e) => {
        $("#example-name-set").append("<div id='example-name'>"+e.name+"&nbsp;</div>");
        var count = Number($("#example-name-set").attr('count'));
        count = count+1;
        $("#example-name-set").attr('count',count);
        if(count == 6) {
        	$("#example-name-title").css("color","#ffffff");
        } else if(count == 10) {
        	var url_data = $("#example-name-url").html();
        	$("#example-name-url").css("color","#ffffff");
        	$("#example-name-url a").css("color","#ffffff");
        	$("#example-name-help-text").html(url_data);
        } else if(count == 20) {
        	var url_data = $("#example-name-help-text").html();
        	url_data = url_data.replace("open", "");
        	$("#example-name-help-text").css("color","#ffffff");
        	$("#example-name-help-text a").css("color","#ffffff");
        	$("#example-name-help-text-down").html(url_data);
        }
    });
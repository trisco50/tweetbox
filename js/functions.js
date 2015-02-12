/*var messages = {
	getAllMessages: function() {
	
		$.ajax({
			url: "http://localhost/unit3/messages.php",
			dataType: "json"
		})
		.done(function(data) {
			for (var m in data) {
				console.log(data[m].content);
		});
	},
	displayMesssage: function(messageText) {
		if ($(".message").hasClass("current") == false) {
			$(".message").html($("#message-text").val());
			$(".message").addClass("current");
			$(".message").show();
		}	
		else {
			var current = $(".current").clone().html(messageText);
			$(".current").after(current).removeClass("current");
		}
	},
	addMessage: function() {
		$.ajax({
			url: "http://localhost/unit3/save.php",
			type: "POST",
			data: {content:messageText},
		})
		.done(function(data) {
			console.log(data);
		})
		.fail(function(jqXHR,status) {
			console.log(status)
		});
	}
}

$(document).ready(function() {

	messages.getAllMessages();
	
	$("#message-btn").click(function() {
		var messageText = $("#message-text").val();
		
		if (messageText != "") {
			messages.addMessage(messageText);
		}
		
	});
});

*/
$(document).ready(function() {
	$("#message-btn").click(function() {
		var messageText = $("#message-text").val();
		
		
		$.ajax({
			url: "http://localhost/unit3/messages.php",
		})
		.done(function(data) {
			console.log(data);
		});
		
		if (messageText != "") {
		
			if ($(".message").hasClass("current") == false) {
				$(".message").html($("#message-text").val());
				$(".message").addClass("current");
				$(".message").show();
			}	
			else {
			
				var current = $(".current").clone().html(messageText);
				$(".current").after(current).removeClass("current");
			}
		}
		
	});
});


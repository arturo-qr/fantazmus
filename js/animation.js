$(document).ready(function() {
	$("#background").css("display", "none");
	
    $("#background").fadeIn(500);
	$("a.transition").click(function(event){
		
		event.preventDefault();
		linkLocation = this.href;
		
		$("#background").fadeOut(500,redirectPage);
	});
		
	function redirectPage() {
		window.location = linkLocation;
	}

});

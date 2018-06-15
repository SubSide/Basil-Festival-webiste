$(document).ready(function(){
	if($(this).scrollTop() > 25){
		$("#menu").addClass("scrolled");
	}

	$(document).scroll(function(){
		if($(this).scrollTop() > 25){
			$("#menu").addClass("scrolled");
		} else {
			$("#menu").removeClass("scrolled");
		}
	});

	$(".artist .short").click(function(){
		$(this).parent().find(".long").toggle(500);
		$(this).parent().toggleClass("expanded");
	});

	$(".faq-question .question").click(function(){
		$(this).parent().find(".answer").toggle(500);
		$(this).parent().toggleClass("expanded");
	});
});
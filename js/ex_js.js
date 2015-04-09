$("document").ready(function(){
	$(":input").mouseover(function(){
		$(this).addClass('class');
		//$("#user_info tr.info td").css('color', 'blue');
		$(this).click(function(){
			$(this).removeClass('class');
			//$(this).css('color', 'blue');
		});
	});
	$(":input").mouseout(function(){
		$(this).removeClass('class');
		$("#user_info tr.info td").css('color', '#669');
	});
});
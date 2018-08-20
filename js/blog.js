function newComment(){
	var dataID = $('data_id').getValue();
	
	if ($('name').getValue() != '' && $('blurb').getValue() != '') {
		$('commentSubmit').disabled=true;
		$('commentSubmit').setProperty('value','Please Wait...');
		
		$('blanks').style.display = 'none';
		$('commentLoader').style.display = 'block';
		
		var url = '/new_article_comment/';
		new Ajax(
			url,
			{
				method: "post",
				data: $('commentForm')
			}
		).request().chain(function() {
			url = '/jax/get_new_comment/'+dataID+'/';
			new Ajax(
			   url,
			   {
				 method: "get",
				 update: $('newComm')
			   }
			 ).request().chain(function() {
				$('name').setProperty('value','');
				$('commentEmail').setProperty('value','');
				$('website').setProperty('value','');
				$('blurb').setProperty('value','');
				
				$('commentLoader').style.display = 'none';
				
				$('commentSubmit').disabled=false;
				$('commentSubmit').setProperty('value','Submit');
				
				var newSlide = new Fx.Slide('newComm');
				newSlide.hide();
				
				$('newComm').style.display = 'block';
				newSlide.toggle();
			});
		 });
	} else {
		$('blanks').style.display = 'block';
	}
}
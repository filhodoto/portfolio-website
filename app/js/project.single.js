$(document).ready(function() 
{
	var body = $('body'),
		windowWidth = $(window).width(),
		main = body.find('main');
	
	//give class to body so we can use it as a hook in CSS
	body.addClass('js');
	
	//lazy load on project images
	if (windowWidth > 601)
	{
		main.find('figure img').lazyload(
		{
			effect:'fadeIn',
			threshold:1000
		});

		//main.find('figure img').lazyLoadXT();
	}
	else
	{
		main.find('figure img').each(function()
		{
			//get imge link from "data-original"
			var imgSrc = $(this).attr('data-original');

			//give src of images to the img
			$(this).attr('src', imgSrc);
		});
	}
});
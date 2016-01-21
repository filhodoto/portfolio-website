

/*
var populateHeader = function (intro, header)
{
	var links = intro.find('ul').clone(),
		social = intro.find('ol').clone();
		
	//move cloned buttons to header
	header.find('section').append(social, links);
	
	//wrap text in a span so we can hide it in responsive
	header.find('h1 a, ul li a').wrapInner('<span></span>');
	
}
*/

var goToProject = function (arrow, body)
{
	var nextProject = arrow.parent('.project').next(),
		prevProject = arrow.parent('.project').prev();
	

	//if DOWN arrow
	if (arrow.hasClass('down'))
	{
		body.scrollTo(nextProject, 300);
		
/*
        $('html, body').animate({
            scrollTop: nextProject.offset().top
        }, 1000);
*/
		
	}
	//if UP arrow
	else
	{
		body.scrollTo(prevProject, 300);

/*
        $('html, body').animate({
            scrollTop: prevProject.offset().top
        }, 1000);
*/
		
	}
	
};


$(document).ready(function() 
{

	var body = $('body'),
		windowWidth = $(window).width(),
		header = body.find('header'),
		main = body.find('main'),
		intro = main.find('#intro'),
		introHeight = intro.find('div').height(),
		projects = body.find('.project'),
		arrow = projects.find('.arrow');
			
	
	//give class to body so we can use it as a hook in CSS
	body.addClass('js');
	
	//scroll to projects when click on "see work"
	intro.find('.tools').click(function(e)
	{
		e.preventDefault();
		
		body.scrollTo(main.find('.project'), 300);
	});
	
	//scroll to next project when clicking on down arrow
/*
	arrow.click(function(e)
	{
		e.preventDefault();

		goToProject($(this), body);
	});
*/
	
	
	
	//scroll to top when click on "intro"
	if(header.find('h1').length){header.find('h1').click(function(e){e.preventDefault(); body.scrollTo(intro, 300);})};
		
	
	//////////// Projects gallery ////////////
	
	//define settings for galleries (aside with a's)
/*
	projects.find('figure aside').each(function () 
	{
	    $(this).magnificPopup(
	    {
	        delegate: 'a',
	        gallery: {
	            enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
	            
	        },
	        type: 'image'
	    });
	});
	
	//call projects gallery individually
	projects.find('figure figcaption').click(function()
	{
	    //call popup in container with image links
	    $(this).next().magnificPopup('open');
	});
	
*/
		    
	//define settings for popup in .extras
	main.find('.extras ul li figure a').each(function () 
	{
	    var link = $(this);
	    	    
	    //if it's a link to a webpage
	    if (link.hasClass('ajax'))
	    {
			
		    link.magnificPopup(
		    {			
				type: 'ajax',
				//alignTop: true,
				overflowY: 'scroll'
			});	    
	    }
	    else
	    {
		    link.magnificPopup(
		    {
		        type: 'image',
				image: {
					tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
					titleSrc: function(item)
					{						
						
						return item.el.attr('title') + '<span>' + item.el.attr('data-info') + '</span>';
					}
				}		        
		    });
	    }
	});
	//////////// End projects gallery ////////////

	//populate header with information
	//populateHeader(intro, header);

	
	//show header with waypoints
	var showHeader = new Waypoint(
	{
		element: intro.find('div'),
		handler: function(direction) 
		{
			if (direction === 'down') {
				header.addClass('show', 300);
			}
			else
			{
				header.removeClass('show', 300);
			}
		},
		offset: function() 
		{
			//need a way to do this without using px
			return -(introHeight)
		}
  	})

	//show tooltip when enter first project
	var showTooltip = new Waypoint(
	{
		element: $('body .tooltip'),
		handler: function(direction) 
		{
			var tooltip = body.find('.tooltip');
			
			//show tooltip
			if (direction === 'down' && windowWidth > 800)
			{
				tooltip.delay(10000).addClass('show', 700);					
			}
		},
		offset: 'bottom-in-view'
  	})


	//lazy load on project images
	if (windowWidth > 601)
	{
		projects.find('figure img').lazyload(
		{
			 effect : "fadeIn",
			 threshold : 400
		});	
	}
	else
	{
		projects.find('figure img').each(function()
		{
			//get imge link from "data-original"
			var imgSrc = $(this).attr('data-original');

			//give src of images to the img
			$(this).attr('src', imgSrc);
		});
	}

	//remove tooltip so it only shows once
	var removeTooltip = new Waypoint(
	{
		element: body.find('.tooltip'),
		handler: function(direction) 
		{
			var tooltip = body.find('.tooltip');

			tooltip.remove();
		},
		offset: '0'
  	})


	/////////////////////
	//RESPONSIVE
	/////////////////////
	
	
});








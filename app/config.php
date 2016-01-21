<?php

set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );

//Define timezone
date_default_timezone_set('Europe/Lisbon');

//define root path
$root = $_SERVER["DOCUMENT_ROOT"];


$currentYear = date('Y');
$copyright = 'copyright Gonçalo Ramalho ' . $currentYear;

//define content for projects, one array for each project

// ----- VOSS   ----- //

$voss = array(
	'title' => 'VOSS Solutions',
	'sub-title' => 'Front-end development',
	'content' => '<p>While working with <a href="http://www.webmadegood.com" target="_blank">Web Made Good</a> I helped develop a new easy to understand and accessible website for VOSS, a software company that offers an innovative software platform for managing enterprise communications. I was in charge of the front-end development, creating purpose-specific templates that helped create a vast responsive website, making it easier for the client to communicate with their target customers.</p>',
	'tech' => 'HTML, CSS3, jQuery',
	'site' => 'http://voss-solutions.com'
);



// ----- COWORK ----- //

$cowork = array(
	'title' => 'Cowork Central',
	'sub-title' => 'Front-end development',
	'content' => '<p>Cowork Central is a creative space in Lisbon who lease desks and meeting rooms to small companies and freelancers. In an effort to effectively reach their target market, they created a new website. My role was to assist with the front-end development and I was also in charge of transforming it in a responsive mobile platform.</p>',
	'tech' => 'HTML, CSS3, jQuery',
	'site' => 'http://www.coworkcentral.pt/'
);


// ----- MISHKA ----- //

$mishka = array(
	'title' => 'Mishka Rushdie Momen',
	'sub-title' => 'Front-end development',
	'content' => '<p>Mishka Rushdie Momen is a very gifted pianist from London. She studied with Joan Havill and Imogen Cooper at the Guildhall School of Music and Drama and has also periodically studied with Alfred Brendel and Richard Goode. While working with <a href="http://www.webmadegood.com" target="_blank">Web Made Good</a> I helped with the front-end development of her website and was also in charge of creating the site responsibly.</p>',
	'tech' => 'HTML, CSS3, jQuery',
	'site' => 'http://www.mishkarushdiemomen.com/'
);


// ----- WHITE BRASSERIE ----- //

$whitebrasserie = array(
	'title' => 'White Brasserie',
	'sub-title' => 'Front-end development',
	'content' => '<p>While working with <a href="http://www.webmadegood.com" target="_blank">Web Made Good</a> I helped develop a series of websites for a restaurant chain based the UK called White Brasserie. This project presupposed creating several websites, one for each restaurant, with the same template base. My job was to create several responsive front-end templates, that would connect with WMG’s own CMS, in a way that would minimize the amount of work one would need when creating a website for each different restaurant.</p>',
	'tech' => 'HTML, CSS3, jQuery',
	'site' => 'http://www.whitebrasserie.com/'
);


// ----- INTONE ----- //

$intone = array(
	'title' => 'Intone Films',
	'sub-title' => 'Front-end development',
	'content' => '<p>Intone Films is a studio that creates short films and animations for companies, organizations and artists. They asked WMG for a website that would help them build up their business and my task was to develop the front-end of the website in a responsive way.</p>',
	'tech' => 'HTML, CSS3, jQuery',
	'site' => 'http://www.intonefilms.com/'
);


// ----- IN.ED ----- //


$ined = array(
	'title' => 'IN.ED',
	'sub-title' => 'Development & maintenance ',
	'content' => '<p>My role was to develop a website which assists a new small business to successfully enter a highly competitive market. I was solely responsible for the design and development and I have been working with them ever since, building a long term relationship with the client.</p>',
	'tech' => 'HTML, CSS3, jQuery, PHP',
	'site' => 'http://ined.com.pt/'
);


// ----- AFRICA MONITOR ----- //

$africamonitor = array(
	'title' => 'Africa Monitor',
	'sub-title' => 'Front-end development',
	'content' => '<p>Africa Monitor is a website with news about the Portuguese speaking African countries. In this project my job was to develop the front-end of the website in a responsive way.</p>',
	'tech' => 'HTML, CSS3, jQuery',
	'site' => 'http://www.africamonitor.net/'
);

// ----- Extras ----- //


$extras = array(
	'title' => 'Other type of work',
	'content' => "<p>Designing and developing websites is what I do best but I’ve tried other territories and have passion for other sides of the web world. Here you can find some other work I’ve done over the years.</p>

					<p>Designing and developing websites is my forte, however I have experience in many different web-based areas such as graphic design, print materials or photo manipulation. I have a passion for the web world, I enjoy a challenge and I'm constantly gaining new web based skills. Here you can find some other work I’ve done over the years.</p>",
	'tech' => 'HTML, CSS3, jQuery',
	'site' => 'http://voss-solutions.com'
);


?>
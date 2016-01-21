(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

$(document).ready(function () {
	var body = $("body"),
	    windowWidth = $(window).width(),
	    main = body.find("main");

	//give class to body so we can use it as a hook in CSS
	body.addClass("js");

	//lazy load on project images
	if (windowWidth > 601) {
		main.find("figure img").lazyload({
			effect: "fadeIn",
			threshold: 1000
		});

		//main.find('figure img').lazyLoadXT();
	} else {
		main.find("figure img").each(function () {
			//get imge link from "data-original"
			var imgSrc = $(this).attr("data-original");

			//give src of images to the img
			$(this).attr("src", imgSrc);
		});
	}
});

},{}]},{},[1]);

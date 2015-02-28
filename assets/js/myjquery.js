$(document).ready(function() {
	$('.carousel').carousel({interval: 3000});
});

$(function(){
	$('.nav a').filter(function(){
		return this.href==location.href
	}).parent().addClass('active').siblings().removeClass('active');
});
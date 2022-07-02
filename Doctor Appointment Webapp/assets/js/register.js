$(document).ready(function()
{
	// jquery object with hidelogin selecter to hide register and login form
	$("#hidelogin").click(function(){
		$("#loginform").hide();
		$("#registerform").show();
	});

	$("#hideregister").click(function(){
		$("#loginform").show();
		$("#registerform").hide();
	});
})
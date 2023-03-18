$('.side-bar-close').on("click",function(){
	$( ".side-bar-main" ).css( "right", "-100%" );
	$( "#side-bar-01" ).css( "right", "-100%" );
	$( "#side-bar-email" ).css( "right", "-100%" );
	$( "#side-bar-add-new-email" ).css( "right", "-100%" );
	$( "#side-bar-change-pass" ).css( "right", "-100%" );
	setTimeout(
	  function() 
	  {
		$( ".full-wrap" ).css( "right", "-100%" )
	  }, 400);
	$( "#save-account" ).css( "bottom", "-100%" );
	$( "#save-email" ).css( "bottom", "-100%" );
})
$('.burger-btn').on("click",function(){
	$( ".side-bar-main" ).css( "right", "0%" );
	$( ".full-wrap" ).css( "right", "0%" );
})
$('.row-side-main').on("click",function(){
	$( "#side-bar-01" ).css( "right", "0%" );
})
$('#back-01').on("click",function(){
	$( "#side-bar-01" ).css( "right", "-100%" );
	$( "#save-account" ).css( "bottom", "-100%" );
	$( "#save-email" ).css( "bottom", "-100%" );
})
$('#show-email').on("click",function(){
	$( "#side-bar-email" ).css( "right", "0%" );
})
$('#back-email').on("click",function(){
	$( "#side-bar-email" ).css( "right", "-100%" );
	$( "#save-account" ).css( "bottom", "-100%" );
})
$('#add-email').on("click",function(){
	$( "#side-bar-add-new-email" ).css( "right", "0%" );
})
$('#back-add-email').on("click",function(){
	$( "#side-bar-add-new-email" ).css( "right", "-100%" );
	$( "#save-email" ).css( "bottom", "-100%" );
	
})
$('#show-change-pass').on("click",function(){
	$( "#side-bar-change-pass" ).css( "right", "0%" );
})
$('#back-change-pass').on("click",function(){
	$( "#side-bar-change-pass" ).css( "right", "-100%" );
})
$("#username-input").focus(function() { 
    $( "#account-name" ).css( "background-color", "#fff2ed" );
	$( "#account-name" ).css( "border-color", "#ee6123" );
	$( "#save-account" ).css( "bottom", "25px" );
}); 
$("#username-input").focusout(function() { 
    $( "#account-name" ).css( "background-color", "#fff" );
	$( "#account-name" ).css( "border-color", "#dde0e2;" );
}); 
$("#email-input").focus(function() { 
    $( "#input-email" ).css( "background-color", "#fff2ed" );
	$( "#input-email" ).css( "border-color", "#ee6123" );
	$( "#save-email" ).css( "bottom", "25px" );
}); 
$("#email-input").focusout(function() { 
    $( "#input-email" ).css( "background-color", "#fff" );
	$( "#input-email" ).css( "border-color", "#dde0e2;" );
}); 
$("#new-pass").focus(function() { 
    $( "#new-pass-div" ).css( "background-color", "#fff2ed" );
	$( "#new-pass-div" ).css( "border-color", "#ee6123" );
}); 
$("#new-pass").focusout(function() { 
    $( "#new-pass-div" ).css( "background-color", "#fff" );
	$( "#new-pass-div" ).css( "border-color", "#dde0e2;" );
}); 
$("#old-pass").focus(function() { 
    $( "#old-pass-div" ).css( "background-color", "#fff2ed" );
	$( "#old-pass-div" ).css( "border-color", "#ee6123" );
}); 
$("#old-pass").focusout(function() { 
    $( "#old-pass-div" ).css( "background-color", "#fff" );
	$( "#old-pass-div" ).css( "border-color", "#dde0e2;" );
}); 
$("#conf-pass").focus(function() { 
    $( "#conf-pass-div" ).css( "background-color", "#fff2ed" );
	$( "#conf-pass-div" ).css( "border-color", "#ee6123" );
}); 
$("#conf-pass").focusout(function() { 
    $( "#conf-pass-div" ).css( "background-color", "#fff" );
	$( "#conf-pass-div" ).css( "border-color", "#dde0e2;" );
}); 

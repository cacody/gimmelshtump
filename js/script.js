


jQuery(document).ready(function ($) {

/**  DEPRECATED
$(function () {
    //  Accordion Panels
          $(".accordion div").hide();
         // setTimeout("$('.accordion div').slideToggle('slow');", 1000);
          $(".accordion h3").click(function () {
            $(this).next(".pane").slideToggle("fast").siblings(".pane:visible").slideUp("fast");
            $(this).toggleClass("current");
            $(this).siblings("h3").removeClass("current");
          });
});
**/

// accordions
$(function () {
  $(".accordion div").hide();
  $(".accordion h3").click(function () {
    $(this).next(".pane").slideToggle("fast").siblings(".pane:visible").slideUp("fast");
    $(this).toggleClass("current");
    $(this).siblings("h3").removeClass("current");
  });
});

$(function () {
  $(".accordion-lev-2").css("display","block");
  $(".accordion-lev-2 div").hide();
  $(".accordion-lev-2 h4").click(function () {
    $(this).next(".pane-lev-2").slideToggle("fast").siblings(".pane-lev-2:visible").slideUp("fast");
    $(this).toggleClass("current");
    $(this).siblings("h4").removeClass("current");
  });
});



//  $(".trigger1").click(function(){

$(".trigger1").live('touchstart click', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

	if ($(".area2").hasClass("active")) {
		$(".area2").removeClass("active");
		$(".area2").toggle();
	}
	if ($(".area3").hasClass("active")) {
		$(".area3").removeClass("active");
		$(".area3").toggle();
	}
	if ($(".area4").hasClass("active")) {
		$(".area4").removeClass("active");
		$(".area4").toggle();
	}
	if ($(".area1").hasClass("active")) {
		$(".area1").removeClass("active");
	}
	else {
    $(".area1").addClass("active");}
	$(".area1").toggle(100);

event.handled = true;
        } else {
            return false;
        }
});

// $(".trigger2").click(function(){

$(".trigger2").live('touchstart click', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

	if ($(".area1").hasClass("active")) {
		$(".area1").removeClass("active");
		$(".area1").toggle();
	}
	if ($(".area3").hasClass("active")) {
		$(".area3").removeClass("active");
		$(".area3").toggle();
	}
	if ($(".area4").hasClass("active")) {
		$(".area4").removeClass("active");
		$(".area4").toggle();
	}
	if ($(".area2").hasClass("active")) {
		$(".area2").removeClass("active");
	}
	else {
    $(".area2").addClass("active");}
	$(".area2").toggle(100);

event.handled = true;
        } else {
            return false;
        }
});

//  $(".trigger3").click(function(){

$(".trigger3").live('touchstart click', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

	if ($(".area1").hasClass("active")) {
		$(".area1").removeClass("active");
		$(".area1").toggle();
	}
	if ($(".area2").hasClass("active")) {
		$(".area2").removeClass("active");
		$(".area2").toggle();
	}
	if ($(".area4").hasClass("active")) {
		$(".area4").removeClass("active");
		$(".area4").toggle();
	}
	if ($(".area3").hasClass("active")) {
		$(".area3").removeClass("active");
	}
	else {
    $(".area3").addClass("active");}
	$(".area3").toggle(100);

event.handled = true;
        } else {
            return false;
        }
});


//  $(".trigger4").click(function(){

$(".trigger4").live('touchstart click', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

	if ($(".area1").hasClass("active")) {
		$(".area1").removeClass("active");
		$(".area1").toggle();
	}
	if ($(".area2").hasClass("active")) {
		$(".area2").removeClass("active");
		$(".area2").toggle();
	}
	if ($(".area3").hasClass("active")) {
		$(".area3").removeClass("active");
		$(".area3").toggle();
	}
	if ($(".area4").hasClass("active")) {
		$(".area4").removeClass("active");
	}
	else {
    $(".area4").addClass("active");}
	$(".area4").toggle(100);

event.handled = true;
        } else {
            return false;
        }

  });

$('[data-toggle], [data-target]').each(function(index, value) {
        $(this).removeAttr('data-toggle')
               .removeAttr('data-target');
    });


$('span').remove('.caret');
$(".draggable").addClass("table");
$(".draggable").addClass("table-striped");

$(function(){
    $('.carousel').carousel({
      interval: 4000
    });
});


//$('#dumb').modal();
//$('#feedback').modal('hide');
//$('#feedback').modal('toggle');

$("#headline").owlCarousel({  
    items : 1,
    autoplay : true,
    autoplayHoverPause : true,
    animateOut : 'fadeOut',
    animateIn : 'fadeIn'
  }); 


$( "#tabs" ).tabs({show:'fade',hide:'fade'});

});





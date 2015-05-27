
$(document).ready(function(){


$(".scndstep").css("display", "none");

$(".bar2").css("width", $(".etap-bloc").width());
$( window ).resize(function() {
	$(".bar2").css("width", $(".etap-bloc").width());
});
if ($(".bar2") != null) {
	$('.bar2').slick({
		slidesToShow: 1,
	    slidesToScroll: 1,
	    fade: true,
	    infinite: true,
	    speed: 1500,
	   	autoplay: true,
	 	autoplaySpeed: 2000,
	});
}
});

$('.buttonabo1').click(doAbo1);
$('.buttonabo2').click(doAbo2);
$('.buttonabo3').click(doAbo3);

function doAbo1()

{
	$('.buttonabo2').css("opacity", "0");
	$('.buttonabo3').css("opacity", "0");
	$('.buttonabo1').css("margin-top", "0");
	$('.buttonabo1').css("margin-top", "10%");
}
function doAbo2()
{
	$('.buttonabo2').unbind();
	$('.buttonabo1').css({opacity: '0'},{duration:1000, queue:false});
	$('.buttonabo2').css({opacity: '0'},{duration:1000, queue:false});	
	$('.buttonabo3').css({opacity: '0'},{duration:1000, queue:false});

	movesub();
	timeoutID = window.setTimeout(function() {displayAbo2(true);//true is a param not display true
	},700);

}
function movesub(){
		$('.subs').animate({
		width: '66%', height: '600px'
		}, { duration: 1000, queue: false }
		);
		$('.subs').animate({
		marginLeft: '20%'
		}, { duration: 1000, queue: false }
		);
}
function displayAbo2(){
		$('.buttonabo1').css("display", "none");
		$('.buttonabo3').css("display", "none");
		var height = $('.buttonabo1').outerHeight() - 40;

		$('.buttonabo2').css({opacity: '1', marginTop:"40px"},{duration:800, queue:false});


		timeoutID = window.setTimeout(function() {displayScndstep(true);//true is a param not display true
		},750);

}
function displayScndstep(){
	$(".scndstep").css("display", "inline-block");
	 $( "#btnSelect" ).css("visibility", "hidden");
	$("#weekCal").weekLine({
	dayLabels: ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi"],
 	});
 		$( "#weekCal" ).mouseout(function() {
 		doSelect();
 		});


	$('#timepicker1').timepicker();

	$('#timepicker2').timepicker();

	$('#timepicker3').timepicker();

	$('#timepicker4').timepicker();

	$('#timepicker5').timepicker();


	$('#btnSelect').click(doSelect);
}

function doSelect()
{
	var dayz = $("#weekCal").weekLine('getSelected', 'dayLabels');
	var inputval = $( ":input[name='daychoice']" );
	var iterator = 0;

	inputval.val(dayz);
	$('#time'+5).css( "display", "none" );
	$('#time'+1).css( "display", "none" );
	$('#time'+2).css( "display", "none" );
	$('#time'+3).css( "display", "none" );
	$('#time'+4).css( "display", "none" );


	var arrdayz = $("#weekCal").weekLine('getSelected', 'dayLabels').split(",");

	if (arrdayz['0']!=""){
		iterator= arrdayz.length;
	}else{iterator=null;}


	var subscriptionid = $('#btnSelect').data('id');
	var dayNumber = 0;
	if (subscriptionid == 1) {
		dayNumber = 1;
	} else if (subscriptionid == 2) {
		dayNumber = 3;
	} else if (subscriptionid == 3) {
		dayNumber = 5;
	}
	if (iterator!=null){
		if (iterator <= dayNumber ) {
		     $( ".btnform" ).css( "display", "inline-block" );
		     $( '#return' ).text('');

		arrdayz.forEach(function (élément, index) {
		    timenm = index+1;
		    $('#time'+timenm).css( "display", "inline-block" );
		    $('#timename'+timenm).text(élément);
		});
		} else {
			$( ".btnform" ).css( "display", "none" );
		   	$( '#return' ).text('Trop de jours sont séléctionnés pour cette abonnement');
		} 
	}else{
		$( ".btnform" ).css( "display", "none" );
		$( '#return' ).text("Veuillez selectionner les jours d'abonnement");
	}
}




function doAbo3()
{
	$('.buttonabo1').css("opacity", "0");
	$('.buttonabo2').css("opacity", "0");
	$('.buttonabo3').css("margin-top", "10%");
}
$(window).bind('beforeunload', function(){
$('body').fadeTo(100, 0.9);
});
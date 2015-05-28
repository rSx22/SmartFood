
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

var id = $('.abo').data('subid');
var redirectid1;
var redirectid2;
	switch(id) {
    case 1:
        redirectid1=2;
        redirectid2=3;
        break;
    case 2:
        redirectid1=1;
        redirectid2=3;
        break;
    case 3:
        redirectid1=1;
        redirectid2=2;
        break;
	} 

$('.aboelse1').text('formule N#'+redirectid1);
$('.aboelse2').text('formule N#'+redirectid2);
$('.abo').click(doAbo);
$('.aboelse1').click(change1);
$('.aboelse2').click(change2);


function doAbo()
{
	$('.abo').unbind();

	movesub();
	timeoutID = window.setTimeout(function() {displayAbo2(true);//true is a param not display true
	},700);

}
function movesub(){
		$('.aboelse1').animate({opacity: '0'},{duration:500, queue:false});
		$('.aboelse2').animate({opacity: '0'},{duration:500, queue:false});	
		$('.abo').css('opacity', '0',{duration:1000, queue:false});	
		$('.subs').animate({
		width: '63%', height: '600px'
		}, { duration: 1000, queue: false }
		);
		$('.subs').animate({
		marginLeft: '20%'
		}, { duration: 1000, queue: false }
		);
}
function displayAbo2(){
		$(".scndstep").css("display", "inline-block");
		$(".scndstep").css("opacity","0");
		$('.buttonabo23').css({marginLeft: '15%'},{duration:1000, queue:false});
		//$('.buttonabo2').css({opacity: '1', marginTop:"40px"},{duration:800, queue:false});
		timeoutID2 = window.setTimeout(function() {displayScndstep(true);//true is a param not display true
		},750);

}
function displayScndstep(){
	$( ".abo" ).css("color", "#4b9f78");
	$( ".buttonabo" ).css("marginLeft", "30%");
	$( ".buttonabo23" ).css("marginLeft", "20%");
	$('.abo').css({opacity: '1'},{duration:1000, queue:false});
	$(".scndstep").css({opacity: '1'},{duration:1000, queue:false});
	$('.aboelse1').css({opacity: '1'},{duration:1000, queue:false});
	$('.aboelse2').css({opacity: '1'},{duration:1000, queue:false});
	$( "#btnSelect" ).css("visibility", "hidden");
	$("#weekCal").weekLine({
	dayLabels: ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi"],
 	});
 		$( "#weekCal" ).click(function() {
 		doSelect();
 		});


	$('#timepicker1').timepicker();

	$('#timepicker2').timepicker();

	$('#timepicker3').timepicker();

	$('#timepicker4').timepicker();

	$('#timepicker5').timepicker();

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




function change1()
{
	window.location.replace('http://localhost/newproject/web/index.php?p=subscription&id='+redirectid1);
}

function change2()

{
	window.location.replace('http://localhost/newproject/web/index.php?p=subscription&id='+redirectid2);
}



$(window).bind('beforeunload', function(){
	$('.zob').width("10%");

	$('.barimg').ready(function() {
	    $('.zob').width("30%");
	});
	$('.bottombarr').ready(function() {
	    $('.zob').width("50%");
	});
	$('body').ready(function() {
	    $('.zob').width("98%");
	});
});
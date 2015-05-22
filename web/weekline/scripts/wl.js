
$("#weekCal").weekLine({
	dayLabels: ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi"],
 });


$('#timepicker0').timepicker();
$('#timepicker0').on('changeTime', function() {
    $('#daytimechoice0').text($(this).val());
});
$('#timepicker1').timepicker();
$('#timepicker1').on('changeTime', function() {
    $('#daytimechoice1').text($(this).val());
});
$('#timepicker2').timepicker();
$('#timepicker2').on('changeTime', function() {
    $('#daytimechoice2').text($(this).val());
});

$('#btnSelect').click(doSelect);
function doSelect()
{
	var dayz = $("#weekCal").weekLine('getSelected', 'dayLabels');
	var inputval = $( ":input[name='daychoice']" );
	var iterator = 0;

	inputval.val(dayz);
	$('#time'+0).css( "display", "none" );
	$('#time'+1).css( "display", "none" );
	$('#time'+2).css( "display", "none" );
	$('#time'+3).css( "display", "none" );
	$('#time'+4).css( "display", "none" );
	$('#time'+5).css( "display", "none" );

	var arrdayz = $("#weekCal").weekLine('getSelected', 'dayLabels').split(",");

	arrdayz.forEach(function (élément, index) {

	    iterator++;
	});

	var subscriptionid = $('#btnSelect').data('id');
	var dayNumber = 0;
	alert(subscriptionid);
	if (subscriptionid == 1) {
		dayNumber = 1;
	} else if (subscriptionid == 2) {
		dayNumber = 3;
	} else if (subscriptionid == 3) {
		dayNumber = 5;
	}
	if (iterator <= dayNumber ) {
	     $( ":input[name='butnform']" ).css( "display", "inline-block" );
	     $( '#return' ).text('');

	arrdayz.forEach(function (élément, index) {
	     	    $('#time'+index).css( "display", "inline-block" );
	    $('#timename'+index).text('Horaire de livraison le '+élément);
	});
	} else {
		$( ":input[name='butnform']" ).css( "display", "none" );
	   	$( '#return' ).text('Trop de jours sont séléctionnés pour cette abonnement');
	} 
	
}



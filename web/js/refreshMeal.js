

$(function() {
    $('.proposition-btn').click(function() {

        var meal1 = $('.plat1desc').text();
        console.log(meal1);

        if (meal1 == "Plat 1"){
            console.log(meal1);
                $('.plat1').css('background-image', 'url(./images/asset/carbonara.png)');
                $('.plat1desc').text('Carbonara');
        }

        else if (meal1 = "Carbonara"){
            $('.plat1').css('background-image', 'url(./images/asset/polaroid.png)');
            $('.plat1desc').text('Plat 1');
        }

    });
});



$(function() {
    $('.proposition-btn').click(function() {

        var meal2 = $('.plat2desc').text();

        if (meal2 == "Plat 2"){
            $('.plat2').css('background-image', 'url(./images/asset/tomates.png)');
            $('.plat2desc').text('Salade de tomates');
        }

        else if (meal2 = "Salade de tomates"){
            $('.plat2').css('background-image', 'url(./images/asset/polaroid.png)');
            $('.plat2desc').text('Plat 2');
        }

    });
});
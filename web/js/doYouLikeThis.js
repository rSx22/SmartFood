$(function() {
    $('.rate-item').click(function() {
        $.ajax({
            url : 'index.php?p=addAppreciation',
            type : 'POST',
            data : {appreciation: $(this).attr('data-like')},
            dataType : 'json'



        });
    });
});

$(function() {
    $('.rate-item').click(function() {
        $.ajax({
            url : '?p=addAppreciation',
            type : 'POST',
            data : {appreciation: $(this).attr('data-like')},
            dataType : 'json',
            success:function(data){
                console.log(data);
            },
            error : function(data) {
                console.log(data);

            }
        });
    });
});

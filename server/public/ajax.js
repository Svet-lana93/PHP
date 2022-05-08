$(function(){
    $('#ajaxForm').submit(function(e) {
        e.preventDefault();
        let $form = $(this);
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize()
        }).done(function() {
            let data = $form.serializeArray();

            $form[0].reset();
        }).fail(function() {
            console.log('fail');
        });
    });
})

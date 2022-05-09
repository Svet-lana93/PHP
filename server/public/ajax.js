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

    $('#products').submit(function(e) {
        e.preventDefault();
        let $productsForm = $(this);
        $.ajax({
            type: $productsForm.attr('method'),
            url: $productsForm.attr('action'),
            data: $productsForm.serialize()
        }).done(function(response) {
            console.log('success');
//            console.log(response);
            let html = '';

            for (let product of response) {
                html += `
                    <tr>
                        <th>${product.id}</th>,
                        <td>${product.name}</td>,
                        <td>${product.price}</td>,
                        <td>${product.qty}</td>
                    </tr>    `
            }
            $('table>tbody').html(html);
            $productsForm[0].reset();
        }).fail(function() {
            console.log('fail');
        })
    });
})

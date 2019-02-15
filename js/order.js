$(document).ready(function () {
    $('.product').click(function () {
        var type = $(this).attr('type');
        var unit = $(this).attr('unit');
        var product_id = $(this).val();
        var product = $('.option-' + product_id).attr('product');
        var html = '';
        var count = $('.prodct #qty-' + product_id).length;


        if (product_id != 0) {

            if (count == 0) {
                html += '<div class="col-md-4 product-qty" type="' + type + '" product_id="' + product_id + '">';

                html += '<div class="form-group">';

                html += '<label>' + product + '(' + unit + ')</label>';
                html += '<div class="input-group">';

                html += '<span class="input-group-btn">';
                html += '<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="qty-' + product_id + '">';
                html += '<i class="fa fa-minus"></i>';
                html += '</button>';
                html += '</span>';
                html += '<input name="qty-' + product_id + '" id="qty-' + product_id + '" product="' + product + '" unit="' + unit + '" class="form-control input-number" value="0" min="0" max="10000" type="text">';
                html += '<span class="input-group-btn">';
                html += '<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="qty-' + product_id + '">';
                html += '<i class="fa fa-plus"></i>';
                html += '</button>';
                html += '</span>';
                html += '</div>';

                
            }
        }



        $('.qty-container-' + type).append(html);
    });
});

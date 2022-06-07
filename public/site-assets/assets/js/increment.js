$(document).ready(function () {

    $('.increment-btn').click(function (e) {
        e.preventDefault();
        var incre_value = $(this).parents('.quantity').find('.qty-input').val();
        var value = parseInt(incre_value, 10);
        value = isNaN(value) ? 0 : value;

        if (value < 10) {
            value++;
            $(this).parents('.quantity').find('.qty-input').val(value);
            var quantity = $(this).parents('.qnt').find('.item-totalprice').val();
            var price = $(this).parents('.qnt').find('.pri').val();
            var subTotal = $("#tot").text();

            price = Math.round(parseFloat(price) * 100) / 100;

            quantity = Math.round(parseFloat(quantity) * 100) / 100;

            subTotal = Math.round(parseFloat(subTotal) * 100) / 100;

            var newValue = quantity + price;

            var newSubTotal = price + subTotal;

            $("#tot").text(Number(newSubTotal).toFixed(2));


            $(this).parents('.qnt').find('.item-totalprice').val(Number(newValue).toFixed(2));
        }
    });

    $('.decrement-btn').click(function (e) {
        e.preventDefault();
        var decre_value = $(this).parents('.quantity').find('.qty-input').val();

        var value = parseInt(decre_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            $(this).parents('.quantity').find('.qty-input').val(value);
            var quantity = $(this).parents('.qnt').find('.item-totalprice').val();
            var price = $(this).parents('.qnt').find('.pri').val();
            var subTotal = $("#tot").text();

            price = Math.round(parseFloat(price) * 100) / 100;

            quantity = Math.round(parseFloat(quantity) * 100) / 100;

            subTotal = Math.round(parseFloat(subTotal) * 100) / 100;

            var newValue = quantity - price;

            var newSubTotal = subTotal - price;

            $("#tot").text(Number(newSubTotal).toFixed(2));


            $(this).parents('.qnt').find('.item-totalprice').val(Number(newValue).toFixed(2));
        }
    });

});

$(document).ready(function () {
    cartload();
});

function cartload()
{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/app/load-cart-data',
        method: "GET",
        success: function (response) {
            $('.basket').html('');
            var parsed = jQuery.parseJSON(response)
            var value = parsed; //Single Data Viewing
            $('.basket').append($('<span class="badge badge-pill red">'+ value['totalcart'] +'</span>'));
        }
    });
}

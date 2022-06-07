$(document).ready(function () {
    $('.subm').click(function (e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var full_name = $(this).closest('.forms').find('.full_name').val();
        var country = $(this).closest('.forms').find('.country').val();
        var phone_number = $(this).closest('.forms').find('.phone_number').val();
        var street_name = $(this).closest('.forms').find('.street_name').val();
        var building_name = $(this).closest('.forms').find('.building_name').val();
        var city = $(this).closest('.forms').find('.city').val();
        var landmark = $(this).closest('.forms').find('.landmark').val();
        var delivery_instructions = $(this).closest('.forms').find('.delivery_instructions').val();

        $.ajax({
            url: "/app/addShippingAddress",
            method: "POST",
            data: {
                'full_name': full_name,
                'country': country,
                'phone_number': phone_number,
                'street_name': street_name,
                'building_name': building_name,
                'city': city,
                'landmark': landmark,
                'delivery_instructions': delivery_instructions,
            },
            success: function (response) {
                window.location.reload();
                alertify.set('notifier','position','top-right');
                alertify.success(response.status);
            },
        });
    });
});

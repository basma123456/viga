  // Clear Cart Data
  $(document).ready(function () {

    $('.clear_cart').click(function (e) {
        e.preventDefault();

        $.ajax({
            url: '/app/clear-cart',
            type: 'GET',
            success: function (response) {
                window.location.reload();
                alertify.set('notifier','position','top-right');
                alertify.success(response.status);
            }
        });

    });

});

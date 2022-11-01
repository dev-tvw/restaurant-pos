function getCart(customer_id) {
    $('#loading-image').show();
    $.ajax({
        url: "get-cart/" + customer_id,
        type: "GET",
        success: function (response) {
            if (response) {
                // $('.success').text(response.success);
                $("#common-div" + " .content").html(response);
            }
        },
        error: function (error) {
            console.log(error);
        },
        complete: function () {
            $('#loading-image').hide();
        }
    });
}

function addToCart(product_id, quantity = 1, type = "add") {
    $('#loading-image').show();
    $.ajax({
        url: "add-to-customer-cart/" + $('#customer-id').val() + "/" + product_id + "/" + quantity + "/" + type,
        type: "GET",
        success: function (response) {
            if (response) {
                // $('.success').text(response.success);
                $("#common-div" + " .content").html(response);
            }
            var message = 'Cart Item added to Cart';
            if (type != 'add') {
                message = 'Cart updated successfully';
            }
            Swal.fire({
                icon: 'success',
                title: 'Done',
                text: message,
                confirmButtonColor: "#3a57e8"
            });
        },
        error: function (error) {
            console.log(error);
        },
        complete: function () {
            $('#loading-image').hide();
        }
    });
}

function removeCartItem(cart_item_id) {
    console.log(cart_item_id);
    $('#loading-image').show();
    $.ajax({
        url: "remove-cart-item/" + cart_item_id,
        type: "GET",
        success: function (response) {
            if (response) {
                // $('.success').text(response.success);
                $("#common-div" + " .content").html(response);
            }
            var message = 'Cart Item removed successfully';
            Swal.fire({
                icon: 'success',
                title: 'Done',
                text: message,
                confirmButtonColor: "#3a57e8"
            });
        },
        error: function (error) {
            console.log(error);
        },
        complete: function () {
            $('#loading-image').hide();
        }
    });

}

function removeCart(cart_id) {
    console.log(cart_id);
    $('#loading-image').show();
    $.ajax({
        url: "remove-cart/" + cart_id,
        type: "GET",
        success: function (response) {
            if (response) {
                // $('.success').text(response.success);
                $("#common-div" + " .content").html(response);
            }
            var message = 'Cart removed successfully';
            Swal.fire({
                icon: 'success',
                title: 'Done',
                text: message,
                confirmButtonColor: "#3a57e8"
            });
        },
        error: function (error) {
            console.log(error);
        },
        complete: function () {
            $('#loading-image').hide();
        }
    });
}

function submitOrder(cart_id) {
    console.log(cart_id);
    $('#loading-image').show();
    $.ajax({
        url: "submit-order/" + cart_id,
        type: "GET",
        success: function (response) {
            if (response) {
                // $('.success').text(response.success);
                $("#common-div" + " .content").html(response);
            }
            var message = 'Order submitted successfully';
            Swal.fire({
                icon: 'success',
                title: 'Done',
                text: message,
                confirmButtonColor: "#3a57e8"
            });
        },
        error: function (error) {
            console.log(error);
        },
        complete: function () {
            $('#loading-image').hide();
        }
    });
}
$(document).ready(function () {
    getCashierNotifications();
    $("#common-div" + " .content").html('');
    $('#customer-id').on('change', function () {
        getCart($(this).val());
    });
    getCart(1);
    // ajaxRequest($('#customer-id').val(), $(this).attr('product-id'));

});
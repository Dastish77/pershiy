$(document).ready(function(){
    $(".add-to-cart").click(function() {
        var id = $(this).attr("data-id");
        if (id) {
            $.post("/cart/addAjax/" + id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        }
        return true;
    });

    $(".delete-from-cart").click(function() {
        var id = $(this).attr("data-id");
        if (id) {
            $.post("/cart/deleteAjax/" + id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        }
        return true;
    });
});
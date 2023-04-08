import getDataForm from "../lib/getDataForm.js";
import message from "../lib/message.js";

function addRestaurant(dataClient) {
    $.ajax({
        type: 'post',
        url: '/panel/admin/restaurants/add',
        dataType: 'json',
        data: dataClient,
        success: function(result) {
            console.log(result);
            if(result.success) {
                window.location.replace("/panel/admin/restaurants");
            } else {
                message(result.message);
            }
        },
        error: function(result) {
            console.log(result);
        },
    });
}
$(document).ready(function() {
    $('#form_add_restaurant').submit(function(event) {
        event.preventDefault();
        let dataClient = {
            'action': "addRestaurant",
            'form': getDataForm($(this))
        };
        dataClient.form.logo = $('.input_file').val();
        addRestaurant(dataClient);
    });
});
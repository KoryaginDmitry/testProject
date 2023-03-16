import './bootstrap';
import '/node_modules/jquery/dist/jquery.js';

$('#feedbackForm').on('submit', (e) => {
    e.preventDefault();

    let form = e.target;
    let formData = new FormData(form);

    $.ajax({
        type: $(form).attr('method'),
        url: $(form).attr("action"),
        data: formData,
        processData: false,
        contentType: false,
    }).done((data) => {
        viewMessage(data['message']);
    }).fail((data) => {
        if (data['status'] === 422) {
            viewErrors(data['responseJSON'].errors);
            return;
        }

        viewMessage(data['responseJSON'].message, false);
    });
});

function viewErrors(errors) {
    clearForm();

    for (let item in errors) {
        let input = $("#" + item);

        $(input).addClass('border-danger');

        errors[item].forEach( (errorsItem) => {
            $(input).parent().children('div').prepend("<span>" + errorsItem + "</span>");
        });
    }
}
function viewMessage(message, success= true) {
    clearForm();

    let block = $('#message');

    if (success) {
        block.addClass("alert alert-success text-center").text(message);
        return;
    }

    block.addClass("alert alert-danger text-center").text(message);
}

function clearForm() {
    $("#message").removeClass().empty();
    $(".form-control").removeClass('border-danger');
    $(".errors").empty();
}

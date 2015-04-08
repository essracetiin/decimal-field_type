$(function () {

    // Initialize decimals
    $('input[type="text"].decimal').each(function () {
        $(this).spinner({
            min: $(this).data('min'),
            max: $(this).data('max'),
            step: $(this).data('step')
        });
    });
});

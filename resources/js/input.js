$(function () {

    // Initialize decimals
    $('.decimal-field-type input').each(function () {
        $(this).spinner({
            min: $(this).data('min'),
            max: $(this).data('max'),
            step: $(this).data('step')
        })
            .val(Number($(this).val()).toFixed($(this).data('decimals')))
            .on('change', function () {
                $(this).val(Number($(this).val()).toFixed($(this).data('decimals')));
            });
    });
});

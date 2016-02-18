$(function () {

    // Initialize decimals
    $('input[data-provides="anomaly.field_type.decimal"]').each(function () {
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

$(function () {

    var decimals = $('input[data-provides="anomaly.field_type.decimal"]');

    // Initialize decimals
    decimals.on('change', function () {
        $(this).val(Number($(this).val()).toFixed($(this).data('decimals')));
    });
});

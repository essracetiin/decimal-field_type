$(document).on('ajaxComplete ready', function () {

    var decimals = $('input[data-provides="anomaly.field_type.decimal"]:not([data-initialized])');

    decimals.attr('data-initialized', '');

    // Initialize decimals
    decimals.on('change', function () {

        if ($(this).val() == '') {
            return;
        }

        $(this).val(Number($(this).val()).toFixed($(this).data('decimals')));
    });
});

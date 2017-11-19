(function (window, document) {

    let fields = Array.from(
        document.querySelectorAll('input[data-provides="anomaly.field_type.decimal"]')
    );

    fields.forEach(function (field) {

        field.addEventListener('change', function (event) {

            if (event.target.value == '') {
                return;
            }

            event.target.value = Number(event.target.value).toFixed(event.target.dataset.decimals);
        });
    });
})(window, document);

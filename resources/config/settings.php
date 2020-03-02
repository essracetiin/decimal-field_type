<?php

return [
    'showDecimal' => [
        'type' => 'anomaly.field_type.select',
        'config' => [
            'options' => [true => 'Yes', false => 'No'],
        ],
    ],

    'showDecimalMaxPrice' => [
        'type' => 'anomaly.field_type.integer',
        'config' => [
            'default_value' => 100
        ],
    ],
];

<?php

return [
    'separator' => [
        'type'     => 'anomaly.field_type.select',
        'required' => true,
        'config'   => [
            'default_value' => ',',
            'options'       => [
                ','      => '1,000',
                '.'      => '1.000',
                '`'      => '1`000',
                '&#160;' => '1 000'
            ]
        ]
    ],
    'point'     => [
        'type'     => 'anomaly.field_type.select',
        'required' => true,
        'config'   => [
            'default_value' => '.',
            'options'       => [
                ',' => '0,10',
                '.' => '0.10',
                '`' => '0`10'
            ]
        ]
    ],
    'decimals'  => [
        'type'   => 'anomaly.field_type.integer',
        'config' => [
            'min' => 1
        ]
    ],
    'min'       => [
        'type'  => 'anomaly.field_type.text',
        'rules' => [
            'numeric'
        ]
    ],
    'max'       => [
        'type'  => 'anomaly.field_type.text',
        'rules' => [
            'numeric'
        ]
    ]
];

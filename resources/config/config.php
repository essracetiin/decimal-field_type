<?php

return [
    'separator' => [
        'type' => 'anomaly.field_type.text'
    ],
    'point'     => [
        'type' => 'anomaly.field_type.text'
    ],
    'decimals'  => [
        'type'   => 'anomaly.field_type.integer',
        'config' => [
            'min' => 1
        ]
    ],
    'min'       => [
        'type' => 'anomaly.field_type.text'
    ],
    'max'       => [
        'type' => 'anomaly.field_type.text'
    ]
];

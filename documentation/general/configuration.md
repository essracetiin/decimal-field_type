# Configuration

**Example Definition:**

```
protected $fields = [
    'example' => [
        'type'   => 'anomaly.field_type.decimal',
        'config' => [
            'separator' => ',',
            'point' => '.',
            'decimals' => 2,
            'min' => 0,
            'max' => 10,
            'default_value' => 5.50
        ]
    ]
];
```

### `separator`

Number separator. Options are `,`, `.`, ``` ` ```, and `&#160;` (space). The default is `,`.

### `point`

Point separator. Options are `,`, `.`, and ``` ` ```. The default is `.`.

### `decimals`

Number of decimals after the point separator.

### `min`

The smallest number allowed.

### `max`

The largest number allowed.

### `default_value`

The default value.

# Configuration

**Example Definition:**

```
protected $fields = [
    'example' => [
        'type'   => 'anomaly.field_type.decimal',
        'config' => [
            'separator'     => ',',
            'point'         => '.',
            'decimals'      => 2,
            'min'           => 0,
            'max'           => 10,
            'default_value' => 5.75
        ]
    ]
];
```

### `separator`

The thousands separator character. Valid options are `','`, `'.'`, ```'`'```, and `'&#160;'` (space). The default value is `','`.

### `point`

The decimal character. Valid options are `','`, `'.'`, and ```'`'```. The default value is `'.'`.

### `decimals`

Number of decimals after the point separator. The default value is `2`.

### `min`

The minimum value allowed. By default no minimum value is enforced.

### `max`

The maximum value allowed. By default no maximum value is enforced.

### `default_value`

The default value. By default value is `null`.

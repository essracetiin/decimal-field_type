# Decimal Field Type

- [Introduction](#introduction)
- [Configuration](#configuration)
- [Output](#output)


<a name="introduction"></a>
## Introduction

`anomaly.field_type.decimal`

The decimal field type provides a basic HTML input that restricts values to a specified decimal value between an optional range and decimal places.


<a name="configuration"></a>
## Configuration

**Example Definition:**

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


<a name="output"></a>
## Output

This field type returns the decimal value as formatted in the database by default.

### `formatted()`

Returns the value formatted per field configuration.

    // Twig usage
    {{ entry.example.formatted }}
    
    // API usage
    $entry->example->formatted();

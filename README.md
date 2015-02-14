# Decimal Field Type

*anomaly.field_type.decimal*

#### A decimal number field type.

The decimal field type provides a basic HTML input that restricts values to a specified decimal value between an optional range and decimal places.

## Configuration

- `min` - any valid decimal
- `max` - any valid decimal
- `point` - any valid decimal point character
- `separator` - any valid separator character
- `placeholder` - any string including translation keys

#### Example

	config => [
	    'placeholder' => 'Enter a whole number between 0 and 10.',
		'separator' => ',',
		'point' => '.',
		'min' => 0,
		'max' => 10000
	]

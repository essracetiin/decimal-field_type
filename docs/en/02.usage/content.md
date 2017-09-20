---
title: Usage
---

## Usage[](#usage)

This section will show you how to use the field type via API and in the view layer.


### Setting Values[](#usage/setting-values)

You can set the decimal field type value with any integer or float.

    $entry->example = 25.15;

    $entry->example = 25.151415;

    $entry->example = 25;

<div class="alert alert-primary">**Note:** The set value will be formatted to fit the field type's configured precision automatically.</div>


### Basic Output[](#usage/basic-output)

The decimal field type returns `null` or the formatted decimal.

    $entry->example; // 25.15


### Presenter Output[](#usage/presenter-output)

This section will show you how to use the decorated value provided by the `\Anomaly\DecimalFieldType\DecimalFieldTypePresenter` class.


#### DecimalFieldTypePresenter::format()[](#usage/presenter-output/decimalfieldtypepresenter-format)

The `format` method returns the formatted number string according to configuration.

###### Returns: `string`

###### Example

    $decorated->example->format();

###### Twig

    {{ decorated.example.format() }}


#### DecimalFieldTypePresenter::currency()[](#usage/presenter-output/decimalfieldtypepresenter-currency)

The `currency` method returns the currency formatted value.

###### Returns: `string`

###### Arguments

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>Key</th>

<th>Required</th>

<th>Type</th>

<th>Default</th>

<th>Description</th>

</tr>

</thead>

<tbody>

<tr>

<td>

$currency

</td>

<td>

false

</td>

<td>

string

</td>

<td>

The currency field value or default configured currency.

</td>

<td>

The currency to format for.

</td>

</tr>

<tr>

<td>

$field

</td>

<td>

false

</td>

<td>

string

</td>

<td>

currency

</td>

<td>

The slug of the currency field.

</td>

</tr>

</tbody>

</table>

###### Example

    $decorated->example->currency();

###### Twig

    {{ decorated.example.currency() }}

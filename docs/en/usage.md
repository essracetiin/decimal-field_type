# Usage

- [Setting Values](#mutator)
- [Basic Output](#output)
- [Presenter Output](#presenter)

<hr>

<a name="mutator"></a>
## Setting Values

You can set the decimal field type value with any integer or float.

{{ code('php', '$entry->example = 25.00;') }}

<div class="alert alert-primary">
<strong>Note:</strong> The set value will be formatted to fit the field type's configuration automatically.
</div>

<hr>

<a name="output"></a>
## Basic Output

The decimal field type returns `null` or the formatted decimal.

{% code php %}
$entry->example; // 25.00
{% endcode %}

<hr>

<a name="presenter"></a>
## Presenter Output

When accessing the value from a decorated entry, like one in a view, the country field type presenter is returned instead.

#### Formatted

You can also return the formatted decimal with the presenter's `format` method.

{% code php %}
$entry->example->format(); // 25.00
{% endcode %}

#### Currency

Returns the decimal value as a currency.

<div class="alert alert-primary">
<strong>Note:</strong> If no currency or field is passed the system configured default currency will be used.
</div>

{% code php %}
$entry->example->currency();                 // $25.00
$entry->example->currency('USD');            // $25.00
$entry->example->currency(null, 'currency'); // $25.00
{% endcode %}

<div class="alert alert-info">
<strong>Remember:</strong> You can access presenter methods in valuated strings like table columns too.
</div>

<pre>
{% code php %}
protected $columns = [
    'entry.example.currency'
];
{% endcode %}
</pre>
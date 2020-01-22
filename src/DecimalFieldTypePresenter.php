<?php namespace Visiosoft\DecimalFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

/**
 * Class DecimalFieldTypePresenter
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DecialFieldType
 */
class DecimalFieldTypePresenter extends FieldTypePresenter
{

    /**
     * Return the formatted decimal.
     *
     * @return string
     */
    public function format()
    {
        $separator = $this->object->config('separator');
        $decimals = $this->object->config('decimals');
        $point = $this->object->config('point');

        return number_format($this->object->getValue(), $decimals, $point, str_replace('&#160;', ' ', $separator));
    }

    /**
     * Return the integer formatted as a currency.
     *
     * @param null $currency
     * @param string $field
     * @return string
     */
    public function currency($currency = null, $field = 'currency', $showDecimal = true)
    {
        if (!$currency) {
            $currency = $this->object->getEntry()->{$field};
        }

        if (!$currency) {
            $currency = config('streams::currencies.default');
        }

        $direction = config('streams::currencies.supported.' . strtoupper($currency) . '.direction');
        $symbol = config('streams::currencies.supported.' . strtoupper($currency) . '.symbol');

        $prefix = null;
        $suffix = null;

        if (strtolower($direction) == 'ltr') {
            $prefix = $symbol;
        } else {
            $suffix = $symbol;
        }
        if ($showDecimal) {
            return $prefix . " " . $this->format() . " " . $suffix;
        }
        return $prefix . " " . $this->object->getValue() . " " . $suffix;
    }
}

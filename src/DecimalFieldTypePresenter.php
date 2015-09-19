<?php namespace Anomaly\DecimalFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;
use NumberFormatter;

/**
 * Class DecimalFieldTypePresenter
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\DecialFieldType
 */
class DecimalFieldTypePresenter extends FieldTypePresenter
{

    /**
     * Return a formatted integer.
     *
     * @return string
     */
    public function formatted()
    {
        $separator = array_get($this->object->getConfig(), 'separator');
        $decimals  = array_get($this->object->getConfig(), 'decimals', 2);
        $point     = array_get($this->object->getConfig(), 'point', '.');

        return number_format($this->object->getValue(), $decimals, $point, str_replace('&#160;', ' ', $separator));
    }

    /**
     * Return the integer formatted as a currency.
     *
     * @param null   $currency
     * @param string $field
     * @return string
     */
    public function currency($currency = null, $field = 'currency')
    {
        if (!$currency) {
            $currency = $this->object->getEntry()->{$field};
        }

        $format = new NumberFormatter(app('app.locale') . "@currency={$currency}", NumberFormatter::CURRENCY);

        $symbol = $format->getSymbol(NumberFormatter::CURRENCY_SYMBOL);

        return $symbol . $this->formatted();
    }
}

<?php namespace Anomaly\DecimalFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeModifier;

/**
 * Class DecimalFieldTypeModifier
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DecimalFieldType
 */
class DecimalFieldTypeModifier extends FieldTypeModifier
{

    /**
     * Modify the value.
     *
     * @param $value
     * @return string
     */
    public function modify($value)
    {
        $separator = $this->fieldType->config('separator');
        $decimals  = $this->fieldType->config('decimals', 2);
        $point     = $this->fieldType->config('point', '.');

        return number_format($value, $decimals, $point, str_replace('&#160;', ' ', $separator));
    }

    /**
     * Restore the value.
     *
     * @param $value
     * @return string
     */
    public function restore($value)
    {
        $separator = $this->fieldType->config('separator');
        $decimals  = $this->fieldType->config('decimals', 2);
        $point     = $this->fieldType->config('point', '.');

        return number_format($value, $decimals, $point, str_replace('&#160;', ' ', $separator));
    }
}

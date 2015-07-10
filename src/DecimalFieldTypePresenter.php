<?php namespace Anomaly\DecimalFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

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
}

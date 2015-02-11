<?php namespace Anomaly\DecimalFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

/**
 * Class DecimalFieldType
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\DecimalFieldType
 */
class DecimalFieldType extends FieldType
{

    /**
     * The database column type.
     *
     * @var string
     */
    protected $columnType = 'decimal';

}

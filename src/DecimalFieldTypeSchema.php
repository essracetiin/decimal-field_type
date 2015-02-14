<?php namespace Anomaly\DecimalFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeSchema;
use Anomaly\Streams\Platform\Assignment\Contract\AssignmentInterface;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class DecimalFieldTypeSchema
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\DecimalFieldType
 */
class DecimalFieldTypeSchema extends FieldTypeSchema
{

    /**
     * @param Blueprint           $table
     * @param AssignmentInterface $assignment
     */
    public function addColumn(Blueprint $table, AssignmentInterface $assignment)
    {
        $decimals = array_get($this->fieldType->getConfig(), 'decimals', 2);

        $float = 11 - $decimals;

        $table->{$this->fieldType->getColumnType()}($this->fieldType->getColumnName(), $float, $decimals)
            ->nullable(!$assignment->isRequired());

        if ($assignment->isUnique()) {
            $table->unique($this->fieldType->getColumnName());
        }
    }
}

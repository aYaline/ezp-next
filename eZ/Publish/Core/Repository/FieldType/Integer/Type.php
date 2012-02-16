<?php
/**
 * File containing the Integer field type
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\Repository\FieldType\Integer;
use eZ\Publish\Core\Repository\FieldType,
    eZ\Publish\Core\Repository\FieldType\Value as BaseValue,
    ezp\Base\Exception\BadFieldTypeInput;

/**
 * Integer field types
 *
 * Represents integers.
 */
class Type extends FieldType
{
    const FIELD_TYPE_IDENTIFIER = 'ezinteger';

    protected $allowedValidators = array(
        'eZ\\Publish\\Core\\Repository\\FieldType\\Integer\\IntegerValueValidator'
    );

    protected $allowedSettings = array(
        'defaultValue' => 0
    );

    /**
     * Returns the fallback default value of field type when no such default
     * value is provided in the field definition in content types.
     *
     * @return \eZ\Publish\Core\Repository\FieldType\Integer\Value
     */
    public function getDefaultValue()
    {
        return new Value( $this->fieldSettings['defaultValue'] );
    }

    /**
     * Checks if value can be parsed.
     *
     * If the value actually can be parsed, the value is returned.
     *
     * @throws ezp\Base\Exception\BadFieldTypeInput Thrown when $inputValue is not understood.
     * @param mixed $inputValue
     * @return mixed
     */
    protected function canParseValue( BaseValue $inputValue )
    {
        if ( $inputValue instanceof Value )
        {
            if ( !is_integer( $inputValue->value ) )
                throw new BadFieldTypeInput( $inputValue, get_class( $this ) );

            return $inputValue;
        }

        throw new InvalidArgumentType( 'value', 'eZ\\Publish\\Core\\Repository\\FieldType\\Integer\\Value' );
    }

    /**
     * Returns information for FieldValue->$sortKey relevant to the field type.
     *
     * @return array
     */
    protected function getSortInfo( BaseValue $value )
    {
        return array( 'sort_key_int' => $value->value );
    }

    /**
     * Converts an $hash to the Value defined by the field type
     *
     * @param mixed $hash
     *
     * @return \eZ\Publish\Core\Repository\FieldType\Value $value
     */
    public function fromHash( $hash )
    {
        return new Value( $hash );
    }

    /**
     * Converts a $Value to a hash
     *
     * @param \eZ\Publish\Core\Repository\FieldType\Value $value
     *
     * @return mixed
     */
    public function toHash( BaseValue $value )
    {
        return $value->value;
    }

    /**
     * Returns whether the field type is searchable
     *
     * @return bool
     */
    public function isSearchable()
    {
        return true;
    }
}
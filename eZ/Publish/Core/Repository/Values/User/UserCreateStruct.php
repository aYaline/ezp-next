<?php
namespace eZ\Publish\Core\Repository\Values\User;

use eZ\Publish\API\Repository\Values\User\UserCreateStruct as APIUserCreateStruct,
    eZ\Publish\API\Repository\Values\Content\ContentCreateStruct;

/**
 * This class is used to create a new user in the repository
 */
class UserCreateStruct extends APIUserCreateStruct
{
    /**
     * The list of fields added to the user
     *
     * @var \eZ\Publish\API\Repository\Values\Content\Field[]
     */
    public $fields = array();

    /**
     * Adds a field to the field collection.
     *
     * This method could also be implemented by a magic setter so that
     * $fields[$fieldDefIdentifier][$language] = $value or without language $fields[$fieldDefIdentifier] = $value
     * is an equivalent call.
     *
     * @param string $fieldDefIdentifier the identifier of the field definition
     *
     * @param mixed $value Either a plain value which is understandable by the corresponding
     *                     field type or an instance of a Value class provided by the field type
     *
     * @param string|null $language If not given on a translatable field the initial language is used
     */
    public function setField( $fieldDefIdentifier, $value, $language = null )
    {
        if ( $language === null )
            $this->fields[$fieldDefIdentifier][$this->mainLanguageCode] = $value;
        else
            $this->fields[$fieldDefIdentifier][$language] = $value;
    }
}
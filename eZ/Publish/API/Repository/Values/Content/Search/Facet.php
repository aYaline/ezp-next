<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Search\Facet class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */
namespace eZ\Publish\API\Repository\Values\Content\Search;

use eZ\Publish\API\Repository\Values\ValueObject;

/**
 * Base class for facets
 *
 */
abstract class Facet extends ValueObject
{
    /**
     * The name of the facet
     *
     * @var string
     */
    public $name;
}


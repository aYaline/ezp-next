<?php
namespace eZ\Publish\API\Repository\Values\Content\Query\SortClause;

use eZ\Publish\API\Repository\Values\Content\Query,
    eZ\Publish\API\Repository\Values\Content\Query\SortClause;

/**
 * Sets sort direction on the location priority date for a content query
 */
class LocationPriority extends SortClause
{
    /**
     * Constructs a new LocationPriority SortClause
     * @param string $sortDirection
     */
    public function __construct( $sortDirection = Query::SORT_ASC )
    {
        parent::__construct( 'location_priority', $sortDirection );
    }
}
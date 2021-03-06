<?php
/**
 * File contains: eZ\Publish\Core\Repository\Tests\Service\Integration\InMemory\UrlAliasTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\Repository\Tests\Service\Integration\InMemory;

use eZ\Publish\Core\Repository\Tests\Service\Integration\UrlAliasBase as BaseUrlAliasTest;

/**
 * Test case for UrlAlias Service using InMemory storage class
 */
class UrlAliasTest extends BaseUrlAliasTest
{
    protected function getRepository()
    {
        return Utils::getRepository();
    }
}

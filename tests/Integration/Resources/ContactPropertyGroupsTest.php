<?php

namespace SevenShores\Hubspot\Tests\Integration\Resources;

use SevenShores\Hubspot\Resources\ContactProperties;
use SevenShores\Hubspot\Tests\Integration\Abstraction\PropertyGroupsTestCase;

/**
 * @internal
 * @coversNothing
 */
class ContactPropertyGroupsTest extends PropertyGroupsTestCase
{
    /**
     * @var string
     */
    protected $allGroupsMethod = 'getGroups';

    /**
     * @var ContactProperties
     */
    protected $resourceClass = ContactProperties::class;
}

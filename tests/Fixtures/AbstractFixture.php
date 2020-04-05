<?php
declare(strict_types=1);

namespace App\Tests\Fixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;

abstract class AbstractFixture extends Fixture implements FixtureGroupInterface
{
    /**
     * @return string[]
     */
    public static function getGroups(): array
    {
        return ['test'];
    }
}

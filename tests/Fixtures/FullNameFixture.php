<?php
declare(strict_types=1);

namespace App\Tests\Fixtures;

use App\Entity\FullName;
use Doctrine\Persistence\ObjectManager;

class FullNameFixture extends AbstractFixture
{
    public function load(ObjectManager $manager): void
    {
        $fn1 = new FullName();
        $fn1->setFirstName('Grzegorz')
            ->setMiddleName('Bortolomeo')
            ->setLastName('Brzęczyszczykiewicz');

        $manager->persist($fn1);

        $fn2 = new FullName();
        $fn2->setFirstName('John')
            ->setLastName('Doe');

        $manager->persist($fn2);

        $manager->flush();
    }
}

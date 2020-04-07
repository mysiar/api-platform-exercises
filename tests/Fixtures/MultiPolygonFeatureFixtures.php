<?php
declare(strict_types=1);

namespace App\Tests\Fixtures;

use App\Entity\MultiPolygonFeature;
use Doctrine\Persistence\ObjectManager;

class MultiPolygonFeatureFixtures extends AbstractFixture
{
    // phpcs:disable
    public function load(ObjectManager $manager): void
    {
        $f1 = new MultiPolygonFeature();
        $f1->setGeometry('MULTIPOLYGON(((566067.5487 244519.217,566067.1972 244517.6206,566065.8307 244517.921499999,566063.2908 244518.480900001,566063.4897 244519.384299999,566064.0776 244522.054099999,566064.7072 244524.913000001,566067.2819 244524.346000001,566068.6136 244524.0528,566068.5546 244523.7848,566068.2587 244522.441199999,566067.9054 244520.8367,566067.5487 244519.217)))');
        $manager->persist($f1);

        $manager->flush();
    }
}

<?php
declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Partial\IdAwareInterface;
use App\Partial\IdAwareTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity()
 */
class MultiPolygonFeature implements IdAwareInterface
{
    use IdAwareTrait;

    /**
     * @ORM\Column(type="geometry", nullable=true, options={"geometry_type"="MULTIPOLYGON"})
     *
     * @var string|null
     */
    private $geometry;

    public function getGeometry(): ?string
    {
        return $this->geometry;
    }

    public function setGeometry(?string $geometry = null): self
    {
        $this->geometry = $geometry;

        return $this;
    }
}

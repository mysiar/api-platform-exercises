<?php
declare(strict_types=1);

namespace App\Partial;

use Doctrine\ORM\Mapping as ORM;

trait IdAwareTrait
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     *
     * @var string|null
     */
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}

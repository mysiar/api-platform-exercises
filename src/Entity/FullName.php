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
class FullName implements IdAwareInterface
{
    use IdAwareTrait;
    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $middleName;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $lastName;

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    public function setMiddleName(?string $middleName): self
    {
        $this->middleName = $middleName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }
}

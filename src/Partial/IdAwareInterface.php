<?php
declare(strict_types=1);

namespace App\Partial;

interface IdAwareInterface
{
    public function getId(): ?string;
}

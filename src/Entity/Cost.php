<?php

namespace App\Entity;

use App\Repository\CostRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CostRepository::class)]
class Cost
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptive = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptive(): ?string
    {
        return $this->descriptive;
    }

    public function setDescriptive(string $descriptive): self
    {
        $this->descriptive = $descriptive;

        return $this;
    }
}

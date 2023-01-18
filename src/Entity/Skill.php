<?php

namespace App\Entity;

use App\Repository\SkillRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SkillRepository::class)]
class Skill
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $descriptive = null;

    #[ORM\ManyToMany(targetEntity: Code::class, mappedBy: 'skills')]
    private Collection $codes;

    public function __construct()
    {
        $this->codes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
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

    /**
     * @return Collection<int, Code>
     */
    public function getCodes(): Collection
    {
        return $this->codes;
    }

    public function addCode(Code $code): self
    {
        if (!$this->codes->contains($code)) {
            $this->codes->add($code);
            $code->addSkill($this);
        }

        return $this;
    }

    public function removeCode(Code $code): self
    {
        if ($this->codes->removeElement($code)) {
            $code->removeSkill($this);
        }

        return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Symfony\Component\Uid\Uuid;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\SkillRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Types\UuidType;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: SkillRepository::class)]
class Skill
{
  #[ORM\Id]
  #[ORM\Column(type: UuidType::NAME, unique: true)]
  #[ORM\GeneratedValue(strategy: 'CUSTOM')]
  #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
  private ?Uuid $id = null;

  #[ORM\Column(type: Types::TEXT)]
  private ?string $descriptive = null;

  #[ORM\ManyToMany(targetEntity: Code::class, mappedBy: 'skills')]
  private Collection $codes;

  #[ORM\Column(length: 255, nullable: true)]
  private ?string $name = null;

  public function __construct()
  {
    $this->codes = new ArrayCollection();
  }

  public function __toString(): string
  {
    return $this->name ?? $this->descriptive;
  }

  public function getId(): ?Uuid
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

  /**
   * @return Collection<int, Code>
   */
  public function getCodes(): Collection
  {
    return $this->codes;
  }

  public function addCode(Code $code): self
  {
    if (!$this->codes->contains($code))
    {
      $this->codes->add($code);
      $code->addSkill($this);
    }

    return $this;
  }

  public function removeCode(Code $code): self
  {
    if ($this->codes->removeElement($code))
    {
      $code->removeSkill($this);
    }

    return $this;
  }

  public function getName(): ?string
  {
    return $this->name;
  }

  public function setName(?string $name): self
  {
    $this->name = $name;

    return $this;
  }
}
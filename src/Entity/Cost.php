<?php

namespace App\Entity;

use Symfony\Component\Uid\Uuid;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CostRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Types\UuidType;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: CostRepository::class)]
class Cost
{
  #[ORM\Id]
  #[ORM\Column(type: UuidType::NAME, unique: true)]
  #[ORM\GeneratedValue(strategy: 'CUSTOM')]
  #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
  private ?Uuid $id = null;

  #[ORM\Column(length: 255)]
  private ?string $descriptive = null;

  #[ORM\ManyToMany(targetEntity: Formation::class, mappedBy: 'costs')]
  private Collection $formations;

  public function __construct()
  {
    $this->formations = new ArrayCollection();
  }

  public function __toString(): string
  {
    return $this->descriptive;
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
   * @return Collection<int, Formation>
   */
  public function getFormations(): Collection
  {
    return $this->formations;
  }

  public function addFormation(Formation $formation): self
  {
    if (!$this->formations->contains($formation))
    {
      $this->formations->add($formation);
      $formation->addCost($this);
    }

    return $this;
  }

  public function removeFormation(Formation $formation): self
  {
    if ($this->formations->removeElement($formation))
    {
      $formation->removeCost($this);
    }

    return $this;
  }
}
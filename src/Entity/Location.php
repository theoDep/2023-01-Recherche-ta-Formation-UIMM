<?php

namespace App\Entity;

use Symfony\Component\Uid\Uuid;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\LocationRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Types\UuidType;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: LocationRepository::class)]
class Location
{
  #[ORM\Id]
  #[ORM\Column(type: UuidType::NAME, unique: true)]
  #[ORM\GeneratedValue(strategy: 'CUSTOM')]
  #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
  private ?Uuid $id = null;

  #[ORM\Column(length: 255)]
  #[Assert\NotBlank]
  #[Assert\Length(
    max: 255,
    maxMessage: 'La ligne 1 ne peut pas contenir plus de 255 caractères.',
  )]
  private ?string $line_1 = null;

  #[ORM\Column(length: 255)]
  #[Assert\NotBlank]
  #[Assert\Length(
    max: 255,
    maxMessage: 'La ligne 2 ne peut pas contenir plus de 255 caractères.',
  )]
  private ?string $line_2 = null;

  #[ORM\Column(length: 255)]
  #[Assert\NotBlank]
  #[Assert\Length(
    max: 255,
    maxMessage: 'La ville ne peut pas contenir plus de 255 caractères.',
  )]
  private ?string $city = null;

  #[ORM\Column]
  #[Assert\NotBlank]
  #[Assert\Length(
    min: 5,
    max: 5,
  )]
  private ?string $zip_code = null;

  #[ORM\ManyToMany(targetEntity: Formation::class, mappedBy: 'locations')]
  private Collection $formations;

  public function __construct()
  {
    $this->formations = new ArrayCollection();
  }

  public function __toString(): string
  {
    return $this->line_1;
  }

  public function getId(): ?Uuid
  {
    return $this->id;
  }

  public function getLine1(): ?string
  {
    return $this->line_1;
  }

  public function setLine1(string $line_1): self
  {
    $this->line_1 = $line_1;

    return $this;
  }

  public function getLine2(): ?string
  {
    return $this->line_2;
  }

  public function setLine2(string $line_2): self
  {
    $this->line_2 = $line_2;

    return $this;
  }

  public function getCity(): ?string
  {
    return $this->city;
  }

  public function setCity(string $city): self
  {
    $this->city = $city;

    return $this;
  }

  public function getZipCode(): ?string
  {
    return $this->zip_code;
  }

  public function setZipCode(string $zip_code): self
  {
    $this->zip_code = $zip_code;

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
      $formation->addLocation($this);
    }

    return $this;
  }

  public function removeFormation(Formation $formation): self
  {
    if ($this->formations->removeElement($formation))
    {
      $formation->removeLocation($this);
    }

    return $this;
  }
}
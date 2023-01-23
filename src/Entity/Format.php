<?php

namespace App\Entity;

use Symfony\Component\Uid\Uuid;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\FormatRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Types\UuidType;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: FormatRepository::class)]
class Format
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
    maxMessage: 'Le nom ne peut pas contenir plus de 255 caractères.',
  )]
  private ?string $name = null;

  #[ORM\ManyToMany(targetEntity: Formation::class, mappedBy: 'formats')]
  private Collection $formations;

  public function __construct()
  {
      $this->formations = new ArrayCollection();
  }

  public function __toString(): string
  {
    return $this->name;
  }

  public function getId(): ?Uuid
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

  /**
   * @return Collection<int, Formation>
   */
  public function getFormations(): Collection
  {
      return $this->formations;
  }

  public function addFormation(Formation $formation): self
  {
      if (!$this->formations->contains($formation)) {
          $this->formations->add($formation);
          $formation->addFormat($this);
      }

      return $this;
  }

  public function removeFormation(Formation $formation): self
  {
      if ($this->formations->removeElement($formation)) {
          $formation->removeFormat($this);
      }

      return $this;
  }

}
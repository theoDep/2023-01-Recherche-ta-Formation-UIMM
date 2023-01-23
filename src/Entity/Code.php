<?php

namespace App\Entity;

use Symfony\Component\Uid\Uuid;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CodeRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Types\UuidType;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: CodeRepository::class)]
class Code
{
  #[ORM\Id]
  #[ORM\Column(type: UuidType::NAME, unique: true)]
  #[ORM\GeneratedValue(strategy: 'CUSTOM')]
  #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
  private ?Uuid $id = null;

  #[ORM\Column(length: 255)]
  private ?string $identifier = null;

  #[ORM\Column(length: 255)]
  private ?string $title = null;

  #[ORM\ManyToMany(targetEntity: Formation::class, mappedBy: 'codes')]
  private Collection $formations;

  #[ORM\ManyToMany(targetEntity: Skill::class, inversedBy: 'codes')]
  private Collection $skills;

  #[ORM\Column]
  private ?bool $is_main = null;

  public function __construct()
  {
    $this->formations = new ArrayCollection();
    $this->skills = new ArrayCollection();
  }

  public function __toString(): string
  {
    return $this->identifier;
  }

  public function getId(): ?Uuid
  {
    return $this->id;
  }

  public function getIdentifier(): ?string
  {
    return $this->identifier;
  }

  public function setIdentifier(string $identifier): self
  {
    $this->identifier = $identifier;

    return $this;
  }

  public function getTitle(): ?string
  {
    return $this->title;
  }

  public function setTitle(string $title): self
  {
    $this->title = $title;

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
      $formation->addCode($this);
    }

    return $this;
  }

  public function removeFormation(Formation $formation): self
  {
    if ($this->formations->removeElement($formation))
    {
      $formation->removeCode($this);
    }

    return $this;
  }

  /**
   * @return Collection<int, Skill>
   */
  public function getSkills(): Collection
  {
    return $this->skills;
  }

  public function addSkill(Skill $skill): self
  {
    if (!$this->skills->contains($skill))
    {
      $this->skills->add($skill);
    }

    return $this;
  }

  public function removeSkill(Skill $skill): self
  {
    $this->skills->removeElement($skill);

    return $this;
  }

  public function isIsMain(): ?bool
  {
      return $this->is_main;
  }

  public function setIsMain(bool $is_main): self
  {
      $this->is_main = $is_main;

      return $this;
  }
}
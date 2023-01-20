<?php

namespace App\Entity;

use Symfony\Component\Uid\Uuid;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\FormationRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Types\UuidType;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: FormationRepository::class)]
class Formation
{
    #[ORM\Id]
    #[ORM\Column(type: UuidType::NAME, unique: true)]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
    private ?Uuid $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $studies_level = null;

    #[ORM\ManyToMany(targetEntity: Code::class, inversedBy: 'formations')]
    private Collection $codes;

    #[ORM\ManyToMany(targetEntity: Job::class, inversedBy: 'formations')]
    private Collection $jobs;

    #[ORM\ManyToMany(targetEntity: Condition::class, inversedBy: 'formations')]
    private Collection $conditions;

    #[ORM\ManyToMany(targetEntity: Cost::class, inversedBy: 'formations')]
    private Collection $costs;

    #[ORM\ManyToMany(targetEntity: Location::class, inversedBy: 'formations')]
    private Collection $locations;

    #[ORM\ManyToMany(targetEntity: self::class)]
    private Collection $sequels;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'formations')]
    private ?self $format = null;

    #[ORM\OneToMany(mappedBy: 'format', targetEntity: self::class)]
    private Collection $formations;

    #[ORM\Column]
    private ?int $duration = null;

    public function __construct()
    {
        $this->codes = new ArrayCollection();
        $this->jobs = new ArrayCollection();
        $this->conditions = new ArrayCollection();
        $this->costs = new ArrayCollection();
        $this->locations = new ArrayCollection();
        $this->sequels = new ArrayCollection();
        $this->formations = new ArrayCollection();
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

    public function getStudiesLevel(): ?int
    {
        return $this->studies_level;
    }

    public function setStudiesLevel(int $studies_level): self
    {
        $this->studies_level = $studies_level;

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
        }

        return $this;
    }

    public function removeCode(Code $code): self
    {
        $this->codes->removeElement($code);

        return $this;
    }

    /**
     * @return Collection<int, Job>
     */
    public function getJobs(): Collection
    {
        return $this->jobs;
    }

    public function addJob(Job $job): self
    {
        if (!$this->jobs->contains($job)) {
            $this->jobs->add($job);
        }

        return $this;
    }

    public function removeJob(Job $job): self
    {
        $this->jobs->removeElement($job);

        return $this;
    }

    /**
     * @return Collection<int, Condition>
     */
    public function getConditions(): Collection
    {
        return $this->conditions;
    }

    public function addCondition(Condition $condition): self
    {
        if (!$this->conditions->contains($condition)) {
            $this->conditions->add($condition);
        }

        return $this;
    }

    public function removeCondition(Condition $condition): self
    {
        $this->conditions->removeElement($condition);

        return $this;
    }

    /**
     * @return Collection<int, Cost>
     */
    public function getCosts(): Collection
    {
        return $this->costs;
    }

    public function addCost(Cost $cost): self
    {
        if (!$this->costs->contains($cost)) {
            $this->costs->add($cost);
        }

        return $this;
    }

    public function removeCost(Cost $cost): self
    {
        $this->costs->removeElement($cost);

        return $this;
    }

    /**
     * @return Collection<int, Location>
     */
    public function getLocations(): Collection
    {
        return $this->locations;
    }

    public function addLocation(Location $location): self
    {
        if (!$this->locations->contains($location)) {
            $this->locations->add($location);
        }

        return $this;
    }

    public function removeLocation(Location $location): self
    {
        $this->locations->removeElement($location);

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getSequels(): Collection
    {
        return $this->sequels;
    }

    public function addSequel(self $sequel): self
    {
        if (!$this->sequels->contains($sequel)) {
            $this->sequels->add($sequel);
        }

        return $this;
    }

    public function removeSequel(self $sequel): self
    {
        $this->sequels->removeElement($sequel);

        return $this;
    }

    public function getFormat(): ?self
    {
        return $this->format;
    }

    public function setFormat(?self $format): self
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getFormations(): Collection
    {
        return $this->formations;
    }

    public function addFormation(self $formation): self
    {
        if (!$this->formations->contains($formation)) {
            $this->formations->add($formation);
            $formation->setFormat($this);
        }

        return $this;
    }

    public function removeFormation(self $formation): self
    {
        if ($this->formations->removeElement($formation)) {
            // set the owning side to null (unless already changed)
            if ($formation->getFormat() === $this) {
                $formation->setFormat(null);
            }
        }

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RendezVousRepository::class)
 */
class RendezVous
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $CreatedAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $UpdatedAt;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="fk_rdv")
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity=Services::class, inversedBy="rendezVouses")
     */
    private $fk_service;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $creneauxRdv;

    public function __construct()
    {
        $this->fk_service = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->CreatedAt;
    }

    public function setCreatedAt(\DateTimeInterface $CreatedAt): self
    {
        $this->CreatedAt = $CreatedAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->UpdatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $UpdatedAt): self
    {
        $this->UpdatedAt = $UpdatedAt;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|Services[]
     */
    public function getFkService(): Collection
    {
        return $this->fk_service;
    }

    public function addFkService(Services $fkService): self
    {
        if (!$this->fk_service->contains($fkService)) {
            $this->fk_service[] = $fkService;
        }

        return $this;
    }

    public function removeFkService(Services $fkService): self
    {
        $this->fk_service->removeElement($fkService);

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreneauxRdv(): ?\DateTimeInterface
    {
        return $this->creneauxRdv;
    }

    public function setCreneauxRdv(\DateTimeInterface $creneauxRdv): self
    {
        $this->creneauxRdv = $creneauxRdv;

        return $this;
    }
}

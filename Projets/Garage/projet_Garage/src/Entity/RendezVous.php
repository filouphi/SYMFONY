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
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="fk_rdv")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_user;

    /**
     * @ORM\ManyToMany(targetEntity=Services::class, inversedBy="id_rendezVous")
     */
    private $fk_services;

    public function __construct()
    {
        $this->fk_services = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getIdUser(): ?Users
    {
        return $this->id_user;
    }

    public function setIdUser(?Users $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * @return Collection|Services[]
     */
    public function getFkServices(): Collection
    {
        return $this->fk_services;
    }

    public function addFkService(Services $fkService): self
    {
        if (!$this->fk_services->contains($fkService)) {
            $this->fk_services[] = $fkService;
        }

        return $this;
    }

    public function removeFkService(Services $fkService): self
    {
        $this->fk_services->removeElement($fkService);

        return $this;
    }
}

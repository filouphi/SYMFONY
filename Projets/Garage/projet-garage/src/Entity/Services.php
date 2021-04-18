<?php

namespace App\Entity;

use App\Repository\ServicesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServicesRepository::class)
 */
class Services
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\ManyToMany(targetEntity=RendezVous::class, mappedBy="fk_services")
     */
    private $id_rendezVous;

    public function __construct()
    {
        $this->id_rendezVous = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * @return Collection|RendezVous[]
     */
    public function getIdRendezVous(): Collection
    {
        return $this->id_rendezVous;
    }

    public function addIdRendezVou(RendezVous $idRendezVou): self
    {
        if (!$this->id_rendezVous->contains($idRendezVou)) {
            $this->id_rendezVous[] = $idRendezVou;
            $idRendezVou->addFkService($this);
        }

        return $this;
    }

    public function removeIdRendezVou(RendezVous $idRendezVou): self
    {
        if ($this->id_rendezVous->removeElement($idRendezVou)) {
            $idRendezVou->removeFkService($this);
        }

        return $this;
    }
}

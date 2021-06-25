<?php

namespace App\Entity;

use App\Repository\TechniquesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TechniquesRepository::class)
 */
class Techniques
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $ID_Techniques;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom_Techniques;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description_Courte_Techniques;

    /**
     * @ORM\Column(type="text")
     */
    private $Description_Longue_Techniques;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Image_Logo_Techniques;

    /**
     * @ORM\OneToMany(targetEntity=Photos::class, mappedBy="techniques")
     */
    private $photos;

    public function __construct()
    {
        $this->photos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDTechniques(): ?int
    {
        return $this->ID_Techniques;
    }

    public function setIDTechniques(int $ID_Techniques): self
    {
        $this->ID_Techniques = $ID_Techniques;

        return $this;
    }

    public function getNomTechniques(): ?string
    {
        return $this->Nom_Techniques;
    }

    public function setNomTechniques(string $Nom_Techniques): self
    {
        $this->Nom_Techniques = $Nom_Techniques;

        return $this;
    }

    public function getDescriptionCourteTechniques(): ?string
    {
        return $this->Description_Courte_Techniques;
    }

    public function setDescriptionCourteTechniques(string $Description_Courte_Techniques): self
    {
        $this->Description_Courte_Techniques = $Description_Courte_Techniques;

        return $this;
    }

    public function getDescriptionLongueTechniques(): ?string
    {
        return $this->Description_Longue_Techniques;
    }

    public function setDescriptionLongueTechniques(string $Description_Longue_Techniques): self
    {
        $this->Description_Longue_Techniques = $Description_Longue_Techniques;

        return $this;
    }

    public function getImageLogoTechniques(): ?string
    {
        return $this->Image_Logo_Techniques;
    }

    public function setImageLogoTechniques(string $Image_Logo_Techniques): self
    {
        $this->Image_Logo_Techniques = $Image_Logo_Techniques;

        return $this;
    }

    /**
     * @return Collection|Photos[]
     */
    public function getPhotos(): Collection
    {
        return $this->photos;
    }

    public function addPhoto(Photos $photo): self
    {
        if (!$this->photos->contains($photo)) {
            $this->photos[] = $photo;
            $photo->setTechniques($this);
        }

        return $this;
    }

    public function removePhoto(Photos $photo): self
    {
        if ($this->photos->removeElement($photo)) {
            // set the owning side to null (unless already changed)
            if ($photo->getTechniques() === $this) {
                $photo->setTechniques(null);
            }
        }

        return $this;
    }
}

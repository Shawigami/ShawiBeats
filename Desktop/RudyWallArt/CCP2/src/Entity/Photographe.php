<?php

namespace App\Entity;

use App\Repository\PhotographeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PhotographeRepository::class)
 */
class Photographe
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
    private $ID_Photographe;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Nom_Photographe;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Prenom_Photographe;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Email_Photographe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Avatar_Photographe;

    /**
     * @ORM\Column(type="text")
     */
    private $Description_Photographe;

    /**
     * @ORM\OneToMany(targetEntity=Photos::class, mappedBy="photographe")
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

    public function getIDPhotographe(): ?int
    {
        return $this->ID_Photographe;
    }

    public function setIDPhotographe(int $ID_Photographe): self
    {
        $this->ID_Photographe = $ID_Photographe;

        return $this;
    }

    public function getNomPhotographe(): ?string
    {
        return $this->Nom_Photographe;
    }

    public function setNomPhotographe(string $Nom_Photographe): self
    {
        $this->Nom_Photographe = $Nom_Photographe;

        return $this;
    }

    public function getPrenomPhotographe(): ?string
    {
        return $this->Prenom_Photographe;
    }

    public function setPrenomPhotographe(string $Prenom_Photographe): self
    {
        $this->Prenom_Photographe = $Prenom_Photographe;

        return $this;
    }

    public function getEmailPhotographe(): ?string
    {
        return $this->Email_Photographe;
    }

    public function setEmailPhotographe(string $Email_Photographe): self
    {
        $this->Email_Photographe = $Email_Photographe;

        return $this;
    }

    public function getAvatarPhotographe(): ?string
    {
        return $this->Avatar_Photographe;
    }

    public function setAvatarPhotographe(string $Avatar_Photographe): self
    {
        $this->Avatar_Photographe = $Avatar_Photographe;

        return $this;
    }

    public function getDescriptionPhotographe(): ?string
    {
        return $this->Description_Photographe;
    }

    public function setDescriptionPhotographe(string $Description_Photographe): self
    {
        $this->Description_Photographe = $Description_Photographe;

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
            $photo->setPhotographe($this);
        }

        return $this;
    }

    public function removePhoto(Photos $photo): self
    {
        if ($this->photos->removeElement($photo)) {
            // set the owning side to null (unless already changed)
            if ($photo->getPhotographe() === $this) {
                $photo->setPhotographe(null);
            }
        }

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriesRepository::class)
 */
class Categories
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
    private $ID_Categories;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom_Categories;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description_Courte_Categories;

    /**
     * @ORM\Column(type="text")
     */
    private $Description_Longue_Categories;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Image_logo_Categories;

    /**
     * @ORM\OneToMany(targetEntity=Photos::class, mappedBy="AjouterCategories")
     */
    private $photos;

    /**
     * @ORM\OneToMany(targetEntity=Photos::class, mappedBy="categories", orphanRemoval=true)
     */
    private $Photo_relation;

    public function __construct()
    {
        $this->photos = new ArrayCollection();
        $this->Photo_relation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDCategories(): ?int
    {
        return $this->ID_Categories;
    }

    public function setIDCategories(int $ID_Categories): self
    {
        $this->ID_Categories = $ID_Categories;

        return $this;
    }

    public function getNomCategories(): ?string
    {
        return $this->Nom_Categories;
    }

    public function setNomCategories(string $Nom_Categories): self
    {
        $this->Nom_Categories = $Nom_Categories;

        return $this;
    }

    public function getDescriptionCourteCategories(): ?string
    {
        return $this->Description_Courte_Categories;
    }

    public function setDescriptionCourteCategories(string $Description_Courte_Categories): self
    {
        $this->Description_Courte_Categories = $Description_Courte_Categories;

        return $this;
    }

    public function getDescriptionLongueCategories(): ?string
    {
        return $this->Description_Longue_Categories;
    }

    public function setDescriptionLongueCategories(string $Description_Longue_Categories): self
    {
        $this->Description_Longue_Categories = $Description_Longue_Categories;

        return $this;
    }

    public function getImageLogoCategories(): ?string
    {
        return $this->Image_logo_Categories;
    }

    public function setImageLogoCategories(string $Image_logo_Categories): self
    {
        $this->Image_logo_Categories = $Image_logo_Categories;

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
            $photo->setAjouterCategories($this);
        }

        return $this;
    }

    public function removePhoto(Photos $photo): self
    {
        if ($this->photos->removeElement($photo)) {
            // set the owning side to null (unless already changed)
            if ($photo->getAjouterCategories() === $this) {
                $photo->setAjouterCategories(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Photos[]
     */
    public function getPhotoRelation(): Collection
    {
        return $this->Photo_relation;
    }

    public function addPhotoRelation(Photos $photoRelation): self
    {
        if (!$this->Photo_relation->contains($photoRelation)) {
            $this->Photo_relation[] = $photoRelation;
            $photoRelation->setCategories($this);
        }

        return $this;
    }

    public function removePhotoRelation(Photos $photoRelation): self
    {
        if ($this->Photo_relation->removeElement($photoRelation)) {
            // set the owning side to null (unless already changed)
            if ($photoRelation->getCategories() === $this) {
                $photoRelation->setCategories(null);
            }
        }

        return $this;
    }
}

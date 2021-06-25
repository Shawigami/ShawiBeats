<?php

namespace App\Entity;

use App\Repository\PhotosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PhotosRepository::class)
 */
class Photos
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
    private $ID_Photos;

    /**
     * @ORM\Column(type="text")
     */
    private $URL_Photos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Titre_Photos;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Exif_Dimentions_Photos;

    /**
     * @ORM\Column(type="date")
     */
    private $Exif_Date_Photos;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Exif_Speed_Photos;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Exif_Apperture_Photos;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $Exif_ISO_Photos;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Exif_Focale_Photos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Exif_Objectif_Photos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Exif_Cam_Photos;

    /**
     * @ORM\ManyToOne(targetEntity=Categories::class, inversedBy="photos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $AjouterCategories;

    /**
     * @ORM\ManyToOne(targetEntity=Categories::class, inversedBy="Photo_relation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categories;

    /**
     * @ORM\ManyToOne(targetEntity=Photographe::class, inversedBy="photos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $photographe;

    /**
     * @ORM\ManyToOne(targetEntity=Techniques::class, inversedBy="photos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $techniques;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDPhotos(): ?int
    {
        return $this->ID_Photos;
    }

    public function setIDPhotos(int $ID_Photos): self
    {
        $this->ID_Photos = $ID_Photos;

        return $this;
    }

    public function getURLPhotos(): ?string
    {
        return $this->URL_Photos;
    }

    public function setURLPhotos(string $URL_Photos): self
    {
        $this->URL_Photos = $URL_Photos;

        return $this;
    }

    public function getTitrePhotos(): ?string
    {
        return $this->Titre_Photos;
    }

    public function setTitrePhotos(string $Titre_Photos): self
    {
        $this->Titre_Photos = $Titre_Photos;

        return $this;
    }

    public function getExifDimentionsPhotos(): ?string
    {
        return $this->Exif_Dimentions_Photos;
    }

    public function setExifDimentionsPhotos(string $Exif_Dimentions_Photos): self
    {
        $this->Exif_Dimentions_Photos = $Exif_Dimentions_Photos;

        return $this;
    }

    public function getExifDatePhotos(): ?\DateTimeInterface
    {
        return $this->Exif_Date_Photos;
    }

    public function setExifDatePhotos(\DateTimeInterface $Exif_Date_Photos): self
    {
        $this->Exif_Date_Photos = $Exif_Date_Photos;

        return $this;
    }

    public function getExifSpeedPhotos(): ?string
    {
        return $this->Exif_Speed_Photos;
    }

    public function setExifSpeedPhotos(string $Exif_Speed_Photos): self
    {
        $this->Exif_Speed_Photos = $Exif_Speed_Photos;

        return $this;
    }

    public function getExifApperturePhotos(): ?string
    {
        return $this->Exif_Apperture_Photos;
    }

    public function setExifApperturePhotos(string $Exif_Apperture_Photos): self
    {
        $this->Exif_Apperture_Photos = $Exif_Apperture_Photos;

        return $this;
    }

    public function getExifISOPhotos(): ?string
    {
        return $this->Exif_ISO_Photos;
    }

    public function setExifISOPhotos(string $Exif_ISO_Photos): self
    {
        $this->Exif_ISO_Photos = $Exif_ISO_Photos;

        return $this;
    }

    public function getExifFocalePhotos(): ?string
    {
        return $this->Exif_Focale_Photos;
    }

    public function setExifFocalePhotos(string $Exif_Focale_Photos): self
    {
        $this->Exif_Focale_Photos = $Exif_Focale_Photos;

        return $this;
    }

    public function getExifObjectifPhotos(): ?string
    {
        return $this->Exif_Objectif_Photos;
    }

    public function setExifObjectifPhotos(string $Exif_Objectif_Photos): self
    {
        $this->Exif_Objectif_Photos = $Exif_Objectif_Photos;

        return $this;
    }

    public function getExifCamPhotos(): ?string
    {
        return $this->Exif_Cam_Photos;
    }

    public function setExifCamPhotos(string $Exif_Cam_Photos): self
    {
        $this->Exif_Cam_Photos = $Exif_Cam_Photos;

        return $this;
    }

    public function getAjouterCategories(): ?Categories
    {
        return $this->AjouterCategories;
    }

    public function setAjouterCategories(?Categories $AjouterCategories): self
    {
        $this->AjouterCategories = $AjouterCategories;

        return $this;
    }

    public function getCategories(): ?Categories
    {
        return $this->categories;
    }

    public function setCategories(?Categories $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    public function getPhotographe(): ?Photographe
    {
        return $this->photographe;
    }

    public function setPhotographe(?Photographe $photographe): self
    {
        $this->photographe = $photographe;

        return $this;
    }

    public function getTechniques(): ?Techniques
    {
        return $this->techniques;
    }

    public function setTechniques(?Techniques $techniques): self
    {
        $this->techniques = $techniques;

        return $this;
    }
}

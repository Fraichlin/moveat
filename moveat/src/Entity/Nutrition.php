<?php

namespace App\Entity;

use App\Repository\NutritionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=NutritionRepository::class)
 * @Vich\Uploadable
 */
class Nutrition
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Assert\NotBlank(message="this field is required ")
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Assert\NotBlank(message="this field is required ")
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     *   @Assert\NotBlank(message="this field is required ")
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     *   @Assert\NotBlank(message="this field is required ")
     */
    private $email;
    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="programme", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTimeInterface|null
     */
    private $updatedAt;


    /**
     * @ORM\OneToMany(targetEntity=Patient::class, mappedBy="nutrition")
     */
    private $Patient;

    /**
     * @ORM\ManyToMany(targetEntity=Programme::class, inversedBy="nutrition")
     */
    private $Programme;

    public function __construct()
    {
        $this->Patient = new ArrayCollection();
        $this->Programme = new ArrayCollection();
        $this->updatedAt = new \DateTime();
    }

    public function getId(): ?int
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

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return Collection|Patient[]
     */
    public function getPatient(): Collection
    {
        return $this->Patient;
    }

    public function addPatient(Patient $patient): self
    {
        if (!$this->Patient->contains($patient)) {
            $this->Patient[] = $patient;
            $patient->setNutrition($this);
        }

        return $this;
    }

    public function removePatient(Patient $patient): self
    {
        if ($this->Patient->removeElement($patient)) {
            // set the owning side to null (unless already changed)
            if ($patient->getNutrition() === $this) {
                $patient->setNutrition(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Programme[]
     */
    public function getProgramme(): Collection
    {
        return $this->Programme;
    }

    public function addProgramme(Programme $programme): self
    {
        if (!$this->Programme->contains($programme)) {
            $this->Programme[] = $programme;
        }

        return $this;
    }

    public function removeProgramme(Programme $programme): self
    {
        $this->Programme->removeElement($programme);

        return $this;
    }


}

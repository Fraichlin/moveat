<?php

namespace App\Entity;

use App\Repository\ProgrammeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ProgrammeRepository::class)
 * @Vich\Uploadable
 */
class Programme
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
     * @Assert\NotBlank(message="this field is required ")
     */
    private $type;


    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="this field is required ")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="this field is required ")
     */
    private $breackfast;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="this field is required ")
     */
    private $lunch;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="this field is required ")
     */
    private $dinner;

    /**
     * @ORM\OneToMany(targetEntity=Patient::class, mappedBy="programme")
     *
     */
    private $Patient;

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
     * @ORM\ManyToMany(targetEntity=Nutrition::class, mappedBy="Programme")
     */
    private $nutrition;

    // ...
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="programme")
     */
    private $comments;


    public function __construct()
    {
        $this->Patient = new ArrayCollection();
        $this->updatedAt = new \DateTime();
        $this->nutrition = new ArrayCollection();
        $this->comments = new ArrayCollection();
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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

    public function getBreackfast(): ?string
    {
        return $this->breackfast;
    }

    public function setBreackfast(string $breackfast): self
    {
        $this->breackfast = $breackfast;

        return $this;
    }

    public function getLunch(): ?string
    {
        return $this->lunch;
    }

    public function setLunch(string $lunch): self
    {
        $this->lunch = $lunch;

        return $this;
    }

    public function getDinner(): ?string
    {
        return $this->dinner;
    }

    public function setDinner(string $dinner): self
    {
        $this->dinner = $dinner;

        return $this;
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
            $patient->setProgramme($this);
        }

        return $this;
    }

    public function removePatient(Patient $patient): self
    {
        if ($this->Patient->removeElement($patient)) {
            // set the owning side to null (unless already changed)
            if ($patient->getProgramme() === $this) {
                $patient->setProgramme(null);
            }
        }

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
     * @return Collection|Nutrition[]
     */
    public function getNutrition(): Collection
    {
        return $this->nutrition;
    }

    public function addNutrition(Nutrition $nutrition): self
    {
        if (!$this->nutrition->contains($nutrition)) {
            $this->nutrition[] = $nutrition;
            $nutrition->addProgramme($this);
        }

        return $this;
    }

    public function removeNutrition(Nutrition $nutrition): self
    {
        if ($this->nutrition->removeElement($nutrition)) {
            $nutrition->removeProgramme($this);
        }

        return $this;
    }
    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }
    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setProgramme($this);
        }
        return $this;
    }
    public function removeComment(Comment $comment): self
    {
        if ($this->comments->contains($comment)) {
            $this->comments->removeElement($comment);
            // set the owning side to null (unless already changed)
            if ($comment->setProgramme() === $this) {
                $comment->setProgramme(null);
            }
        }
        return $this;
    }
    public function __toString(){
        // to show the name of the Category in the select
        return $this->name;
        // to show the id of the Category in the select
        // return $this->id;
    }
}

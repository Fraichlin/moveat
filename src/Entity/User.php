<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Exception;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"email"},message="l'email {{ value }} est déjà utilisée")
 * @UniqueEntity(fields={"username"},message="le username {{ value }} est déjà utilisé")
 * @Vich\Uploadable
 */
class User implements UserInterface,\Serializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\NotBlank(message="Insérer une adresse email")
     * @Assert\Email(message ="l'email {{ value }} n'est pas valide")
     * @Groups("post:read")
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     * @Groups("post:read")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * @Assert\Length(min=8, minMessage="Le mot de passe doit avoir 8 caractères au minimum")
     * @Assert\EqualTo(propertyPath="confirm_password", message="Les mots de passe ne correspondent pas")
     * @Groups("post:read")
     */
    private $password;

    /**
     * @Assert\EqualTo(propertyPath="password", message="Les mots de passe ne correspondent pas")
     */
    private $confirm_password;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Insérer un username")
     * @Assert\Length(min=4, max=15, minMessage="Le username doit avoir 4 caractères au minimum",maxMessage="Le login doit avoir 15 caractères au maximum")
     * @Groups("post:read")
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Insérer un nom")
     * @Assert\Length(min=4, max=20, minMessage="Le nom doit avoir 4 caractères au minimum",maxMessage="Le nom doit avoir 20 caractères au maximum")
     * @Groups("post:read")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Insérer un prénom")
     * @Assert\Length(min=4, max=20, minMessage="Le prenom doit avoir 4 caractères au minimum",maxMessage="Le prenom doit avoir 20 caractères au maximum")
     * @Groups("post:read")
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Sélectionner votre sexe")
     * @Groups("post:read")
     */
    private $sexe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Regex(pattern="/^\+216\s\d\d\s\d\d\d\s\d\d\d$/",message="Le numéro doit etre de la forme +216 XX XXX XXX")
     * @Groups("post:read")
     */
    private $telephone;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups("post:read")
     */
    private $taille;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups("post:read")
     */
    private $poids;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:read")
     */
    private $specialite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:read")
     */
    private $adresse;

    /**
     * @ORM\Column(type="string",length=255)
     * @Groups("post:read")
     */
    private $statut;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:read")
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:read")
     */
    private $justificatif;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups("post:read")
     */
    private $dateInscription;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups("post:read")
     */
    private $dateValidation;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups("post:read")
     */
    private $dateBlocage;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups("post:read")
     */
    private $dateDeblocage;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups("post:read")
     */
    protected $updatedAt;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="user_images", fileNameProperty="photo")
     * @var File|null
     */
    private $imageFile;
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * @Vich\UploadableField(mapping="user_files", fileNameProperty="justificatif")
     * @var File|null
     */
    private $genericFile;

    /**
     * @ORM\Column(type="boolean")
     * @Groups("post:read")
     */
    private $isVerified = false;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="patient")
     */
    private $comments;

//    /**
//     * @ORM\OneToMany(targetEntity=NutritionalProgram::class, mappedBy="nutritionist")
//     */
//    private $nutritionalPrograms;

    /**
     * @ORM\OneToMany(targetEntity=Postuler::class, mappedBy="user")
     */
    private $postulers;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->nutritionalPrograms = new ArrayCollection();
    }




    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
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
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getTaille(): ?float
    {
        return $this->taille;
    }

    public function setTaille(?float $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(?float $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(?string $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getJustificatif(): ?string
    {
        return $this->justificatif;
    }

    public function setJustificatif(?string $justificatif): self
    {
        $this->justificatif = $justificatif;

        return $this;
    }

    public function getDateInscription(): ?\DateTimeInterface
    {
        return $this->dateInscription;
    }

    public function setDateInscription(?\DateTimeInterface $dateInscription): self
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    public function getDateValidation(): ?\DateTimeInterface
    {
        return $this->dateValidation;
    }

    public function setDateValidation(?\DateTimeInterface $dateValidation): self
    {
        $this->dateValidation = $dateValidation;

        return $this;
    }


    public function getDateBlocage(): ?\DateTimeInterface
    {
        return $this->dateBlocage;
    }

    public function setDateBlocage(?\DateTimeInterface $dateBlocage): self
    {
        $this->dateBlocage = $dateBlocage;

        return $this;
    }

    public function getDateDeblocage(): ?\DateTimeInterface
    {
        return $this->dateDeblocage;
    }

    public function setDateDeblocage(?\DateTimeInterface $dateDeblocage): self
    {
        $this->dateDeblocage = $dateDeblocage;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getConfirmPassword()
    {
        return $this->confirm_password;
    }
    /**
     * @param mixed $confirm_password
     */
    public function setConfirmPassword($confirm_password): void
    {
        $this->confirm_password = $confirm_password;
    }
    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->setUpdatedAt(new \DateTimeImmutable);
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $genericFile
     */
    public function setGenericFile(?File $genericFile = null): void
    {
        $this->genericFile = $genericFile;

        if (null !== $genericFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->setUpdatedAt(new \DateTimeImmutable);
        }
    }

    public function getGenericFile(): ?File
    {
        return $this->genericFile;
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    public function getIsVerified(): ?bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
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
            $comment->setPatient($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getPatient() === $this) {
                $comment->setPatient(null);
            }
        }

        return $this;
    }

//    /**
//     * @return Collection|NutritionalProgram[]
//     */
//    public function getNutritionalPrograms(): Collection
//    {
//        return $this->nutritionalPrograms;
//    }
//
//    public function addNutritionalProgram(NutritionalProgram $nutritionalProgram): self
//    {
//        if (!$this->nutritionalPrograms->contains($nutritionalProgram)) {
//            $this->nutritionalPrograms[] = $nutritionalProgram;
//            $nutritionalProgram->setNutritionist($this);
//        }
//
//        return $this;
//    }
//
//    public function removeNutritionalProgram(NutritionalProgram $nutritionalProgram): self
//    {
//        if ($this->nutritionalPrograms->removeElement($nutritionalProgram)) {
//            // set the owning side to null (unless already changed)
//            if ($nutritionalProgram->getNutritionist() === $this) {
//                $nutritionalProgram->setNutritionist(null);
//            }
//        }
//
//        return $this;
//    }
    /**
     * @return Collection|Postuler[]
     */
    public function getPostulers(): Collection
    {
        return $this->postulers;
    }

    public function addPostuler(Postuler $postuler): self
    {
        if (!$this->postulers->contains($postuler)) {
            $this->postulers[] = $postuler;
            $postuler->setUser($this);
        }

        return $this;
    }

    public function removePostuler(Postuler $postuler): self
    {
        if ($this->postulers->removeElement($postuler)) {
            // set the owning side to null (unless already changed)
            if ($postuler->getUser() === $this) {
                $postuler->setUser(null);
            }
        }

        return $this;
    }



}

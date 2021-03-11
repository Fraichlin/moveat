<?php

namespace App\Entity;

use App\Repository\CoachRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=CoachRepository::class)
 * @UniqueEntity(fields={"email"},message="l'email {{ value }} est déjà utilisé")
 * @UniqueEntity(fields={"login"},message="le username {{ value }} est déjà utilisé")
 */
class Coach implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Insérer un nom")
     * @Assert\Length(min=4, max=20, minMessage="Le nom doit avoir 4 caractères au minimum",maxMessage="Le nom doit avoir 20 caractères au maximum")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * * @Assert\NotBlank(message="Insérer un prénom")
     * @Assert\Length(min=4, max=20, minMessage="Le prenom doit avoir 4 caractères au minimum",maxMessage="Le prenom doit avoir 20 caractères au maximum")
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Insérer un username")
     * @Assert\Length(min=4, max=15, minMessage="Le username doit avoir 4 caractères au minimum",maxMessage="Le login doit avoir 15 caractères au maximum")
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=255)
     * * @Assert\NotBlank(message="Insérer un mot de passe")
     * @Assert\Length(min=8, minMessage="Le mot de passe doit avoir 8 caractères au minimum")
     * @Assert\EqualTo(propertyPath="confirm_password", message="Les mots de passe ne correspondent pas")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Insérer une adresse email")
     * @Assert\Email(message ="l'email {{ value }} n'est pas valide")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * * @Assert\NotBlank(message="Sélectionner votre sexe")
     */
    private $sexe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Insérer un numéro")
     * @Assert\Regex("/^\+216\s\d\d\s\d\d\d\s\d\d\d$/",message="Le numéro doit etre de la forme +216 XX XXX XXX")
     */
    private $telephone;

    /**
     * @ORM\Column(type="integer")
     */
    private $statut;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Image(mimeTypes={"image/jpeg","image/jpg","image/png"})
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Insérer une adresse")
     * @Assert\Length(min=3, minMessage="L'adresse doit avoir 3 caractères au minimum")
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Insérer votre spécialité")
     */
    private $specialite;

    /**
     * @ORM\ManyToOne(targetEntity=Administrateur::class, inversedBy="coaches")
     */
    private $idAdmin;

    /**
     * @ORM\OneToMany(targetEntity=RendezVous::class, mappedBy="idCoach")
     */
    private $rendezVouses;
    /**
     * @Assert\EqualTo(propertyPath="password", message="Les mots de passe ne correspondent pas")
     */
    private $confirm_password;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\File(maxSize = "1024k",
     *     mimeTypes={"application/pdf","application/x-pdf"},
     *     mimeTypesMessage = "Sélectionner un fichier pdf"
     *     )
     */
    private $justificatif;

    /**
     * @ORM\Column(type="date")
     */
    private $dateInscription;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateValidation;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;


    public function __construct()
    {
        $this->rendezVouses = new ArrayCollection();
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

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

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(int $statut): self
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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

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

    public function getIdAdmin(): ?Administrateur
    {
        return $this->idAdmin;
    }

    public function setIdAdmin(?Administrateur $idAdmin): self
    {
        $this->idAdmin = $idAdmin;

        return $this;
    }

    /**
     * @return Collection|RendezVous[]
     */
    public function getRendezVouses(): Collection
    {
        return $this->rendezVouses;
    }

    public function addRendezVouse(RendezVous $rendezVouse): self
    {
        if (!$this->rendezVouses->contains($rendezVouse)) {
            $this->rendezVouses[] = $rendezVouse;
            $rendezVouse->setIdCoach($this);
        }

        return $this;
    }

    public function removeRendezVouse(RendezVous $rendezVouse): self
    {
        if ($this->rendezVouses->removeElement($rendezVouse)) {
            // set the owning side to null (unless already changed)
            if ($rendezVouse->getIdCoach() === $this) {
                $rendezVouse->setIdCoach(null);
            }
        }

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

    public function getJustificatif(): ?string
    {
        return $this->justificatif;
    }

    public function setJustificatif($justificatif): self
    {
        $this->justificatif = $justificatif;
        return $this;
    }

    public function getDateInscription(): ?\DateTimeInterface
    {
        return $this->dateInscription;
    }

    public function setDateInscription(\DateTimeInterface $dateInscription): self
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

    public function eraseCredentials()
    {

    }
    public function getSalt()
    {

    }
    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    public function getUsername()
    {
        return $this->getLogin();
    }


    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}

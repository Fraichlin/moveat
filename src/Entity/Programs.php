<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Programs
 *
 * @ORM\Table(name="programs")
 * @ORM\Entity
 */
class Programs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="program", type="string", length=255, nullable=false)
     */
    private $program;

    /**
     * @ORM\OneToMany(targetEntity=Postuler::class, mappedBy="program")
     */
    private $likes;



    public function __construct()
    {
        $this->likes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProgram(): ?string
    {
        return $this->program;
    }

    public function setProgram(string $program): self
    {
        $this->program = $program;

        return $this;
    }

    /**
     * @return Collection|Postuler[]
     */
    public function getLikes(): Collection
    {
        return $this->likes;
    }

    public function addLike(Postuler $like): self
    {
        if (!$this->likes->contains($like)) {
            $this->likes[] = $like;
            $like->setProgram($this);
        }

        return $this;
    }

    public function removeLike(Postuler $like): self
    {
        if ($this->likes->removeElement($like)) {
            // set the owning side to null (unless already changed)
            if ($like->getProgram() === $this) {
                $like->setProgram(null);
            }
        }

        return $this;
    }
    public function isLikedByUser(User $user) : bool
    {
        foreach ($this->likes as $like)
        {
            if($like->getUser()==$user)
                return true;
        }
        return false ;
    }
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exercice
 *
 * @ORM\Table(name="exercice")
 * @ORM\Entity
 */
class Exercice
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="calories", type="float", precision=10, scale=0, nullable=false)
     */
    private $calories;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_ou_gif", type="string", length=255, nullable=false)
     */
    private $photoOuGif;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProgrammeSportif", inversedBy="exercice")
     * @ORM\JoinTable(name="exercice_programme_sportif",
     *   joinColumns={
     *     @ORM\JoinColumn(name="exercice_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="programme_sportif_id", referencedColumnName="id")
     *   }
     * )
     */
    private $programmeSportif;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->programmeSportif = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

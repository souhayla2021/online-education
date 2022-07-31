<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * ForumReponse
 *
 * @ORM\Table(name="forum_reponse")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ForumReponseRepository")
 */
class ForumReponse
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */

    private $contenu;

    /**
     * @var \DateTime $dateCreation
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime", name="date_creation")
     */
    private $dateCreation;

    /**
     * @var \DateTime $dateModification
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime", name="date_modification")
     */
    private $dateModification;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ForumSujet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sujet;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return ForumReponse
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateModification
     *
     * @param \DateTime $dateModification
     *
     * @return ForumReponse
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;

        return $this;
    }

    /**
     * Get dateModification
     *
     * @return \DateTime
     */
    public function getDateModification()
    {
        return $this->dateModification;
    }

    /**
     * Set sujet
     *
     * @param \AppBundle\Entity\ForumSujet $sujet
     *
     * @return ForumReponse
     */
    public function setSujet(\AppBundle\Entity\ForumSujet $sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return \AppBundle\Entity\ForumSujet
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return ForumReponse
     */
    public function setUser(\AppBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}

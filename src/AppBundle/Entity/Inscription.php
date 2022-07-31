<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Inscription
 *
 * @ORM\Table(name="inscription")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InscriptionRepository")
 */
class Inscription
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
     * @var \DateTime $dateCreation
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime", name="date_creation")
     */
    private $dateCreation;

    /**
     * @var bool
     *
     * @ORM\Column(name="valider", type="boolean")
     */
    private $valider;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Formation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $formation;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Apprenant")
     * @ORM\JoinColumn(nullable=false)
     */
    private $apprenant;


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
     * @return Inscription
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
     * Set valider
     *
     * @param boolean $valider
     *
     * @return Inscription
     */
    public function setValider($valider)
    {
        $this->valider = $valider;

        return $this;
    }

    /**
     * Get valider
     *
     * @return boolean
     */
    public function getValider()
    {
        return $this->valider;
    }

    /**
     * Set formation
     *
     * @param \AppBundle\Entity\Formation $formation
     *
     * @return Inscription
     */
    public function setFormation(\AppBundle\Entity\Formation $formation)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return \AppBundle\Entity\Formation
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * Set apprenant
     *
     * @param \AppBundle\Entity\Apprenant $apprenant
     *
     * @return Inscription
     */
    public function setApprenant(\AppBundle\Entity\Apprenant $apprenant)
    {
        $this->apprenant = $apprenant;

        return $this;
    }

    /**
     * Get apprenant
     *
     * @return \AppBundle\Entity\Apprenant
     */
    public function getApprenant()
    {
        return $this->apprenant;
    }
}

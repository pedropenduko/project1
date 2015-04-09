<?php

namespace Layawan\Project1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Issue
 *
 * @ORM\Table(name="issues")
 * @ORM\Entity(repositoryClass="Layawan\Project1Bundle\Entity\IssueRepository")
 */
class Issue
{
    /**
     * @var Publication
     *
     * @ORM\ManyToOne(targetEntity="Publication", inversedBy="issues")
     * @ORM\JoinColumn(name="publication_id", referencedColumnName="id")
     */
    private $publication;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_publication", type="date")
     */
    private $datePublication;

    /**
     * @var string
     *
     * @ORM\Column(name="cover", type="string", length=255)
     */
    private $cover;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set number
     *
     * @param integer $number
     * @return Issue
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set datePublication
     *
     * @param \DateTime $datePublication
     * @return Issue
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime 
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set cover
     *
     * @param string $cover
     * @return Issue
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return string 
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set publication
     *
     * @param \Layawan\Project1Bundle\Entity\Publication $publication
     * @return Issue
     */
    public function setPublication(\Layawan\Project1Bundle\Entity\Publication $publication = null)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return \Layawan\Project1Bundle\Entity\Publication 
     */
    public function getPublication()
    {
        return $this->publication;
    }

}

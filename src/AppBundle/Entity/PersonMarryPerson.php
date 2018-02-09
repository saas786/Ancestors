<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\PersonMarryPersonRepository")
 */
class PersonMarryPerson
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Person")
     */
    private $husband;

    /**
     * @ORM\ManyToOne(targetEntity="Person")
     */
    private $wife;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $marriage;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $divorce;

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
     * Set marriage
     *
     * @param \DateTime $marriage
     *
     * @return PersonMarryPerson
     */
    public function setMarriage($marriage)
    {
        $this->marriage = $marriage;

        return $this;
    }

    /**
     * Get marriage
     *
     * @return \DateTime
     */
    public function getMarriage()
    {
        return $this->marriage;
    }

    /**
     * Set divorce
     *
     * @param \DateTime $divorce
     *
     * @return PersonMarryPerson
     */
    public function setDivorce($divorce)
    {
        $this->divorce = $divorce;

        return $this;
    }

    /**
     * Get divorce
     *
     * @return \DateTime
     */
    public function getDivorce()
    {
        return $this->divorce;
    }

    /**
     * Set husband
     *
     * @param \AppBundle\Entity\Person $husband
     *
     * @return PersonMarryPerson
     */
    public function setHusband(\AppBundle\Entity\Person $husband = null)
    {
        $this->husband = $husband;

        return $this;
    }

    /**
     * Get husband
     *
     * @return \AppBundle\Entity\Person
     */
    public function getHusband()
    {
        return $this->husband;
    }

    /**
     * Set wife
     *
     * @param \AppBundle\Entity\Person $wife
     *
     * @return PersonMarryPerson
     */
    public function setWife(\AppBundle\Entity\Person $wife = null)
    {
        $this->wife = $wife;

        return $this;
    }

    /**
     * Get wife
     *
     * @return \AppBundle\Entity\Person
     */
    public function getWife()
    {
        return $this->wife;
    }
}

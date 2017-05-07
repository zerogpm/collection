<?php
/**
 * Created by PhpStorm.
 * User: jiansu
 * Date: 5/7/17
 * Time: 3:44 PM
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="genus_scientist")
 */
class GenusScientist
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Genus", inversedBy="genusScientists")
     * @ORM\JoinColumn(nullable=false)
     */
    private $genus;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="genusScientists")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="string")
     */
    private $yearsStudied;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getGenus()
    {
        return $this->genus;
    }

    /**
     * @param mixed $genus
     */
    public function setGenus($genus)
    {
        $this->genus = $genus;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getYearsStudied()
    {
        return $this->yearsStudied;
    }

    /**
     * @param mixed $yearsStudied
     */
    public function setYearsStudied($yearsStudied)
    {
        $this->yearsStudied = $yearsStudied;
    }


}
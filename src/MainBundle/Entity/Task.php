<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Task
 *
 * @ORM\Table(name="task")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\TaskRepository")
 */
class Task
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
     * @var string
     * @Assert\NotBlank(
     *  message="Name cannot be empty."
     * ) 
     * @ORM\Column(name="Name", type="string", length=60)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;

    /**
     * @var integer
     * @Assert\Range(
     *  min=0, 
     *  minMessage="Minutes value must be at least {{ limit }}"
     * )
     * @ORM\Column(name="Minutes", type="integer", length=3)
     */
    private $minutes;

    /**
     
     * @var type* @var integer
     * @Assert\Range(
     *  min=0,
     *  max=60, 
     *  minMessage="Seconds value must be at least {{ limit }} seconds",
     *  maxMessage="Seconds value cannot be bigger than {{ limit }} seconds"
     * )
     * @ORM\Column(name="Seconds", type="integer", length=2)
     */
    
    private $seconds;
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
     * Set name
     *
     * @param string $name
     * @return Task
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Task
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set time
     *
     * @param string $time
     * @return Task
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set minutes
     *
     * @param integer $minutes
     * @return Task
     */
    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;

        return $this;
    }

    /**
     * Get minutes
     *
     * @return integer 
     */
    public function getMinutes()
    {
        return $this->minutes;
    }

    /**
     * Set seconds
     *
     * @param integer $seconds
     * @return Task
     */
    public function setSeconds($seconds)
    {
        $this->seconds = $seconds;

        return $this;
    }

    /**
     * Get seconds
     *
     * @return integer 
     */
    public function getSeconds()
    {
        return $this->seconds;
    }
}

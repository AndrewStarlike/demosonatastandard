<?php

namespace AStar\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wine
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Wine {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, unique=false, nullable=false)
     */
    protected $type;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=false, nullable=false)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, unique=false, nullable=false)
     */
    protected $description;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="integer", nullable=false)
     */
    protected $year;

    /**
     * @ORM\ManyToOne(targetEntity="Winery", cascade={"persist"})
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    protected $winery;


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
     * Set type
     *
     * @param string $type
     * @return Wine
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Wine
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
     * @return Wine
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
     * Set year
     *
     * @param integer $year
     * @return Wine
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set winery
     *
     * @param \AStar\DemoBundle\Entity\Winery $winery
     * @return Wine
     */
    public function setWinery(\AStar\DemoBundle\Entity\Winery $winery = null)
    {
        $this->winery = $winery;

        return $this;
    }

    /**
     * Get winery
     *
     * @return \AStar\DemoBundle\Entity\Winery 
     */
    public function getWinery()
    {
        return $this->winery;
    }
}

<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="Schedule")
 * @ORM\Entity
 * 
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"schedule_s" = "Schedule_s"})
 */

abstract class Schedule{
    /**
     *
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="dayOfWeek", type="string")
     */
    private $dayOfWeek;
    
     /**
     * @var DateTime
     *
     * @ORM\Column(name="startWorkTime", type="DateTime")
     */
    private $startWorkTime;
    
    /**
     * @var DateTime
     *
     * @ORM\Column(name="endtWorkTime", type="DateTime")
     */
    private $endWorkTime;
    
    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string")
     */
    private $comment;
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Doctor", inversedBy="mode_p")
     * @ORM\JoinColumn( name="doctor", referencedColumnName="id")
     */
    private $doctor;
    
}


/**
 * @ORM\Entity
 * 
 */
class Schedule_s extends Schedule{
    
    /**
     * @var boolean
     * 
     * @ORM\Column(name="isPreventionDay", type="boolean")
     */
    private $isPreventionDay;
    
      /**
     * 
     * @ORM\ManyToOne(targetEntity="Doctor", inversedBy="mode_s")
     * @ORM\JoinColumn( name="specialist", referencedColumnName="id")
     */
    private $specialist;
    

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
     * Set dayOfWeek
     *
     * @param string $dayOfWeek
     *
     * @return Schedule
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    /**
     * Get dayOfWeek
     *
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * Set startWorkTime
     *
     * @param \DateTime $startWorkTime
     *
     * @return Schedule
     */
    public function setStartWorkTime(\DateTime $startWorkTime)
    {
        $this->startWorkTime = $startWorkTime;

        return $this;
    }

    /**
     * Get startWorkTime
     *
     * @return \DateTime
     */
    public function getStartWorkTime()
    {
        return $this->startWorkTime;
    }

    /**
     * Set endWorkTime
     *
     * @param \DateTime $endWorkTime
     *
     * @return Schedule
     */
    public function setEndWorkTime(\DateTime $endWorkTime)
    {
        $this->endWorkTime = $endWorkTime;

        return $this;
    }

    /**
     * Get endWorkTime
     *
     * @return \DateTime
     */
    public function getEndWorkTime()
    {
        return $this->endWorkTime;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Schedule
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set doctor
     *
     * @param \AppBundle\Entity\Doctor $doctor
     *
     * @return Schedule
     */
    public function setDoctor(\AppBundle\Entity\Doctor $doctor = null)
    {
        $this->doctor = $doctor;

        return $this;
    }

    /**
     * Get doctor
     *
     * @return \AppBundle\Entity\Doctor
     */
    public function getDoctor()
    {
        return $this->doctor;
    }
}

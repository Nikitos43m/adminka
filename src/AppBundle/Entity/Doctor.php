<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="doctor")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\doctorsRepository")
 */
class Doctor {
    /**
     *
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
     /**
     * @var boolean
     *
     * @ORM\Column(name="pediatr", type="boolean")
     */
    private $pediatr;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="specialist", type="boolean")
     */
    private $specialist;
    
    /**
     * @var string
     *
     * @ORM\Column(name="fio", type="string", length=150)
     */
    private $fio;
    
    /**
     * Номер участка
     * @var int
     * @ORM\Column(name="plot", type="integer", unique=false)
     * 
     */
    private $plot;
    
     /**
     * Номер кабинета педиатра
     * 
     * @var int
     * @ORM\Column(name="cabinet_p", type="integer", unique=false)
     * 
     */
    private $cabinet_p;
    
    /**
     * Режим работы педиатра
     * 
     * @ORM\OneToMany(targetEntity="Schedule", mappedBy="doctor")
     * 
     */
    private $mode_p;
    
    /**
     * Филиал
     * 
     * @var string
     * @ORM\Column(name="filial")
     */
    private $filial;


    /**
     * Должность
     * 
     * @ORM\Column(name="post", type="string", unique=false)
     * 
     * @var string
     * 
     */
    private $post;
    
    
    /**
     * Номер кабинета специалиста
     * @var int
     * @ORM\Column(name="cabinet_s", type="integer", unique=false)
     * 
     */
    private $cabinet_s;
    
    
     /**
     * Режим работы специалиста
     * 
     * @ORM\OneToMany(targetEntity="Schedule_s", mappedBy="specialist")
     * 
     */
    private $mode_s;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mode_p = new \Doctrine\Common\Collections\ArrayCollection();
        $this->mode_s = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set pediatr
     *
     * @param boolean $pediatr
     *
     * @return Doctor
     */
    public function setPediatr($pediatr)
    {
        $this->pediatr = $pediatr;

        return $this;
    }

    /**
     * Get pediatr
     *
     * @return boolean
     */
    public function getPediatr()
    {
        return $this->pediatr;
    }

    /**
     * Set specialist
     *
     * @param boolean $specialist
     *
     * @return Doctor
     */
    public function setSpecialist($specialist)
    {
        $this->specialist = $specialist;

        return $this;
    }

    /**
     * Get specialist
     *
     * @return boolean
     */
    public function getSpecialist()
    {
        return $this->specialist;
    }

    /**
     * Set fio
     *
     * @param string $fio
     *
     * @return Doctor
     */
    public function setFio($fio)
    {
        $this->fio = $fio;

        return $this;
    }

    /**
     * Get fio
     *
     * @return string
     */
    public function getFio()
    {
        return $this->fio;
    }

    /**
     * Set plot
     *
     * @param integer $plot
     *
     * @return Doctor
     */
    public function setPlot($plot)
    {
        $this->plot = $plot;

        return $this;
    }

    /**
     * Get plot
     *
     * @return integer
     */
    public function getPlot()
    {
        return $this->plot;
    }

    /**
     * Set cabinetP
     *
     * @param integer $cabinetP
     *
     * @return Doctor
     */
    public function setCabinetP($cabinetP)
    {
        $this->cabinet_p = $cabinetP;

        return $this;
    }

    /**
     * Get cabinetP
     *
     * @return integer
     */
    public function getCabinetP()
    {
        return $this->cabinet_p;
    }

    /**
     * Set filial
     *
     * @param string $filial
     *
     * @return Doctor
     */
    public function setFilial($filial)
    {
        $this->filial = $filial;

        return $this;
    }

    /**
     * Get filial
     *
     * @return string
     */
    public function getFilial()
    {
        return $this->filial;
    }

    /**
     * Set post
     *
     * @param string $post
     *
     * @return Doctor
     */
    public function setPost($post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return string
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set cabinetS
     *
     * @param integer $cabinetS
     *
     * @return Doctor
     */
    public function setCabinetS($cabinetS)
    {
        $this->cabinet_s = $cabinetS;

        return $this;
    }

    /**
     * Get cabinetS
     *
     * @return integer
     */
    public function getCabinetS()
    {
        return $this->cabinet_s;
    }

    /**
     * Add modeP
     *
     * @param \AppBundle\Entity\Schedule $modeP
     *
     * @return Doctor
     */
    public function addModeP(\AppBundle\Entity\Schedule $modeP)
    {
        $this->mode_p[] = $modeP;

        return $this;
    }

    /**
     * Remove modeP
     *
     * @param \AppBundle\Entity\Schedule $modeP
     */
    public function removeModeP(\AppBundle\Entity\Schedule $modeP)
    {
        $this->mode_p->removeElement($modeP);
    }

    /**
     * Get modeP
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModeP()
    {
        return $this->mode_p;
    }

    /**
     * Add mode
     *
     * @param \AppBundle\Entity\Schedule_s $mode
     *
     * @return Doctor
     */
    public function addMode(\AppBundle\Entity\Schedule_s $mode)
    {
        $this->mode_s[] = $mode;

        return $this;
    }

    /**
     * Remove mode
     *
     * @param \AppBundle\Entity\Schedule_s $mode
     */
    public function removeMode(\AppBundle\Entity\Schedule_s $mode)
    {
        $this->mode_s->removeElement($mode);
    }

    /**
     * Get modeS
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModeS()
    {
        return $this->mode_s;
    }
}

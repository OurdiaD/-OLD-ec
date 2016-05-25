<?php

namespace ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Product
{
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_create", type="datetime")
     */
    private $dateCreate;

    /**
     * @var integer
     *
     * @ORM\Column(name="active", type="integer")
     */
    private $active = 1;

    /**
     * @var integer
     *
     * @ORM\Column(name="promotion", type="integer")
     */
    private $promotion;

    /**
     * @var integer
     *
     * @ORM\Column(name="vaccine", type="integer")
     */
    private $vaccine;

    /**
     * @var integer
     *
     * @ORM\Column(name="puce", type="integer")
     */
    private $puce;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;

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
     * Set titre
     *
     * @param string $titre
     * @return Product
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
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
     * Set prix
     *
     * @param integer $prix
     * @return Product
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     * @return Product
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;
    
        return $this;
    }

    /**
     * Get dateCreate
     *
     * @return \DateTime 
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * Set active
     *
     * @param integer $active
     * @return Product
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return integer 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set promotion
     *
     * @param integer $promotion
     * @return Product
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;
    
        return $this;
    }

    /**
     * Get promotion
     *
     * @return integer 
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Set vaccine
     *
     * @param integer $vaccine
     * @return Product
     */
    public function setVaccine($vaccine)
    {
        $this->vaccine = $vaccine;
    
        return $this;
    }

    /**
     * Get vaccine
     *
     * @return integer 
     */
    public function getVaccine()
    {
        return $this->vaccine;
    }

    /**
     * Set puce
     *
     * @param integer $puce
     * @return Product
     */
    public function setPuce($puce)
    {
        $this->puce = $puce;
    
        return $this;
    }

    /**
     * Get puce
     *
     * @return integer 
     */
    public function getPuce()
    {
        return $this->puce;
    }

    /**
     * Set category
     *
     * @param \ProductBundle\Entity\Category $category
     * @return Product
     */
    public function setCategory(\ProductBundle\Entity\Category $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \ProductBundle\Entity\Category 
     */
    public function getCategory()
    {
        //die(var_dump($this->category));
        return $this->category;
    }

    public function __construct()
    {
        $this->dateCreate = new \DateTime();
    }

    /**
     * toString
     * @return string
     */
    /*public function __toString() 
    {
         $vacc = $this->getVaccine();
         die(var_dump($vacc));

         if ($vacc == 1){
            $vac = "oui";
         } else {
            $vac = "non";
         }

         return $vac;
    }*/
}

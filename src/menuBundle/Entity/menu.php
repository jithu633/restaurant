<?php

namespace menuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * menu
 *
 * @ORM\Table(name="menu")
 * @ORM\Entity(repositoryClass="menuBundle\Repository\menuRepository")
 */
class menu
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
     *
     * @ORM\Column(name="Item", type="string", length=255)
     */
    private $item;

    /**
     * @var string
     *
     * @ORM\Column(name="Price", type="string", length=255, nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="Calories", type="string", length=255)
     */
    private $calories;

    /**
     * @var string
     *
     * @ORM\Column(name="Carbs", type="string", length=255)
     */
    private $carbs;

    /**
     * @var string
     *
     * @ORM\Column(name="Fats", type="string", length=255)
     */
    private $fats;

    /**
     * @var string
     *
     * @ORM\Column(name="Proteins", type="string", length=255)
     */
    private $proteins;


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
     * Set item
     *
     * @param string $item
     *
     * @return menu
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return string
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return menu
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set calories
     *
     * @param string $calories
     *
     * @return menu
     */
    public function setCalories($calories)
    {
        $this->calories = $calories;

        return $this;
    }

    /**
     * Get calories
     *
     * @return string
     */
    public function getCalories()
    {
        return $this->calories;
    }

    /**
     * Set carbs
     *
     * @param string $carbs
     *
     * @return menu
     */
    public function setCarbs($carbs)
    {
        $this->carbs = $carbs;

        return $this;
    }

    /**
     * Get carbs
     *
     * @return string
     */
    public function getCarbs()
    {
        return $this->carbs;
    }

    /**
     * Set fats
     *
     * @param string $fats
     *
     * @return menu
     */
    public function setFats($fats)
    {
        $this->fats = $fats;

        return $this;
    }

    /**
     * Get fats
     *
     * @return string
     */
    public function getFats()
    {
        return $this->fats;
    }

    /**
     * Set proteins
     *
     * @param string $proteins
     *
     * @return menu
     */
    public function setProteins($proteins)
    {
        $this->proteins = $proteins;

        return $this;
    }

    /**
     * Get proteins
     *
     * @return string
     */
    public function getProteins()
    {
        return $this->proteins;
    }
}


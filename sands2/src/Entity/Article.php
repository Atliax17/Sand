<?php
/**
 * Created by PhpStorm.
 * User: Jean-baptiste
 * Date: 30/10/2018
 * Time: 22:49
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="article")
 * @ORM\Entity()
 */
class Article
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category")
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $idCreator;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    function getId()
    {
        return $this->id;
    }

    function getName()
    {
        return $this->name;
    }

    function getCategory()
    {
        return $this->category;
    }

    function getDescription()
    {
        return $this->description;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getIdCreator()
    {
        return $this->idCreator;
    }

    function getImage()
    {
        return $this->image;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function setCategory(\App\Entity\Category $category)
    {
        $this->category = $category;
    }

    function setDescription($description)
    {
        $this->description = $description;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    function setIdCreator(\App\Entity\User $idCreator)
    {
        $this->idCreator = $idCreator;
    }

    function setImage($image)
    {
        $this->image = $image;
    }
}
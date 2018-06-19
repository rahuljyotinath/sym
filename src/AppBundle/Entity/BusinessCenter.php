<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="business_center")
 */
class BusinessCenter
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     * @var string|null
     */
    private $name;

    /**
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     * @var string|null
     */
    private $city;

    /**
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     * @var string|null
     */
    private $address;

    /**
     * @ORM\Column(name="pincode", type="string", length=10, nullable=true)
     * @var string|null
     */
    private $pincode;

    /**
     * @ORM\Column(name="phoneNumber", type="string", length=15, nullable=true)
     * @var string|null
     */
    private $phoneNumber;

    /**
    * @ORM\OneToMany(targetEntity="CommonSpace", mappedBy="center")
    */
    private $commonSpace;

    /**
    * One Center has Many PrivateSpace.
    * @ORM\OneToMany(targetEntity="PrivateSpace", mappedBy="center")
    */
    private $privateSpace;

    public function __construct() {
        $this->privateSpace = new \Doctrine\Common\Collections\ArrayCollection();
        $this->commonSpace = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string|null $name
     * @return BusinessCenter
     */
    public function setName($name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string|null $city
     * @return BusinessCenter
     */
    public function setCity($city = null)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string|null $address
     * @return BusinessCenter
     */
    public function setAddress($address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string|null $pincode
     * @return BusinessCenter
     */
    public function setPincode($pincode = null)
    {
        $this->pincode = $pincode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPincode()
    {
        return $this->pincode;
    }

    /**
     * @param string|null $phoneNumber
     * @return BusinessCenter
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getPrivateSpace()
    {
        return $this->privateSpace;
    }

    /**
     * @param mixed $privateSpace
     */
    public function setPrivateSpace($privateSpace)
    {
        $this->privateSpace = $privateSpace;
    }

    /**
     * @return null|string
     */
    public function __toString()
    {
        return $this->name;
    }
}

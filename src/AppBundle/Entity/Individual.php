<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="individual")
 */
class Individual
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="salutation", type="string", length=6, nullable=true)
     * @var string|null
     */
    private $salutation;

    /**
     * @ORM\Column(name="Titel", type="string", length=255, nullable=true)
     * @var string|null
     */
    private $titel;

    /**
     * @ORM\Column(name="name_first", type="string", length=255, nullable=true)
     * @var string|null
     */
    private $nameFirst;

    /**
     * @ORM\Column(name="name_middle", type="string", length=255, nullable=true)
     * @var string|null
     */
    private $nameMiddle;

    /**
     * @ORM\Column(name="name_last", type="string", length=255, nullable=true)
     * @var string|null
     */
    private $nameLast;

    /**
     * @ORM\Column(name="name_birth", type="string", length=255, nullable=true)
     * @var string|null
     */
    private $nameBirth;

    /**
     * @ORM\Column(name="Address", type="text", nullable=true)
     * @var string|null
     */
    private $address;

    /**
     * @ORM\Column(name="Plz", type="string", length=7)
     * @var string
     */
    private $plz;

    /**
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     * @var string|null
     */
    private $city;

    /**
     * @ORM\Column(name="email", type="string", length=255)
     * @var string
     */
    private $email;

    /**
     * @ORM\Column(name="tel", type="string", length=20)
     * @var string
     */
    private $tel;

    /**
     * @ORM\Column(name="mobile", type="string", length=15, nullable=true)
     * @var string|null
     */
    private $mobile;

    /**
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     * @var string|null
     */
    private $picture;

    /**
     * @ORM\Column(name="userid", type="integer", nullable=true)
     * @var int|null
     */
    private $userid;

    /**
     * Many Groups have Many Users.
     * @ORM\ManyToMany(targetEntity="Company", inversedBy="individuals")
     * @ORM\JoinTable(name="individuals_companies")
     */
    private $companies;

    /**
     * Individual constructor.
     */
    public function __construct()
    {
        $this->companies= new \Doctrine\Common\Collections\ArrayCollection();
        // your own logic
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string|null $salutation
     * @return Individual
     */
    public function setSalutation($salutation = null)
    {
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @param string|null $titel
     * @return Individual
     */
    public function setTitel($titel = null)
    {
        $this->titel = $titel;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * @param string|null $nameFirst
     * @return Individual
     */
    public function setNameFirst($nameFirst = null)
    {
        $this->nameFirst = $nameFirst;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNameFirst()
    {
        return $this->nameFirst;
    }

    /**
     * @param string|null $nameMiddle
     * @return Individual
     */
    public function setNameMiddle($nameMiddle = null)
    {
        $this->nameMiddle = $nameMiddle;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNameMiddle()
    {
        return $this->nameMiddle;
    }

    /**
     * @param string|null $nameLast
     * @return Individual
     */
    public function setNameLast($nameLast = null)
    {
        $this->nameLast = $nameLast;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNameLast()
    {
        return $this->nameLast;
    }

    /**
     * @param string|null $nameBirth
     * @return Individual
     */
    public function setNameBirth($nameBirth = null)
    {
        $this->nameBirth = $nameBirth;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNameBirth()
    {
        return $this->nameBirth;
    }

    /**
     * @param string|null $address
     * @return Individual
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
     * @param string $plz
     * @return Individual
     */
    public function setPlz($plz)
    {
        $this->plz = $plz;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlz()
    {
        return $this->plz;
    }

    /**
     * @param string|null $city
     * @return Individual
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
     * @param string $email
     * @return Individual
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $tel
     * @return Individual
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param string $userid
     * @return Individual
     */
    public function setUserid($userid = null)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param string|null $mobile
     * @return Individual
     */
    public function setMobile($mobile = null)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompanies()
    {
        return $this->companies;
    }

    /**
     * @param mixed $companies
     */
    public function setCompanies($companies)
    {
        $this->companies = $companies;
    }

    public function addCompany(Company $company)
    {
        $company->addUser($this); // synchronously updating inverse side
        $this->companies[] = $company;
    }

    /**
     * @param Company $company
     */
    public function removeCompany(Company $company)
    {
        $this->companies->removeElement($company)  ;
    }

    /**
     * @return string|null
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param string|null $picture
     * @return Individual
     */
    public function setPicture($picture = null)
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPicture()
    {
        return $this->picture;
    }
}

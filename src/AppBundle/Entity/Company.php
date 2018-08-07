<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompanyRepository")
 * @ORM\Table(name="company")
 */
class Company
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
     * @ORM\Column(name="adress", type="string", length=255, nullable=true)
     * @var string|null
     */
    private $adress;

    /**
     * @ORM\Column(name="plz", type="string", length=255, nullable=true)
     * @var string|null
     */
    private $plz;

    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="User", mappedBy="companies")
     */
    private $users;

    /**
     * Many Individuals have Many Groups.
     * @ORM\ManyToMany(targetEntity="Individual", mappedBy="companies")
     */
    private $individuals;

    /**
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     * @var string|null
     */
    private $city;

    /**
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     * @var string|null
     */
    private $email;

    /**
     * @ORM\Column(name="tel", type="string", length=255, nullable=true)
     * @var string|null
     */
    private $tel;

    /**
     * @ORM\Column(name="website", type="string", length=255, nullable=true)
     * @var string|null
     */
    private $website;
	 
    /**
     * @var ArrayCollection|Templates[]
     *
     * @ORM\OneToMany(
     *     targetEntity="Crm\InvoiceBundle\Entity\Templates",
     *     mappedBy="company",
     *     cascade={"ALL"}
     * )
     */
    private $template;
    
    /**
     * Company constructor.
     */
    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->individuals = new ArrayCollection();
        $this->template = new ArrayCollection();
    }

    /**
     * @param User $user
     * @return $this
     */
    public function addUser(User $user)
    {
        if(!$this->users->contains($user)){
            $this->users->add($user);
        }
        return $this;
    }

    /**
     * @param User $article
     */
    public function removeUser(User $article)
    {
        $this->users->removeElement($article);
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param mixed $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
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
     * @return Company
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
     * @param string|null $adress
     * @return Company
     */
    public function setAdress($adress = null)
    {
        $this->adress = $adress;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param string|null $plz
     * @return Company
     */
    public function setPlz($plz = null)
    {
        $this->plz = $plz;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPlz()
    {
        return $this->plz;
    }

    /**
     * @param string|null $city
     * @return Company
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
     * @param string|null $email
     * @return Company
     */
    public function setEmail($email = null)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string|null $tel
     * @return Company
     */
    public function setTel($tel = null)
    {
        $this->tel = $tel;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param string|null $website
     * @return Company
     */
    public function setWebsite($website = null)
    {
        $this->website = $website;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @return string|null
     */
    public function __toString()
    {
        return $this->name;
    }

    /**
     * Add individual.
     *
     * @param \AppBundle\Entity\Individual $individual
     *
     * @return Company
     */
    public function addIndividual(\AppBundle\Entity\Individual $individual)
    {
        $this->individuals[] = $individual;

        return $this;
    }

    /**
     * Remove individual.
     *
     * @param \AppBundle\Entity\Individual $individual
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIndividual(\AppBundle\Entity\Individual $individual)
    {
        return $this->individuals->removeElement($individual);
    }

    /**
     * Get individuals.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIndividuals()
    {
        return $this->individuals;
    }

    /**
     * Add template.
     *
     * @param \Crm\InvoiceBundle\Entity\Templates $template
     *
     * @return Company
     */
    public function addTemplate(\Crm\InvoiceBundle\Entity\Templates $template)
    {
        $this->template[] = $template;

        return $this;
    }

    /**
     * Remove template.
     *
     * @param \Crm\InvoiceBundle\Entity\Templates $template
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeTemplate(\Crm\InvoiceBundle\Entity\Templates $template)
    {
        return $this->template->removeElement($template);
    }

    /**
     * Get template.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTemplate()
    {
        return $this->template;
    }
}

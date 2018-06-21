<?php

namespace AppBundle\Entity;

use Crm\InvoiceBundle\Entity\Invoice;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="app_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     * @var string
     */
    private $firstName;

    /**
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     * @var string
     */
    private $title;

    /**
     * @ORM\Column(name="adress", type="string", length=255, nullable=true)
     * @var string
     */
    private $adress;

    /**
     * @ORM\Column(name="plz", type="string", length=255, nullable=true)
     * @var string
     */
    private $plz;

    /**
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     * @var string
     */
    private $city;

    /**
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     * @var string
     */
    private $telephone;

    /**
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     * @var string
     */
    private $lastName;

    /**
     * @ORM\Column(name="api_key", type="string", length=32, unique=true)
     * @var string
     */
    private $apiKey;

    /**
     * Many Groups have Many Users.
     * @ORM\ManyToMany(targetEntity="Company", inversedBy="users")
     * @ORM\JoinTable(name="users_companies")
     */
    private $companies;

    /**
     * @var ArrayCollection|Invoice[]
     *
     * @ORM\OneToMany(
     *     targetEntity="Crm\InvoiceBundle\Entity\Invoice",
     *     mappedBy="user",
     *     cascade={"ALL"}
     * )
     */
    private $invoices;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->companies = new ArrayCollection();
        if (null === $this->apiKey) {
            $this->apiKey = strtoupper(md5(uniqid()));
        }
        $this->invoices = new ArrayCollection();

        parent::__construct();
    }

    /**
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param string $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
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

    /**
     * @Company
     * @param Company $company
     */
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
        $this->companies->removeElement($company);
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getPlz()
    {
        return $this->plz;
    }

    /**
     * @param string $plz
     */
    public function setPlz($plz)
    {
        $this->plz = $plz;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        if ($this->firstName) {
            return $this->firstName;
        }
        return '';
    }

    /**
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        if ($this->lastName) {
            return $this->lastName;
        }
        return '';
    }

    /**
     * @param string $lastName
     * @return User
     */
    public function setLastName(string $lastName): User
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     * @return User
     */
    public function setApiKey(string $apiKey): User
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * @param Invoice $invoice
     */
    public function addInvoice(Invoice $invoice)
    {
        if(!$this->invoices->contains($invoice)){
            $this->invoices->add($invoice);
        }
    }

    /**
     * @param Invoice $invoice
     */
    public function removeInvoice(Invoice $invoice)
    {
        if($this->invoices->contains($invoice)){
            $this->invoices->remove($invoice);
        }
    }

    /**
     * @return Invoice[]|ArrayCollection
     */
    public function getInvoices()
    {
        return $this->invoices;
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: minduser
 * Date: 26.06.18
 * Time: 12:25
 */

namespace Crm\InvoiceBundle\Database\Data\FormHelper\DTO;

/**
 * Class ReceipientDTO
 * @package Crm\InvoiceBundle\Database\Data\FormHelper\DTO
 */
class ReceipientDTO
{
    /**
     * @var string
     *
     * @ORM\Column(name="customer_id", type="string", length=16)
     */
    private $customerId = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="salutation", type="string", length=16)
     */
    private $salutation = '';

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=255)
     */
    private $company = '';

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=16)
     */
    private $zip = '';

    /**
     * @var string
     */
    private $city = '';

    /**
     * @var string
     */
    private $country = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="telephone_number", type="string", length=64)
     */
    private $telephoneNumber = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date", nullable=true)
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=8)
     */
    private $gender = '';
    /**
     * @return string
     */
    public function getCompanyname(): string
    {
        return $this->companyname;
    }

    /**
     * @param string $companyname
     * @return ReceipientDTO
     */
    public function setCompanyname(string $companyname): ReceipientDTO
    {
        $this->companyname = $companyname;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return ReceipientDTO
     */
    public function setFirstName(string $firstName): ReceipientDTO
    {
        $this->firstName = $firstName;
        return $this;
    }
}

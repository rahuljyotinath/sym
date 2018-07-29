<?php

namespace Crm\InvoiceBundle\Entity;

use AppBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="crm_invoice_invoice")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Invoice
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    private $id;
	
	/**
     * @var string
     *
     * @ORM\Column(name="invoice_id", type="integer", length=11, nullable=true)
     */
    private $invoiceId;
    
    /**
     * @var string
     *
     * @ORM\Column(name="created_user_id", type="integer", length=11, nullable=true)
     */
    private $createdUserId;
	
     /**
     * @var \DateTime
     *
     * @ORM\Column(name="invoice_date", type="datetime", nullable=true)
     */
    private $invoiceDate;
    
    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=255, nullable=true)
     */
    private $currency;
	
	/**
     * @var float
     *
     * @ORM\Column(name="invoice_total_amount", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $invoiceTotalAmount;
	
	/**
     * @var \DateTime
     *
     * @ORM\Column(name="invoice_due_date", type="datetime", nullable=true)
     */
    private $invoiceDueDate;
    
    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=255, nullable=true)
     */
    private $companyName;
    
    /**
     * @var string
     *
     * @ORM\Column(name="company_id", type="integer", length=11, nullable=true)
     */
    private $companyId;
    
    /**
     * @var string
     *
     * @ORM\Column(name="company_address_one", type="string", length=255, nullable=true)
     */
    private $companyAddressOne;
    
    /**
     * @var string
     *
     * @ORM\Column(name="company_address_two", type="string", length=255, nullable=true)
     */
    private $companyAddressTwo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="company_city", type="string", length=255, nullable=true)
     */
    private $companyCity;
    
    /**
     * @var string
     *
     * @ORM\Column(name="company_state", type="string", length=255, nullable=true)
     */
    private $companyState;
    
    /**
     * @var string
     *
     * @ORM\Column(name="company_pin", type="string", length=255, nullable=true)
     */
    private $companyPin;
    
    /**
     * @var string
     *
     * @ORM\Column(name="company_country", type="string", length=255, nullable=true)
     */
    private $companyCountry;
   
     /**
     * @var string
     *
     * @ORM\Column(name="customer_center_name", type="string", length=255, nullable=true)
     */
    private $customerCenterName;
    
    /**
     * @var string
     *
     * @ORM\Column(name="customer_center_id", type="integer", length=11, nullable=true)
     */
    private $customerCenterId;
    
    /**
     * @var string
     *
     * @ORM\Column(name="customer_name", type="string", length=255, nullable=true)
     */
    private $customerName;
    
    /**
     * @var string
     *
     * @ORM\Column(name="customer_id", type="integer", length=11, nullable=true)
     */
    private $customerId;
    
    /**
     * @var string
     *
     * @ORM\Column(name="customer_address_one", type="string", length=255, nullable=true)
     */
    private $customerAddressOne;
    
    /**
     * @var string
     *
     * @ORM\Column(name="customer_address_two", type="string", length=255, nullable=true)
     */
    private $customerAddressTwo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="customer_city", type="string", length=255, nullable=true)
     */
    private $customerCity;
    
    /**
     * @var string
     *
     * @ORM\Column(name="customer_state", type="string", length=255, nullable=true)
     */
    private $customerState;
    
    /**
     * @var string
     *
     * @ORM\Column(name="customer_pin", type="string", length=255, nullable=true)
     */
    private $customerPin;
    
    /**
     * @var string
     *
     * @ORM\Column(name="customer_country", type="string", length=255, nullable=true)
     */
    private $customerCountry;
    
    /**
     * @var string
     *
     * @ORM\Column(name="bank_name", type="string", length=255, nullable=true)
     */
    private $bankName;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_account_number", type="string", length=255, nullable=true)
     */
    private $bankAccountNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_iban_number", type="string", length=255, nullable=true)
     */
    private $bankIbanNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_account_holder_name", type="string", length=255, nullable=true)
     */
    private $bankAccountHolderName;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_status", type="string", length=32, nullable=true)
     */
    private $invoiceStatus;

    /**
     * @var array
     *
     * @ORM\Column(name="invoice_vat", type="integer", nullable=true)
     */
    private $invoiceVat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;

}

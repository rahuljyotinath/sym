<?php
/**
 * Created by PhpStorm.
 * User: minduser
 * Date: 26.06.18
 * Time: 11:59
 */

namespace Crm\InvoiceBundle\Database\Data\FormHelper;

use AppBundle\Entity\Company;
use AppBundle\Entity\Individual;
use AppBundle\Entity\User;
use Crm\InvoiceBundle\Database\Data\FormHelper\DTO\ReceipientDTO;
use Doctrine\Bundle\DoctrineBundle\Registry as DoctrineRegistry;


/**
 * Class Helper
 * @package Crm\InvoiceBundle\Database\Data
 */
class Helper
{
    /**
     * @var DoctrineRegistry
     */
    private $doctrineRegistry;

    /**
     * Factory constructor.
     * @param DoctrineRegistry $doctrineRegistry
     */
    public function __construct(DoctrineRegistry $doctrineRegistry)
    {
        $this->doctrineRegistry = $doctrineRegistry;
    }

    /**
     * @return array
     */
    public function getUserSelectArray(){

        $usersArray = [];
        $usersArray['please select a user'] = null;
        /**
         * @var User[] $allUsers
         */
        $allUsers = $this->doctrineRegistry->getRepository('AppBundle:User')->findAll();
        foreach ($allUsers as $user){
            $usersArray[$user->getFirstName()." ".$user->getLastName()] = $user->getId();
        }
        return $usersArray;
    }

    /**
     * @return array
     */
    public function getCompanySelectArray(){
        $companies = [];
        $companies['please select a company'] = null;
        /**
         * @var Company[] $allCompanies
         */
        $allCompanies = $this->doctrineRegistry->getRepository('AppBundle:Company')->findAll();
        foreach ($allCompanies as $company){
            $companies[$company->getName()] = $company->getId();
        }
        return $companies;
    }

    /**
     * @return array
     */
    public function getIndividialSelectArray(){
        $individualArray = [];
        $individualArray['please select a individual'] = null;
        /**
         * @var Individual[] $individuals
         */
        $individuals = $this->doctrineRegistry->getRepository('AppBundle:Individual')->findAll();
        foreach ($individuals as $individual){
            $individualArray[$individual->getNameFirst()." ".$individual->getNameLast()] = $individual->getId();
        }
        return $individualArray;
    }

    /**
     * @param array $formdata
     * @return ReceipientDTO
     */
    public function getReceipientDTO($formdata){


        $data = new ReceipientDTO();
        if(null !== $formdata['user']){

        }

        if(null !== $formdata['company']){

        }

        if(null !== $formdata['individual']){
            /**
             * @var Individual $individual
             */
            $individual = $this->doctrineRegistry->getRepository('AppBundle:Individual')->find($formdata['individual']);
            $data->setFirstName($individual->getNameFirst());

        }
        return $data;
    }
}

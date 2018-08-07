<?php

namespace AppBundle\Repository;

/**
 * Class CompanyRepository
 * @package AppBundle\Repository
 */
class CompanyRepository extends \Doctrine\ORM\EntityRepository
{
	public function getCompanyListByNameAndId(){
		return $this->createQueryBuilder('c')
				->select('c.name','c.id')
				->addOrderBy('c.name','asc')
				->getQuery()
				->getArrayResult();
	}
}

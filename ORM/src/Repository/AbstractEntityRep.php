<?php

namespace Repository;

use Entity\EntitySFaqCat;

abstract class AbstractEntityRep extends \Doctrine\ORM\EntityRepository {

	protected $_popularityFieldName = null;
	
	public function getCount() {
		return $this->getEntityManager()
				->createQuery('SELECT COUNT(en) FROM '.$this->getClassName().' en')
				->getSingleScalarResult();
	}
	
	public function getAllSortedByPopularity() {
		if ( is_null($this->_popularityFieldName) )
			throw new \Exception(sprintf('Popularity criteria is not set in class %s', $this->getClassName()));
		return $this->getEntityManager()
			->createQuery('SELECT en FROM '.$this->getClassName().' en ORDER BY en.'. $this->_popularityFieldName .' DESC')
			->getResult();
	}
}
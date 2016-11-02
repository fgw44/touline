<?php

namespace AppBundle\Entity;

/**
 * AdherentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AdherentRepository extends \Doctrine\ORM\EntityRepository
{
	
	public function findOneByAdhNum($adhNum)
	
	{
	
		$qb = $this->createQueryBuilder('a');
	
	
		// On peut ajouter ce qu'on veut avant
	
		$qb
	
		->where('a.adhNum = :adhNum')
	
		->setParameter('adhNum', $adhNum)
	
		;
	
		$listAdherent = $qb->getQuery()->getResult();

		foreach ($listAdherent as $adherent) {

  			return $adherent;

		}
		
	}
	
}
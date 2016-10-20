<?php

namespace AppBundle\Repository;

/**
 * EtapeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EtapeRepository extends \Doctrine\ORM\EntityRepository
{
	
	public function findAllEtapes($idcircuit){
	
		$query = $this->getEntityManager()
		->createQuery(
				'SELECT p, c FROM AppBundle:Etape p
	            JOIN p.circuit c
	            WHERE p.circuit_id = :id ORDER BY p.numero_etape'
				)->setParameter('id', $idcircuit);
				return $query->getArrayResult();
	}
	
	
	
}

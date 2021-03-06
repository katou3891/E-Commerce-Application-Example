<?php

namespace AppBundle\Repository;


/**
 * CommentaireRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentaireRepository extends \Doctrine\ORM\EntityRepository
{
	public function findComments($idcircuit){
		
		$query = $this->getEntityManager()
		->createQuery(
				'SELECT p, c FROM AppBundle:Commentaire p
	            JOIN p.circuit c
	            WHERE p.id = :id'
				)->setParameter('id', $idcircuit);
		return $query->getArrayResult();
				
		
	}
}

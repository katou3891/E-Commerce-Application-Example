<?php

namespace AppBundle\Repository;

/**
 * CircuitRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CircuitRepository extends \Doctrine\ORM\EntityRepository
{
	/* 
	 * Get all circuits which have programmations. These programmations must be after the current date.
	 */
	public function findCircuitsWithProgrammation(){
		$query = $this->getEntityManager()
		->createQuery(
				'SELECT c FROM AppBundle:Circuit c, AppBundle:ProgrammationCircuit p
				WHERE p.circuit = c.id AND p.dateDepart >= CURRENT_DATE() ORDER BY c.id'
				);
				return $query->getArrayResult();
	}
	
	public function getAverage($id){
		$query = $this->getEntityManager()
		->createQuery(
				'SELECT AVG(co.note) AS note FROM AppBundle:Circuit c, AppBundle:Commentaire co
	            WHERE co.circuit = c.id AND c.id = :id '
				)->setParameter('id', $id);
		return $query->getArrayResult();
	}
	
	public function findTheBests(){
		$query = $this->getEntityManager()
		->createQuery(
				'SELECT c FROM AppBundle:Circuit c ORDER BY c.note DESC'
				);
				return $query->getArrayResult();
	}
	
	public function findtheLastsPublished(){
		$query = $this->getEntityManager()
		->createQuery(
				'SELECT c FROM AppBundle:Circuit c ORDER BY c.publishedAt DESC'
				);
		return $query->getArrayResult();
		
	}
	
	

}

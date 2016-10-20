<?php

namespace AppBundle\Repository;

/**
 * FOSUSERRepository
 *
 * 
 */
class Fos_userRepository extends \Doctrine\ORM\EntityRepository
{
	/*
	 * Get all users that can log
	 */
	public function findCollaborateurs(){
		$query = $this->getEntityManager()
		->createQuery(
				'SELECT c FROM AppBundle:Fos_user'
				);
		return $query->getArrayResult();


	}

}

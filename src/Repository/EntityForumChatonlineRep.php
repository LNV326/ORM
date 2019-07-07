<?php

namespace Repository;

use Entity\EntityForumChatonline;
/**
 * EntityForumChatonlineRep
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EntityForumChatonlineRep extends \Doctrine\ORM\EntityRepository
{
	/*
	 * Get count of active sessions from chat
	 */
	public function getActiveSessionsCount() {
		return $this->getEntityManager()
			->createQuery('SELECT count(en) FROM Entity\EntityForumChatonline en')
			->getSingleScalarResult();
	}
	
	/*
	 * Remove sessions older than 10 minutes from chat 
	 */
	public function removeOldSessions() {
		return $this->getEntityManager()->createQuery('DELETE FROM ibf_chatonline t WHERE t.time < :time')
				->execute(array('time' => time()-600));
	}
}
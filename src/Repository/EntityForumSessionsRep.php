<?php

namespace Repository;

use Entity\EntityForumSessions;
/**
 * EntityForumSessionsRep
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EntityForumSessionsRep extends \Doctrine\ORM\EntityRepository
{
	public function getActiveUserSessions() {
		return $this->getEntityManager()
			// TODO s.login_type != '1'
			->createQuery('SELECT s FROM Entity\EntityForumSessions s WHERE s.memberId <> 0 AND s.runningTime > :time ORDER BY s.runningTime DESC')
			->setParameter('time', time()-900)
			->getArrayResult();
	}
	
	public function getActiveGuestSessions() {
		return $this->getEntityManager()
			// TODO s.login_type != '1'
			->createQuery('SELECT s FROM Entity\EntityForumSessions s WHERE s.memberId = 0 AND s.runningTime > :time ORDER BY s.runningTime DESC')
			->setParameter('time', time()-900)
			->getArrayResult();
	}
}
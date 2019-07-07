<?php

namespace Repository;

use Entity\EntityForumTopics;
use Entity\EntityForumPosts;
/**
 * EntityForumTopicsRep
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EntityForumTopicsRep extends \Doctrine\ORM\EntityRepository
{
	public function getTopicsForNews($newsForumId, $offset, $countRows) {
		return $this->getEntityManager()
			->createQuery('SELECT t,p FROM Entity\EntityForumTopics t 
					LEFT JOIN t.postsVal p WITH p.newTopic=1
					WHERE t.forumId IN (:news_forum_id)
					ORDER BY t.tid DESC')
			->setParameter('news_forum_id', $newsForumId)
			->setFirstResult($offset)
			->setMaxResults($countRows)
			->getResult();
	}
	
	public function getLastActiveTopics($hiddenForumIds, $countRows) {
		return $this->getEntityManager()
			->createQuery('SELECT t FROM Entity\EntityForumTopics t
					WHERE t.forumId NOT IN (:hiddenForumIds)
					ORDER BY t.lastPost DESC')
			->setParameter('hiddenForumIds', $hiddenForumIds)
			->setMaxResults($countRows)
			->getResult();
	}
	
	public function getTopicWithLastActivePoll() {
		return $this->getEntityManager()
			->createQuery('SELECT t FROM Entity\EntityForumTopics t
					JOIN t.pollVal p
					ORDER BY p.startDate DESC')
			->setMaxResults(1)
			->getSingleResult();
	}
	
	public function getMostViewedTopic() {
		return $this->getEntityManager()
			->createQuery('SELECT t FROM Entity\EntityForumTopics t ORDER BY t.views DESC')
			->setMaxResults(1)
			->getSingleResult();
	}
	
	public function getMostPostedTopic() {
		return $this->getEntityManager()
		->createQuery('SELECT t FROM Entity\EntityForumTopics t ORDER BY t.posts DESC')
		->setMaxResults(1)
		->getSingleResult();
	}
	
	public function getLastActiveTopic() {
		return $this->getEntityManager()
		->createQuery('SELECT t FROM Entity\EntityForumTopics t ORDER BY t.lastPost DESC')
		->setMaxResults(1)
		->getSingleResult();
	}
}
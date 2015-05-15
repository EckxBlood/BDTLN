<?php

namespace Bdtln\UserBundle\Entity;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends \Doctrine\ORM\EntityRepository
{
    
    public function findOneOrNullById( $id ) {
        
        $queryBuilder = $this->_em->createQueryBuilder('q');
        
        $queryBuilder->select('q')
                     ->from('BdtlnUserBundle:Category', 'q')
                     ->where('q.id = :id')
                     ->setParameter('id', $id)
            ;
        
        return $queryBuilder->getQuery()->getOneOrNullResult();
    }
    
    
}

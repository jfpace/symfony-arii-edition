<?php

namespace Arii\CoreBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ApplicationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ApplicationRepository extends EntityRepository
{
   public function findApplications()
   {
        return $this->createQueryBuilder('app')
            ->Select('app.name,app.title,app.active')
            ->orderBy('app.title,app.name')
            ->getQuery()
            ->getResult();
   }

   public function findActiveApplications()
   {
        return $this->createQueryBuilder('app')
            ->Select('app.name,app.title')
            ->orderBy('app.title,app.name')
            ->where('app.active > 0')
            ->getQuery()
            ->getResult();
   }
   
}
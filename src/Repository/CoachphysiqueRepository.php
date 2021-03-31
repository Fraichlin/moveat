<?php

namespace App\Repository;

use App\Entity\Coachphysique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Coachphysique|null find($id, $lockMode = null, $lockVersion = null)
 * @method Coachphysique|null findOneBy(array $criteria, array $orderBy = null)
 * @method Coachphysique[]    findAll()
 * @method Coachphysique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoachphysiqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Coachphysique::class);
    }

    // /**
    //  * @return Coachphysique[] Returns an array of Coachphysique objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Coachphysique
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

<?php

namespace App\Repository;

use App\Entity\Postuler;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Postuler|null find($id, $lockMode = null, $lockVersion = null)
 * @method Postuler|null findOneBy(array $criteria, array $orderBy = null)
 * @method Postuler[]    findAll()
 * @method Postuler[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostulerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Postuler::class);
    }

    // /**
    //  * @return Postuler[] Returns an array of Postuler objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Postuler
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

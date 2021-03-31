<?php

namespace App\Repository;

use App\Entity\Programmesportif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Programmesportif|null find($id, $lockMode = null, $lockVersion = null)
 * @method Programmesportif|null findOneBy(array $criteria, array $orderBy = null)
 * @method Programmesportif[]    findAll()
 * @method Programmesportif[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProgrammesportifRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Programmesportif::class);
    }

    // /**
    //  * @return Programmesportif[] Returns an array of Programmesportif objects
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
    public function findOneBySomeField($value): ?Programmesportif
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

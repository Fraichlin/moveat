<?php

namespace App\Repository;

use App\Entity\ProgrammeSportif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProgrammeSportif|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProgrammeSportif|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProgrammeSportif[]    findAll()
 * @method ProgrammeSportif[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProgrammeSportifRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProgrammeSportif::class);
    }

    // /**
    //  * @return ProgrammeSportif[] Returns an array of ProgrammeSportif objects
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
    public function findOneBySomeField($value): ?ProgrammeSportif
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

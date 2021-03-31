<?php

namespace App\Repository;

use App\Entity\Psychotherapeute;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Psychotherapeute|null find($id, $lockMode = null, $lockVersion = null)
 * @method Psychotherapeute|null findOneBy(array $criteria, array $orderBy = null)
 * @method Psychotherapeute[]    findAll()
 * @method Psychotherapeute[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PsychotherapeuteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Psychotherapeute::class);
    }

    // /**
    //  * @return Psychotherapeute[] Returns an array of Psychotherapeute objects
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
    public function findOneBySomeField($value): ?Psychotherapeute
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

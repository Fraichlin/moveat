<?php

namespace App\Repository;

use App\Entity\Programmegeneral;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Programmegeneral|null find($id, $lockMode = null, $lockVersion = null)
 * @method Programmegeneral|null findOneBy(array $criteria, array $orderBy = null)
 * @method Programmegeneral[]    findAll()
 * @method Programmegeneral[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProgrammegeneralRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Programmegeneral::class);
    }

    // /**
    //  * @return Programmegeneral[] Returns an array of Programmegeneral objects
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
    public function findOneBySomeField($value): ?Programmegeneral
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

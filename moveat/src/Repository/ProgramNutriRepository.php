<?php

namespace App\Repository;

use App\Entity\ProgramNutri;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProgramNutri|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProgramNutri|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProgramNutri[]    findAll()
 * @method ProgramNutri[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProgramNutriRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProgramNutri::class);
    }

    // /**
    //  * @return ProgramNutri[] Returns an array of ProgramNutri objects
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
    public function findOneBySomeField($value): ?ProgramNutri
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

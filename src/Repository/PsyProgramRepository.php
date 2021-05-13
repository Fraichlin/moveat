<?php

namespace App\Repository;

use App\Entity\PsyProgram;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PsyProgram|null find($id, $lockMode = null, $lockVersion = null)
 * @method PsyProgram|null findOneBy(array $criteria, array $orderBy = null)
 * @method PsyProgram[]    findAll()
 * @method PsyProgram[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PsyProgramRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PsyProgram::class);
    }

    // /**
    //  * @return PsyProgram[] Returns an array of PsyProgram objects
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
    public function findOneBySomeField($value): ?PsyProgram
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

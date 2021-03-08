<?php

namespace App\Repository;

use App\Entity\ProgrammeGeneral;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProgrammeGeneral|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProgrammeGeneral|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProgrammeGeneral[]    findAll()
 * @method ProgrammeGeneral[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProgrammeGeneralRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProgrammeGeneral::class);
    }

    // /**
    //  * @return ProgrammeGeneral[] Returns an array of ProgrammeGeneral objects
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
    public function findOneBySomeField($value): ?ProgrammeGeneral
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

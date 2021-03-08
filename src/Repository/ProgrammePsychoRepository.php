<?php

namespace App\Repository;

use App\Entity\ProgrammePsycho;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProgrammePsycho|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProgrammePsycho|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProgrammePsycho[]    findAll()
 * @method ProgrammePsycho[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProgrammePsychoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProgrammePsycho::class);
    }

    // /**
    //  * @return ProgrammePsycho[] Returns an array of ProgrammePsycho objects
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
    public function findOneBySomeField($value): ?ProgrammePsycho
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

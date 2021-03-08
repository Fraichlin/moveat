<?php

namespace App\Repository;

use App\Entity\ProgrammeNutritionnel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProgrammeNutritionnel|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProgrammeNutritionnel|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProgrammeNutritionnel[]    findAll()
 * @method ProgrammeNutritionnel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProgrammeNutritionnelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProgrammeNutritionnel::class);
    }

    // /**
    //  * @return ProgrammeNutritionnel[] Returns an array of ProgrammeNutritionnel objects
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
    public function findOneBySomeField($value): ?ProgrammeNutritionnel
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

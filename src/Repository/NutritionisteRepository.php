<?php

namespace App\Repository;

use App\Entity\Nutritioniste;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Nutritioniste|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nutritioniste|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nutritioniste[]    findAll()
 * @method Nutritioniste[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NutritionisteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nutritioniste::class);
    }

    // /**
    //  * @return Nutritioniste[] Returns an array of Nutritioniste objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Nutritioniste
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

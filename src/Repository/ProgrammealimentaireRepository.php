<?php

namespace App\Repository;

use App\Entity\Programmealimentaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Programmealimentaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method Programmealimentaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method Programmealimentaire[]    findAll()
 * @method Programmealimentaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProgrammealimentaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Programmealimentaire::class);
    }

    // /**
    //  * @return Programmealimentaire[] Returns an array of Programmealimentaire objects
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
    public function findOneBySomeField($value): ?Programmealimentaire
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

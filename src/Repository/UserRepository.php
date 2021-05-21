<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface,UserLoaderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(UserInterface $user, string $newEncodedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newEncodedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }

    // /**
    //  * @return User[] Returns an array of User objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /**
     * @param $value
     * @param $value1
     * @return User[] Returns an array of User objects
     */
    public function findByRoles($value,$value1)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.roles = :val AND u.statut = :val1')
            ->setParameter('val', (array)$value)
            ->setParameter('val1', $value1)
            ->getQuery()
            ->getResult()
        ;
    }

    public function loadUserByUsername($usernameOrEmail)
    {
        return $this->createQueryBuilder('u')
            ->where('u.username = :query OR u.email = :query')
            ->setParameter('query', $usernameOrEmail)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findValidedCoachByStatus()
    {
        return $this->createQueryBuilder('u')
            ->Where('u.roles = :val AND (u.statut = :val1 OR u.statut = :val2 OR u.statut = :val3)')
            ->setParameter('val', ['["ROLE_COACH"]'])
            ->setParameter('val1', 'actived')
            ->setParameter('val2', 'blocked')
            ->setParameter('val3', 'unblocked')
            ->getQuery()
            ->getResult()
            ;
    }


    public function findValidedCoachByMonth($year,$month)
    {
        $fromTime = new \DateTime($year . '-' . $month . '-01');
        $toTime = new \DateTime($fromTime->format('Y-m-d') . ' first day of next month');
        return $this->createQueryBuilder('u')
            ->Where('u.roles = :val AND (u.statut = :val1 OR u.statut = :val2 OR u.statut = :val3)')
            ->andWhere('u.dateInscription >= :fromTime')
            ->andWhere('u.dateInscription < :toTime')
            ->setParameter('val', ['["ROLE_COACH"]'])
            ->setParameter('val1', 'actived')
            ->setParameter('val2', 'blocked')
            ->setParameter('val3', 'unblocked')
            ->setParameter('fromTime', $fromTime)
            ->setParameter('toTime', $toTime)
            ->getQuery()
            ->getResult()
            ;
    }

    public function findMember()
    {
        return $this->createQueryBuilder('u')
            ->Where('u.roles = :val')
            ->setParameter('val', ['["ROLE_MEMBER"]'])
            ->getQuery()
            ->getResult()
            ;
    }
    /**
     *  * @return User Returns an array of User objects
     */
    public function searchUser($email)
    {
        return $this->createQueryBuilder('u')
            ->Where('u.email = :val')
            ->setParameter('val', $email)
            ->getQuery()
            ->getResult()
            ;
    }
    public function findMemberByMonth($year,$month)
    {
        $fromTime = new \DateTime($year . '-' . $month . '-01');
        $toTime = new \DateTime($fromTime->format('Y-m-d') . ' first day of next month');
        return $this->createQueryBuilder('u')
            ->Where('u.roles = :val')
            ->andWhere('u.dateInscription >= :fromTime')
            ->andWhere('u.dateInscription < :toTime')
            ->setParameter('val', ['["ROLE_MEMBER"]'])
            ->setParameter('fromTime', $fromTime)
            ->setParameter('toTime', $toTime)
            ->getQuery()
            ->getResult()
            ;
    }

    public function findValidedNutritionistByMonth($year,$month)
    {
        $fromTime = new \DateTime($year . '-' . $month . '-01');
        $toTime = new \DateTime($fromTime->format('Y-m-d') . ' first day of next month');
        return $this->createQueryBuilder('u')
            ->Where('u.roles = :val AND (u.statut = :val1 OR u.statut = :val2 OR u.statut = :val3)')
            ->andWhere('u.dateInscription >= :fromTime')
            ->andWhere('u.dateInscription < :toTime')
            ->andWhere('u.specialite = :val4')
            ->setParameter('val', ['["ROLE_COACH"]'])
            ->setParameter('val1', 'actived')
            ->setParameter('val2', 'blocked')
            ->setParameter('val3', 'unblocked')
            ->setParameter('val4', 'Nutritioniste')
            ->setParameter('fromTime', $fromTime)
            ->setParameter('toTime', $toTime)
            ->getQuery()
            ->getResult()
            ;
    }

    public function findValidedCSportByMonth($year,$month)
    {
        $fromTime = new \DateTime($year . '-' . $month . '-01');
        $toTime = new \DateTime($fromTime->format('Y-m-d') . ' first day of next month');
        return $this->createQueryBuilder('u')
            ->Where('u.roles = :val AND (u.statut = :val1 OR u.statut = :val2 OR u.statut = :val3)')
            ->andWhere('u.dateInscription >= :fromTime')
            ->andWhere('u.dateInscription < :toTime')
            ->andWhere('u.specialite = :val4')
            ->setParameter('val', ['["ROLE_COACH"]'])
            ->setParameter('val1', 'actived')
            ->setParameter('val2', 'blocked')
            ->setParameter('val3', 'unblocked')
            ->setParameter('val4', 'Coach Sportif')
            ->setParameter('fromTime', $fromTime)
            ->setParameter('toTime', $toTime)
            ->getQuery()
            ->getResult()
            ;
    }

    public function findValidedPsyByMonth($year,$month)
    {
        $fromTime = new \DateTime($year . '-' . $month . '-01');
        $toTime = new \DateTime($fromTime->format('Y-m-d') . ' first day of next month');
        return $this->createQueryBuilder('u')
            ->Where('u.roles = :val AND (u.statut = :val1 OR u.statut = :val2 OR u.statut = :val3)')
            ->andWhere('u.dateInscription >= :fromTime')
            ->andWhere('u.dateInscription < :toTime')
            ->andWhere('u.specialite = :val4')
            ->setParameter('val', ['["ROLE_COACH"]'])
            ->setParameter('val1', 'actived')
            ->setParameter('val2', 'blocked')
            ->setParameter('val3', 'unblocked')
            ->setParameter('val4', 'Psychothérapeute')
            ->setParameter('fromTime', $fromTime)
            ->setParameter('toTime', $toTime)
            ->getQuery()
            ->getResult()
            ;
    }

    public function findValidedNutritionist()
    {
        return $this->createQueryBuilder('u')
            ->Where('u.roles = :val')
            ->andWhere('u.specialite = :val1')
            ->andWhere('u.statut = :val2')
            ->setParameter('val', ['["ROLE_COACH"]'])
            ->setParameter('val1', 'Nutritioniste')
            ->setParameter('val2', 'actived')
            ->getQuery()
            ->getResult()
            ;
    }

    public function findValidedCoachsportif()
    {
        return $this->createQueryBuilder('u')
            ->Where('u.roles = :val')
            ->andWhere('u.specialite = :val1')
            ->andWhere('u.statut = :val2')
            ->setParameter('val', ['["ROLE_COACH"]'])
            ->setParameter('val1', 'Coach Sportif')
            ->setParameter('val2', 'actived')
            ->getQuery()
            ->getResult()
            ;
    }

    public function findValidedPsy()
    {
        return $this->createQueryBuilder('u')
            ->Where('u.roles = :val')
            ->andWhere('u.specialite = :val1')
            ->andWhere('u.statut = :val2')
            ->setParameter('val', ['["ROLE_COACH"]'])
            ->setParameter('val1', 'Psychothérapeute')
            ->setParameter('val2', 'actived')
            ->getQuery()
            ->getResult()
            ;
    }

    public function findActivedNutritionistCoach()
    {
        return $this->createQueryBuilder('u')
            ->Where('u.roles = :val AND (u.statut = :val1 OR u.statut = :val2) AND u.specialite =:val3')
            ->setParameter('val', ['["ROLE_COACH"]'])
            ->setParameter('val1', 'actived')
            ->setParameter('val2', 'unblocked')
            ->setParameter('val3', 'Nutritioniste')
            ->getQuery()
            ->getResult()
            ;
    }


}

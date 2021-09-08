<?php

namespace App\Repository;

use App\Entity\Foyc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Foyc|null find($id, $lockMode = null, $lockVersion = null)
 * @method Foyc|null findOneBy(array $criteria, array $orderBy = null)
 * @method Foyc[]    findAll()
 * @method Foyc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FoycRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Foyc::class);
    }

    // /**
    //  * @return Foyc[] Returns an array of Foyc objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Foyc
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

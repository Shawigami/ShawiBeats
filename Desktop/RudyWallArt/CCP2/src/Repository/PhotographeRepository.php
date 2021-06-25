<?php

namespace App\Repository;

use App\Entity\Photographe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Photographe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Photographe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Photographe[]    findAll()
 * @method Photographe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhotographeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Photographe::class);
    }

    // /**
    //  * @return Photographe[] Returns an array of Photographe objects
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
    public function findOneBySomeField($value): ?Photographe
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

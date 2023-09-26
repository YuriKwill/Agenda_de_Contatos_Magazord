<?php

namespace App\Repository;

use App\Entity\Pessoa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pessoa>
 *
 * @method Pessoa|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pessoa|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pessoa[]    findAll()
 * @method Pessoa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PessoaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pessoa::class);
    }

//    /**
//     * @return Pessoa[] Returns an array of Pessoa objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Pessoa
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

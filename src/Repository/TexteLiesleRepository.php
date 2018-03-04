<?php

namespace App\Repository;

use App\Entity\TexteLiesle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TexteLiesle|null find($id, $lockMode = null, $lockVersion = null)
 * @method TexteLiesle|null findOneBy(array $criteria, array $orderBy = null)
 * @method TexteLiesle[]    findAll()
 * @method TexteLiesle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TexteLiesleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TexteLiesle::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('t')
            ->where('t.something = :value')->setParameter('value', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}

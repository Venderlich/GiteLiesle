<?php

namespace App\Repository;

use App\Entity\TexteGite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TexteGite|null find($id, $lockMode = null, $lockVersion = null)
 * @method TexteGite|null findOneBy(array $criteria, array $orderBy = null)
 * @method TexteGite[]    findAll()
 * @method TexteGite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TexteGiteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TexteGite::class);
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

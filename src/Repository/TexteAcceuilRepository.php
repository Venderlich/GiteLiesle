<?php

namespace App\Repository;

use App\Entity\TexteAcceuil;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TexteAcceuil|null find($id, $lockMode = null, $lockVersion = null)
 * @method TexteAcceuil|null findOneBy(array $criteria, array $orderBy = null)
 * @method TexteAcceuil[]    findAll()
 * @method TexteAcceuil[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TexteAcceuilRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TexteAcceuil::class);
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

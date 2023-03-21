<?php

namespace App\Repository;

use App\Entity\NFTCreation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NFTCreation>
 *
 * @method NFTCreation|null find($id, $lockMode = null, $lockVersion = null)
 * @method NFTCreation|null findOneBy(array $criteria, array $orderBy = null)
 * @method NFTCreation[]    findAll()
 * @method NFTCreation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NFTCreationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NFTCreation::class);
    }

    public function save(NFTCreation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(NFTCreation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return NFTCreation[] Returns an array of NFTCreation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NFTCreation
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

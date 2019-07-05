<?php


    namespace App\Repository;
    use App\Entity\Product;
    use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
    use Doctrine\ORM\QueryBuilder;
    use Symfony\Bridge\Doctrine\RegistryInterface;

    class ProductRepository extends ServiceEntityRepository
    {
        private const COUNT_TO_PAGE = 10;

        public function __construct(RegistryInterface $registry)
        {
            parent::__construct($registry, Product::class);
        }

        /**
         * @param string|null $term
         * @return QueryBuilder
         */
        public function getWithSearchQueryBuilder(?string $term = null): QueryBuilder
        {

            $qb = $this->createQueryBuilder('p');

            return $qb
                ->orderBy('p.startAt', 'ASC');

        }

    }
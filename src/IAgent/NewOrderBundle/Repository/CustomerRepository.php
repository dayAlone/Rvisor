<?
namespace IAgent\NewOrderBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CustomerRepository extends EntityRepository
{
    public function findAllOrderedByName($limit = NULL, $offset= NULL)
    {

        $query = $this->getEntityManager()
        ->createQuery('SELECT p FROM NewOrderBundle:Customer p ORDER BY p.name ASC')
        ->setMaxResults($limit)
        ->setFirstResult($offset)
        ->useResultCache(true, 3600, 'findAllOrderedByName');

        return $query->getResult();
    }
    public function findAllOrderedLikeName($query = NULL, $limit= NULL)
    {

        $qb = $this->createQueryBuilder('u');
        return $qb->where(
            $qb->expr()->like('u.name', ':query')
        )
        ->setParameter('query','%'.$query.'%')
        ->orderBy('u.name', 'ASC')
        ->setMaxResults($limit)
        ->getQuery()
        ->getResult();
    }
}
?>
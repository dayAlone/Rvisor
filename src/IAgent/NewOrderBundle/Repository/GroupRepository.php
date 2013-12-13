<?
namespace IAgent\NewOrderBundle\Repository;

use Doctrine\ORM\EntityRepository;

class GroupRepository extends EntityRepository
{
    public function findAllOrdered($limit = NULL, $offset= NULL)
    {

        $query = $this->getEntityManager()
        ->createQuery('SELECT p FROM NewOrderBundle:ProductGroup p ORDER BY p.name ASC')
        ->setMaxResults($limit)
        ->setFirstResult($offset)
        ->useResultCache(true, 3600, 'findAllOrdered');

        return $query->getResult();
    }
}
?>
<?php
namespace JobSeeker\Entity;

use Doctrine\ORM\EntityRepository;

class JobSeekerRepository extends EntityRepository
{

    public function save($jobSeeker)
    {
        //JobSeeker:JobSeeker
        $em = $this->getEntityManager();
        $em->persist($jobSeeker);
        $em->flush();
    }

    /**
     * Find by email id or user name
     * @param string $emailId
     * @param string $userName
     * @return mixed
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findByEmailIdOrUserName($emailId = null, $userName = null)
    {
        $query = $this->createQueryBuilder('js')
            ->where('js._email = :email')
            ->setParameter('email', $emailId)
            ->getQuery();

        /** @var \JobSeeker\Entity\JobSeeker $jobSeekerEntity */
        $jobSeekerEntity = $query->getOneOrNullResult();
        return $jobSeekerEntity;
    }
}
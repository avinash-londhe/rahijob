<?php
namespace JobSeeker\Entity;

use Doctrine\ORM\EntityRepository;

class JobSeekerInfoRepository extends EntityRepository
{

    public function save($jobSeekerInfo)
    {
        $em = $this->getEntityManager();
        $em->persist($jobSeekerInfo);
        $em->flush();
    }
}
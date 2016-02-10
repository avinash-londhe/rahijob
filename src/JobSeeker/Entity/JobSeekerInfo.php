<?php
/**
 * Sign up form.
 * @author: avinash londhe
 */

namespace JobSeeker\Entity;

/**
 * @ORM\Table(name="job_seeker_info")
 * @ORM\Entity(repositoryClass="JobSeeker\Entity\JobSeekerInfoRepository")
 */
use Doctrine\ORM\Mapping as ORM;

class JobSeekerInfo
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="job_seeker_id")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $_jobSeekerId;

    /**
     * @ORM\Column(type="string", name="email", length=255)
     */
    protected $_email;

    /**
     * @ORM\OneToOne(targetEntity="JobSeeker", inversedBy="info")
     * @ORM\JoinColumn(name="job_seeker_id", referencedColumnName="id")
     *
     */
    protected $_jobSeeker;

    /**
     * @return integer
     */
    public function getJobSeekerId()
    {
        return $this->_jobSeekerId;
    }

    /**
     * @param integer $jobSeekerId
     */
    public function setJobSeekerId($jobSeekerId)
    {
        $this->_jobSeekerId = $jobSeekerId;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getJobSeeker()
    {
        return $this->_jobSeeker;
    }

    /**
     * @param mixed $jobSeeker
     */
    public function setJobSeeker($jobSeeker)
    {
        $this->_jobSeeker = $jobSeeker;
    }

}
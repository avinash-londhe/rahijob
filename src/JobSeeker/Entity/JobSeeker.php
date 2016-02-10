<?php
/**
 * Sign up form.
 * @author: avinash londhe
 */

namespace JobSeeker\Entity;

/**
 * @ORM\Table(name="job_seeker")
 * @ORM\Entity(repositoryClass="JobSeeker\Entity\JobSeekerRepository")
 */
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Encoder\EncoderAwareInterface;


class JobSeeker implements UserInterface, EncoderAwareInterface
{
    /**
     * @ORM\Column(type="integer", name="id")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $_id;

    /**
     * @ORM\Column(type="integer", name="role_id")
     */
    protected $_roleId;

    /**
     * @ORM\Column(type="string", name="first_name", length=255)
     */
    protected $_firstName;

    /**
     * @ORM\Column(type="string", name="last_name", length=255)
     */
    protected $_lastName;

    /**
     * @ORM\Column(type="string", name="user_name", length=150)
     */
    protected $_username;

    /**
     * @ORM\Column(type="string", name="password", length=255)
     */
    protected $_password;

    /**
     * @ORM\Column(type="string", name="email", length=255)
     */
    protected $_email;

    /**
     * @ORM\Column(type="string", name="phone", length=15)
     */
    protected $_phone;

    /**
     * @ORM\Column(type="string", name="landline", length=15)
     */
    protected $_landLine;

    /**
     * @ORM\Column( name="marital_status")
     */
    protected $_maritalStatus;

    /**
     * @ORM\Column(type="datetime", name="last_login")
     */
    protected $_lastLogin;

    /**
     * @ORM\Column(type="integer", name="is_active", length=1)
     */
    protected $_isActive = 1;

    /**
     * @ORM\Column(type="integer", name="is_verified", length=1)
     */
    protected $_isVerified = 0;

    /**
     * @ORM\Column(type="datetime", name="updated_at")
     */
    protected $_updatedAt ;

    /**
     * @ORM\Column(type="datetime", name="created_at")
     */
    protected $_createdAt;

    /*
     * @var info
     * @ORM\OneToOne(targetEntity="JobSeekerInfo", mappedBy="jobSeeker")
     * @ORM\JoinColumn(name="id", referencedColumnName="job_seeker_id")

    protected $_info;*/

    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Set id
     * @param integer $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * Get role id
     * @return integer
     */
    public function getRoleId()
    {
        return $this->_roleId;
    }

    /**
     * Set role id
     * @param integer $roleId
     */
    public function setRoleId($roleId)
    {
        $this->_roleId = $roleId;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->_firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->_firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->_lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->_lastName = $lastName;
    }

    /**
     * Get user name
     * @return string
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * Set user name
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->_username = $username;
    }

    /**
     * Get password
     * @return string
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * Set password
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->_password = $password;
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
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getLandLine()
    {
        return $this->_landLine;
    }

    /**
     * @param mixed $landLine
     */
    public function setLandLine($landLine)
    {
        $this->_landLine = $landLine;
    }

    /**
     * @return mixed
     */
    public function getMaritalStatus()
    {
        return $this->_maritalStatus;
    }

    /**
     * @param mixed $maritalStatus
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->_maritalStatus = $maritalStatus;
    }

    /**
     * @return mixed
     */
    public function getLastLogin()
    {
        return $this->_lastLogin;
    }

    /**
     * @param mixed $lastLogin
     */
    public function setLastLogin($lastLogin)
    {
        $this->_lastLogin = $lastLogin;
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->_isActive;
    }

    /**
     * @param integer $isActive
     */
    public function setIsActive($isActive)
    {
        $this->_isActive = $isActive;
    }

    /**
     * @return integer
     */
    public function getIsVerified()
    {
        return $this->_isVerified;
    }

    /**
     * @param integer $isVerified
     */
    public function setIsVerified($isVerified)
    {
        $this->_isVerified = $isVerified;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->_updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        if (is_null($updatedAt)) {
            $updatedAt = new DateTime();
        }

        $this->_updatedAt = $updatedAt;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->_createdAt;
    }

    /**
     * @param DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->_createdAt = $createdAt;
    }



    public function getSalt()
    {
        return base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
    }

    public function getRoles()
    {
        return array('ROLE_JOB_SEEKER');
    }

    public function eraseCredentials()
    {

    }

    public function getEncoderName()
    {
        return 'harsh'; // use the default encoder
    }
}
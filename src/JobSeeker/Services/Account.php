<?php
namespace JobSeeker\Services;

use Doctrine\Common\Proxy\Exception\InvalidArgumentException;
use JobSeeker\Entity;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Config\Definition\Exception\Exception;
use Base\Services\Base as ServiceBase;
use Base\Services\PasswordEncoder;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;

class Account extends ServiceBase
{

    public function processSignUp($params)
    {
        $returnResult = array();

        try {
            if (empty($params['email'])) {
                throw new InvalidArgumentException('Email could not be empty');
            }

            if (empty($params['password'])) {
                throw new InvalidArgumentException('Password could not be empty');
            }

            $data = $this->getInfoByEmailId($params['email']);

            if (!empty($data)) {
                throw new InvalidArgumentException('Email id already exist');
            }

            if (empty($data)) {

                $jobSeekerEntity = new Entity\JobSeeker();
                $factory = $this->getContainer()->get('security.encoder_factory');
                $encoder = $factory->getEncoder($jobSeekerEntity);
                $params['password'] = $encoder->encodePassword($params['password'], $jobSeekerEntity->getSalt());


                $this->getEntityManager()->beginTransaction();
                try {
                    //Check email exist
                    $jobSeekerEntity->setFirstName(ucfirst($params['firstName']));
                    $jobSeekerEntity->setLastName(ucfirst($params['lastName']));
                    $jobSeekerEntity->setPassword($params['password']);
                    $jobSeekerEntity->setEmail($params['email']);
                    $jobSeekerEntity->setPassword($params['password']);

                    //Save job seeker
                    $this->saveJobSeeker($jobSeekerEntity);
                    $this->getEntityManager()->commit();

                    //store in session
                    $this->createSession($jobSeekerEntity);

                    return true;
                } catch (Exception $ex) {

                    $this->getEntityManager()->rollback();
                }

            }
        } catch (InvalidArgumentException $ex) {
            $returnResult['error'] = $ex->getMessage();
            return $returnResult;
        }
    }

    public function saveJobSeeker($jobSeeker)
    {
        /** @var \JobSeeker\Entity\JobSeekerRepository $jobSeekerEntity */
        $jobSeekerEntity = $this->getEntityManager()->getRepository('JobSeeker:JobSeeker');
        $jobSeekerEntity->save($jobSeeker);
    }

    public function getInfoByEmailId($email)
    {
        /** @var \JobSeeker\Entity\JobSeekerRepository $jobSeekerEntity */
        $jobSeekerEntity = $this->getEntityManager()->getRepository('JobSeeker:JobSeeker');
        return $jobSeekerEntity->findByEmailIdOrUserName($email);
    }

    public function authenticate($params)
    {
        /** @var \JobSeeker\Entity\JobSeeker  $jobSeeker */
        $jobSeeker = $this->getInfoByEmailId($params['email']);

        try {
            if (!empty($jobSeeker)) {
                $factory = $this->getContainer()->get('security.encoder_factory');
                $encoder = $factory->getEncoder($jobSeeker);
                if ($encoder->isPasswordValid($jobSeeker->getPassword(), $params['password'], $jobSeeker->getSalt())) {
                   //Add session code here
                    $this->createSession($jobSeeker);
                    return true;
                } else {
                    throw new AccessDeniedException('Sorry password is wrong');
                }
            } else {
                throw new AccessDeniedException('This email is not registered with us');
            }

        } catch (AccessDeniedException $ex) {
            $returnResult['error'] = $ex->getMessage();
            return $returnResult;
        }

    }

    /**
     * Create session
     * @param \JobSeeker\Entity\JobSeeker $jobSeeker
     */
    public function createSession($jobSeeker)
    {
        $this->setSessionName('rahiTechnoJobSeeker');
        $session = $this->getSessionName('rahiTechnoJobSeeker');
        $session->set('firstName', $jobSeeker->getFirstName());
        $session->set('lastName', $jobSeeker->getLastName());
        $session->set('id', $jobSeeker->getId());
        $session->set('email', $jobSeeker->getEmail());
        $session->set('roleId', $jobSeeker->getEmail());
    }

}
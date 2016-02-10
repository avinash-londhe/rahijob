<?php
namespace Base\Services;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Attribute\NamespacedAttributeBag;

class Base
{
    protected $_entityManager;

    protected $_container;

    protected $_sessionName;

    public function __construct($em = null)
    {
        if ($em !== null) {
            $this->setEntityManager($em);
        }
    }

    /**
     * @return mixed
     */
    public function getEntityManager()
    {
        return $this->_entityManager;
    }

    /**
     * @param mixed $entityManager
     */
    public function setEntityManager($entityManager)
    {
        $this->_entityManager = $entityManager;
    }

    /**
     * Get container
     * @return mixed
     */
    public function getContainer()
    {
        return $this->_container;
    }

    /**
     * Set container
     * @param mixed $container
     */
    public function setContainer($container)
    {
        $this->_container = $container;
    }

    /**
     * @param string $sessionName
     * @return array
     */
    public function getSessionName($sessionName)
    {
        $this->setSessionName($sessionName);

        return $this->_sessionName->getBag($sessionName);
    }

    /**
     * Set session name
     * @param string $sessionName
     */
    public function setSessionName($sessionName)
    {
        $this->_sessionName = new Session();
        $userAttributeBag = new NamespacedAttributeBag($sessionName);
        $userAttributeBag->setName($sessionName);
        $this->_sessionName->registerBag($userAttributeBag);
        if ($this->_sessionName->isStarted()) {
            $this->_sessionName->start();
        }
    }

}
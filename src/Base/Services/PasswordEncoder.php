<?php
namespace Base\Services;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;


/**
 * Class PasswordEncoder
 * @package Base\Services
 * @author Avinash Londhe
 */
class PasswordEncoder
{
    protected $_salt;

    protected $_encoder;

    public function __constructor()
    {
        $this->_encoder = new MessageDigestPasswordEncoder('sha512');
    }

    /**
     * Get encoded password
     * @param string $password
     * @return string
     */
    public function getEncodedPassword($password)
    {

        return $this->_encoder->encodePassword($password, $this->getSalt());
    }

    /**
     * Get salt
     * @return string
     */
    public function getSalt()
    {
        if (is_null($this->_salt)) {
            $this->setSalt();
        }

        return $this->_salt;
    }

    /**
     * Set salt
     */
    public function setSalt()
    {
        $this->_salt = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
    }

    /**
     * Validate password
     * @param string $encodedPassword
     * @param string $inputPassword
     * @return bool
     */
    public function isPasswordValid($encodedPassword, $inputPassword)
    {
        return $this->_encoder->isPasswordValid($encodedPassword, $inputPassword, $this->getSalt());
    }
}
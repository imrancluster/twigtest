<?php

use Respect\Validation\Validator as v;


/**
 * @Entity @Table(name="members")
 **/
class Members
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $facebook_id;

    /** @Column(type="string") **/
    protected $name;

    /** @Column(type="string") **/
    protected $first_name;

    /** @Column(type="string") **/
    protected $last_name;

    /** @Column(type="string") **/
    protected $locale;

    /** @Column(type="string") **/
    protected $username;

    /** @Column(type="string") **/
    protected $meta;

    public function toArray()
    {
        $data = array(
            'id'          => $this->getId(),
            'facebook_id' => $this->getFacebookId(),
            'name'        => $this->getName(),
            'first_name'  => $this->getFirstName(),
            'last_name'   => $this->getLastName(),
            'locale'      => $this->getLocale(),
            'username'    => $this->getUsername(),
            'meta'        => json_decode($this->getId(), 1)
        );

        return $data;
    }

    public function isValid()
    {
        try {
            v::create()->numeric()->assert($this->getFacebookId());
            v::create()->alnum()->assert($this->getFirstName());

        } catch (Exception $e) {

            $errors = $e->findMessages(array(
                'alnum'   => 'First name must contain only letters and digits',
                'length'  => 'facebook Id must not have more than 9 chars',
                'numeric' => 'facebook Id must be numeric'
            ));

            $errorMessage = "";
            foreach ($errors as $err) {
                if ($err) {
                    $errorMessage .= $err . PHP_EOL;
                }
            }

            return $errorMessage;
        }

        return true;

    }

    /**
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebook_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $facebook_id
     */
    public function setFacebookId($facebook_id)
    {
        $this->facebook_id = $facebook_id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @param mixed $meta
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;
    }


}
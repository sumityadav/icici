<?php

namespace Sumityadav\Icici;

class Customer
{
    use Arrayable;

    protected $Id;
    protected $Name;
    protected $Email;

    public function __construct()
    {
    }

    /**
     * Gets the value of Id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets the value of Id.
     *
     * @param mixed $Id the customer id
     *
     * @return self
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * Gets the value of Name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets the value of Name.
     *
     * @param mixed $Name the customer name
     *
     * @return self
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * Gets the value of Email.
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Sets the value of Email.
     *
     * @param mixed $Email the email
     *
     * @return self
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }
}

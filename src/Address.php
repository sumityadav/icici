<?php

namespace Sumityadav\Icici;

class Address
{
    protected $CustomerId;
    protected $CustomerName;
    protected $Email;
    protected $AddressLine1;
    protected $AddressLine2;
    protected $AddressLine3;
    protected $City;
    protected $State;
    protected $Zip;
    protected $CountryAlphaCode;

    public function __construct($CustomerName, $AddressLine1, $City, $State, $CountryAlphaCode = 'IN')
    {
        $this->CustomerName = $CustomerName;
        $this->AddressLine1 = $AddressLine1;
        $this->City = $City;
        $this->State = $State;
        $this->CountryAlphaCode = $CountryAlphaCode;
    }

    public function toString()
    {
        return "The Bill to address is \n" .
        "CustomerId: " . $this->getCustomerId() . "\n" .
        "CustomerName: " . $this->getCustomerName() . "\n" .
        "Address: " . $this->getAddressLine1() . "\n" . $this->getAddressLine2() . "\n" . $this->getAddressLine3() . "\n" .
        "City: " . $this->getCity() . "\n" .
        "State: " . $this->getState() . "\n" .
        "Zip: " . $this->getZip() . "\n" .
        "CountryAlphaCode: " . $this->getCountryAlphaCode() . "\n" .
        "Email: " . $this->getEmail();
    }

    /**
     * Gets the value of CustomerId.
     *
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }

    /**
     * Sets the value of CustomerId.
     *
     * @param mixed $CustomerId the customer id
     *
     * @return self
     */
    protected function setCustomerId($CustomerId)
    {
        $this->CustomerId = $CustomerId;

        return $this;
    }

    /**
     * Gets the value of CustomerName.
     *
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->CustomerName;
    }

    /**
     * Sets the value of CustomerName.
     *
     * @param mixed $CustomerName the customer name
     *
     * @return self
     */
    protected function setCustomerName($CustomerName)
    {
        $this->CustomerName = $CustomerName;

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
    protected function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Gets the value of AddressLine1.
     *
     * @return mixed
     */
    public function getAddressLine1()
    {
        return $this->AddressLine1;
    }

    /**
     * Sets the value of AddressLine1.
     *
     * @param mixed $AddressLine1 the address line1
     *
     * @return self
     */
    protected function setAddressLine1($AddressLine1)
    {
        $this->AddressLine1 = $AddressLine1;

        return $this;
    }

    /**
     * Gets the value of AddressLine2.
     *
     * @return mixed
     */
    public function getAddressLine2()
    {
        return $this->AddressLine2;
    }

    /**
     * Sets the value of AddressLine2.
     *
     * @param mixed $AddressLine2 the address line2
     *
     * @return self
     */
    protected function setAddressLine2($AddressLine2)
    {
        $this->AddressLine2 = $AddressLine2;

        return $this;
    }

    /**
     * Gets the value of AddressLine3.
     *
     * @return mixed
     */
    public function getAddressLine3()
    {
        return $this->AddressLine3;
    }

    /**
     * Sets the value of AddressLine3.
     *
     * @param mixed $AddressLine3 the address line3
     *
     * @return self
     */
    protected function setAddressLine3($AddressLine3)
    {
        $this->AddressLine3 = $AddressLine3;

        return $this;
    }

    /**
     * Gets the value of City.
     *
     * @return mixed
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Sets the value of City.
     *
     * @param mixed $City the city
     *
     * @return self
     */
    protected function setCity($City)
    {
        $this->City = $City;

        return $this;
    }

    /**
     * Gets the value of State.
     *
     * @return mixed
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * Sets the value of State.
     *
     * @param mixed $State the state
     *
     * @return self
     */
    protected function setState($State)
    {
        $this->State = $State;

        return $this;
    }

    /**
     * Gets the value of Zip.
     *
     * @return mixed
     */
    public function getZip()
    {
        return $this->Zip;
    }

    /**
     * Sets the value of Zip.
     *
     * @param mixed $Zip the zip
     *
     * @return self
     */
    protected function setZip($Zip)
    {
        $this->Zip = $Zip;

        return $this;
    }

    /**
     * Gets the value of CountryAlphaCode.
     *
     * @return mixed
     */
    public function getCountryAlphaCode()
    {
        return $this->CountryAlphaCode;
    }

    /**
     * Sets the value of CountryAlphaCode.
     *
     * @param mixed $CountryAlphaCode the country alpha code
     *
     * @return self
     */
    protected function setCountryAlphaCode($CountryAlphaCode)
    {
        $this->CountryAlphaCode = $CountryAlphaCode;

        return $this;
    }
}

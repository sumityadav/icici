<?php

namespace Sumityadav\Icici;

use Sumityadav\Icici\Customer;

class Address
{
    protected $AddressLine1;
    protected $AddressLine2;
    protected $AddressLine3;
    protected $City;
    protected $State;
    protected $Zip;
    protected $CountryCode;
    protected $Customer;

    public function __construct(Customer $Customer)
    {
        $this->Customer = $Customer;
    }

    public function toString()
    {
        return "The Bill to address is \n" .
        "CustomerId: " . $this->Customer->getCustomerId() . "\n" .
        "CustomerName: " . $this->Customer->getCustomerName() . "\n" .
        "Address: " . $this->getAddressLine1() . "\n" . $this->getAddressLine2() . "\n" . $this->getAddressLine3() . "\n" .
        "City: " . $this->getCity() . "\n" .
        "State: " . $this->getState() . "\n" .
        "Zip: " . $this->getZip() . "\n" .
        "CountryCode: " . $this->getCountryCode() . "\n" .
        "Email: " . $this->getEmail();
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
    public function setAddressLine1($AddressLine1)
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
    public function setAddressLine2($AddressLine2)
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
    public function setAddressLine3($AddressLine3)
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
    public function setCity($City)
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
    public function setState($State)
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
    public function setZip($Zip)
    {
        $this->Zip = $Zip;

        return $this;
    }

    /**
     * Gets the value of CountryCode.
     *
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * Sets the value of CountryCode.
     *
     * @param mixed $CountryCode the country alpha code
     *
     * @return self
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;

        return $this;
    }
}

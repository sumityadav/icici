<?php

namespace Sumityadav\Icici;

/**
 * Class to save response from 3D Secure server.
 */
class MPIData
{
    /**
     * Numeric value associated with the VBV process provided by the MPI
     */
    protected $ECI;

    /**
     * This value is generated during the VBV validation process
     */
    protected $XID;

    /**
     * The result of the VBV validations.
     * Data with size of 1 character.
     * Single character status indicated by either of
     *
     * Y - Authentication Successful
     * N - Authentication failed
     * U - Processing Failure
     * E - Not Enrolled
     * A – Attempts
     */
    protected $VBVStatus;

    /**
     * This value is generated during the VBV validation process if the validation is successful
     */
    protected $CAVV;

    /**
     * The Payment Gateway currently stores the value of the Shopping Context that is passed to it.
     * This value is not passed to the Acquirer.
     * @required false
     */
    protected $ShoppingContext;

    /**
     * The Payment Gateway currently stores the value of the Purchase Amount that is passed to it.
     * This value is not passed to the Acquirer
     * @required false
     */
    protected $PurchaseAmount;

    /**
     * The Payment Gateway currently stores the value of the Currency value that is passed to it.
     * This value is not passed to the Acquirer
     * @required false
     */
    protected $CurrencyValue;

    public function __construct()
    {
    }

    /**
     * Gets the Numeric value associated with the VBV process provided by the MPI.
     *
     * @return mixed
     */
    public function getECI()
    {
        return $this->ECI;
    }

    /**
     * Sets the Numeric value associated with the VBV process provided by the MPI.
     *
     * @param mixed $ECI the
     *
     * @return self
     */
    public function setECI($ECI)
    {
        $this->ECI = $ECI;

        return $this;
    }

    /**
     * Gets the This value is generated during the VBV validation process.
     *
     * @return mixed
     */
    public function getXID()
    {
        return $this->XID;
    }

    /**
     * Sets the value generated during the VBV validation process.
     *
     * @param mixed $XID the
     *
     * @return self
     */
    public function setXID($XID)
    {
        $this->XID = $XID;

        return $this;
    }

    /**
     * Gets the The result of the VBV validations
     * Data with size of 1 character
     * Single character status indicated by either of
     * Y - Authentication Successful
     * N - Authentication failed
     * U - Processing Failure
     * E - Not Enrolled
     * A – Attempts.
     *
     * @return mixed
     */
    public function getVBVStatus()
    {
        return $this->VBVStatus;
    }

    /**
     * Sets the The result of the VBV validations
     * Data with size of 1 character
     * Single character status indicated by either of
     * Y - Authentication Successful
     * N - Authentication failed
     * U - Processing Failure
     * E - Not Enrolled
     * A – Attempts.
     *
     * @param mixed $VBVStatus the vstatus
     *
     * @return self
     */
    public function setVBVStatus($VBVStatus)
    {
        $this->VBVStatus = $VBVStatus;

        return $this;
    }

    /**
     * Gets the This value is generated during the VBV validation process if the validation is successful.
     *
     * @return mixed
     */
    public function getCAVV()
    {
        return $this->CAVV;
    }

    /**
     * Sets the This value is generated during the VBV validation process if the validation is successful.
     *
     * @param mixed $CAVV the
     *
     * @return self
     */
    public function setCAVV($CAVV)
    {
        $this->CAVV = $CAVV;

        return $this;
    }

    /**
     * Gets the The Payment Gateway currently stores the value of the Shopping Context that is passed to it
     * This value is not passed to the Acquirer.
     *
     * @return mixed
     */
    public function getShoppingContext()
    {
        return $this->ShoppingContext;
    }

    /**
     * Sets the The Payment Gateway currently stores the value of the Shopping Context that is passed to it
     * This value is not passed to the Acquirer.
     *
     * @param mixed $ShoppingContext the shopping context
     *
     * @return self
     */
    public function setShoppingContext($ShoppingContext)
    {
        $this->ShoppingContext = $ShoppingContext;

        return $this;
    }

    /**
     * Gets the The Payment Gateway currently stores the value of the Purchase Amount that is passed to it
     * This value is not passed to the Acquirer.
     *
     * @return mixed
     */
    public function getPurchaseAmount()
    {
        return $this->PurchaseAmount;
    }

    /**
     * Sets the The Payment Gateway currently stores the value of the Purchase Amount that is passed to it
     * This value is not passed to the Acquirer.
     *
     * @param mixed $PurchaseAmount the purchase amount
     *
     * @return self
     */
    public function setPurchaseAmount($PurchaseAmount)
    {
        $this->PurchaseAmount = $PurchaseAmount;

        return $this;
    }

    /**
     * Gets the The Payment Gateway currently stores the value of the Currency value that is passed to it
     * This value is not passed to the Acquirer.
     *
     * @return mixed
     */
    public function getCurrencyValue()
    {
        return $this->CurrencyValue;
    }

    /**
     * Sets the The Payment Gateway currently stores the value of the Currency value that is passed to it
     * This value is not passed to the Acquirer.
     *
     * @param mixed $CurrencyValue the currency value
     *
     * @return self
     */
    public function setCurrencyValue($CurrencyValue)
    {
        $this->CurrencyValue = $CurrencyValue;

        return $this;
    }
}

<?php

namespace Sumityadav\Icici;

use Sumityadav\Icici\Address;
use Sumityadav\Icici\Card;
use Sumityadav\Icici\Merchant;
use Sumityadav\Icici\MPIData;
use Sumityadav\Icici\ReserveFields;

class GatewayRequest
{
    protected $Card;
    protected $MPIData;
    protected $Merchant;
    protected $ReserveFields;
    protected $BillingAddress;
    protected $ShippingAddress;

    public function __construct()
    {
    }

    /**
     * Initialize the request and send it to processor
     *
     * @return Gateway Response
     */
    public function send()
    {
    }

    /**
     * Sets the value of Card.
     *
     * @param mixed $Card the card
     *
     * @return self
     */
    public function setCard(Card $Card)
    {
        $this->Card = $Card;

        return $this;
    }

    /**
     * Sets the value of MPIData.
     *
     * @param mixed $MPIData the idata
     *
     * @return self
     */
    public function setMPIData(MPIData $MPIData)
    {
        $this->MPIData = $MPIData;

        return $this;
    }

    /**
     * Sets the value of Merchant.
     *
     * @param mixed $Merchant the merchant
     *
     * @return self
     */
    public function setMerchant(Merchant $Merchant)
    {
        $this->Merchant = $Merchant;

        return $this;
    }

    /**
     * Sets the value of ReserveFields.
     *
     * @param mixed $ReserveFields the reserve fields
     *
     * @return self
     */
    public function setReserveFields(ReserveFields $ReserveFields)
    {
        $this->ReserveFields = $ReserveFields;

        return $this;
    }

    /**
     * Sets the value of BillingAddress.
     *
     * @param mixed $BillingAddress the billing address
     *
     * @return self
     */
    public function setBillingAddress(Address $BillingAddress)
    {
        $this->BillingAddress = $BillingAddress;

        return $this;
    }

    /**
     * Sets the value of ShippingAddress.
     *
     * @param mixed $ShippingAddress the shipping address
     *
     * @return self
     */
    public function setShippingAddress(Address $ShippingAddress)
    {
        $this->ShippingAddress = $ShippingAddress;

        return $this;
    }
}

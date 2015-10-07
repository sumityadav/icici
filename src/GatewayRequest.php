<?php

namespace Sumityadav\Icici;

use Sumityadav\Icici\Address;
use Sumityadav\Icici\Card;
use Sumityadav\Icici\GatewayResponse;
use Sumityadav\Icici\Merchant;
use Sumityadav\Icici\MPIData;
use Sumityadav\Icici\ReserveFields;
use Sumityadav\Icici\Security;

class GatewayRequest
{
    protected $Card;
    protected $MPIData;
    protected $Merchant;
    protected $Security;
    protected $ReserveFields;
    protected $BillingAddress;
    protected $ShippingAddress;

    public function __construct(Security $Security)
    {
        $this->Security = $Security;
    }

    /**
     * Initialize the request and send it to processor
     *
     * @return Gateway Response
     */
    public function send()
    {
        $objResponse = new GatewayResponse();

        if ($this->Merchant === null) {
            return $objResponse->setErrorResponse("Merchant object is null or invalid.");
        }

        if (!$this->Merchant->getMerchantId()) {
            return $objResponse->setErrorResponse("Merchant id is null or invalid.");
        }

        if (!$this->Merchant->getMerchantTransactionId()) {
            return $objResponse->setErrorResponse("Merchant transaction id is null or invalid.");
        }

        if (!$this->Merchant->getMessageType()) {
            return $objResponse->setErrorResponse("Message type is null or invalid.");
        }

        if ($this->Card === null) {
            return $objResponse->setErrorResponse("Card object is null or invalid.");
        }

        $encryptedData = $this->encryptData();
        if (!$encryptedData) {
            return $objResponse->setErrorResponse("Error while encrypting/ hashing data.");
        }

        $requestString = $this->buildRequest($encryptedData);
        return $objResponse;
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
     * Sets the value of Security.
     *
     * @param mixed $Security the security
     *
     * @return self
     */
    protected function setSecurity($Security)
    {
        $this->Security = $Security;

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

    protected function encryptData()
    {
        $encryptElements = array(
            $this->Merchant->getMerchantId(),
            $this->Merchant->getMerchantTransactionId(),
            $this->Merchant->getIPAddress(),
            $this->Merchant->getAmount(),
            $this->Merchant->getMessageType(),
            $this->Merchant->getCurrencyCode(),
            $this->Merchant->getInvoiceNumber(),
            $this->Card->getNumber(),
            $this->Card->getExpirationYear(),
            $this->Card->getExpirationMonth(),
            $this->Card->getCVV(),
        );
        $encryptElements = array_map(function ($element) {
            return trim($element);
        }, $encryptElements);

        $encryptString = "";
        if (is_array($encryptElements)) {
            $encryptString = implode("", $encryptElements);
        }

        return $this->Security->getHashHMAC($encryptString);
    }

    /**
     * Build the string to post to the payment gateway.
     *
     * @return string
     */
    protected function buildRequest($encryptedData)
    {
        $request = array();

        $request[] = $this->parseObjectParameters($this->Merchant);
        $request[] = $this->parseObjectParameters($this->BillingAddress);
        $request[] = $this->parseObjectParameters($this->ShippingAddress);
        $request[] = $this->parseObjectParameters($this->Card);
        $request[] = $this->parseObjectParameters($this->MPIData);
        $request[] = $this->parseObjectParameters($this->ReserveFields);
        return implode("&", $request);
    }

    private function parseObjectParameters($object)
    {
        $return = [];
        if (method_exists($object, 'toArray')) {
            foreach ($object->toArray() as $key => $value) {
                if (!is_object($value)) {
                    $return[] = $key . '=' . $value;
                }
            }
        }
        return implode("&", $return);
    }
}

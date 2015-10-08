<?php

namespace Sumityadav\Icici;

use League\Fractal\Manager;
use League\Fractal\Resource\Item;
use Sumityadav\Icici\Card;
use Sumityadav\Icici\GatewayResponse;
use Sumityadav\Icici\Merchant;
use Sumityadav\Icici\Security;
use Sumityadav\Icici\Transformers\IciciTransformer;

class GatewayRequest
{
    protected $motoUrl = 'https://payseal.icicibank.com/mpi/Moto.jsp';

    protected $Card;
    protected $MPIData;
    protected $Merchant;
    protected $Security;
    protected $SecurityHash;
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

        dump($objResponse);die;
        $encryptedData = $this->encryptData();
        if (!$encryptedData) {
            return $objResponse->setErrorResponse("Error while encrypting/ hashing data.");
        }
        $this->setSecurityHash($encryptedData);

        $requestString = $this->buildRequest();
        return $objResponse;
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
    public function buildRequest()
    {
        $fractal = new Manager();
        // $fractal->setSerializer(new JsonApiSerializer());

        $resource = new Item($this, new IciciTransformer);
        $request = $fractal->createData($resource)->toArray();

        return http_build_query($request['data']);
    }

    /**
     * Gets the value of motoUrl.
     *
     * @return mixed
     */
    public function getMotoUrl()
    {
        return $this->motoUrl;
    }

    /**
     * Sets the value of motoUrl.
     *
     * @param mixed $motoUrl the moto url
     *
     * @return self
     */
    public function setMotoUrl($motoUrl)
    {
        $this->motoUrl = $motoUrl;

        return $this;
    }

    /**
     * Gets the value of Card.
     *
     * @return mixed
     */
    public function getCard()
    {
        return $this->Card;
    }

    /**
     * Sets the value of Card.
     *
     * @param mixed $Card the card
     *
     * @return self
     */
    public function setCard($Card)
    {
        $this->Card = $Card;

        return $this;
    }

    /**
     * Gets the value of MPIData.
     *
     * @return mixed
     */
    public function getMPIData()
    {
        return $this->MPIData;
    }

    /**
     * Sets the value of MPIData.
     *
     * @param mixed $MPIData the idata
     *
     * @return self
     */
    public function setMPIData($MPIData)
    {
        $this->MPIData = $MPIData;

        return $this;
    }

    /**
     * Gets the value of Merchant.
     *
     * @return mixed
     */
    public function getMerchant()
    {
        return $this->Merchant;
    }

    /**
     * Sets the value of Merchant.
     *
     * @param mixed $Merchant the merchant
     *
     * @return self
     */
    public function setMerchant($Merchant)
    {
        $this->Merchant = $Merchant;

        return $this;
    }

    /**
     * Gets the value of Security.
     *
     * @return mixed
     */
    public function getSecurity()
    {
        return $this->Security;
    }

    /**
     * Sets the value of Security.
     *
     * @param mixed $Security the security
     *
     * @return self
     */
    public function setSecurity($Security)
    {
        $this->Security = $Security;

        return $this;
    }

    /**
     * Gets the value of SecurityHash.
     *
     * @return mixed
     */
    public function getSecurityHash()
    {
        return $this->SecurityHash;
    }

    /**
     * Sets the value of SecurityHash.
     *
     * @param mixed $SecurityHash the security hash
     *
     * @return self
     */
    public function setSecurityHash($SecurityHash)
    {
        $this->SecurityHash = $SecurityHash;

        return $this;
    }

    /**
     * Gets the value of ReserveFields.
     *
     * @return mixed
     */
    public function getReserveFields()
    {
        return $this->ReserveFields;
    }

    /**
     * Sets the value of ReserveFields.
     *
     * @param mixed $ReserveFields the reserve fields
     *
     * @return self
     */
    public function setReserveFields($ReserveFields)
    {
        $this->ReserveFields = $ReserveFields;

        return $this;
    }

    /**
     * Gets the value of BillingAddress.
     *
     * @return mixed
     */
    public function getBillingAddress()
    {
        return $this->BillingAddress;
    }

    /**
     * Sets the value of BillingAddress.
     *
     * @param mixed $BillingAddress the billing address
     *
     * @return self
     */
    public function setBillingAddress($BillingAddress)
    {
        $this->BillingAddress = $BillingAddress;

        return $this;
    }

    /**
     * Gets the value of ShippingAddress.
     *
     * @return mixed
     */
    public function getShippingAddress()
    {
        return $this->ShippingAddress;
    }

    /**
     * Sets the value of ShippingAddress.
     *
     * @param mixed $ShippingAddress the shipping address
     *
     * @return self
     */
    public function setShippingAddress($ShippingAddress)
    {
        $this->ShippingAddress = $ShippingAddress;

        return $this;
    }
}

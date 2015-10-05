<?php

namespace Sumityadav\Icici;

class Merchant
{
    // Merchant Details

    /**
     * ID assigned by the Payment Gateway to the Merchant.
     * Data with maximum size of 8 characters
     * @required true
     */
    protected $MerchantId;

    /**
     * Same as Merchant ID
     * @required false
     */
    protected $Vendor;

    /**
     * Same as Merchant ID
     * @required false
     */
    protected $Partner;

    /**
     * Corresponds to the IP Address of the Customer.
     * In case of a SSL merchant this data will be captured by the Payment Gateway.
     * However, a MOTO merchant has to pass this data to the Payment Gateway.
     * This data is mandatory for a MOTO merchant and non-mandatory for the SSL merchant.
     */
    protected $IPAddress;

    /**
     * Transaction number generated by the Merchant for reference.
     * Root Transactions should have unique Transaction Reference Number.
     * @required false
     */
    protected $MerchantTransactionId;

    /**
     * Order number generated by the Merchant for his/her reference.
     * @required false
     */
    protected $OrderReferenceNumber;

    /**
     * URL of the Merchants site on which the Payment Gateway must post the results of the transaction.
     * This parameter is valid only in case of a SSL merchant
     * The MOTO merchant always receives the response via the PGResponse Object
     */
    protected $ResponseUrl;

    /**
     * HTTP method (GET/POST) to be used by the Payment Gateway for posting the results of the transaction to the Merchants site.
     * In case of SSL Merchants the value should be POST as the response is sent via a redirection.
     */
    protected $ResponseMethod;

    /**
     * Currency of the transaction
     */
    protected $CurrentCode;

    /**
     * Invoice umber generated by the Merchants application
     */
    protected $InvoiceNumber;

    /**
     * Indicates the type of transaction. This field can contain either of the values mentioned in the adjacent field
     */
    protected $MessageType;

    /**
     * Amount of the transaction
     */
    protected $Amount;

    /**
     * GMT Time Offset of the Merchants sites locale
     */
    protected $GMTTimeOffset;

    /**
     * Additional fields provided to the Merchant for passing any specific data
     */
    protected $Ext1;

    /**
     * Additional field provided to the Merchant for passing any specific data. Should be “true” for SSL merchant
     */
    protected $Ext2;

    /**
     * Reserved
     */
    protected $Ext3;

    /**
     * Additional field provided to the Merchant for passing any specific data
     */
    protected $Ext4;

    /**
     * Additional field provided to the Merchant for passing any specific data
     */
    protected $Ext5;

    // Merchant Related Transaction Details
    /**
     * Transaction reference number generated by the Payment Gateway for the original transaction and sent to the merchant.
     * Example, for an Authorization transaction the Root Transaction System reference of Pre-Authorization needs to be given.
     * Similarly, for a Refund transaction the Root Transaction System reference of Authorization needs to be given
     */
    protected $RootTxnSysRefNum;

    /**
     * RRN number sent by the Payment Gateway to the merchant for the original transaction.
     * Example, for an Authorization transaction the RRN of Pre-Authorization needs to be given.
     * Similarly, for a Refund transaction the RRN of Authorization needs to be given.
     */
    protected $RootPNRefNum;

    /**
     * Auth Code sent by the Payment Gateway to the merchant for the original transaction
     */
    protected $RootAuthCode;

    // Not used yet
    protected $InvoiceDate;
    protected $LanguageCode;
    protected $StartDate;
    protected $EndDate;

    public function __construct()
    {}

    /**
     * Gets the value of MerchantId.
     *
     * @return mixed
     */
    public function getMerchantId()
    {
        return $this->MerchantId;
    }

    /**
     * Sets the value of MerchantId.
     *
     * @param mixed $MerchantId the merchant id
     *
     * @return self
     */
    public function setMerchantId($MerchantId)
    {
        $this->MerchantId = $MerchantId;
        $this->setVendor($MerchantId);
        $this->setPartner($MerchantId);

        return $this;
    }

    /**
     * Gets the value of Vendor.
     *
     * @return mixed
     */
    public function getVendor()
    {
        return $this->Vendor;
    }

    /**
     * Sets the value of Vendor.
     *
     * @param mixed $Vendor the vendor
     *
     * @return self
     */
    protected function setVendor($Vendor)
    {
        $this->Vendor = $Vendor;

        return $this;
    }

    /**
     * Gets the value of Partner.
     *
     * @return mixed
     */
    public function getPartner()
    {
        return $this->Partner;
    }

    /**
     * Sets the value of Partner.
     *
     * @param mixed $Partner the partner
     *
     * @return self
     */
    protected function setPartner($Partner)
    {
        $this->Partner = $Partner;

        return $this;
    }

    /**
     * Gets the value of IPAddress.
     *
     * @return mixed
     */
    public function getIPAddress()
    {
        return $this->IPAddress;
    }

    /**
     * Sets the value of IPAddress.
     *
     * @param mixed $IPAddress the paddress
     *
     * @return self
     */
    public function setIPAddress($IPAddress)
    {
        $this->IPAddress = $IPAddress;

        return $this;
    }

    /**
     * Gets the value of MerchantTransactionId.
     *
     * @return mixed
     */
    public function getMerchantTransactionId()
    {
        return $this->MerchantTransactionId;
    }

    /**
     * Sets the value of MerchantTransactionId.
     *
     * @param mixed $MerchantTransactionId the merchant transaction id
     *
     * @return self
     */
    public function setMerchantTransactionId($MerchantTransactionId)
    {
        $this->MerchantTransactionId = $MerchantTransactionId;

        return $this;
    }

    /**
     * Gets the value of OrderReferenceNumber.
     *
     * @return mixed
     */
    public function getOrderReferenceNumber()
    {
        return $this->OrderReferenceNumber;
    }

    /**
     * Sets the value of OrderReferenceNumber.
     *
     * @param mixed $OrderReferenceNumber the order reference number
     *
     * @return self
     */
    public function setOrderReferenceNumber($OrderReferenceNumber)
    {
        $this->OrderReferenceNumber = $OrderReferenceNumber;

        return $this;
    }

    /**
     * Gets the value of ResponseUrl.
     *
     * @return mixed
     */
    public function getResponseUrl()
    {
        return $this->ResponseUrl;
    }

    /**
     * Sets the value of ResponseUrl.
     *
     * @param mixed $ResponseUrl the response url
     *
     * @return self
     */
    public function setResponseUrl($ResponseUrl)
    {
        $this->ResponseUrl = $ResponseUrl;

        return $this;
    }

    /**
     * Gets the value of ResponseMethod.
     *
     * @return mixed
     */
    public function getResponseMethod()
    {
        return $this->ResponseMethod;
    }

    /**
     * Sets the value of ResponseMethod.
     *
     * @param mixed $ResponseMethod the response method
     *
     * @return self
     */
    public function setResponseMethod($ResponseMethod)
    {
        $this->ResponseMethod = $ResponseMethod;

        return $this;
    }

    /**
     * Gets the value of CurrentCode.
     *
     * @return mixed
     */
    public function getCurrentCode()
    {
        return $this->CurrentCode;
    }

    /**
     * Sets the value of CurrentCode.
     *
     * @param mixed $CurrentCode the current code
     *
     * @return self
     */
    public function setCurrentCode($CurrentCode)
    {
        $this->CurrentCode = $CurrentCode;

        return $this;
    }

    /**
     * Gets the value of InvoiceNumber.
     *
     * @return mixed
     */
    public function getInvoiceNumber()
    {
        return $this->InvoiceNumber;
    }

    /**
     * Sets the value of InvoiceNumber.
     *
     * @param mixed $InvoiceNumber the invoice number
     *
     * @return self
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
        $this->InvoiceNumber = $InvoiceNumber;

        return $this;
    }

    /**
     * Gets the value of MessageType.
     *
     * @return mixed
     */
    public function getMessageType()
    {
        return $this->MessageType;
    }

    /**
     * Sets the value of MessageType.
     *
     * @param mixed $MessageType the message type
     *
     * @return self
     */
    public function setMessageType($MessageType)
    {
        $this->MessageType = $MessageType;

        return $this;
    }

    /**
     * Gets the value of Amount.
     *
     * @return mixed
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Sets the value of Amount.
     *
     * @param mixed $Amount the amount
     *
     * @return self
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;

        return $this;
    }

    /**
     * Gets the value of GMTTimeOffset.
     *
     * @return mixed
     */
    public function getGMTTimeOffset()
    {
        return $this->GMTTimeOffset;
    }

    /**
     * Sets the value of GMTTimeOffset.
     *
     * @param mixed $GMTTimeOffset the ttime offset
     *
     * @return self
     */
    public function setGMTTimeOffset($GMTTimeOffset)
    {
        $this->GMTTimeOffset = $GMTTimeOffset;

        return $this;
    }

    /**
     * Gets the value of Ext1.
     *
     * @return mixed
     */
    public function getExt1()
    {
        return $this->Ext1;
    }

    /**
     * Sets the value of Ext1.
     *
     * @param mixed $Ext1 the ext1
     *
     * @return self
     */
    public function setExt1($Ext1)
    {
        $this->Ext1 = $Ext1;

        return $this;
    }

    /**
     * Gets the value of Ext2.
     *
     * @return mixed
     */
    public function getExt2()
    {
        return $this->Ext2;
    }

    /**
     * Sets the value of Ext2.
     *
     * @param mixed $Ext2 the ext2
     *
     * @return self
     */
    public function setExt2($Ext2)
    {
        $this->Ext2 = $Ext2;

        return $this;
    }

    /**
     * Gets the value of Ext3.
     *
     * @return mixed
     */
    public function getExt3()
    {
        return $this->Ext3;
    }

    /**
     * Sets the value of Ext3.
     *
     * @param mixed $Ext3 the ext3
     *
     * @return self
     */
    public function setExt3($Ext3)
    {
        $this->Ext3 = $Ext3;

        return $this;
    }

    /**
     * Gets the value of Ext4.
     *
     * @return mixed
     */
    public function getExt4()
    {
        return $this->Ext4;
    }

    /**
     * Sets the value of Ext4.
     *
     * @param mixed $Ext4 the ext4
     *
     * @return self
     */
    public function setExt4($Ext4)
    {
        $this->Ext4 = $Ext4;

        return $this;
    }

    /**
     * Gets the value of Ext5.
     *
     * @return mixed
     */
    public function getExt5()
    {
        return $this->Ext5;
    }

    /**
     * Sets the value of Ext5.
     *
     * @param mixed $Ext5 the ext5
     *
     * @return self
     */
    public function setExt5($Ext5)
    {
        $this->Ext5 = $Ext5;

        return $this;
    }

    /**
     * Gets the value of RootTxnSysRefNum.
     *
     * @return mixed
     */
    public function getRootTxnSysRefNum()
    {
        return $this->RootTxnSysRefNum;
    }

    /**
     * Sets the value of RootTxnSysRefNum.
     *
     * @param mixed $RootTxnSysRefNum the root txn sys ref num
     *
     * @return self
     */
    public function setRootTxnSysRefNum($RootTxnSysRefNum)
    {
        $this->RootTxnSysRefNum = $RootTxnSysRefNum;

        return $this;
    }

    /**
     * Gets the value of RootPNRefNum.
     *
     * @return mixed
     */
    public function getRootPNRefNum()
    {
        return $this->RootPNRefNum;
    }

    /**
     * Sets the value of RootPNRefNum.
     *
     * @param mixed $RootPNRefNum the root nref num
     *
     * @return self
     */
    public function setRootPNRefNum($RootPNRefNum)
    {
        $this->RootPNRefNum = $RootPNRefNum;

        return $this;
    }

    /**
     * Gets the value of RootAuthCode.
     *
     * @return mixed
     */
    public function getRootAuthCode()
    {
        return $this->RootAuthCode;
    }

    /**
     * Sets the value of RootAuthCode.
     *
     * @param mixed $RootAuthCode the root auth code
     *
     * @return self
     */
    public function setRootAuthCode($RootAuthCode)
    {
        $this->RootAuthCode = $RootAuthCode;

        return $this;
    }

    /**
     * Gets the value of InvoiceDate.
     *
     * @return mixed
     */
    public function getInvoiceDate()
    {
        return $this->InvoiceDate;
    }

    /**
     * Sets the value of InvoiceDate.
     *
     * @param mixed $InvoiceDate the invoice date
     *
     * @return self
     */
    public function setInvoiceDate($InvoiceDate)
    {
        $this->InvoiceDate = $InvoiceDate;

        return $this;
    }

    /**
     * Gets the value of LanguageCode.
     *
     * @return mixed
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }

    /**
     * Sets the value of LanguageCode.
     *
     * @param mixed $LanguageCode the language code
     *
     * @return self
     */
    public function setLanguageCode($LanguageCode)
    {
        $this->LanguageCode = $LanguageCode;

        return $this;
    }

    /**
     * Gets the value of StartDate.
     *
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * Sets the value of StartDate.
     *
     * @param mixed $StartDate the start date
     *
     * @return self
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;

        return $this;
    }

    /**
     * Gets the value of EndDate.
     *
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * Sets the value of EndDate.
     *
     * @param mixed $EndDate the end date
     *
     * @return self
     */
    public function setEndDate($EndDate)
    {
        $this->EndDate = $EndDate;

        return $this;
    }
}

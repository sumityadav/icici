<?php

namespace Sumityadav\Icici\Transformers;

use League\Fractal\TransformerAbstract;

class IciciTransformer extends TransformerAbstract
{
    public function transform($gateway)
    {
        return [
            // Merchant
            'MerchantID' => $gateway->getMerchant()->getMerchantId(),
            'Vendor' => $gateway->getMerchant()->getVendor(),
            'Partner' => $gateway->getMerchant()->getPartner(),
            'OrdRefNo' => $gateway->getMerchant()->getOrderReferenceNumber(),
            'MerchantTxnID' => $gateway->getMerchant()->getMerchantTransactionId(),
            'MessageType' => $gateway->getMerchant()->getMessageType(),
            'InvoiceNo' => $gateway->getMerchant()->getInvoiceNumber(),
            'InvoiceDate' => $gateway->getMerchant()->getInvoiceDate(),
            'CurrCode' => $gateway->getMerchant()->getCurrencyCode(),
            'GMTOffset' => $gateway->getMerchant()->getGMTTimeOffset(),
            'RespMethod' => $gateway->getMerchant()->getResponseMethod(),
            'RespURL' => $gateway->getMerchant()->getResponseUrl(),
            'Amount' => $gateway->getMerchant()->getAmount(),
            'Ext1' => $gateway->getMerchant()->getExt1(),
            'Ext2' => $gateway->getMerchant()->getExt2(),
            'Ext3' => $gateway->getMerchant()->getExt3(),
            'Ext4' => $gateway->getMerchant()->getExt4(),
            'Ext5' => $gateway->getMerchant()->getExt5(),
            'MrtIpAddr' => $gateway->getMerchant()->getIPAddress(),

            // Billing Address
            'CustomerId' => $gateway->getBillingAddress()->getCustomer()->getId(),
            'CustomerName' => $gateway->getBillingAddress()->getCustomer()->getName(),
            'BillAddrLine1' => $gateway->getBillingAddress()->getAddressLine1(),
            'BillAddrLine2' => $gateway->getBillingAddress()->getAddressLine2(),
            'BillAddrLine3' => $gateway->getBillingAddress()->getAddressLine3(),
            'BillCity' => $gateway->getBillingAddress()->getCity(),
            'BillState' => $gateway->getBillingAddress()->getState(),
            'BillZip' => $gateway->getBillingAddress()->getZip(),
            'BillCountryAlphaCode' => $gateway->getBillingAddress()->getCountryCode(),
            'BillEmail' => $gateway->getBillingAddress()->getCustomer()->getEmail(),

            // Shipping Address
            // 'CustomerId' => $gateway->getShippingAddress()->getCustomer()->getId(),
            // 'CustomerName' => $gateway->getShippingAddress()->getCustomer()->getName(),
            'ShipAddrLine1' => $gateway->getShippingAddress()->getAddressLine1(),
            'ShipAddrLine2' => $gateway->getShippingAddress()->getAddressLine2(),
            'ShipAddrLine3' => $gateway->getShippingAddress()->getAddressLine3(),
            'ShipCity' => $gateway->getShippingAddress()->getCity(),
            'ShipState' => $gateway->getShippingAddress()->getState(),
            'ShipZip' => $gateway->getShippingAddress()->getZip(),
            'ShipCountryAlphaCode' => $gateway->getShippingAddress()->getCountryCode(),
            'ShipEmail' => $gateway->getShippingAddress()->getCustomer()->getEmail(),

            // Security Hash
            'EncryptedData' => $gateway->getSecurityHash(),

            // Some Default properties from the sfa.properties file
            'IntfVer' => 'ASPV2.0',
            'OsType' => 'NT',
            'LanguageType' => 'php',

            'CustIPAddress' => $gateway->getMerchant()->getIPAddress(),

            // Card Details
            'InstrType' => $gateway->getCard()->getCardType(),
            'CardType' => $gateway->getCard()->getType(),
            'CardNum' => $gateway->getCard()->getNumber(),
            'ExpDtYr' => $gateway->getCard()->getExpirationYear(),
            'ExpDtMon' => $gateway->getCard()->getExpirationMonth(),
            'CVVNum' => $gateway->getCard()->getCvv(),
            'NameOnCard' => $gateway->getCard()->getNameOnCard(),

            // MPI Data
            'status' => $gateway->getMPIData()->getVBVStatus(),
            'cavv' => $gateway->getMPIData()->getCAVV(),
            'eci' => $gateway->getMPIData()->getECI(),
            'xid' => $gateway->getMPIData()->getXID(),
            'purchaseAmount' => $gateway->getMPIData()->getPurchaseAmount(),
            'currencyVal' => $gateway->getMPIData()->getCurrencyValue(),
            'shoppingcontext' => $gateway->getMPIData()->getShoppingContext(),

            // Reserve Fields
            'Reserve1' => $gateway->getReserveFields()->getReserveField1(),
            'Reserve2' => $gateway->getReserveFields()->getReserveField2(),
            'Reserve3' => $gateway->getReserveFields()->getReserveField3(),
            'Reserve4' => $gateway->getReserveFields()->getReserveField4(),
            'Reserve5' => $gateway->getReserveFields()->getReserveField5(),
            'Reserve6' => $gateway->getReserveFields()->getReserveField6(),
            'Reserve7' => $gateway->getReserveFields()->getReserveField7(),
            'Reserve8' => $gateway->getReserveFields()->getReserveField8(),
            'Reserve9' => $gateway->getReserveFields()->getReserveField9(),
            'Reserve10' => $gateway->getReserveFields()->getReserveField10(),
        ];
    }
}

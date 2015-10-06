<?php

namespace Sumityadav\Icici\Test;

use PHPUnit_Framework_TestCase;
use Sumityadav\Icici\Address;
use Sumityadav\Icici\Card;
use Sumityadav\Icici\Customer;
use Sumityadav\Icici\Merchant;
use Sumityadav\Icici\MPIData;
use Sumityadav\Icici\ReserveFields;

class IciciTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testBasic()
    {
        // Provided by ICICI integration team
        $merchantId = '00001234';
        $random = rand();

        $objMerchant = new Merchant();
        $objMerchant->setMerchantId($merchantId)
            ->setMessageType('req.Sale')
            ->setIPAddress('10.10.10.238')
            ->setMerchantTransactionId($random)
            ->setOrderReferenceNumber('ORDER_' . $random)
            ->setInvoiceNumber('INV_' . $random)
            ->setCurrencyCode('INR')
            ->setAmount('100')
        ;
        for ($i = 1; $i <= 5; $i++) {
            $objMerchant->{'setExt' . $i}('Ext' . $i);
        }

        $objCustomer = new Customer();
        $objCustomer->setEmail('billing@example.com');

        $objBillingAddress = new Address($objCustomer);
        $objBillingAddress->setAddressLine1('123 Main Street')
            ->setAddressLine2('Apt. 101')
            ->setAddressLine3('Billing Address')
            ->setCity('Pune')
            ->setState('MH')
            ->setCountryCode('IND')
            ->setZip('411001')
        ;

        $objShipCustomer = new Customer();
        $objShipCustomer->setId('CUST_ID_001')
            ->setName('Jane Doe')
            ->setEmail('shipping@example.com')
        ;

        $objShippingAddress = new Address($objShipCustomer);
        $objShippingAddress->setAddressLine1('123 Main Street')
            ->setAddressLine2('Apt. 101')
            ->setAddressLine3('Shipping Address')
            ->setCity('Pune')
            ->setState('MH')
            ->setCountryCode('IND')
            ->setZip('411001')
        ;

        $objCard = new Card();
        $objCard->setNumber('5081264401288025')
            ->setType('MC')
            ->setExpirationMonth('12')
            ->setExpirationYear('2020')
            ->setNameOnCard('John Smith')
            ->setCvv('123')
            ->setCardType('CREDI'); // CREDI / DEBIT - Max 5 length
        ;

        $objMPI = new MPIData;
        $objMPI->setECI('02')
            ->setXID('NTBlZjRjMThjMjc1NTUxYzk1MTY=')
            ->setVBVStatus('Y')
            ->setCAVV('AAAAAAAAAAAAAAAAAAAAAAAAAAA=')
            ->setShoppingContext('84759435')
            ->setPurchaseAmount('1000')
            ->setCurrencyValue('356') // 356 is for INR
        ;

        $objPGReserve = new ReserveFields();

    }
}

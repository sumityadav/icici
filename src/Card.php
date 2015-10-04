<?php

namespace Sumityadav\Icici;

class Card
{
    protected $number;
    protected $expiration_month;
    protected $expiration_year;
    protected $cvv;
    protected $name_on_card;

    public function __construct($number, $expiration_month, $expiration_year, $cvv, $name_on_card)
    {
        $this->number = $number;
        $this->expiration_month = $expiration_month;
        $this->expiration_year = $expiration_year;
        $this->cvv = $cvv;
        $this->name_on_card = $name_on_card;
    }

    /**
     * Gets the value of number.
     *
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Gets the value of expiration_month.
     *
     * @return mixed
     */
    public function getExpirationMonth()
    {
        return $this->expiration_month;
    }

    /**
     * Gets the value of expiration_year.
     *
     * @return mixed
     */
    public function getExpirationYear()
    {
        return $this->expiration_year;
    }

    /**
     * Gets the value of cvv.
     *
     * @return mixed
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Gets the value of name_on_card.
     *
     * @return mixed
     */
    public function getNameOnCard()
    {
        return $this->name_on_card;
    }
}

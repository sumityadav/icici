<?php

namespace Sumityadav\Icici;

class Card
{
    protected $number;
    protected $type; // VISA, MC
    protected $expiration_month;
    protected $expiration_year;

    /**
     * AlphaNumeric data with maximum size of 5.
     *
     * For VISA,This field should contain the value in the following format
     * CVVNum $ Presence Indicator
     * Where CVVNum is a CVV value
     * Presence indicator is one of the following
     * 1 – CVV2 value is present
     * 2 – CVV2 value is on the Card, but is illegible
     * 9 – Cardholder states CVV2 is not present on  the Card
     *
     * e.g  010$1, 011$2 , $9
     */
    protected $cvv;
    protected $name_on_card;
    protected $card_type; // CREDI, DEBIT

    public function __construct()
    {}

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
     * Sets the value of number.
     *
     * @param mixed $number the number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets the value of type.
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the value of type.
     *
     * @param mixed $type the card type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
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
     * Sets the value of expiration_month.
     *
     * @param mixed $expiration_month the expiration month
     *
     * @return self
     */
    public function setExpirationMonth($expiration_month)
    {
        $this->expiration_month = $expiration_month;

        return $this;
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
     * Sets the value of expiration_year.
     *
     * @param mixed $expiration_year the expiration year
     *
     * @return self
     */
    public function setExpirationYear($expiration_year)
    {
        $this->expiration_year = $expiration_year;

        return $this;
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
     * Sets the value of cvv.
     *
     * @param mixed $cvv the cvv
     *
     * @return self
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
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

    /**
     * Sets the value of name_on_card.
     *
     * @param mixed $name_on_card the name on card
     *
     * @return self
     */
    public function setNameOnCard($name_on_card)
    {
        $this->name_on_card = $name_on_card;

        return $this;
    }

    /**
     * Gets the value of card_type.
     *
     * @return mixed
     */
    public function getCardType()
    {
        return $this->card_type;
    }

    /**
     * Sets the value of card_type.
     *
     * @param mixed $card_type the card type
     *
     * @return self
     */
    public function setCardType($card_type)
    {
        $this->card_type = $card_type;

        return $this;
    }
}

<?php

namespace Sumityadav\Icici;

class GatewayResponse
{
    protected $RespCode;
    protected $RespMessage;
    protected $TxnId;
    protected $EPGTxnId;
    protected $RedirectionTxnId;
    protected $RedirectionUrl;
    protected $AuthIdCode;
    protected $RRN;
    protected $TxnType;
    protected $TxnDateTime;
    protected $CVRespCode;
    protected $ReserveFld1;
    protected $ReserveFld2;
    protected $ReserveFld3;
    protected $ReserveFld4;
    protected $ReserveFld5;
    protected $ReserveFld6;
    protected $ReserveFld7;
    protected $ReserveFld8;
    protected $ReserveFld9;
    protected $ReserveFld10;

    protected $PG_RESP_RESPCODE = "RespCode";
    protected $PG_RESP_RESPMSG = "Message";
    protected $PG_RESP_EPG_TXN_ID = "ePGTxnID";
    protected $PG_RESP_MRT_TXN_ID = "TxnID";
    protected $PG_RESP_REDIRECT_TXN_ID = "RedirectionTxnID";
    protected $PG_RESP_AUTH_ID = "AuthIdCode";
    protected $PG_RESP_RRN = "RRN";
    protected $PG_RESP_TXNTYPE = "TxnType";
    protected $PG_RESP_TXN_DATE_TIME = "TxnDateTime";

    protected $PG_RESP_CVRESP_CODE = "CVRespCode";
    protected $PG_RESP_RESERVE1 = "Reserve1";
    protected $PG_RESP_RESERVE2 = "Reserve2";
    protected $PG_RESP_RESERVE3 = "Reserve3";
    protected $PG_RESP_RESERVE4 = "Reserve4";
    protected $PG_RESP_RESERVE5 = "Reserve5";
    protected $PG_RESP_RESERVE6 = "Reserve6";
    protected $PG_RESP_RESERVE7 = "Reserve7";
    protected $PG_RESP_RESERVE8 = "Reserve8";
    protected $PG_RESP_RESERVE9 = "Reserve9";
    protected $PG_RESP_RESERVE10 = "Reserve10";

    /**
     * Gets the value of RespCode.
     *
     * @return mixed
     */
    public function getRespCode()
    {
        return $this->RespCode;
    }

    /**
     * Sets the value of RespCode.
     *
     * @param mixed $RespCode the resp code
     *
     * @return self
     */
    public function setRespCode($RespCode)
    {
        $this->RespCode = $RespCode;

        return $this;
    }

    /**
     * Gets the value of RespMessage.
     *
     * @return mixed
     */
    public function getRespMessage()
    {
        return $this->RespMessage;
    }

    /**
     * Sets the value of RespMessage.
     *
     * @param mixed $RespMessage the resp message
     *
     * @return self
     */
    public function setRespMessage($RespMessage)
    {
        $this->RespMessage = $RespMessage;

        return $this;
    }

    /**
     * Gets the value of TxnId.
     *
     * @return mixed
     */
    public function getTxnId()
    {
        return $this->TxnId;
    }

    /**
     * Sets the value of TxnId.
     *
     * @param mixed $TxnId the txn id
     *
     * @return self
     */
    public function setTxnId($TxnId)
    {
        $this->TxnId = $TxnId;

        return $this;
    }

    /**
     * Gets the value of EPGTxnId.
     *
     * @return mixed
     */
    public function getEPGTxnId()
    {
        return $this->EPGTxnId;
    }

    /**
     * Sets the value of EPGTxnId.
     *
     * @param mixed $EPGTxnId the gtxn id
     *
     * @return self
     */
    public function setEPGTxnId($EPGTxnId)
    {
        $this->EPGTxnId = $EPGTxnId;

        return $this;
    }

    /**
     * Gets the value of RedirectionTxnId.
     *
     * @return mixed
     */
    public function getRedirectionTxnId()
    {
        return $this->RedirectionTxnId;
    }

    /**
     * Sets the value of RedirectionTxnId.
     *
     * @param mixed $RedirectionTxnId the redirection txn id
     *
     * @return self
     */
    public function setRedirectionTxnId($RedirectionTxnId)
    {
        $this->RedirectionTxnId = $RedirectionTxnId;

        return $this;
    }

    /**
     * Gets the value of RedirectionUrl.
     *
     * @return mixed
     */
    public function getRedirectionUrl()
    {
        return $this->RedirectionUrl;
    }

    /**
     * Sets the value of RedirectionUrl.
     *
     * @param mixed $RedirectionUrl the redirection url
     *
     * @return self
     */
    public function setRedirectionUrl($RedirectionUrl)
    {
        $this->RedirectionUrl = $RedirectionUrl;

        return $this;
    }

    /**
     * Gets the value of AuthIdCode.
     *
     * @return mixed
     */
    public function getAuthIdCode()
    {
        return $this->AuthIdCode;
    }

    /**
     * Sets the value of AuthIdCode.
     *
     * @param mixed $AuthIdCode the auth id code
     *
     * @return self
     */
    public function setAuthIdCode($AuthIdCode)
    {
        $this->AuthIdCode = $AuthIdCode;

        return $this;
    }

    /**
     * Gets the value of RRN.
     *
     * @return mixed
     */
    public function getRRN()
    {
        return $this->RRN;
    }

    /**
     * Sets the value of RRN.
     *
     * @param mixed $RRN the
     *
     * @return self
     */
    public function setRRN($RRN)
    {
        $this->RRN = $RRN;

        return $this;
    }

    /**
     * Gets the value of TxnType.
     *
     * @return mixed
     */
    public function getTxnType()
    {
        return $this->TxnType;
    }

    /**
     * Sets the value of TxnType.
     *
     * @param mixed $TxnType the txn type
     *
     * @return self
     */
    public function setTxnType($TxnType)
    {
        $this->TxnType = $TxnType;

        return $this;
    }

    /**
     * Gets the value of TxnDateTime.
     *
     * @return mixed
     */
    public function getTxnDateTime()
    {
        return $this->TxnDateTime;
    }

    /**
     * Sets the value of TxnDateTime.
     *
     * @param mixed $TxnDateTime the txn date time
     *
     * @return self
     */
    public function setTxnDateTime($TxnDateTime)
    {
        $this->TxnDateTime = $TxnDateTime;

        return $this;
    }

    /**
     * Gets the value of CVRespCode.
     *
     * @return mixed
     */
    public function getCVRespCode()
    {
        return $this->CVRespCode;
    }

    /**
     * Sets the value of CVRespCode.
     *
     * @param mixed $CVRespCode the vresp code
     *
     * @return self
     */
    public function setCVRespCode($CVRespCode)
    {
        $this->CVRespCode = $CVRespCode;

        return $this;
    }

    /**
     * Gets the value of ReserveFld1.
     *
     * @return mixed
     */
    public function getReserveFld1()
    {
        return $this->ReserveFld1;
    }

    /**
     * Sets the value of ReserveFld1.
     *
     * @param mixed $ReserveFld1 the reserve fld1
     *
     * @return self
     */
    public function setReserveFld1($ReserveFld1)
    {
        $this->ReserveFld1 = $ReserveFld1;

        return $this;
    }

    /**
     * Gets the value of ReserveFld2.
     *
     * @return mixed
     */
    public function getReserveFld2()
    {
        return $this->ReserveFld2;
    }

    /**
     * Sets the value of ReserveFld2.
     *
     * @param mixed $ReserveFld2 the reserve fld2
     *
     * @return self
     */
    public function setReserveFld2($ReserveFld2)
    {
        $this->ReserveFld2 = $ReserveFld2;

        return $this;
    }

    /**
     * Gets the value of ReserveFld3.
     *
     * @return mixed
     */
    public function getReserveFld3()
    {
        return $this->ReserveFld3;
    }

    /**
     * Sets the value of ReserveFld3.
     *
     * @param mixed $ReserveFld3 the reserve fld3
     *
     * @return self
     */
    public function setReserveFld3($ReserveFld3)
    {
        $this->ReserveFld3 = $ReserveFld3;

        return $this;
    }

    /**
     * Gets the value of ReserveFld4.
     *
     * @return mixed
     */
    public function getReserveFld4()
    {
        return $this->ReserveFld4;
    }

    /**
     * Sets the value of ReserveFld4.
     *
     * @param mixed $ReserveFld4 the reserve fld4
     *
     * @return self
     */
    public function setReserveFld4($ReserveFld4)
    {
        $this->ReserveFld4 = $ReserveFld4;

        return $this;
    }

    /**
     * Gets the value of ReserveFld5.
     *
     * @return mixed
     */
    public function getReserveFld5()
    {
        return $this->ReserveFld5;
    }

    /**
     * Sets the value of ReserveFld5.
     *
     * @param mixed $ReserveFld5 the reserve fld5
     *
     * @return self
     */
    public function setReserveFld5($ReserveFld5)
    {
        $this->ReserveFld5 = $ReserveFld5;

        return $this;
    }

    /**
     * Gets the value of ReserveFld6.
     *
     * @return mixed
     */
    public function getReserveFld6()
    {
        return $this->ReserveFld6;
    }

    /**
     * Sets the value of ReserveFld6.
     *
     * @param mixed $ReserveFld6 the reserve fld6
     *
     * @return self
     */
    public function setReserveFld6($ReserveFld6)
    {
        $this->ReserveFld6 = $ReserveFld6;

        return $this;
    }

    /**
     * Gets the value of ReserveFld7.
     *
     * @return mixed
     */
    public function getReserveFld7()
    {
        return $this->ReserveFld7;
    }

    /**
     * Sets the value of ReserveFld7.
     *
     * @param mixed $ReserveFld7 the reserve fld7
     *
     * @return self
     */
    public function setReserveFld7($ReserveFld7)
    {
        $this->ReserveFld7 = $ReserveFld7;

        return $this;
    }

    /**
     * Gets the value of ReserveFld8.
     *
     * @return mixed
     */
    public function getReserveFld8()
    {
        return $this->ReserveFld8;
    }

    /**
     * Sets the value of ReserveFld8.
     *
     * @param mixed $ReserveFld8 the reserve fld8
     *
     * @return self
     */
    public function setReserveFld8($ReserveFld8)
    {
        $this->ReserveFld8 = $ReserveFld8;

        return $this;
    }

    /**
     * Gets the value of ReserveFld9.
     *
     * @return mixed
     */
    public function getReserveFld9()
    {
        return $this->ReserveFld9;
    }

    /**
     * Sets the value of ReserveFld9.
     *
     * @param mixed $ReserveFld9 the reserve fld9
     *
     * @return self
     */
    public function setReserveFld9($ReserveFld9)
    {
        $this->ReserveFld9 = $ReserveFld9;

        return $this;
    }

    /**
     * Gets the value of ReserveFld10.
     *
     * @return mixed
     */
    public function getReserveFld10()
    {
        return $this->ReserveFld10;
    }

    /**
     * Sets the value of ReserveFld10.
     *
     * @param mixed $ReserveFld10 the reserve fld10
     *
     * @return self
     */
    public function setReserveFld10($ReserveFld10)
    {
        $this->ReserveFld10 = $ReserveFld10;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_RESPCODE.
     *
     * @return mixed
     */
    public function getPGRESPRESPCODE()
    {
        return $this->PG_RESP_RESPCODE;
    }

    /**
     * Sets the value of PG_RESP_RESPCODE.
     *
     * @param mixed $PG_RESP_RESPCODE the
     *
     * @return self
     */
    public function setPGRESPRESPCODE($PG_RESP_RESPCODE)
    {
        $this->PG_RESP_RESPCODE = $PG_RESP_RESPCODE;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_RESPMSG.
     *
     * @return mixed
     */
    public function getPGRESPRESPMSG()
    {
        return $this->PG_RESP_RESPMSG;
    }

    /**
     * Sets the value of PG_RESP_RESPMSG.
     *
     * @param mixed $PG_RESP_RESPMSG the
     *
     * @return self
     */
    public function setPGRESPRESPMSG($PG_RESP_RESPMSG)
    {
        $this->PG_RESP_RESPMSG = $PG_RESP_RESPMSG;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_EPG_TXN_ID.
     *
     * @return mixed
     */
    public function getPGRESPEPGTXNID()
    {
        return $this->PG_RESP_EPG_TXN_ID;
    }

    /**
     * Sets the value of PG_RESP_EPG_TXN_ID.
     *
     * @param mixed $PG_RESP_EPG_TXN_ID the
     *
     * @return self
     */
    public function setPGRESPEPGTXNID($PG_RESP_EPG_TXN_ID)
    {
        $this->PG_RESP_EPG_TXN_ID = $PG_RESP_EPG_TXN_ID;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_MRT_TXN_ID.
     *
     * @return mixed
     */
    public function getPGRESPMRTTXNID()
    {
        return $this->PG_RESP_MRT_TXN_ID;
    }

    /**
     * Sets the value of PG_RESP_MRT_TXN_ID.
     *
     * @param mixed $PG_RESP_MRT_TXN_ID the
     *
     * @return self
     */
    public function setPGRESPMRTTXNID($PG_RESP_MRT_TXN_ID)
    {
        $this->PG_RESP_MRT_TXN_ID = $PG_RESP_MRT_TXN_ID;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_REDIRECT_TXN_ID.
     *
     * @return mixed
     */
    public function getPGRESPREDIRECTTXNID()
    {
        return $this->PG_RESP_REDIRECT_TXN_ID;
    }

    /**
     * Sets the value of PG_RESP_REDIRECT_TXN_ID.
     *
     * @param mixed $PG_RESP_REDIRECT_TXN_ID the
     *
     * @return self
     */
    public function setPGRESPREDIRECTTXNID($PG_RESP_REDIRECT_TXN_ID)
    {
        $this->PG_RESP_REDIRECT_TXN_ID = $PG_RESP_REDIRECT_TXN_ID;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_AUTH_ID.
     *
     * @return mixed
     */
    public function getPGRESPAUTHID()
    {
        return $this->PG_RESP_AUTH_ID;
    }

    /**
     * Sets the value of PG_RESP_AUTH_ID.
     *
     * @param mixed $PG_RESP_AUTH_ID the
     *
     * @return self
     */
    public function setPGRESPAUTHID($PG_RESP_AUTH_ID)
    {
        $this->PG_RESP_AUTH_ID = $PG_RESP_AUTH_ID;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_RRN.
     *
     * @return mixed
     */
    public function getPGRESPRRN()
    {
        return $this->PG_RESP_RRN;
    }

    /**
     * Sets the value of PG_RESP_RRN.
     *
     * @param mixed $PG_RESP_RRN the
     *
     * @return self
     */
    public function setPGRESPRRN($PG_RESP_RRN)
    {
        $this->PG_RESP_RRN = $PG_RESP_RRN;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_TXNTYPE.
     *
     * @return mixed
     */
    public function getPGRESPTXNTYPE()
    {
        return $this->PG_RESP_TXNTYPE;
    }

    /**
     * Sets the value of PG_RESP_TXNTYPE.
     *
     * @param mixed $PG_RESP_TXNTYPE the
     *
     * @return self
     */
    public function setPGRESPTXNTYPE($PG_RESP_TXNTYPE)
    {
        $this->PG_RESP_TXNTYPE = $PG_RESP_TXNTYPE;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_TXN_DATE_TIME.
     *
     * @return mixed
     */
    public function getPGRESPTXNDATETIME()
    {
        return $this->PG_RESP_TXN_DATE_TIME;
    }

    /**
     * Sets the value of PG_RESP_TXN_DATE_TIME.
     *
     * @param mixed $PG_RESP_TXN_DATE_TIME the
     *
     * @return self
     */
    public function setPGRESPTXNDATETIME($PG_RESP_TXN_DATE_TIME)
    {
        $this->PG_RESP_TXN_DATE_TIME = $PG_RESP_TXN_DATE_TIME;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_CVRESP_CODE.
     *
     * @return mixed
     */
    public function getPGRESPCVRESPCODE()
    {
        return $this->PG_RESP_CVRESP_CODE;
    }

    /**
     * Sets the value of PG_RESP_CVRESP_CODE.
     *
     * @param mixed $PG_RESP_CVRESP_CODE the
     *
     * @return self
     */
    public function setPGRESPCVRESPCODE($PG_RESP_CVRESP_CODE)
    {
        $this->PG_RESP_CVRESP_CODE = $PG_RESP_CVRESP_CODE;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_RESERVE1.
     *
     * @return mixed
     */
    public function getPGRESPRESERVE1()
    {
        return $this->PG_RESP_RESERVE1;
    }

    /**
     * Sets the value of PG_RESP_RESERVE1.
     *
     * @param mixed $PG_RESP_RESERVE1 the ve1
     *
     * @return self
     */
    public function setPGRESPRESERVE1($PG_RESP_RESERVE1)
    {
        $this->PG_RESP_RESERVE1 = $PG_RESP_RESERVE1;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_RESERVE2.
     *
     * @return mixed
     */
    public function getPGRESPRESERVE2()
    {
        return $this->PG_RESP_RESERVE2;
    }

    /**
     * Sets the value of PG_RESP_RESERVE2.
     *
     * @param mixed $PG_RESP_RESERVE2 the ve2
     *
     * @return self
     */
    public function setPGRESPRESERVE2($PG_RESP_RESERVE2)
    {
        $this->PG_RESP_RESERVE2 = $PG_RESP_RESERVE2;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_RESERVE3.
     *
     * @return mixed
     */
    public function getPGRESPRESERVE3()
    {
        return $this->PG_RESP_RESERVE3;
    }

    /**
     * Sets the value of PG_RESP_RESERVE3.
     *
     * @param mixed $PG_RESP_RESERVE3 the ve3
     *
     * @return self
     */
    public function setPGRESPRESERVE3($PG_RESP_RESERVE3)
    {
        $this->PG_RESP_RESERVE3 = $PG_RESP_RESERVE3;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_RESERVE4.
     *
     * @return mixed
     */
    public function getPGRESPRESERVE4()
    {
        return $this->PG_RESP_RESERVE4;
    }

    /**
     * Sets the value of PG_RESP_RESERVE4.
     *
     * @param mixed $PG_RESP_RESERVE4 the ve4
     *
     * @return self
     */
    public function setPGRESPRESERVE4($PG_RESP_RESERVE4)
    {
        $this->PG_RESP_RESERVE4 = $PG_RESP_RESERVE4;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_RESERVE5.
     *
     * @return mixed
     */
    public function getPGRESPRESERVE5()
    {
        return $this->PG_RESP_RESERVE5;
    }

    /**
     * Sets the value of PG_RESP_RESERVE5.
     *
     * @param mixed $PG_RESP_RESERVE5 the ve5
     *
     * @return self
     */
    public function setPGRESPRESERVE5($PG_RESP_RESERVE5)
    {
        $this->PG_RESP_RESERVE5 = $PG_RESP_RESERVE5;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_RESERVE6.
     *
     * @return mixed
     */
    public function getPGRESPRESERVE6()
    {
        return $this->PG_RESP_RESERVE6;
    }

    /**
     * Sets the value of PG_RESP_RESERVE6.
     *
     * @param mixed $PG_RESP_RESERVE6 the ve6
     *
     * @return self
     */
    public function setPGRESPRESERVE6($PG_RESP_RESERVE6)
    {
        $this->PG_RESP_RESERVE6 = $PG_RESP_RESERVE6;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_RESERVE7.
     *
     * @return mixed
     */
    public function getPGRESPRESERVE7()
    {
        return $this->PG_RESP_RESERVE7;
    }

    /**
     * Sets the value of PG_RESP_RESERVE7.
     *
     * @param mixed $PG_RESP_RESERVE7 the ve7
     *
     * @return self
     */
    public function setPGRESPRESERVE7($PG_RESP_RESERVE7)
    {
        $this->PG_RESP_RESERVE7 = $PG_RESP_RESERVE7;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_RESERVE8.
     *
     * @return mixed
     */
    public function getPGRESPRESERVE8()
    {
        return $this->PG_RESP_RESERVE8;
    }

    /**
     * Sets the value of PG_RESP_RESERVE8.
     *
     * @param mixed $PG_RESP_RESERVE8 the ve8
     *
     * @return self
     */
    public function setPGRESPRESERVE8($PG_RESP_RESERVE8)
    {
        $this->PG_RESP_RESERVE8 = $PG_RESP_RESERVE8;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_RESERVE9.
     *
     * @return mixed
     */
    public function getPGRESPRESERVE9()
    {
        return $this->PG_RESP_RESERVE9;
    }

    /**
     * Sets the value of PG_RESP_RESERVE9.
     *
     * @param mixed $PG_RESP_RESERVE9 the ve9
     *
     * @return self
     */
    public function setPGRESPRESERVE9($PG_RESP_RESERVE9)
    {
        $this->PG_RESP_RESERVE9 = $PG_RESP_RESERVE9;

        return $this;
    }

    /**
     * Gets the value of PG_RESP_RESERVE10.
     *
     * @return mixed
     */
    public function getPGRESPRESERVE10()
    {
        return $this->PG_RESP_RESERVE10;
    }

    /**
     * Sets the value of PG_RESP_RESERVE10.
     *
     * @param mixed $PG_RESP_RESERVE10 the ve10
     *
     * @return self
     */
    public function setPGRESPRESERVE10($PG_RESP_RESERVE10)
    {
        $this->PG_RESP_RESERVE10 = $PG_RESP_RESERVE10;

        return $this;
    }

    /**
     * Set the error response
     *
     * @param string  $message Error message
     * @param integer $code    Error code
     *
     * @return self
     */
    public function setErrorResponse($message, $code = 2)
    {
        $this->setRespMessage($message);
        $this->setRespCode($code);

        return $this;
    }

}

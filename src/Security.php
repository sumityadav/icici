<?php

namespace Sumityadav\Icici;

use phpseclib\Crypt\DES;
use phpseclib\Crypt\Hash;

class Security
{
    public function packString($string)
    {
        $string = str_replace(' ', '', $string);
        return pack('H*', $string);
    }

    public function unpackString($string)
    {
        $hexstr = unpack('H*', $string);
        return array_shift($hexstr);
    }

    public function getHMAC($ResponseData, $FileName, $MerchantID)
    {
        $strkey = $this->getKey($MerchantID, $FileName);
        $strhexkey = $this->hexstr($strkey);

        $hash = new Hash('sha1');
        $hash->setKey($strhexkey);

        $digest = $hash->hash($ResponseData);
        $cleardigest = $this->strhex($digest);
        return $cleardigest;
    }

    public function getKey($MerchantID, $FileName)
    {
        $fh = fopen($FileName, 'r');
        $strmodulas = fgets($fh);
        $strmodulas = trim($strmodulas);
        fclose($fh);

        $lMKey = base64_encode($MerchantID . $MerchantID);

        $des = new DES(CRYPT_DES_MODE_ECB);

        $des->setKey($this->hexstr(base64_decode($lMKey)));

        $cleartext = $des->decrypt($this->hexstr($strmodulas));

        $hexkey = $this->strhex($cleartext);
        $hexkey = strlen($hexkey) <= 40 ? $hexkey : substr($hexkey, 0, 40);
        return $hexkey;
    }
}

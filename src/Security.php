<?php

namespace Sumityadav\Icici;

use Exception;
use phpseclib\Crypt\DES;
use phpseclib\Crypt\Hash;

class Security
{
    /**
     * Physical path to the security key.
     *
     * @var string
     */
    protected $key;
    protected $file_path;
    protected $MerchantID;

    public function __construct($MerchantID)
    {
        $this->MerchantID = $MerchantID;

        $this->key = $this->getFilePath();
    }

    public function getHashHMAC($stringToEncrypt)
    {
        // Read the security key
        $strkey = $this->getKey();
        $packedKey = $this->_pack($strkey);

        $hash = new Hash('sha1');
        $hash->setKey($packedKey);

        $digest = $hash->hash($stringToEncrypt);
        return $this->_unpack($digest);
    }

    /**
     * Gets the key.
     *
     * @return mixed
     */
    public function getKey()
    {
        $fh = fopen($this->key, 'r');
        $strmodulas = trim(fgets($fh));
        fclose($fh);

        $des = new DES();
        $des->mode = $des::MODE_ECB;
        $des->setKey($this->_pack($this->MerchantID . $this->MerchantID));
        $cleartext = $des->decrypt($this->_pack($strmodulas));

        $hexkey = $this->_unpack($cleartext);
        return strlen($hexkey) <= 40 ? $hexkey : substr($hexkey, 0, 40);
    }

    /**
     * Sets the value of key.
     *
     * @param mixed $key the key
     *
     * @return self
     */
    protected function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Gets the value of file_path.
     *
     * @return mixed
     */
    public function getFilePath()
    {
        if (!$this->file_path && is_file(__DIR__ . '/' . $this->MerchantID . '.key')) {
            $this->file_path = __DIR__ . '/' . $this->MerchantID . '.key';
        }

        if (!$this->file_path) {
            throw new Exception("Invalid key path");
        }
        return $this->file_path;
    }

    /**
     * Sets the value of file_path.
     *
     * @param mixed $file_path the file path
     *
     * @return self
     */
    public function setFilePath($file_path)
    {
        $this->file_path = $file_path;

        return $this;
    }

    /**
     * Pack data into binary string
     * @param  string $string Input string to pack
     * @return string         Returns a binary string containing data
     */
    private function _pack($string)
    {
        $string = str_replace(' ', '', $string);
        return pack('H*', $string);
    }

    /**
     * Unpack data from binary string
     * @param  string $string Binary string
     * @return string         Plain text
     */
    private function _unpack($string)
    {
        return array_shift(unpack('H*', $string));
    }

}

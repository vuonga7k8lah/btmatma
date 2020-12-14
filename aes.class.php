<?php


class aes
{
	//The key must be 16 bits
	//The key must be 16 bits
	public $key ;

	//Offset
	public $iv = '';

	/**
	 * Decrypted string
	 * @param string $data Character string
	 * @return string
	 */
	public function __construct()
	{
		$this->key = '1234567890123456';
	}

	public  function decode($str,$IV,$key)
	{
		$starttime = microtime(true);
		$testTime = openssl_decrypt(base64_decode($str),"AES-128-CBC",$key,OPENSSL_RAW_DATA, $IV);
		$endtime = microtime(true);
		$timediff = round((($endtime - $starttime) * 1000), 5);
		return array($timediff, $testTime);
	}

	/**
	 * Encrypted string
	 * @param string $data Character string
	 * @return string
	 */
	public  function encode($str,$IV,$key)
	{
		$starttime = microtime(true);
		$testTime = base64_encode(openssl_encrypt($str,"AES-128-CBC",$IV,OPENSSL_RAW_DATA, $key));
		$endtime = microtime(true);
		$timediff = round((($endtime - $starttime) * 1000), 5);
		return array($timediff, $testTime);
	}
}
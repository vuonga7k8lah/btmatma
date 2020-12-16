<?php


class aes
{
	//The key must be 16 bits
	//The key must be 16 bits
	public $key;

	//Offset
	public $iv = "112233445566778899";

	/**
	 * Decrypted string
	 * @param string $data Character string
	 * @return string
	 */
	public function decode($str, $key)
	{
		$starttime = microtime(true);
		$testTime = openssl_decrypt(base64_decode($str), "AES-128-CBC", $key, OPENSSL_RAW_DATA, substr(sha1($this->iv,
			false), 0,
			16));
		$endtime = microtime(true);
		$timediff = round((($endtime - $starttime) * 1000), 5);
		return [$timediff, $testTime];
	}

	/**
	 * Encrypted string
	 * @param string $data Character string
	 * @return string
	 */
	public  function encode($str,$key)
	{
		$starttime = microtime(true);
		$testTime = base64_encode(openssl_encrypt($str, "AES-128-CBC", substr(sha1($this->iv, false), 0,
			16), OPENSSL_RAW_DATA, $key));
		$endtime = microtime(true);
		$timediff = round((($endtime - $starttime) * 1000), 5);
		return [$timediff, $testTime];
	}
}
<?php


class aes
{
	private $secret_iv = 'This is my secret iv';

	/**
	 * Decrypted string
	 * @param string $data Character string
	 * @return string
	 */
	public function decode($str, $key, $method)
	{
		$starttime = microtime(true);
		$testTime = openssl_decrypt(base64_decode($str), $method, hash('sha256', $key), OPENSSL_RAW_DATA, $this->getIv());
		$endtime = microtime(true);
		$timediff = round((($endtime - $starttime) * 1000), 5);
		return [$timediff, $testTime];
	}

	/**
	 * Encrypted string
	 * @param string $data Character string
	 * @return string
	 */
	public function encode($str, $key, $method)
	{
		$starttime = microtime(true);
		$testTime = base64_encode(openssl_encrypt($str, $method, hash('sha256', $key), OPENSSL_RAW_DATA,
			$this->getIv()));
		$endtime = microtime(true);
		$timediff = round((($endtime - $starttime) * 1000), 5);
		return [$timediff, $testTime];
	}

	private function getIv()
	{
		return substr(hash('sha256', $this->secret_iv), 0, 16);
	}

}
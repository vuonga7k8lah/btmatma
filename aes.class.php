<?php


class aes
{
	/**
	 * Decrypted string
	 * @param string $data Character string
	 * @return array
	 */
	public function decode($str, $key, $method)
	{
		$starttime = microtime(true);
		$type = $this->__chooseType($key, $method);
		$result = openssl_decrypt(base64_decode($str), $type[1], $type[0], OPENSSL_RAW_DATA, '123456789abcdefg');
		$endtime = microtime(true);
		$timediff = round((($endtime - $starttime) * 1000), 5);
		return [$timediff, $result];
	}

	/**
	 * Encrypted string
	 * @param string $data Character string
	 * @return array
	 */
	public function encode($str, $key, $method)
	{
		$starttime = microtime(true);
		$type = $this->__chooseType($key, $method);
		$result = base64_encode(openssl_encrypt($str, $type[1], $type[0], OPENSSL_RAW_DATA, '123456789abcdefg'));
		$endtime = microtime(true);
		$timediff = round((($endtime - $starttime) * 1000), 5);
		return [$timediff, $result];
	}

	private function __chooseType($key, $method)
	{
		$hashKey = "";
		$defineMethod = "";
		if (!empty($key) && !empty($method)) {
			switch ($method) {
				case "128":
				$hashKey = substr(hash('sha256', $key), 0, 16);
				$defineMethod = 'AES-128-CBC';
				break;
				case "192":
				$hashKey = substr(hash('sha256', $key), 0, 24);
				$defineMethod = 'AES-192-CBC';
				break;
				case "256":
				$hashKey = substr(hash('sha256', $key), 0, 32);
				$defineMethod = 'AES-256-CBC';
				break;
			}
		}

		return [$hashKey, $defineMethod];
	}
}
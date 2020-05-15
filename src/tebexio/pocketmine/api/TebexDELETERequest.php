<?php

declare(strict_types=1);

namespace tebexio\pocketmine\api;

abstract class TebexDELETERequest implements TebexRequest{

	public function addAdditionalCurlOpts(array &$curl_opts) : void{
		$curl_opts[CURLOPT_POST] = true;
		$curl_opts[CURLOPT_CUSTOMREQUEST] = "DELETE";
		$curl_opts[CURLOPT_POSTFIELDS] = $this->getPOSTFields();
	}

	abstract protected function getPOSTFields() : string;
}
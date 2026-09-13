<?php

namespace App\Http\Services;

use GuzzleHttp\Client;


use App\Interfaces\ModuleInterface as ModuleInterface;

class ModuleService implements ModuleInterface
{


	protected $clients;


	public function __construct(Client $clients){ 

		$this->clients = $clients;
	}

	public function responseGet($segment)
	{        

		$endpoint = env('APP_ENDPOINT_FACTORY').$segment;        

		$response = $this->clients->request('GET', $endpoint);      

		return  $ms_contents = json_decode($response->getBody()->getContents());
	}

	


}

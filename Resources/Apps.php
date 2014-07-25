<?php

namespace ServerPilotAPI\Resources;

// load main Transport class for extending
require_once 'Resource.php';

// now use it
use ServerPilotAPI\Resources\Resource;

class Apps extends Resource
{
    
    protected function request($method, $data=array()) {
    	$resource = '/apps';
    
    	$response = $this->transport->request($resource, $method, $data);
    
	    return $response;
    }
    
	public function listAll() {
		$results = $this->request('');
		
		return $results->data;
	}
}
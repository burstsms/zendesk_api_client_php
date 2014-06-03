<?php

namespace Zendesk\API;

/**
 * Debug helper class
 */
class Debug {

    public $lastRequestHeaders;
    public $lastResponseCode;
    public $lastResponseHeaders;
    //OS: added response body
	public $response='';
	public $responseRaw='';
}

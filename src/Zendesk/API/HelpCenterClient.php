<?php
	namespace Zendesk\API; 
	
	class HelpCenterClient extends Client
	{
		
		protected $articles;
		
		public function __construct($subdomain, $username)
		{
			parent::__construct($subdomain, $username);
			$this->apiUrl.='help_center/';
			
			$this->articles=new Articles($this);
		}
	}
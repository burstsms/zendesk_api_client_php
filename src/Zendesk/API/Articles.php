<?php
	namespace Zendesk\API;
	
	class Articles extends ClientAbstract {
	
	    const OBJ_NAME = 'article';
	    const OBJ_NAME_PLURAL = 'articles';
	    
	  public function findAll(array $params = array()) 
	  {
        $endPoint = Http::prepare(
        	(isset($params['category_id']) ? 'categories/'.$params['category_id'].'/articles.json' :
			(isset($params['section_id']) ? 'sections/'.$params['section_id'].'/articles.json' : 
			(isset($params['user_id']) ? 'users/'.$params['user_id'].'/articles.json' : 'articles.json'))), $this->client->getSideload($params), $params
        );    
        $response = Http::send($this->client, $endPoint);
        if ((!is_object($response)) || ($this->client->getDebug()->lastResponseCode != 200)) {
            throw new ResponseException(__METHOD__);
        }
        $this->client->setSideload(null);
        return $response;
    }
}
	    
	
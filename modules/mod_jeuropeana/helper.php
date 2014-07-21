<?php
/**
 * @package     JEuropeana.Module
 * @copyright   Copyright (C) 2014 KnowledgeArc Ltd. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 *
 * Contributors
 * Please feel free to add your name and email (optional) here if you have 
 * contributed any source code changes.
 * Name                         Email
 * Hayden Young                 <hayden@knowledgearc.com> 
 */

abstract class ModJEuropeanaHelper
{
    public static function getItems($params)
    {
        $url = 'http://europeana.eu/api/v2/search.json?&wskey=yg3fcahdP&query=Mona%20Lisa';
    
        $client = new JHttp();
        
        $response = $client->get($url);
        
        return json_decode($response->body);
    }
}
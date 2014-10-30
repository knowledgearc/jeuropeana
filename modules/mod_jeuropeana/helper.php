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
        $input = JFactory::getApplication()->input;

        $component = $input->get('option');
        $view = $input->get('view');
        $id = $input->getInt('id');

        $tags = array();

        if ($component == 'com_jspace' && $view == 'record') {
            $record = JSpaceRecord::getInstance($id);

            foreach ($record->getTags()->itemTags as $tag) {
                $tags[] = $tag->title;
            }

            $url = 'http://europeana.eu/api/v2/search.json?&wskey=yg3fcahdP&query='.$record->title;

            foreach ($tags as $tag) {
                $url.='&qf='.$tag;
            }

            if ($record->language != '*') {
                $url.='&qf=LANGUAGE:'.$record->language;
            } else {
                $url.='&qf=LANGUAGE:'.JFactory::getLanguage()->getDefault();
            }

            $client = new JHttp();

            $response = $client->get($url);

            return json_decode($response->body);
        } else {
            return array();
        }
    }
}
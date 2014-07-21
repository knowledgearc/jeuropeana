<?php
/**
 * @package     JEuropeana.Module
 * @copyright   Copyright (C) 2014 KnowledgeArc Ltd. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE

 * Contributors
 * Please feel free to add your name and email (optional) here if you have 
 * contributed any source code changes.
 * Name                         Email
 * Hayden Young                 <hayden@knowledgearc.com>
 * 
 */

defined('_JEXEC') or die;

require_once dirname(__FILE__).'/helper.php';

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

$items = ModJEuropeanaHelper::getItems($params);

require JModuleHelper::getLayoutPath('mod_'.$module->name, $params->get('layout', 'default'));
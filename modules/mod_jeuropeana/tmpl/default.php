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

defined('_JEXEC') or die('Restricted access');
?>

<?php foreach ($items->items as $item) : ?>

    <div class="span12">
        <div class="span3">
            <a href="#" class="thumbnail">
                <img src="<?php echo JArrayHelper::getValue($item->edmPreview, 0); ?>" alt="">
            </a>
        </div>
        <div class="span9">
            <h3><a href="<?php echo JArrayHelper::getValue($item->edmIsShownAt, 0); ?>"><?php echo JArrayHelper::getValue($item->title, 0); ?></a></h3>
            <h4><?php echo JArrayHelper::getValue($item->dcCreator, 0); ?></h4>
        </div>
    </div>

<?php endforeach; ?>
<?php
/* SVN FILE: $Id$ */
/**
 * [ADMIN] フィード設定　行
 *
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2012, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2012, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			baser.plugins.feed.views
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
?>


<tr>
	<td class="row-tools">
<?php if($baser->isAdminUser()): ?>
		<?php echo $formEx->checkbox('ListTool.batch_targets.'.$data['url'], array('type' => 'checkbox', 'class' => 'batch-targets', 'value' => $data['id'])) ?>
<?php endif ?>		
		<?php $baser->link($baser->getImg('admin/icn_tool_check.png', array('width' => 24, 'height' => 24, 'alt' => '確認', 'class' => 'btn')), $data['url'], array('title' => '確認', 'target' => '_blank')) ?>
		<?php $baser->link($baser->getImg('admin/icn_tool_edit.png', array('width' => 24, 'height' => 24, 'alt' => '編集', 'class' => 'btn')), array('controller' => 'feed_details', 'action' => 'edit', $formEx->value('FeedConfig.id'), $data['id']), array('title' => '編集')) ?>
		<?php $baser->link($baser->getImg('admin/icn_tool_delete.png', array('width' => 24, 'height' => 24, 'alt' => '削除', 'class' => 'btn')), array('controller' => 'feed_details', 'action' => 'ajax_delete', $formEx->value('FeedConfig.id'), $data['id']), array('title' => '削除', 'class' => 'btn-delete')) ?>
	</td>
	<td>
		<?php if($data['url']): ?>
		<?php $baser->link($data['name'], array('controller' => 'feed_details', 'action' => 'edit', $formEx->value('FeedConfig.id'), $data['id'])) ?>
		<?php else: ?>
		<?php echo $data['name'] ?>
		<?php endif; ?>
	</td>
	<td><?php echo $data['category_filter'] ?></td>
	<td><?php echo $textEx->listValue('FeedDetail.cache_time', $data['cache_time']) ?></td>
	<td><?php echo $timeEx->format('Y-m-d', $data['created']) ?><br />
		<?php echo $timeEx->format('Y-m-d', $data['modified']) ?></td>
</tr>
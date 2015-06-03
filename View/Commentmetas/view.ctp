<div class="commentmetas view">
<h2><?php echo __('Commentmeta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($commentmeta['Commentmeta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($commentmeta['Comment']['name'], array('controller' => 'comments', 'action' => 'view', $commentmeta['Comment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Key'); ?></dt>
		<dd>
			<?php echo h($commentmeta['Commentmeta']['meta_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Value'); ?></dt>
		<dd>
			<?php echo h($commentmeta['Commentmeta']['meta_value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Commentmeta'), array('action' => 'edit', $commentmeta['Commentmeta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Commentmeta'), array('action' => 'delete', $commentmeta['Commentmeta']['id']), array(), __('Are you sure you want to delete # %s?', $commentmeta['Commentmeta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Commentmetas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commentmeta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>

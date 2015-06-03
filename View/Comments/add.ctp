<div class="comments form">
<?php echo $this->Form->create('Comment'); ?>
	<fieldset>
		<legend><?php echo __('Add Comment'); ?></legend>
	<?php
		echo $this->Form->input('note_id');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('content');
		echo $this->Form->input('parent');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Comments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Notes'), array('controller' => 'notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note'), array('controller' => 'notes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commentmetas'), array('controller' => 'commentmetas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commentmeta'), array('controller' => 'commentmetas', 'action' => 'add')); ?> </li>
	</ul>
</div>

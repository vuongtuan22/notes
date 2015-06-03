<div class="notes form">
<?php echo $this->Form->create('Note'); ?>
	<fieldset>
		<legend><?php echo __('Edit Note'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('title');
		echo $this->Form->input('content');
		echo $this->Form->input('thumnail');
		echo $this->Form->input('excerpt');
		echo $this->Form->input('slug');
		echo $this->Form->input('comment_count');
		echo $this->Form->input('view_counter');
		echo $this->Form->input('comment_status');
		echo $this->Form->input('parent');
		echo $this->Form->input('note_type');
		echo $this->Form->input('status');
		echo $this->Form->input('Category');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Note.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Note.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Notes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notemetas'), array('controller' => 'notemetas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notemeta'), array('controller' => 'notemetas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>

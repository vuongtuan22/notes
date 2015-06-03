<div class="notemetas form">
<?php echo $this->Form->create('Notemeta'); ?>
	<fieldset>
		<legend><?php echo __('Edit Notemeta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('note_id');
		echo $this->Form->input('meta_key');
		echo $this->Form->input('meta_value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Notemeta.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Notemeta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Notemetas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Notes'), array('controller' => 'notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note'), array('controller' => 'notes', 'action' => 'add')); ?> </li>
	</ul>
</div>
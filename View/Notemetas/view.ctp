<div class="notemetas view">
<h2><?php echo __('Notemeta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($notemeta['Notemeta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo $this->Html->link($notemeta['Note']['title'], array('controller' => 'notes', 'action' => 'view', $notemeta['Note']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Key'); ?></dt>
		<dd>
			<?php echo h($notemeta['Notemeta']['meta_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Value'); ?></dt>
		<dd>
			<?php echo h($notemeta['Notemeta']['meta_value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Notemeta'), array('action' => 'edit', $notemeta['Notemeta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Notemeta'), array('action' => 'delete', $notemeta['Notemeta']['id']), array(), __('Are you sure you want to delete # %s?', $notemeta['Notemeta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Notemetas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notemeta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notes'), array('controller' => 'notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note'), array('controller' => 'notes', 'action' => 'add')); ?> </li>
	</ul>
</div>

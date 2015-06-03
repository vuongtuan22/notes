<div class="usermetas view">
<h2><?php echo __('Usermeta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usermeta['User']['name'], array('controller' => 'users', 'action' => 'view', $usermeta['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Key'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['meta_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Value'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['meta_value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usermeta'), array('action' => 'edit', $usermeta['Usermeta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usermeta'), array('action' => 'delete', $usermeta['Usermeta']['id']), array(), __('Are you sure you want to delete # %s?', $usermeta['Usermeta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usermetas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usermeta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

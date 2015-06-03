<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastlogin'); ?></dt>
		<dd>
			<?php echo h($user['User']['lastlogin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ActiveCode'); ?></dt>
		<dd>
			<?php echo h($user['User']['activeCode']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notes'), array('controller' => 'notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note'), array('controller' => 'notes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usermetas'), array('controller' => 'usermetas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usermeta'), array('controller' => 'usermetas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Notes'); ?></h3>
	<?php if (!empty($user['Note'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Midified'); ?></th>
		<th><?php echo __('Excerpt'); ?></th>
		<th><?php echo __('Slug'); ?></th>
		<th><?php echo __('Comment Count'); ?></th>
		<th><?php echo __('Comment Status'); ?></th>
		<th><?php echo __('Parent'); ?></th>
		<th><?php echo __('Note Type'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Note'] as $note): ?>
		<tr>
			<td><?php echo $note['id']; ?></td>
			<td><?php echo $note['user_id']; ?></td>
			<td><?php echo $note['title']; ?></td>
			<td><?php echo $note['content']; ?></td>
			<td><?php echo $note['created']; ?></td>
			<td><?php echo $note['midified']; ?></td>
			<td><?php echo $note['excerpt']; ?></td>
			<td><?php echo $note['slug']; ?></td>
			<td><?php echo $note['comment_count']; ?></td>
			<td><?php echo $note['comment_status']; ?></td>
			<td><?php echo $note['parent']; ?></td>
			<td><?php echo $note['note_type']; ?></td>
			<td><?php echo $note['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'notes', 'action' => 'view', $note['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'notes', 'action' => 'edit', $note['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'notes', 'action' => 'delete', $note['id']), array(), __('Are you sure you want to delete # %s?', $note['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Note'), array('controller' => 'notes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Usermetas'); ?></h3>
	<?php if (!empty($user['Usermeta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Meta Key'); ?></th>
		<th><?php echo __('Meta Value'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Usermeta'] as $usermeta): ?>
		<tr>
			<td><?php echo $usermeta['id']; ?></td>
			<td><?php echo $usermeta['user_id']; ?></td>
			<td><?php echo $usermeta['meta_key']; ?></td>
			<td><?php echo $usermeta['meta_value']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'usermetas', 'action' => 'view', $usermeta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'usermetas', 'action' => 'edit', $usermeta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'usermetas', 'action' => 'delete', $usermeta['id']), array(), __('Are you sure you want to delete # %s?', $usermeta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usermeta'), array('controller' => 'usermetas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="content">
<h2><?php  echo __('Campus'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($campus['Campus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($campus['Campus']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($campus['Campus']['code']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php /**<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Campus'), array('action' => 'edit', $campus['Campus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Campus'), array('action' => 'delete', $campus['Campus']['id']), null, __('Are you sure you want to delete # %s?', $campus['Campus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Campuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($campus['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Cell Phone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('City State'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Campus Id'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($campus['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['first_name']; ?></td>
			<td><?php echo $user['last_name']; ?></td>
			<td><?php echo $user['gender']; ?></td>
			<td><?php echo $user['cell_phone']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['city_state']; ?></td>
			<td><?php echo $user['status_id']; ?></td>
			<td><?php echo $user['campus_id']; ?></td>
			<td><?php echo $user['active']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>**/?>
</div>
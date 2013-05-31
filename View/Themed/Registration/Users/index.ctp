<div class="content">
	<h2><?php echo __('Registration Team Roster'); ?></h2><br>
        <h3><?php echo __('Overseers'); ?></h3>
        <table cellpadding="0" cellspacing="0">
            <tr>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('cell_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
                        <th><?php echo $this->Paginator->sort('locality_id'); ?></th>
            </tr>
            <?php
            //print_r($registration_users);
            foreach ($overseer_users as $overseer_user): ?>
            <tr>
		<td><?php echo h($overseer_user['User']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($overseer_user['User']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($overseer_user['User']['cell_phone']); ?>&nbsp;</td>
		<td><?php echo h($overseer_user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($overseer_user['Locality']['city']); ?>&nbsp;</td>
		<!--<td class="actions">
			<?php /**echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); **/?>
		</td>-->
            </tr>
            <?php endforeach; ?>
	</table><br><br>
        
        <h3><?php echo __('Registration Team Members'); ?></h3>
        <table>
            <tr>
                <th><?php echo $this->Paginator->sort('first_name'); ?></th>
		<th><?php echo $this->Paginator->sort('last_name'); ?></th>
                <th><?php echo $this->Paginator->sort('gender'); ?></th>
		<th><?php echo $this->Paginator->sort('cell_phone'); ?></th>
		<th><?php echo $this->Paginator->sort('email'); ?></th>
                <th><?php echo $this->Paginator->sort('locality_id'); ?></th>
            </tr>
            <?php
        //print_r($registration_users);
            foreach ($registration_users as $registration_user): ?>
            <tr>
		<td><?php echo h($registration_user['User']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($registration_user['User']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($registration_user['User']['gender']); ?>&nbsp;</td>
		<td><?php echo h($registration_user['User']['cell_phone']); ?>&nbsp;</td>
		<td><?php echo h($registration_user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($registration_user['Locality']['city']); ?>&nbsp;</td>
		<!--<td class="actions">
			<?php /**echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); **/?>
		</td>-->
            </tr>
            <?php endforeach; ?>
	</table>
	<p>
	<?php
	/**echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campuses'), array('controller' => 'campuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus'), array('controller' => 'campuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registration Locality Assignments'), array('controller' => 'registration_locality_assignments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registration Locality Assignment'), array('controller' => 'registration_locality_assignments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registration Steps'), array('controller' => 'registration_steps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registration Step'), array('controller' => 'registration_steps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registration Team Assignments'), array('controller' => 'registration_team_assignments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registration Team Assignment'), array('controller' => 'registration_team_assignments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Types'), array('controller' => 'user_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Type'), array('controller' => 'user_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
**/?>
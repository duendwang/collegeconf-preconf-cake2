<div class="registrationTeamAssignments view">
<h2><?php  echo __('Registration Team Assignment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($registrationTeamAssignment['RegistrationTeamAssignment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($registrationTeamAssignment['User']['id'], array('controller' => 'users', 'action' => 'view', $registrationTeamAssignment['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registration Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($registrationTeamAssignment['RegistrationTeam']['name'], array('controller' => 'registration_teams', 'action' => 'view', $registrationTeamAssignment['RegistrationTeam']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Registration Team Assignment'), array('action' => 'edit', $registrationTeamAssignment['RegistrationTeamAssignment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Registration Team Assignment'), array('action' => 'delete', $registrationTeamAssignment['RegistrationTeamAssignment']['id']), null, __('Are you sure you want to delete # %s?', $registrationTeamAssignment['RegistrationTeamAssignment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Registration Team Assignments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registration Team Assignment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registration Teams'), array('controller' => 'registration_teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registration Team'), array('controller' => 'registration_teams', 'action' => 'add')); ?> </li>
	</ul>
</div>

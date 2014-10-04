<div class="content">
    <style>
        table {
            margin-bottom: 0px;
	}
        table tr td {
            border-bottom:0px;
        }
        table tr:nth-child(even) {
            background: #ffffff;
        }
    </style>
<h2><?php echo __('Check Teammate\'s Work'); ?></h2>
<table cellpadding="0" cellspacing="0">
<?php foreach ($registrationTeamsMembers as $registrationTeamsMember): ?>
	<tr>
            <td>
                <h3><?php echo h($registrationTeamsMember['User']['name']);?></h3>
            </td>
	</tr>
    <?php foreach($registrationTeamsMember['User']['RegistrationStep'] as $locality): ?>
        <tr>
            <td width=100></td>
            <td><h4><?php echo h($locality['Locality']['name']);?></h4></td>
            <td><?php echo $this->Html->link('Registration Confirmation',array('controller' => 'attendees','action' => 'process',$locality['Locality']['id']));?></td>
            <td><?php echo $this->Html->link('Summaries',array('controller' => 'finances','action' => 'summary',$locality['Locality']['id']));?></td>
        </tr>
    <?php endforeach;
endforeach; ?>
</table>
</div>
<?php /**<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Registration Team Assignment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registration Teams'), array('controller' => 'registration_teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registration Team'), array('controller' => 'registration_teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
**/?>
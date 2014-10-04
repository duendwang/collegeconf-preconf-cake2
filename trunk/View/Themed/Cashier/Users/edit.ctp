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
<?php echo $this->Form->create('User'); ?>
    <h2><?php echo __('Account Preferences'); ?></h2><br>
    <?php echo $this->Form->input('id');?>
    <fieldset>
        <legend><?php echo __('Change Password');?><hr width="500"></legend>
        <table>
            <!--<tr>
                <td width="100"></td>
                <td><?php //echo $this->Form->label('Old Password');?></td>
                <td><?php //echo $this->Form->input('old_password', array('type' => 'password','label' => false, 'div' => false));?></td>
            </tr>-->
            <tr>
                <td width="100"></td>
                <td><?php echo $this->Form->label('New Password');?></td>
                <td><?php echo $this->Form->input('new_password',array('type' => 'password','label' => false, 'div' => false));?></td>
            </tr>
            <!--<tr>
                <td width="100"></td>
                <td><?php //echo $this->Form->label('New Password Again');?></td>
                <td><?php //echo $this->Form->input('new_password_2',array('type' => 'password','label' => false, 'div' => false));?></td>
            </tr>-->
        </table>
    </fieldset>
    <fieldset>
        <legend><?php echo __('Personal Information');?><hr width="500"></legend>
        <table>
            <tr>
                <td width="100"></td>
                <td><?php echo $this->Form->input('first_name');?></td>
                <td><?php echo $this->Form->input('last_name');?></td>
                <td><?php echo $this->Form->input('gender', array('type' => 'select', 'empty' => true, 'options' => array('B' => 'Brother','S' => 'Sister','C' => 'Couple')));?></td>
            </tr>
            <tr>
                <td width="100"></td>
                <td><?php echo $this->Form->input('cell_phone');?></td>
                <td><?php echo $this->Form->input('email');?></td>
                <td><?php echo $this->Form->input('city_state', array('label' => 'City, State of Residence'));?></td>
            </tr>
            <tr>
                <td width="100"></td>
                <td><?php echo $this->Form->input('status_id', array('label' => 'Current Status','empty' => true, 'default' => null));?></td>
                <td><?php echo $this->Form->input('campus_id',array('empty' => true));?></td>
                <td><?php echo $this->Form->input('locality_id');?></td>
            </tr>
        </table>
    </fieldset>

<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php /**<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
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
*/?>
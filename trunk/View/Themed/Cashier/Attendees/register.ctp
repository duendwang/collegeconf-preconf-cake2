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
<?php echo $this->Form->create('Attendee'); ?>
	<h2><?php echo 'Register for Conference'; ?></h2>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please check your information and supply any missing information. Any changes made on this form will apply only for this conference.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To make any permanent changes, please do so in account preferences.<br><br><br>
	    <center>
                <?php echo 'Are you a conference contact?&nbsp;',
                        $this->Form->input('conf_contact', array('label' => false, 'div' => false, 'style' => 'float: none')),
                        '<br><br>';
                echo 'Which conference are you registering for? ', $this->Form->input('conference_id', array('label' => false, 'div' => false, 'style' => 'float: none'));
                echo $this->Form->hidden('add', array('label' => false));?><br>
                If you are registering for both conferences, register for the second conference after you submit this form.<br><br>
                <?php echo 'Which locality are you registering with?&nbsp;',
                        $this->Form->input('locality_id', array('label' => false,'hidden' => false,'div' => false, 'default' => $user['locality_id']));?>
            </center>
        
        <fieldset>
            <legend><?php echo __('Personal');?><hr width="500"></legend>
            <table>
                <tr>
			<td width=100></td>
			<td><?php echo $this->Form->input('first_name', array('default' => $user['first_name']));?></td>
			<td><?php echo $this->Form->input('last_name', array('default' => $user['last_name']));?></td>
			<td><?php echo $this->Form->input('gender', array('type' => 'select', 'empty' => true, 'options' => array('B' => 'Brother','S' => 'Sister','C' => 'Couple'),'default' => $user['gender']));?></td>
		</tr>
		<tr>
			<td width=100></td>
			<td><?php echo $this->Form->input('cell_phone', array('default' => $user['cell_phone']));?></td>
			<td><?php echo $this->Form->input('email', array('default' => $user['email']));?></td>
			<td><?php echo $this->Form->input('city_state', array('label' => 'City, State of Residence','default' => $user['city_state']));?></td>
		</tr>
		<tr>
			<td width=100></td>
			<td><?php echo $this->Form->input('status_id', array('label' => 'Current Status','empty' => true, 'default' => $user['status_id']));?></td>
			<td colspan="2"><?php echo $this->Form->input('campus_id', array('empty' => true, 'default' => $user['campus_id']));?></td>
		</tr>
		<tr>
			<td width=100></td>
			<td colspan="3"><?php echo $this->Form->input('comment');?></td>
		</tr>
            </table>
        </fieldset>
        <fieldset>
            <legend><?php echo __('Hospitality');?><hr width="500"></legend>
            <table>
		<tr>
			<td width=100></td>
			<td><?php echo $this->Form->input('group');?></td>
			<td><?php echo $this->Form->input('allergies',array('type' => 'select', 'empty' => true, 'options' => array('C' => 'Cats','D' => 'Dogs','O' => 'Other','CD' => 'Cats + Dogs','CO' => 'Cats + Other','DO' => 'Dogs + Other','CDO' => 'Cats, Dogs, and Other')));?></td>
			<td><?php echo $this->Form->input('other_allergies', array('input' => 'If other, please indicate:'));?></td>
		</tr>
            </table>
        </fieldset>
        <?php /**<fieldset>
            <legend><?php echo __('Payment');?><hr width="500"></legend>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Optional.
            <table>
		<tr>
			<td width=100></td>
			<td><?php echo $this->Form->input('amt_paid');?></td>
			<td><?php echo $this->Form->input('check_num');?></td>
			<td><?php echo $this->Form->input('paid_date',array('empty' => TRUE, 'selected' => ''));?></td>
		</tr>
            </table>
	</fieldset>**/?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<!--<div class="actions">
	<h3><?php //echo __('Actions'); ?></h3>
	<ul>

		<li><?php /**echo $this->Html->link(__('List Attendees'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Localities'), array('controller' => 'localities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locality'), array('controller' => 'localities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campuses'), array('controller' => 'campuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus'), array('controller' => 'campuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lodgings'), array('controller' => 'lodgings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lodging'), array('controller' => 'lodgings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Check Ins'), array('controller' => 'check_ins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Check In'), array('controller' => 'check_ins', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Onsite Registrations'), array('controller' => 'onsite_registrations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Onsite Registration'), array('controller' => 'onsite_registrations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Part Time Registrations'), array('controller' => 'part_time_registrations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part Time Registration'), array('controller' => 'part_time_registrations', 'action' => 'add')); **/?> </li>
	</ul>
</div>-->
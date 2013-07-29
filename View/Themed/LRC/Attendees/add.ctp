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
	<h2><?php echo 'Add Conference Attendee'; ?></h2>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please fill out the form completely. <u>Please note that this is for full-time registrants only.</u><br><br><br>
	<?php /*<p align='center'><?php echo $this->Form->input('submitter', array('label' => array('class' =>'label', 'text' => 'What is your name?', 'style' => 'clear: none; display: inline'), 'div' => false,'style' => 'align: center; display: inline; width: 300px; padding: 0px'));?></p>*/?>
        <br>
            <center>
                <?php echo 'Is this attendee a:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',
                        $this->Form->input('new_one', array('label' => false, 'div' => false, 'style' => 'float: none')),
                        'new one?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',
                        $this->Form->input('conf_contact', array('label' => false, 'div' => false, 'style' => 'float: none')),
                        'conference contact?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',
                        $this->Form->input('nurse', array('label' => false, 'type' => 'checkbox','div' => false, 'style' => 'float: none')),
                        'conference-designated nurse? <br><br>';
                echo 'Which conference is this attendee registering for? ', $this->Form->input('conference_id', array('empty' => true,'default' => $conference_id,'label' => false, 'div' => false, 'style' => 'float: none'));?>
            </center>
                <?php echo $this->Form->input('locality_id', array('label' => false,'hidden' => true, 'default' => $locality));
                echo $this->Form->hidden('add', array('label' => false));
                echo $this->Form->hidden('rate', array('label' => false));?>
        
        <fieldset>
            <legend><?php echo __('Personal');?><hr width="500"></legend>
            <table>
                <tr>
			<td width=100></td>
			<td><?php echo $this->Form->input('first_name');?></td>
			<td><?php echo $this->Form->input('last_name');?></td>
			<td><?php echo $this->Form->input('gender', array('type' => 'select', 'empty' => true, 'options' => array('B' => 'Brother','S' => 'Sister'),'default' => $gender));?></td>
		</tr>
		<tr>
			<td width=100></td>
			<td><?php echo $this->Form->input('cell_phone');?></td>
			<td><?php echo $this->Form->input('email');?></td>
			<?php /**<td><?php echo $this->Form->input('city_state', array('label' => 'City, State of Residence'));?></td>**/?>
		</tr>
		<tr>
			<td width=100></td>
			<td><?php echo $this->Form->input('status_id', array('label' => 'Current Status','empty' => true, 'default' => null));?></td>
			<td colspan="2"><?php echo $this->Form->input('campus_id', array('empty' => true, 'default' => $campus_id));?></td>
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
			<td><?php echo $this->Form->input('group'); //Use this at Big Bear
                            //echo $this->Form->input('group',array('type' => 'select', 'empty' => true, 'default' => null, 'options' => array('SCCS' => 'SCCS','LOCAL' => 'LOCAL','HOST' => 'HOST','NONE' => 'NONE'))); //Use this at Anaheim?></td>
			<td><?php echo $this->Form->input('allergies',array('type' => 'select', 'empty' => true, 'options' => array('C' => 'Cats','D' => 'Dogs','O' => 'Other','CD' => 'Cats + Dogs','CO' => 'Cats + Other','DO' => 'Dogs + Other','CDO' => 'Cats, Dogs, and Other')));?></td>
			<td><?php echo $this->Form->input('other_allergies', array('label' => 'If other, please indicate:'));?></td>
                </tr>
<!-- Uncomment for Anaheim
                <tr>
                    <td colspan="3">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Please fill out for any prearranged hospitality.</td>
                </tr>
                <tr>
                    <td width=100></td>
                    <td><?php echo $this->Form->input('host_name');?></td>
                    <td><?php echo $this->Form->input('host_address');?></td>
                    <td><?php echo $this->Form->input('host_phone');?></td>
		</tr>
-->
            </table>
        </fieldset>
        <fieldset>
            <legend><?php echo __('Payment');?><hr width="500"></legend>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Optional. For your convenience.
            <table>
		<tr>
			<td width=100></td>
			<td><?php echo $this->Form->input('amt_paid');?></td>
			<td><?php echo $this->Form->input('check_num');?></td>
			<td><?php echo $this->Form->input('paid_date',array('empty' => TRUE, 'selected' => ''));?></td>
		</tr>
            </table>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('name' => 'submit'));
echo $this->Form->submit('Save and add another',array('name' => 'save_add'));
echo $this->Form->end(); ?>
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
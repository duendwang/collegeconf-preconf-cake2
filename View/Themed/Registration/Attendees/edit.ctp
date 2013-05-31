<div class="content">
<?php echo $this->Form->create('Attendee'); ?>
	<fieldset>
		<legend><?php echo __('Edit Attendee'); ?></legend>
	<?php
		echo $this->Form->input('id');
		//echo $this->Form->input('barcode');
		echo $this->Form->input('conference_id',array('empty' => true));
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('gender', array('type' => 'select', 'empty' => true, 'options' => array('B' => 'Brother','S' => 'Sister')));
		echo $this->Form->input('locality_id',array('empty' => true, 'default' => null));
		echo $this->Form->input('campus_id',array('empty' => true, 'default' => null));
		//echo $this->Form->input('lrc');
		echo $this->Form->input('conf_contact');
		echo $this->Form->input('new_one');
		echo $this->Form->input('group',array('type' => 'select', 'empty' => true, 'default' => null, 'options' => array('SCCS' => 'SCCS','LOCAL' => 'LOCAL','HOST' => 'HOST','NONE' => 'NONE')));
		echo $this->Form->input('allergies',array('type' => 'select', 'empty' => true, 'options' => array('C' => 'Cats','D' => 'Dogs','O' => 'Other','CD' => 'Cats + Dogs','CO' => 'Cats + Other','DO' => 'Dogs + Other','CDO' => 'Cats, Dogs, and Other')));
                echo $this->Form->input('status_id', array('label' => 'Current Status','empty' => true, 'default' => null));
		echo $this->Form->input('cell_phone');
		echo $this->Form->input('email');
		//echo $this->Form->input('city_state');
		echo $this->Form->input('host_name');
		echo $this->Form->input('host_address');
		echo $this->Form->input('host_phone');
		//echo $this->Form->input('lodging_id');
		echo $this->Form->input('add',array('empty' => true, 'default' => null));
		//echo $this->Form->input('PT');
		echo $this->Form->input('rate');
		//echo $this->Form->input('paid_at_conf');
		echo $this->Form->input('cancel',array('empty' => true,'default' => null));
		//echo $this->Form->input('cancel_reason');
		echo $this->Form->input('comment');
		//echo $this->Form->input('amt_paid');
		//echo $this->Form->input('check_num');
		//echo $this->Form->input('paid_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php /**<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Attendee.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Attendee.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Attendees'), array('action' => 'index')); ?></li>
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
		<li><?php echo $this->Html->link(__('New Part Time Registration'), array('controller' => 'part_time_registrations', 'action' => 'add')); ?> </li>
	</ul>
</div>
*/?>
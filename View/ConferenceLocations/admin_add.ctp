<div class="conferenceLocations form">
<?php echo $this->Form->create('ConferenceLocation'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Conference Location'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Conference Locations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lodging Facilities'), array('controller' => 'lodging_facilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lodging Facility'), array('controller' => 'lodging_facilities', 'action' => 'add')); ?> </li>
	</ul>
</div>

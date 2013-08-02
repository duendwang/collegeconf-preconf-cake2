<div class="content">
<?php echo $this->Form->create('Finance'); ?>
	<fieldset>
		<legend><?php echo __('Add Finance'); ?></legend>
	<?php
		echo $this->Form->input('conference_id');
		echo $this->Form->input('locality_id');
		echo $this->Form->input('receive_date',array('label' => 'Date'));
		echo $this->Form->input('description',array('options' => array('Pre-registration' => 'Pre-registration','Late pre-registration' => 'Late pre-registration','Replacement' => 'Replacement','On-site Registration' => 'On-site Registration','Payment' => 'Payment','Cancellation' => 'Cancellation')));
		echo $this->Form->input('count');
		echo $this->Form->input('rate');
		echo $this->Form->input('charge',array('label' => 'Charge (leave blank unless directed to fill in)'));
		echo $this->Form->input('payment');
		echo $this->Form->input('balance',array('hidden' => true,'label' => false));
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php /**<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Finances'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Localities'), array('controller' => 'localities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locality'), array('controller' => 'localities', 'action' => 'add')); ?> </li>
	</ul>
</div>
*/?>
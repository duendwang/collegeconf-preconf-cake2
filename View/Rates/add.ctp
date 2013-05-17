<div class="rates form">
<?php echo $this->Form->create('Rate'); ?>
	<fieldset>
		<legend><?php echo __('Add Rate'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('cost');
		echo $this->Form->input('latefee_applies');
		echo $this->Form->input('active');
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rates'), array('action' => 'index')); ?></li>
	</ul>
</div>

<div class="content">
<?php echo $this->Form->create('Lrc'); ?>
	<fieldset>
		<legend><?php echo __('Edit Lrc'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('last_name');
		echo $this->Form->input('first_name');
		echo $this->Form->hidden('locality_id', array('default' => $locality));
		echo $this->Form->input('gender');
		echo $this->Form->input('cell_phone');
		echo $this->Form->input('email');
		echo $this->Form->input('comment');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<!--<div class="actions">
	<h3><?php /**echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Lrc.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Lrc.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Lrcs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Localities'), array('controller' => 'localities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locality'), array('controller' => 'localities', 'action' => 'add')); **/?> </li>
	</ul>
</div>
--!>
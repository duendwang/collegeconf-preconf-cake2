<div class="content">
	<h2><?php echo __('Finances'); ?></h2>
        <h4 style="font-size: 130%"><?php echo __('Your Localities');?></h4>
        <h4 style="font-size: 100%; color:#fff"><?php
        foreach ($localities as $locality):
            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$this->Html->link($locality['Locality']['city'],array('action' => 'index',$locality['Locality']['id'])) . '<br>';
        endforeach;?></h4>
        <?php //print_r($localities); ?>
        <br>
        <?php echo $this->Form->button('Add New Finance',array('type' => 'button','onclick' => "location.href='".$this->Html->url(array('action' => 'add'))."'"));?><br><br>
        <table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('conference_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Date'); ?></th>
			<th><?php echo $this->Paginator->sort('locality_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('count'); ?></th>
			<th><?php echo $this->Paginator->sort('rate'); ?></th>
			<th><?php echo $this->Paginator->sort('charge'); ?></th>
			<th><?php echo $this->Paginator->sort('payment'); ?></th>
			<th><?php echo $this->Paginator->sort('balance'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<!--<th class="actions"><?php echo __('Actions'); ?></th>-->
	</tr>
	<?php
	foreach ($finances as $finance): ?>
	<tr>
		<td><?php echo h($finance['Finance']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($finance['Conference']['id'], array('controller' => 'conferences', 'action' => 'view', $finance['Conference']['id'])); ?>
		</td>
		<td><?php echo h($finance['Finance']['receive_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($finance['Locality']['id'], array('controller' => 'localities', 'action' => 'view', $finance['Locality']['id'])); ?>
		</td>
		<td><?php echo h($finance['Finance']['description']); ?>&nbsp;</td>
		<td><?php echo h($finance['Finance']['count']); ?>&nbsp;</td>
		<td><?php echo h($finance['Finance']['rate']); ?>&nbsp;</td>
		<td><?php echo h($finance['Finance']['charge']); ?>&nbsp;</td>
		<td><?php echo h($finance['Finance']['payment']); ?>&nbsp;</td>
		<td><?php echo h($finance['Finance']['balance']); ?>&nbsp;</td>
		<td><?php echo h($finance['Finance']['comment']); ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('View'), array('action' => 'view', $finance['Finance']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $finance['Finance']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $finance['Finance']['id']), null, __('Are you sure you want to delete # %s?', $finance['Finance']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<?php /**<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>*/?>
</div>
<!--<div class="actions">
	<h3><?php /**echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Finance'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Localities'), array('controller' => 'localities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locality'), array('controller' => 'localities', 'action' => 'add')); **/?> </li>
	</ul>
</div>-->

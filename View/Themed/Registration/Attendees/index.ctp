<div class="content">
	<h2><?php echo __('Attendees'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
                        <?php /*<th><?php echo $this->Paginator->sort('barcode'); ?></th>
			<th><?php echo $this->Paginator->sort('conference_id'); ?></th>*/?>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('locality_id'); ?></th>
			<th><?php echo $this->Paginator->sort('campus_id'); ?></th>
			<?php /*<th><?php echo $this->Paginator->sort('lrc'); ?></th>*/?>
			<th><?php echo $this->Paginator->sort('conf_contact'); ?></th>
			<th><?php echo $this->Paginator->sort('new_one'); ?></th>
			<th><?php echo $this->Paginator->sort('group'); ?></th>
			<th><?php echo $this->Paginator->sort('status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cell_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<?php /*<th><?php echo $this->Paginator->sort('city_state'); ?></th>
			<th><?php echo $this->Paginator->sort('host_name'); ?></th>
			<th><?php echo $this->Paginator->sort('host_address'); ?></th>
			<th><?php echo $this->Paginator->sort('host_phone'); ?></th>*/?>
			<th><?php echo $this->Paginator->sort('lodging_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rate'); ?></th>
			<th><?php echo $this->Paginator->sort('paid_at_conf'); ?></th>
			<th><?php echo $this->Paginator->sort('cancel'); ?></th>
			<th><?php echo $this->Paginator->sort('cancel_reason'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<?php /*<th class="actions"><?php echo __('Actions'); ?></th>*/?>
	</tr>
	<?php
	foreach ($attendees as $attendee): ?>
	<tr>
		<td><?php echo h($attendee['Attendee']['id']); ?>&nbsp;</td>
		<?php /*<td><?php echo h($attendee['Conference']['code'].$attendee['Attendee']['id']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Conference']['code']); ?>&nbsp;</td>*/?>
		<td><?php echo h($attendee['Attendee']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['gender']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Locality']['name']); ?>&nbsp;</td>
		<td>
                    <?php if(!empty($attendee['Campus']['code'])) echo h($attendee['Campus']['code']);
                    else echo h($attendee['Campus']['name']);?>&nbsp;
                </td>
		<?php /*<td><?php echo h($attendee['Attendee']['lrc']); ?>&nbsp;</td>*/?>
		<td><?php if ($attendee['Attendee']['conf_contact'] == 1) echo 'X'; ?>&nbsp;</td>
		<td><?php if($attendee['Attendee']['new_one'] == 1) echo 'X'; ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['group']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Status']['name']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['cell_phone']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['email']); ?>&nbsp;</td>
		<?php /*<td><?php echo h($attendee['Attendee']['city_state']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['host_name']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['host_address']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['host_phone']); ?>&nbsp;</td>*/?>
		<td>
			<?php echo $this->Html->link($attendee['Lodging']['name'], array('controller' => 'lodgings', 'action' => 'view', $attendee['Attendee']['lodging_id'])); ?>
		</td>
		<td><?php echo h($attendee['Attendee']['rate']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['paid_at_conf']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Cancel']['created']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Cancel']['reason']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['comment']); ?>&nbsp;</td>
		<?php /*<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $attendee['Attendee']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $attendee['Attendee']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $attendee['Attendee']['id']), null, __('Are you sure you want to delete # %s?', $attendee['Attendee']['id'])); ?>
		</td>*/?>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
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
	</div>
</div>
<?php /**<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Attendee'), array('action' => 'add')); ?></li>
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
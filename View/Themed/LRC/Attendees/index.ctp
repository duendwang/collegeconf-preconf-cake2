<div class="content">
        <h2><?php echo __('Conference Attendees'); ?></h2><br>
        <?php echo $this->Form->button('Add New Attendee',array('type' => 'button','onclick' => "location.href='".$this->Html->url(array('action' => 'add'))."'"));?><br><br>
        <h4 style="color:red">Click on any attendee's name to modify the entry.</h4>
	<table cellpadding="0" cellspacing="0">
	<tr>
                        <th><?php echo $this->Paginator->sort('conference_id'); ?></th>
                        <th><?php echo $this->Paginator->sort('conf_contact'); ?></th>
			<th><?php echo $this->Paginator->sort('new_one'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('campus_id'); ?></th>
			<th><?php echo $this->Paginator->sort('group'); ?></th>
                        <th><?php echo $this->Paginator->sort('allergies'); ?></th>
			<th><?php echo $this->Paginator->sort('status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cell_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<?php /**<th><?php echo $this->Paginator->sort('city_state'); ?></th>**/?>
			<th><?php echo $this->Paginator->sort('host_name'); ?></th>
			<th><?php echo $this->Paginator->sort('host_address'); ?></th>
			<th><?php echo $this->Paginator->sort('host_phone'); ?></th>
			<?php /**<th><?php echo $this->Paginator->sort('lodging_id'); ?></th>**/?>
			<th><?php echo $this->Paginator->sort('Date Added'); ?></th>
                        <?php /**<th><?php echo $this->Paginator->sort('Added by:'); ?></th>**/?>
			<th><?php echo $this->Paginator->sort('rate'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('amt_paid'); ?></th>
			<th><?php echo $this->Paginator->sort('check_num'); ?></th>
			<th><?php echo $this->Paginator->sort('paid_date'); ?></th>
	</tr>
	<?php
	foreach ($attendees as $attendee): ?>
	<tr>
                <td>
                    <?php echo $this->Html->link(__(h($attendee['Conference']['code'])), array('controller' => 'conferences','action' => 'view', $attendee['Conference']['id'])); ?>
                </td>
                <td><?php echo h($attendee['Attendee']['conf_contact']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['new_one']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link(__(h($attendee['Attendee']['first_name'])), array('action' => 'edit', $attendee['Attendee']['id'])); ?></td>
		<td><?php echo $this->Html->link(__(h($attendee['Attendee']['last_name'])), array('action' => 'edit', $attendee['Attendee']['id'])); ?></td>
		<td><?php echo h($attendee['Attendee']['gender']); ?>&nbsp;</td>
                <td><?php echo h($attendee['Campus']['name']);?>&nbsp;</td>
                <?php /**<td>
			<?php echo $this->Html->link($attendee['Campus']['name'], array('controller' => 'campuses', 'action' => 'view', $attendee['Campus']['id'])); ?>
		</td>**/?>
		<td><?php echo h($attendee['Attendee']['group']); ?>&nbsp;</td>
                <td><?php echo h($attendee['Attendee']['allergies']); ?>&nbsp;</td>
                <td><?php echo h($attendee['Status']['name']); ?>&nbsp;</td>
                <?php /**<td>
			<?php echo $this->Html->link($attendee['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $attendee['Status']['id'])); ?>
		</td>**/?>
		<td><?php echo h($attendee['Attendee']['cell_phone']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['email']); ?>&nbsp;</td>
		<?php /**<td><?php echo h($attendee['Attendee']['city_state']); ?>&nbsp;</td>**/?>
		<td><?php echo h($attendee['Attendee']['host_name']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['host_address']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['host_phone']); ?>&nbsp;</td>
                <?php /**<td><?php echo h($attendee['Attendee']['lodging_id']); ?>&nbsp;</td>**/?>
		<td><?php echo h($attendee['Attendee']['add']); ?>&nbsp;</td>
                <?php /**<td><?php echo h($attendee['Attendee']['submitter']); ?>&nbsp;</td>**/?>
		<td><?php echo h($attendee['Attendee']['rate']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['comment']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['amt_paid']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['check_num']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['paid_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('View'), array('action' => 'view', $attendee['Attendee']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $attendee['Attendee']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $attendee['Attendee']['id']), null, __('Are you sure you want to delete # %s?', $attendee['Attendee']['id'])); ?>
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
	</div>
</div>
**/?>
<div class="content">
	<h2><?php echo __('Potential Attendees'); ?></h2>
	<table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo $this->Paginator->sort('process'); ?></th>
                <th><?php echo $this->Paginator->sort('conference_id'); ?></th>
		<th><?php echo $this->Paginator->sort('first_name'); ?></th>
		<th><?php echo $this->Paginator->sort('last_name'); ?></th>
		<th><?php echo $this->Paginator->sort('gender'); ?></th>
		<th><?php echo $this->Paginator->sort('locality_id'); ?></th>
		<th><?php echo $this->Paginator->sort('cell_phone'); ?></th>
		<th><?php echo $this->Paginator->sort('email'); ?></th>
		<th><?php echo $this->Paginator->sort('campus_id'); ?></th>
		<th><?php echo $this->Paginator->sort('status_id'); ?></th>
		<th><?php echo $this->Paginator->sort('allergies'); ?></th>
		<th><?php echo $this->Paginator->sort('comment'); ?></th>
		<th><?php echo $this->Paginator->sort('created'); ?></th>
		<?php /**<th class="actions"><?php echo __('Actions'); ?></th>**/?>
            </tr>
	<?php foreach ($potentialAttendees as $potentialAttendee): ?>
            <tr>
                <td></td>
		<td><?php echo h($potentialAttendee['Conference']['code']); ?>&nbsp;</td>
		<td><?php echo h($potentialAttendee['PotentialAttendee']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($potentialAttendee['PotentialAttendee']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($potentialAttendee['PotentialAttendee']['gender']); ?>&nbsp;</td>
		<td><?php echo h($potentialAttendee['Locality']['name']); ?>&nbsp;</td>
		<td><?php echo h($potentialAttendee['Campus']['name']); ?>&nbsp;</td>
		<td><?php echo h($potentialAttendee['PotentialAttendee']['allergies']); ?>&nbsp;</td>
		<td><?php echo h($potentialAttendee['Status']['code']); ?>&nbsp;</td>
		<td><?php echo h($potentialAttendee['PotentialAttendee']['cell_phone']); ?>&nbsp;</td>
		<td><?php echo h($potentialAttendee['PotentialAttendee']['email']); ?>&nbsp;</td>
		<td><?php echo h($potentialAttendee['PotentialAttendee']['comment']); ?>&nbsp;</td>
		<td><?php echo h($potentialAttendee['PotentialAttendee']['created']); ?>&nbsp;</td>
		<?php /**<td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $potentialAttendee['PotentialAttendee']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $potentialAttendee['PotentialAttendee']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $potentialAttendee['PotentialAttendee']['id']), null, __('Are you sure you want to delete # %s?', $potentialAttendee['PotentialAttendee']['id'])); ?>
                    **/?>
		</td>
            </tr>
        <?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?> </p>
	<div class="paging">
	<?php
            echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
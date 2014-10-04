<div class="content">
	<h2><?php echo __('Registration Final Summary'); ?></h2>
	<h4 style="font-size: 130%"><?php echo __('Your Localities');?></h4>
        <h4 style="font-size: 100%; color:#fff"><?php
        foreach ($localities as $locality):
            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$this->Html->link($locality['Locality']['city'],array('action' => 'summary',$locality['Locality']['id'])) . '<br>';
        endforeach;?></h4>
        <br><?php echo $this->Html->link('View Finance Summary',array('controller' => 'finances','action' => 'summary'));?><br><br>
        <table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>   
			<th><?php echo $this->Paginator->sort('add'); ?></th>
			<th><?php echo $this->Paginator->sort('rate'); ?></th>
                        <th><?php echo $this->Paginator->sort('check_in'); ?></th>
			<th><?php echo $this->Paginator->sort('paid_at_conf'); ?></th>
			<th><?php echo $this->Paginator->sort('cancel'); ?></th>
			<th><?php echo $this->Paginator->sort('cancel_reason'); ?></th>
	</tr>
	<?php
	if (isset($attendees)) {
        foreach ($attendees as $attendee): ?>
	<tr>
		<td><?php echo h($attendee['Attendee']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['gender']); ?>&nbsp;</td>
                <td><?php echo h($attendee['Attendee']['comment']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['add']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['rate']); ?>&nbsp;</td>
                <td>
                    <?php if (isset($attendee['CheckIn'][0])) echo h($attendee['CheckIn'][0]['timestamp']);
                    else echo '';?> &nbsp;
                </td>
		<td><?php echo h($attendee['Attendee']['paid_at_conf']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['cancel']); ?>&nbsp;</td>
		<td><?php echo h($attendee['Attendee']['cancel_reason']); ?>&nbsp;</td>
	</tr>
<?php endforeach; 
        }?>
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
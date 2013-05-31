<div class="content">
<h2><?php  echo __('Conference'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($conference['Conference']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Term'); ?></dt>
		<dd>
			<?php echo h($conference['Conference']['term']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($conference['Conference']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Part'); ?></dt>
		<dd>
			<?php echo h($conference['Conference']['part']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conference Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($conference['ConferenceLocation']['name'], array('controller' => 'conference_locations', 'action' => 'view', $conference['ConferenceLocation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($conference['Conference']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($conference['Conference']['code']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php /**<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Conference'), array('action' => 'edit', $conference['Conference']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Conference'), array('action' => 'delete', $conference['Conference']['id']), null, __('Are you sure you want to delete # %s?', $conference['Conference']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conference Locations'), array('controller' => 'conference_locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference Location'), array('controller' => 'conference_locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendees'), array('controller' => 'attendees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendee'), array('controller' => 'attendees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conference Deadline Exceptions'), array('controller' => 'conference_deadline_exceptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference Deadline Exception'), array('controller' => 'conference_deadline_exceptions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Finances'), array('controller' => 'finances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Finance'), array('controller' => 'finances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lodgings'), array('controller' => 'lodgings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lodging'), array('controller' => 'lodgings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registration Steps'), array('controller' => 'registration_steps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registration Step'), array('controller' => 'registration_steps', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Attendees'); ?></h3>
	<?php if (!empty($conference['Attendee'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Barcode'); ?></th>
		<th><?php echo __('Conference Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Locality Id'); ?></th>
		<th><?php echo __('Campus'); ?></th>
		<th><?php echo __('Lrc'); ?></th>
		<th><?php echo __('Conf Contact'); ?></th>
		<th><?php echo __('New One'); ?></th>
		<th><?php echo __('Group'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Cell Phone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('City State'); ?></th>
		<th><?php echo __('Host Name'); ?></th>
		<th><?php echo __('Host Address'); ?></th>
		<th><?php echo __('Host Phone'); ?></th>
		<th><?php echo __('Lodging Id'); ?></th>
		<th><?php echo __('Add'); ?></th>
		<th><?php echo __('PT?'); ?></th>
		<th><?php echo __('Rate'); ?></th>
		<th><?php echo __('Paid At Conf'); ?></th>
		<th><?php echo __('Cancel'); ?></th>
		<th><?php echo __('Cancel Reason'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Amt Paid'); ?></th>
		<th><?php echo __('Check Num'); ?></th>
		<th><?php echo __('Paid Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($conference['Attendee'] as $attendee): ?>
		<tr>
			<td><?php echo $attendee['id']; ?></td>
			<td><?php echo $attendee['barcode']; ?></td>
			<td><?php echo $attendee['conference_id']; ?></td>
			<td><?php echo $attendee['first_name']; ?></td>
			<td><?php echo $attendee['last_name']; ?></td>
			<td><?php echo $attendee['gender']; ?></td>
			<td><?php echo $attendee['locality_id']; ?></td>
			<td><?php echo $attendee['campus']; ?></td>
			<td><?php echo $attendee['lrc']; ?></td>
			<td><?php echo $attendee['conf_contact']; ?></td>
			<td><?php echo $attendee['new_one']; ?></td>
			<td><?php echo $attendee['group']; ?></td>
			<td><?php echo $attendee['status_id']; ?></td>
			<td><?php echo $attendee['cell_phone']; ?></td>
			<td><?php echo $attendee['email']; ?></td>
			<td><?php echo $attendee['city_state']; ?></td>
			<td><?php echo $attendee['host_name']; ?></td>
			<td><?php echo $attendee['host_address']; ?></td>
			<td><?php echo $attendee['host_phone']; ?></td>
			<td><?php echo $attendee['lodging_id']; ?></td>
			<td><?php echo $attendee['add']; ?></td>
			<td><?php echo $attendee['PT?']; ?></td>
			<td><?php echo $attendee['rate']; ?></td>
			<td><?php echo $attendee['paid_at_conf']; ?></td>
			<td><?php echo $attendee['cancel']; ?></td>
			<td><?php echo $attendee['cancel_reason']; ?></td>
			<td><?php echo $attendee['comment']; ?></td>
			<td><?php echo $attendee['amt_paid']; ?></td>
			<td><?php echo $attendee['check_num']; ?></td>
			<td><?php echo $attendee['paid_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'attendees', 'action' => 'view', $attendee['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'attendees', 'action' => 'edit', $attendee['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'attendees', 'action' => 'delete', $attendee['id']), null, __('Are you sure you want to delete # %s?', $attendee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Attendee'), array('controller' => 'attendees', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Conference Deadline Exceptions'); ?></h3>
	<?php if (!empty($conference['ConferenceDeadlineException'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Conference Id'); ?></th>
		<th><?php echo __('Conference Deadline Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($conference['ConferenceDeadlineException'] as $conferenceDeadlineException): ?>
		<tr>
			<td><?php echo $conferenceDeadlineException['id']; ?></td>
			<td><?php echo $conferenceDeadlineException['conference_id']; ?></td>
			<td><?php echo $conferenceDeadlineException['conference_deadline_id']; ?></td>
			<td><?php echo $conferenceDeadlineException['date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'conference_deadline_exceptions', 'action' => 'view', $conferenceDeadlineException['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'conference_deadline_exceptions', 'action' => 'edit', $conferenceDeadlineException['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'conference_deadline_exceptions', 'action' => 'delete', $conferenceDeadlineException['id']), null, __('Are you sure you want to delete # %s?', $conferenceDeadlineException['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Conference Deadline Exception'), array('controller' => 'conference_deadline_exceptions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Finances'); ?></h3>
	<?php if (!empty($conference['Finance'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Conference Id'); ?></th>
		<th><?php echo __('Receive Date'); ?></th>
		<th><?php echo __('Locality Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Count'); ?></th>
		<th><?php echo __('Rate'); ?></th>
		<th><?php echo __('Charge'); ?></th>
		<th><?php echo __('Payment'); ?></th>
		<th><?php echo __('Balance'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($conference['Finance'] as $finance): ?>
		<tr>
			<td><?php echo $finance['id']; ?></td>
			<td><?php echo $finance['conference_id']; ?></td>
			<td><?php echo $finance['receive_date']; ?></td>
			<td><?php echo $finance['locality_id']; ?></td>
			<td><?php echo $finance['description']; ?></td>
			<td><?php echo $finance['count']; ?></td>
			<td><?php echo $finance['rate']; ?></td>
			<td><?php echo $finance['charge']; ?></td>
			<td><?php echo $finance['payment']; ?></td>
			<td><?php echo $finance['balance']; ?></td>
			<td><?php echo $finance['comment']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'finances', 'action' => 'view', $finance['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'finances', 'action' => 'edit', $finance['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'finances', 'action' => 'delete', $finance['id']), null, __('Are you sure you want to delete # %s?', $finance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Finance'), array('controller' => 'finances', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Lodgings'); ?></h3>
	<?php if (!empty($conference['Lodging'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Conference Id'); ?></th>
		<th><?php echo __('Locality Id'); ?></th>
		<th><?php echo __('Home Code'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('Home Phone'); ?></th>
		<th><?php echo __('Cell Phone'); ?></th>
		<th><?php echo __('Pet'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Capacity'); ?></th>
		<th><?php echo __('Room'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($conference['Lodging'] as $lodging): ?>
		<tr>
			<td><?php echo $lodging['id']; ?></td>
			<td><?php echo $lodging['conference_id']; ?></td>
			<td><?php echo $lodging['locality_id']; ?></td>
			<td><?php echo $lodging['home_code']; ?></td>
			<td><?php echo $lodging['name']; ?></td>
			<td><?php echo $lodging['address']; ?></td>
			<td><?php echo $lodging['city']; ?></td>
			<td><?php echo $lodging['zip']; ?></td>
			<td><?php echo $lodging['home_phone']; ?></td>
			<td><?php echo $lodging['cell_phone']; ?></td>
			<td><?php echo $lodging['pet']; ?></td>
			<td><?php echo $lodging['gender']; ?></td>
			<td><?php echo $lodging['capacity']; ?></td>
			<td><?php echo $lodging['room']; ?></td>
			<td><?php echo $lodging['comment']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lodgings', 'action' => 'view', $lodging['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lodgings', 'action' => 'edit', $lodging['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lodgings', 'action' => 'delete', $lodging['id']), null, __('Are you sure you want to delete # %s?', $lodging['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lodging'), array('controller' => 'lodgings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Registration Steps'); ?></h3>
	<?php if (!empty($conference['RegistrationStep'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Conference Id'); ?></th>
		<th><?php echo __('Locality Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Instructions Sent'); ?></th>
		<th><?php echo __('Receipt Confirmation'); ?></th>
		<th><?php echo __('Update Lrc'); ?></th>
		<th><?php echo __('First Reminder'); ?></th>
		<th><?php echo __('First Registrants Received'); ?></th>
		<th><?php echo __('First Check Registrations'); ?></th>
		<th><?php echo __('Lrc Asked Update'); ?></th>
		<th><?php echo __('Count By Rate'); ?></th>
		<th><?php echo __('Compose Reg Confirmation'); ?></th>
		<th><?php echo __('First Check Send'); ?></th>
		<th><?php echo __('First Update Finances'); ?></th>
		<th><?php echo __('Second Reminder'); ?></th>
		<th><?php echo __('Second Registrants Received'); ?></th>
		<th><?php echo __('Second Check Registrations'); ?></th>
		<th><?php echo __('Second Update Finances'); ?></th>
		<th><?php echo __('Compose Initial Summary'); ?></th>
		<th><?php echo __('Second Check Send'); ?></th>
		<th><?php echo __('Compose Final Summary'); ?></th>
		<th><?php echo __('Third Check Send'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($conference['RegistrationStep'] as $registrationStep): ?>
		<tr>
			<td><?php echo $registrationStep['id']; ?></td>
			<td><?php echo $registrationStep['conference_id']; ?></td>
			<td><?php echo $registrationStep['locality_id']; ?></td>
			<td><?php echo $registrationStep['user_id']; ?></td>
			<td><?php echo $registrationStep['instructions_sent']; ?></td>
			<td><?php echo $registrationStep['receipt_confirmation']; ?></td>
			<td><?php echo $registrationStep['update_lrc']; ?></td>
			<td><?php echo $registrationStep['first_reminder']; ?></td>
			<td><?php echo $registrationStep['first_registrants_received']; ?></td>
			<td><?php echo $registrationStep['first_check_registrations']; ?></td>
			<td><?php echo $registrationStep['lrc_asked_update']; ?></td>
			<td><?php echo $registrationStep['count_by_rate']; ?></td>
			<td><?php echo $registrationStep['compose_reg_confirmation']; ?></td>
			<td><?php echo $registrationStep['first_check_send']; ?></td>
			<td><?php echo $registrationStep['first_update_finances']; ?></td>
			<td><?php echo $registrationStep['second_reminder']; ?></td>
			<td><?php echo $registrationStep['second_registrants_received']; ?></td>
			<td><?php echo $registrationStep['second_check_registrations']; ?></td>
			<td><?php echo $registrationStep['second_update_finances']; ?></td>
			<td><?php echo $registrationStep['compose_initial_summary']; ?></td>
			<td><?php echo $registrationStep['second_check_send']; ?></td>
			<td><?php echo $registrationStep['compose_final_summary']; ?></td>
			<td><?php echo $registrationStep['third_check_send']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'registration_steps', 'action' => 'view', $registrationStep['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'registration_steps', 'action' => 'edit', $registrationStep['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'registration_steps', 'action' => 'delete', $registrationStep['id']), null, __('Are you sure you want to delete # %s?', $registrationStep['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Registration Step'), array('controller' => 'registration_steps', 'action' => 'add')); ?> </li>
		</ul>
	</div>**/?>
</div>

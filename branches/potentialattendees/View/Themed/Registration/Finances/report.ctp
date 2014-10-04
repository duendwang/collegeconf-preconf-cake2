<div class="content">
	<h2><?php echo __('Finances Report');?></h2>
        <h4 style="font-size: 100%; color:#fff"><?php
        foreach ($conferences as $conference):
            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$this->Html->link($conference['Locality']['name'],array('action' => 'index',$locality['Locality']['id'])) . '<br>';
        endforeach;?></h4>
        <table cellpadding="0" cellspacing="0" class="sortable">
			<th>Locality</th>
			<th>Total Count</th>
			<th>Total Charge</th>
                        <th>Total Payment</th>
                        <th>Remaining Balance</th>
	<?php foreach ($report_entries as $report_entry): ?>
	<tr>
      		<td><?php echo $this->Html->link(__($report_entry['Locality']['name']),array('action' => 'index',$report_entry['Finance']['locality_id'])); ?>&nbsp;</td>
		<td><?php echo h($report_entry[0]['count']); ?>&nbsp;</td>
                <td><?php echo h($report_entry[0]['total charge']); ?>&nbsp;</td>
		<td><?php echo h($report_entry[0]['total payment']); ?>&nbsp;</td>
                <td><?php echo h($report_entry[0]['balance']); ?>&nbsp;</td>
		
	</tr>
        <?php endforeach; ?>
	</table>
</div>
<?php /**<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Finances'), array('action' => 'index')); ?> </li>
	</ul>
</div>
 */?>


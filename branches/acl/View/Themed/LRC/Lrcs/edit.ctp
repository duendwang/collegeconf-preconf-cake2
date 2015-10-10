<div class="content">
    <style>
        table {
            margin-bottom: 0px;
	}
        table tr td {
            border-bottom:0px;
        }
        table tr:nth-child(even) {
            background: #ffffff;
        }
    </style>
<?php echo $this->Form->create('Lrc'); ?>
	<fieldset>
		<legend><?php echo __('Add LRC'); ?></legend>
                <table>
                    <tr>
                        <td width='100'></td>
                        <td><?php echo $this->Form->input('first_name');
                            echo $this->Form->input('id');?></td>
                        <td><?php echo $this->Form->input('last_name');?></td>
                        <td><?php echo $this->Form->input('gender', array('type' => 'select', 'empty' => true, 'options' => array('B' => 'Brother','S' => 'Sister')));?></td>
                    </tr>
                    <tr>
                        <td width='100'></td>
                        <td><?php echo $this->Form->input('cell_phone', array('label' => 'Cell Phone (XXX-XXX-XXXX)'));?></td>
                        <td><?php echo $this->Form->input('email');?></td>
                        <td><?php echo '<br>'.$this->Form->input('active',array('default' => 1));
                            echo $this->Form->hidden('locality_id', array('default' => $locality));?></td>
                    </tr>
                    <tr>
                        <td width='100'></td>
                        <td colspan='3'><?php echo $this->Form->input('comment');?></td>
                    </tr>
                    <tr>
                        <td width='100'></td>
                        
                            
                    </tr>
                </table>
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
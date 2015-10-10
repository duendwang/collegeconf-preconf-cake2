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
<?php echo $this->Form->create('User'); ?>
    <h2><?php echo __('Account Settings'); ?></h2>
    <fieldset>
        <legend><?php echo __('Change Password');?><hr width="500"></legend>
        <?php echo $this->Form->input('id'); ?>
        <table>
            <!--<tr>
                <td width="100"></td>
                <td><?php //echo $this->Form->label('Old Password');?></td>
                <td><?php //echo $this->Form->input('old_password', array('type' => 'password','label' => false, 'div' => false));?></td>
            </tr>-->
            <tr>
                <td width="100"></td>
                <td><?php echo $this->Form->label('New Password');?></td>
                <td><?php echo $this->Form->input('new_password',array('type' => 'password','label' => false, 'div' => false));?></td>
            </tr>
            <!--<tr>
                <td width="100"></td>
                <td><?php //echo $this->Form->label('New Password Again');?></td>
                <td><?php //echo $this->Form->input('new_password_2',array('type' => 'password','label' => false, 'div' => false));?></td>
            </tr>-->
        </table>
    </fieldset>
    <fieldset>
        <legend><?php echo __('Registration Coordinators');?><hr width="500"></legend>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->Form->button('Add New LRC',array('type' => 'button','onclick' => "location.href='".$this->Html->url(array('controller'=> 'Lrcs', 'action' => 'add'))."'"));?><br><br>
        <h4 style="color:red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Click on any LRC's name to modify the entry.</h4>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th width="50" style="border-bottom: 0px"></th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Cell Phone</th>
                <th>Email</th>
                <th>Active this conference?</th>
            </tr>
            <?php foreach ($Lrcs as $Lrc): ?>
            <tr>
                <td width="100"></td>
                <td><?php echo $this->Html->link(__(h($Lrc['Lrc']['first_name'])), array('controller' => 'lrcs', 'action' => 'edit', $Lrc['Lrc']['id'])); ?></td>
                <td><?php echo $this->Html->link(__(h($Lrc['Lrc']['last_name'])), array('controller' => 'lrcs', 'action' => 'edit', $Lrc['Lrc']['id'])); ?></td>
                <td><?php echo h($Lrc['Lrc']['gender']);?></td>
                <td><?php echo h($Lrc['Lrc']['cell_phone']);?></td>
                <td><?php echo h($Lrc['Lrc']['email']);?></td>
                <td><?php echo h($Lrc['Lrc']['active']);?></td>
                <td class="actions">
                	<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lrcs' ,'action' => 'delete', $Lrc['Lrc']['id']), null, __('Are you sure you want to delete # %s?', $Lrc['Lrc']['id'])); ?>
		</td>
            </tr>
            <?php endforeach; ?>
        </table>
    </fieldset>
    <?php //print_r($Lrcs);?>
        
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<!--<div class="actions">
	<h3><?php /**echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campuses'), array('controller' => 'campuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus'), array('controller' => 'campuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registration Locality Assignments'), array('controller' => 'registration_locality_assignments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registration Locality Assignment'), array('controller' => 'registration_locality_assignments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registration Steps'), array('controller' => 'registration_steps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registration Step'), array('controller' => 'registration_steps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registration Team Assignments'), array('controller' => 'registration_team_assignments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registration Team Assignment'), array('controller' => 'registration_team_assignments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Types'), array('controller' => 'user_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Type'), array('controller' => 'user_types', 'action' => 'add')); **/?> </li>
	</ul>
</div>-->

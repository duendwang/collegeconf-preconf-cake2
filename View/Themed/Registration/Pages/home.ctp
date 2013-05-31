<?php


?>
<h2>Welcome, <?php echo $User['first_name'];?>!</h2>
<h3 style="color:#333">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What would you like to do?</h3><br><br>

<table>
    <tr>
        <td width="100"></td>
        <td>
            <p><?php echo $this->Html->link('Process Locality Registration','/attendees/process');?></p>
            <p><?php echo $this->Html->link('View/Edit Locality Finances','/finances');?></p>
            <p><?php echo $this->Html->link('Check teammate\'s Work','/');?></p>
        </td>
        <td>
            <p><?php echo $this->Html->link('View Step-by-step','/RegistrationSteps');?></p>
            <p><?php echo $this->Html->link('View All Attendees','/attendees');?></p>
            <p><?php echo $this->Html->link('View Attendee Summary','/finances/report');?></p>
            <p><?php echo $this->Html->link('Register for Conference','/attendees/register');?></p>
            <P><?php echo $this->Html->link('View Registration Team Roster','/users');?></P>
            <p><?php echo $this->Html->link('View/Change Account Preferences', array('controller' => 'users', 'action' => 'edit',$User['id']));?></p>
            <p><?php echo $this->Html->link('Preview Final Summary', array('controller' => 'finances', 'action' => 'summary'));?></p>
        </td>
    </tr>
</table>

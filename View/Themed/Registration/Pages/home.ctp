<?php


?>
    <style>
        body {
            background: #003d4c;
        }
        #content {
            overflow: auto;
        }
    </style>

<h2>Welcome, <?php echo $user['first_name'];?>!</h2>
<h3 style="color:#333">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What would you like to do?</h3><br><br>

<table>
    <tr>
        <td width="100"></td>
        <td>
            <p><?php echo $this->Html->link('Process Locality Registration',array('controller' => 'attendees','action' => 'process'));?></p>
            <p><?php echo $this->Html->link('View/Edit Locality Finances',array('controller' => 'finances','action' => 'index'));?></p>
            <p><?php echo $this->Html->link('Check teammate\'s Work',array('controller' => 'registrationTeamsMembers','action' => 'index'));?></p>
            <p><?php echo $this->Html->link('Preview Final Summary', array('controller' => 'finances', 'action' => 'summary'));?></p>
        </td>
        <td>
            <p><?php echo $this->Html->link('View Step-by-step (not used yet)',array('controller' => 'registrationSteps','action' => 'index'));?></p>
            <p><?php echo $this->Html->link('View Reports',array('action' => 'display','reports'));?></p>
            <p><?php echo $this->Html->link('Register for Conference',array('controller' => 'attendees','action' => 'register'));?></p>
            <p><?php echo $this->Html->link('View/Change Account Preferences', array('controller' => 'users', 'action' => 'edit',$user['id']));?></p>
        </td>
    </tr>
</table>

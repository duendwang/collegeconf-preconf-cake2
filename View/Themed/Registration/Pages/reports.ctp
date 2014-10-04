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

<h2>Reports</h2>

<table>
    <tr>
        <td width="100"></td>
        <td>
            <p><?php echo $this->Html->link('All Attendees',array('controller' => 'attendees','action' => 'index'));?></p>
        </td>
        <td>
            <p><?php echo $this->Html->link('All Attendees',array('controller' => 'attendees','action' => 'index'));?></p>
            <p><?php echo $this->Html->link('Locality Finance Summary',array('controller' => 'finances','action' => 'report'));?></p>
            <P><?php echo $this->Html->link('Registration Team Roster',array('controller' => 'users','action' => 'index'));?></P>
        </td>
    </tr>
</table>

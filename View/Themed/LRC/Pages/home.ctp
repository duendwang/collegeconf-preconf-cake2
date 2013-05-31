<?php


?>
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
<h2>Welcome, church in <?php echo $User['Locality']['city'];?>!</h2>
<h3 style="color:#333">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What would you like to do?</h3><br><br>

<table>
    <tr>
        <td width="100"></td>
        <td>
            <p><?php echo $this->Html->link('Add/Modify Conference Attendees','/attendees');?></p>
            <p><?php echo $this->Html->link('View Summaries','/finances/summary');?></p>
        </td>
        <td>
            <p><?php echo $this->Html->link('View Conference Information',array('action' => 'information'));?></p>
            <p><?php echo $this->Html->link('Edit Account Preferences',array('controller' => 'users','action' => 'edit',$User['id']));?></p>
        </td>
    </tr>
</table>

<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'College Conference Registration');


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('collegeconf');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
                    <table>
                        <tr>
                            <td><h1><?php echo $this->Html->link($cakeDescription, '/'); ?></h1></td>
                            <?php if(isset($User)) {?>
                            <td align="right" style="text-align:center; font-size:10"><h1><?php
                                echo 'Hello, ';
                                    if(strlen($User['first_name']) > 0) {
                                        echo $User['first_name'], ' ', $User['last_name'];
                                    } else{
                                        echo 'church in ', $User['Locality']['city'];
                                    }
                                    echo '. (', $this->Html->link('logout', '/users/logout'), ')';?>
                                </h1>
                            </td>
                            <?php }?>
                        </tr>
                    </table>
                </div>
                <?php /**<div id="messages">
        	<?php
                    if ($this->Session->check('Message.flash')) {$this->Session->flash();} // the standard messages
                    // multiple messages
                    if ($messages = $this->Session->read('Message.multiFlash')) {
                    foreach($messages as $k=>$v):
                        echo $this->Session->flash('multiFlash.'.$k);
                    endforeach;
                    }
                    ?>
                </div>**/?>
		<div id="content">
                    
                        <?php
                        if ($this->Session->check('Message.flash')) {
                            echo $this->Session->flash(); // the standard messages
                        }
                        // multiple messages
                        if ($messages = $this->Session->read('Message.multiFlash')) {
                            //print_r($messages);
                            //echo 'multiple messages';
                            foreach($messages as $k=>$v) echo $this->Session->flash('multiFlash.'.$k);
                        }
                        ?>
                    
                        <?php //echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>

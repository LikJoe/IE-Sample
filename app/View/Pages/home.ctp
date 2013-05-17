<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (!Configure::read('debug')):
    throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>
<h3>Liquid Infusion - Inventory Management System</h3>

<br/>
<br/>

<div class="container" style="margin: 0 auto; width:410px;">
    <ul>
        <li style="list-style-type: none">
            <strong><?php echo $this->Html->link(__('Event'), array('controller' => 'Events', 'action' => 'index'), array('class' => 'btn btn-large btn-block')); ?></strong>
            <p class="text-center">Manage all the events detail. Add, Edit, Delete and View.</p>
            <br/>

            <strong><?php echo $this->Html->link(__('Item'), array('controller' => 'Items', 'action' => 'index'), array('class' => 'btn btn-large btn-block')); ?></strong>
            <p class="text-center">Manage stock status and quantity.</p>
            <br/>

            <strong><?php echo $this->Html->link(__('Recipe'), array('controller' => 'Recipes', 'action' => 'index'), array('class' => 'btn btn-large btn-block')); ?></strong>
            <p class="text-center">Manage all the recipes detail. Add, Edit, Delete and View.</p>
            <br/>

            <strong><?php echo $this->Html->link(__('Inventory'), array('controller' => 'Inventory', 'action' => 'index'), array('class' => 'btn btn-large btn-block')); ?></strong>
            <p class="text-center">Manage all the items detail. Add, Edit, Delete and View.</p>
            <br/>

            <strong><?php echo $this->Html->link(__('Schedule'), array('controller' => 'Schedules', 'action' => 'index'), array('class' => 'btn btn-large btn-block')); ?></strong>
            <p class="text-center">Manage staff working timetable. </p>
        </li>
    </ul>
</div>

<?php
if (Configure::read('debug') > 0):
    Debugger::checkSecurityKeys();
endif;
?>

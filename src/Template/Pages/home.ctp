<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.4/united/bootstrap.min.css">
</head>
<body>
    <?php $classes = ["active", "success", "warning", "danger", "info"] ?>
    <h1>CakePHP App</h1>
    <h2>List of Customers</h2>
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
        </thead>
        <?php $n = 0; ?>
        <?php foreach($customers as $customer):?>
        <tr class="<?php echo $classes[$n % 5]; ?>">
            <td><?php echo $customer->name; ?></td>
            <td><?php echo $customer->email; ?></td>
            <td ><?php echo $customer->phone; ?></td>
            <td ><?php echo $customer->address; ?></td>
        </tr>
        <?php $n = $n + 1; ?>
        <?php endforeach;?>
    </table>

    <footer class="footer">
        <div class="container">
            <div>
                <img src="/img/hostingcrab-logo.png" alt="Hostingcrab.com"/>
            </div>
            <div>by <a href="http://www.hostingcrab.com">HostingCrab.com</a></div>
        </div>
    </footer>



</body>
</html>
